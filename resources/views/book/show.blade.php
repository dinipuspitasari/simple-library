<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Buku</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6 space-y-4">
                <div>
                    <h3 class="font-bold text-lg">Judul</h3>
                    <p>{{ $book->title }}</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Penulis</h3>
                    <p>{{ $book->author }}</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Tahun</h3>
                    <p>{{ $book->year }}</p>
                </div>
                <div class="flex justify-end space-x-2">
                    <a href="{{ route('books.index') }}"
                        class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-lg">Kembali</a>
                    <a href="{{ route('books.edit', $book->id) }}"
                        class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">Edit</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>