
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Task List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <x-nav-link :href="route('posts.create')">
                      Create Posts
                    </x-nav-link>
                    @foreach ($posts as $post)
                    <p><a href="{{ route('posts.show',['post'=>$post]) }}">{{$post->id}}</a> {{$post->title}}--{{ $post->content }}  <a href="{{ route('posts.edit',['post'=>$post]) }}">Edit</a></p>
                    <img src="{{ asset('storage/uploads' . $post->image) }}" style="height: 40%; width: 50%;" alt="image Cover">
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
'uploads', 'public'