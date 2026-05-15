<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Users') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if (session('status'))
                    <div class="mb-4 rounded-md bg-green-50 p-3 text-sm text-green-700">
                        {{ session('status') }}
                    </div>
                @endif

                <a href="{{ route('users.create') }}" class="inline-flex mb-4 items-center px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black">
                    Add New User
                </a>

                <ul class="space-y-2">
                    @forelse ($users as $user)
                        <li class="rounded border border-gray-200 px-3 py-2">
                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $user->name }}</p>
                                    <p class="text-sm text-gray-600">{{ $user->email }}</p>
                                    <p class="text-xs text-gray-500">Status: {{ $user->active ? 'Aktif' : 'Nonaktif' }}</p>
                                </div>

                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('users.show', $user) }}" class="inline-flex items-center rounded-md border border-gray-300 px-3 py-2 text-xs text-gray-700 hover:bg-gray-100">
                                        Detail
                                    </a>
                                    <a href="{{ route('users.edit', $user) }}" class="inline-flex items-center rounded-md border border-blue-300 px-3 py-2 text-xs text-blue-700 hover:bg-blue-50">
                                        Edit
                                    </a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Yakin hapus user ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center rounded-md border border-red-300 px-3 py-2 text-xs text-red-700 hover:bg-red-50">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="text-gray-500">Belum ada data user.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
