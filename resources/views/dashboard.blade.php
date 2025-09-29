<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Dashboard -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 flex flex-col items-center justify-center">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Selamat Datang!</h1>
                {{ Auth::user()->name }}!, semoga harimu menyenangkan
            </div>
        </div>
    </div>
</x-app-layout>