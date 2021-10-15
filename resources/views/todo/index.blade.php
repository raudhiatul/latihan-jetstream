<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5">
                <a href="{{ route('todo.create') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Create Todo
                </a>
                <table class="table-auto w-full mt-5">
                    <tr>
                        <th class="border px-4 py-2" width="10%">ID</th>
                        <th class="border px-6 py-2" width="40%">Todo</th>
                        <th class="border px-4 py-2" width="30%">Image</th>
                        <th class="border px-4 py-2" width="20%">Action</th>
                    </tr>
                    @forelse ($todos as $todo)
                        <tr>
                            <td class="border px-4 py-2">{{ $todo->id }}</td>
                            <td class="border px-4 py-2">{{ $todo->todo }}</td>
                            <td class="border px-4 py-2">
                            
                                <!-- <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-success">
                                    show
                                    </a>
                                </button> -->
                                
                                <button type="button" id="exampleModal "class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Show
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/'. $todo->image) }}" class="img-fluid mt-3">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    <a href="{{ route('todo.edit', $todo->id) }}">Edit</a>
                                </button>
                                <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="border px-4 py-2 text-center">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
