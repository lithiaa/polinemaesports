<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    public function index()
    {
        $events = Events::orderBy('created_at', 'desc')->get();
        foreach ($events as $event) {
            $event->deskripsi_singkat = Str::limit($event->deskripsi_event, 300);
            $event->tanggal_event = date('d F Y', strtotime($event->tanggal_event));
        }

        return view('events', ['events' => $events]);
    }

    public function show($id)
    {
        $event = Events::find($id);
        $event->tanggal_event = date('d F Y', strtotime($event->tanggal_event));

        return view('eventdetails', ['event' => $event]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required',
            'lokasi_event' => 'required',
            'tanggal_event' => 'required',
            'deskripsi_event' => 'required',
            'gambar_event' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $gambar_event = $request->file('gambar_event');

        // Check if file exists
        if (!$gambar_event) {
            return redirect()->back()->withErrors(['gambar_event' => 'File gambar tidak ditemukan.'])->withInput();
        }

        $gambar_event_extension = $gambar_event->getClientOriginalExtension();

        // Sanitize filename to avoid issues with special characters
        $nama_event_clean = Str::slug($validated['nama_event'], '_');
        $gambar_event_filename = $nama_event_clean . '_' . date('ymdhis') . '.' . $gambar_event_extension;

        $path_foto = 'foto_event';

        try {
            // Log for debugging
            Log::info('File upload attempt', [
                'original_name' => $gambar_event->getClientOriginalName(),
                'size' => $gambar_event->getSize(),
                'mime_type' => $gambar_event->getMimeType(),
                'is_valid' => $gambar_event->isValid()
            ]);

            // Check if file is valid
            if (!$gambar_event->isValid()) {
                return redirect()->back()->withErrors(['gambar_event' => 'File tidak valid: ' . $gambar_event->getErrorMessage()])->withInput();
            }

            // Generate a safer filename
            $extension = $gambar_event->getClientOriginalExtension();
            $timestamp = now()->format('Y_m_d_H_i_s');
            $random = Str::random(8);
            $safe_filename = 'event_' . $timestamp . '_' . $random . '.' . $extension;

            Log::info('Generated filename', [
                'filename' => $safe_filename,
                'extension' => $extension
            ]);

            // Create full path
            $full_path = storage_path('app/public/foto_event/' . $safe_filename);
            $relative_path = 'foto_event/' . $safe_filename;

            // Ensure directory exists
            $directory = storage_path('app/public/foto_event');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Move the uploaded file
            if ($gambar_event->move(storage_path('app/public/foto_event'), $safe_filename)) {
                Log::info('File moved successfully', [
                    'path' => $relative_path,
                    'full_path' => $full_path
                ]);

                Events::create([
                    'nama_event' => $validated['nama_event'],
                    'lokasi_event' => $validated['lokasi_event'],
                    'tanggal_event' => $validated['tanggal_event'],
                    'deskripsi_event' => $validated['deskripsi_event'],
                    'gambar_event' => $relative_path,
                ]);

                return redirect('/events')->with('success', 'Event berhasil ditambahkan!');
            } else {
                return redirect()->back()->withErrors(['gambar_event' => 'Gagal memindahkan file gambar.'])->withInput();
            }

        } catch (\Exception $e) {
            Log::error('File upload error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()->withErrors(['gambar_event' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()])->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $event = Events::find($id);
            
            if (!$event) {
                return redirect('/events')->with('error', 'Event tidak ditemukan.');
            }

            // Delete the image file if it exists
            if ($event->gambar_event) {
                $imagePath = storage_path('app/public/' . $event->gambar_event);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete the event record
            $event->delete();

            Log::info('Event deleted successfully', [
                'id' => $id,
                'nama_event' => $event->nama_event
            ]);

            return redirect('/events')->with('success', 'Event berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('Event deletion error', [
                'id' => $id,
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect('/events')->with('error', 'Terjadi kesalahan saat menghapus event: ' . $e->getMessage());
        }
    }

}
