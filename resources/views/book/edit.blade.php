<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Buku</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Judul</label>
                        <input type="text" name="title" value="{{ $book->title }}"
                            class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Penulis</label>
                        <input type="text" name="author" value="{{ $book->author }}"
                            class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Tahun</label>
                        <input type="number" name="year" value="{{ $book->year }}"
                            class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('books.index') }}"
                            class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-lg">Batal</a>
                    <button type="submit" onclick="return confirm('Apakah yakin ingin memperbarui data buku ini?')"
                        class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>