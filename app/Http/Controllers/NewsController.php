<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        foreach ($news as $n) {
            $n->deskripsi_singkat = Str::limit($n->deskripsi_news, 300);
        }

        return view('news', ['news' => $news]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_news' => 'required',
            'deskripsi_news' => 'required',
            'link_news' => 'required|url',
            'tombol_news' => 'required',
            'gambar_news' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $gambar_news = $request->file('gambar_news');

        // Check if file exists
        if (!$gambar_news) {
            return redirect()->back()->withErrors(['gambar_news' => 'File gambar tidak ditemukan.'])->withInput();
        }

        try {
            // Log for debugging
            Log::info('News image upload attempt', [
                'original_name' => $gambar_news->getClientOriginalName(),
                'size' => $gambar_news->getSize(),
                'mime_type' => $gambar_news->getMimeType(),
                'is_valid' => $gambar_news->isValid()
            ]);

            // Check if file is valid
            if (!$gambar_news->isValid()) {
                return redirect()->back()->withErrors(['gambar_news' => 'File tidak valid: ' . $gambar_news->getErrorMessage()])->withInput();
            }

            // Generate a safer filename
            $extension = $gambar_news->getClientOriginalExtension();
            $timestamp = now()->format('Y_m_d_H_i_s');
            $random = Str::random(8);
            $safe_filename = 'news_' . $timestamp . '_' . $random . '.' . $extension;

            Log::info('Generated news filename', [
                'filename' => $safe_filename,
                'extension' => $extension
            ]);

            // Create full path
            $full_path = public_path('content/' . $safe_filename);
            $relative_path = $safe_filename;
            
            // Ensure directory exists
            $directory = public_path('content');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Move the uploaded file to public/content directory
            if ($gambar_news->move(public_path('content'), $safe_filename)) {
                Log::info('News file moved successfully', [
                    'path' => $relative_path,
                    'full_path' => $full_path
                ]);

                News::create([
                    'name_news' => $validated['name_news'],
                    'deskripsi_news' => $validated['deskripsi_news'],
                    'link_news' => $validated['link_news'],
                    'tombol_news' => $validated['tombol_news'],
                    'gambar_news' => $relative_path,
                ]);

                return redirect('/news')->with('success', 'News berhasil ditambahkan!');
            } else {
                return redirect()->back()->withErrors(['gambar_news' => 'Gagal memindahkan file gambar.'])->withInput();
            }

        } catch (\Exception $e) {
            Log::error('News upload error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()->withErrors(['gambar_news' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()])->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $news = News::find($id);
            
            if (!$news) {
                return redirect('/news')->with('error', 'News tidak ditemukan.');
            }

            // Delete the image file if it exists
            if ($news->gambar_news) {
                $imagePath = public_path('content/' . $news->gambar_news);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete the news record
            $news->delete();

            Log::info('News deleted successfully', [
                'id' => $id,
                'name_news' => $news->name_news
            ]);

            return redirect('/news')->with('success', 'News berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('News deletion error', [
                'id' => $id,
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect('/news')->with('error', 'Terjadi kesalahan saat menghapus news: ' . $e->getMessage());
        }
    }
}
