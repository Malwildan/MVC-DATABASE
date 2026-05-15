<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail User') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-3">
                <div>
                    <p class="text-sm text-gray-500">ID</p>
                    <p class="font-medium text-gray-900">{{ $user->id }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Nama</p>
                    <p class="font-medium text-gray-900">{{ $user->name }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="font-medium text-gray-900">{{ $user->email }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Status</p>
                    <p class="font-medium text-gray-900">{{ $user->active ? 'Aktif' : 'Nonaktif' }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Dibuat</p>
                    <p class="font-medium text-gray-900">{{ $user->created_at?->format('d-m-Y H:i:s') }}</p>
                </div>

                <div class="pt-2 flex gap-3">
                    <a href="{{ route('users.edit', $user) }}" class="inline-flex items-center rounded-md border border-blue-300 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50">
                        Edit
                    </a>
                    <a href="{{ route('users.index') }}" class="inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
