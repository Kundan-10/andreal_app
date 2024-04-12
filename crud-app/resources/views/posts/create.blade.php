<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block mt-1 w-full">Title</label>
                                <input id="title" class="block mt-1 w-full" type="text" name="title" placeholder="Title" required />
                            </div>
                            <div class="col-span-6">
                                <label for="content" class="block mt-1 w-full">Content</label>
                                <textarea id="content" name="content" class="block mt-1 w-full" rows="6" placeholder="Content" required></textarea>
                            </div>
                            <div class="col-span-6">
                                <label for="image" class="block mt-1 w-full">Image</label>
                                <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" required />
                            </div>
                            <div class="flex col-span-6 justify-end"> 
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create Post</button>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
