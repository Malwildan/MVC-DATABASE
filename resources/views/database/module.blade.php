<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modul Database Laravel') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-2">Ringkasan</h3>
                <p class="text-gray-700">Halaman ini menampilkan implementasi materi database: konfigurasi, migrasi, Eloquent ORM, relasi, dan Query Builder.</p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-3">Contoh Eloquent: User::all()</h3>
                <p class="text-sm text-gray-600 mb-3">Total user: {{ $allUsers->count() }}</p>
                <ul class="space-y-2">
                    @forelse ($allUsers as $user)
                        <li class="rounded border border-gray-200 px-3 py-2">
                            {{ $user->name }} - {{ $user->email }}
                        </li>
                    @empty
                        <li class="text-gray-500">Belum ada user.</li>
                    @endforelse
                </ul>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-3">Contoh Query Builder</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-medium mb-2">User aktif (where active = 1)</h4>
                        <ul class="space-y-2">
                            @forelse ($activeUsers as $user)
                                <li class="rounded border border-gray-200 px-3 py-2">
                                    {{ $user->name }}
                                </li>
                            @empty
                                <li class="text-gray-500">Tidak ada user aktif.</li>
                            @endforelse
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-medium mb-2">Urut nama ASC (orderBy name)</h4>
                        <ul class="space-y-2">
                            @forelse ($orderedUsers as $user)
                                <li class="rounded border border-gray-200 px-3 py-2">
                                    {{ $user->name }}
                                </li>
                            @empty
                                <li class="text-gray-500">Belum ada data.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-3">Contoh Relasi Eloquent User -> Posts</h3>
                <p class="text-sm text-gray-600 mb-3">Total posts: {{ $totalPosts }}</p>

                @if ($userWithPosts)
                    <p class="mb-2 text-gray-800">Contoh user: <strong>{{ $userWithPosts->name }}</strong></p>
                    <ul class="space-y-2">
                        @forelse ($userWithPosts->posts as $post)
                            <li class="rounded border border-gray-200 px-3 py-2">
                                <div class="font-medium">{{ $post->title }}</div>
                                <div class="text-sm text-gray-600">{{ $post->content }}</div>
                            </li>
                        @empty
                            <li class="text-gray-500">User ini belum memiliki post.</li>
                        @endforelse
                    </ul>
                @else
                    <p class="text-gray-500">Belum ada user untuk contoh relasi.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
