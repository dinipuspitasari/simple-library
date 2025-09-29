<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Buku</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form id="bookForm" action="{{ route('books.store') }}" method="POST">
                    @csrf

                    <!-- Judul -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Judul</label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror"
                            required>
                        @error('title')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Penulis -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Penulis</label>
                        <input type="text" name="author" value="{{ old('author') }}"
                            class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-500 focus:border-blue-500 @error('author') border-red-500 @enderror"
                            required>
                        @error('author')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tahun -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Tahun</label>
                        <input type="number" name="year" value="{{ old('year') }}"
                            class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-500 focus:border-blue-500 @error('year') border-red-500 @enderror"
                            required>
                        @error('year')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('books.index') }}"
                            class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-lg">Batal</a>
                        <button type="submit" onclick="return confirm('Apakah yakin ingin menyimpan data ini?')"
                            class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                            Simpan
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto mx-auto mt-20">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex justify-between items-center p-5 rounded-t border-b">
                    <h3 class="text-xl font-medium text-gray-900">Konfirmasi Simpan</h3>
                    <button type="button" data-modal-toggle="confirmModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500">Apakah Anda yakin ingin menyimpan data buku ini?
                    </p>
                </div>
                <div class="flex justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button data-modal-toggle="confirmModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 px-5 py-2">Batal</button>
                    <button type="submit" form="bookForm"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5">Ya,
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.8.5/dist/flowbite.js"></script>
</x-app-layout>