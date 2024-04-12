<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block mt-1">Title</label>
                                <input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $post->title }}" required />
                            </div>
                            <div class="col-span-6">
                                <label for="content" class="block mt-1">Content</label>
                                <textarea id="content" name="content" class="block mt-1 w-full" rows="6" required>{{ $post->content }}</textarea>
                            </div>
                            <div class="col-span-6">
                                <label for="image" class="block mt-1">Image</label>
                                <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" />
                            </div>
                            <div class="flex col-span-6 justify-end"> 
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update Post</button>
                            </div>
                        </div>
                    </form>   
                    {{-- <form method="POST" action="{{ route('posts.update',['post'=>$post]) }}">
                        @csrf
                  
                        <div class="flex col-span-6 justify-end">
                            <button>
                                Delete post
                            </button>
                        </div>
                        @method('DELETE')
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
