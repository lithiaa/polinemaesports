@extends('layouts.app')

@section('content')
    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="fixed top-20 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50" id="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="fixed top-20 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50" id="error-message">
            {{ session('error') }}
        </div>
    @endif

     <!-- Add Event Modal -->
     <div id="modal-id" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center opacity-0 pointer-events-none" style="transition: opacity 0.25s ease;">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-4xl mx-auto rounded shadow-lg z-50 overflow-y-auto" style="max-height: 80vh;">

            <div class="modal-content py-4 text-left px-6" style="max-height: 70vh; overflow-y: auto;">
                <!-- Title -->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Tambah Event</p>
                    <div class="modal-close cursor-pointer z-50" onclick="closeModal('modal-id')">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.47a.75.75 0 00-1.06 0L9 8.94 4.53 4.47a.75.75 0 10-1.06 1.06L7.94 10l-4.47 4.47a.75.75 0 101.06 1.06L9 11.06l4.47 4.47a.75.75 0 101.06-1.06L10.06 10l4.47-4.47a.75.75 0 000-1.06z"/>
                        </svg>
                    </div>
                </div>

                <!-- Body -->
                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <div class="mb-4">
                                <label for="nama_event" class="block text-gray-700 text-sm font-bold mb-2">Nama Event</label>
                                <input type="text" id="nama_event" name="nama_event"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="tanggal_event" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Event</label>
                                <input type="date" id="tanggal_event" name="tanggal_event"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="lokasi_event" class="block text-gray-700 text-sm font-bold mb-2">Lokasi Event</label>
                                <input type="text" id="lokasi_event" name="lokasi_event"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4">
                                <label for="gambar_event" class="block text-gray-700 text-sm font-bold mb-2">Poster Event</label>
                                <input type="file" id="gambar_event" name="gambar_event" accept="image/*"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required onchange="previewImage(event)">
                                <img id="preview" class="mt-4 w-full rounded shadow" src="#" alt="Preview Image" style="display: none;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi_event" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Event</label>
                        <textarea id="deskripsi_event" name="deskripsi_event" rows="3"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 mr-2"
                            onclick="closeModal('modal-id')">Batal</button>
                        <button type="submit"
                            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Tambah
                            Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center opacity-0 pointer-events-none" style="transition: opacity 0.25s ease;">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50">
            <div class="modal-content py-4 text-left px-6">
                <!-- Title -->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-xl font-bold text-red-600">Konfirmasi Hapus Event</p>
                    <div class="modal-close cursor-pointer z-50" onclick="closeDeleteModal()">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.47a.75.75 0 00-1.06 0L9 8.94 4.53 4.47a.75.75 0 10-1.06 1.06L7.94 10l-4.47 4.47a.75.75 0 101.06 1.06L9 11.06l4.47 4.47a.75.75 0 101.06-1.06L10.06 10l4.47-4.47a.75.75 0 000-1.06z"/>
                        </svg>
                    </div>
                </div>

                <!-- Body -->
                <div class="mb-4">
                    <p class="text-gray-700">Apakah Anda yakin ingin menghapus event ini? Tindakan ini tidak dapat dibatalkan.</p>
                    <p class="text-sm text-gray-500 mt-2" id="event-name-display"></p>
                </div>

                <!-- Footer -->
                <div class="flex justify-end">
                    <button type="button"
                        class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 mr-2"
                        onclick="closeDeleteModal()">Batal</button>
                    <form id="delete-form" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            Hapus Event
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('opacity-0');
            modal.classList.remove('pointer-events-none');
            document.body.classList.add('modal-active');
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('opacity-0');
            modal.classList.add('pointer-events-none');
            document.body.classList.remove('modal-active');
        }

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function openDeleteModal(eventId, eventName, deleteUrl) {
            const modal = document.getElementById('delete-modal');
            const form = document.getElementById('delete-form');
            const nameDisplay = document.getElementById('event-name-display');

            form.action = deleteUrl;
            nameDisplay.textContent = `Event: ${eventName}`;

            modal.classList.remove('opacity-0');
            modal.classList.remove('pointer-events-none');
            document.body.classList.add('modal-active');
        }        function closeDeleteModal() {
            const modal = document.getElementById('delete-modal');
            modal.classList.add('opacity-0');
            modal.classList.add('pointer-events-none');
            document.body.classList.remove('modal-active');
        }

        // Auto-hide messages after 5 seconds
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            if (successMessage) {
                successMessage.style.opacity = '0';
                setTimeout(() => successMessage.remove(), 300);
            }

            if (errorMessage) {
                errorMessage.style.opacity = '0';
                setTimeout(() => errorMessage.remove(), 300);
            }
        }, 5000);
    </script>

    @auth
        <button onclick="openModal('modal-id')"
            class="fixed bottom-8 right-8 bg-yellow-500 text-white p-4 rounded-full shadow-lg flex items-center space-x-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Event</span>
        </button>
    @endauth

    <article class="bg-white overflow-hidden bg-gray-100 sm:mt-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
            <div class="text-center">
                <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Events</p>
            </div>
            @foreach ($events as $event)
                <div class="mt-10">
                    <div class="flex flex-col sm:flex-row items-center md:items-start">
                        <div class="p-4 flex-shrink-0 border rounded mb-4 sm:mb-0 sm:mr-4">
                            <img src="{{ asset('storage/' . $event->gambar_event) }}" alt="Event 1"
                                class="object-cover h-64 w-full sm:h-48 sm:w-48">
                        </div>
                        <div class="w-full">
                            <div class="flex justify-between items-start">
                                <h3 class="m-5 text-2xl sm:text-3xl text-gray-900 font-medium">{{ $event->nama_event }}</h3>
                                @auth
                                    <button onclick="openDeleteModal({{ $event->id_event }}, '{{ addslashes($event->nama_event) }}', '{{ route('event.destroy', $event->id_event) }}')"
                                        class="mt-5 mr-5 bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 text-sm"
                                        title="Hapus Event">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                @endauth
                            </div>
                            <div class="box-content">
                                <p class="m-5 text-base sm:text-lg text-gray-500">{{ $event->deskripsi_singkat }}</p>
                            </div>
                            <hr class="border-t border-gray-300 mb-2">
                            <div class="flex justify-between items-center">
                                <a href="{{ route('event.show', $event->id_event) }}"
                                    class="flex items-center hover:text-yellow-500">
                                    <p class="ml-5 text-base sm:text-lg font-medium text-black-500">Lihat Selengkapnya</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                                <span class="ml-5 text-sm text-gray-500">Created at: {{ $event->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </article>
@endsection
