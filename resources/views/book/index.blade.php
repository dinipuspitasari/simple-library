<x-app-layout>
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Daftar Buku</h1>
        <a href="{{ route('books.create') }}" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-4 py-2">
            Tambah Buku
        </a>
    </div>
    <!-- Pesan sukses -->
    @if(session('success'))
        <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="py-3 px-6">ID</th>
                    <th scope="col" class="py-3 px-6">Judul</th>
                    <th scope="col" class="py-3 px-6">Penulis</th>
                    <th scope="col" class="py-3 px-6">Tahun</th>
                    <th scope="col" class="py-3 px-6">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="py-4 px-6">{{ $book->id }}</td>
                    <td class="py-4 px-6">{{ $book->title }}</td>
                    <td class="py-4 px-6">{{ $book->author }}</td>
                    <td class="py-4 px-6">{{ $book->year }}</td>
                    <td class="py-4 px-6 flex space-x-2">
                        <a href="{{ route('books.show', $book->id) }}" class="text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-sm px-3 py-1">Detail</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="text-white bg-yellow-500 hover:bg-yellow-600 font-medium rounded-lg text-sm px-3 py-1">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah yakin ingin menghapus buku ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-sm px-3 py-1">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>