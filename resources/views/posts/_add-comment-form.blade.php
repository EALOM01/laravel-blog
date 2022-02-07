@auth
<form method="POST" action="/posts/{{$post->slug}}/comments" class="border border-gray-200 p-6 rounded-xl space-y-3">
    @csrf

    <header class="flex space-x-4 items-center">
        <img src="https://i.pravatar.cc/40?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">
        <h2>Want to participate?</h2>
    </header>

    <div>
        <textarea name="body" class="w-full focus:outline-none focus:ring p-2" rows="5" placeholder="What do you think?"></textarea>
        @error('body')
        <span class="text-red-500 text-xs mt-2">{{$message}}</span>
        @enderror
    </div>

    <hr />
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 hover:bg-blue-600 rounded-2xl">post</button>
    </div>
</form>
@else
<div class="flex space-x-4 items-center">
    <a href="/register">
        <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 hover:bg-blue-600 rounded-2xl">new user? sign up here!</button>
    </a>
    <p> or </p>
    <a href="/login">
        <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 hover:bg-blue-600 rounded-2xl">log in to comment</button>
    </a>
</div>
@endauth