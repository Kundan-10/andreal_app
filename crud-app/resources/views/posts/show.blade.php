<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Post Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>ID: {{ $post->id }}</h2>
                    <h2>Title: {{ $post->title }}</h2>
                    <h2>Content: {{ $post->content }}</h2>
                    @if ($post->image)
                        <h2>Image: <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"></h2>
                    @else
                        <h2>No Image</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
