<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div style="max-height:350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $todo->image) }}" class="img-fluid mt-3">
            </div>
            </div>
        </div>
    </div>
</x-app-layout>