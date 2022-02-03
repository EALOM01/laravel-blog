<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-blue-100 border border-blue-400 pt-10 p-20 rounded-xl">
            <h1 class="text-center font-bold uppercase text-gray-700 text-xl mb-10">New User Registration</h1>
            <form method="POST" action="/register">
                <!-- form-protecting protection -->
                {{csrf_field()}}
                <div class="mb-6">
                    <!-- Name input -->
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        name
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-l" value="{{old('name')}}" type="text" name="name" id="name" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                    <!-- username input -->
                    <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="username">
                        username
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-l" value="{{old('username')}}" type="text" name="username" id="username" required>
                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                    <!-- email input -->
                    <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="email">
                        email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-l" value="{{old('email')}}" type="email" name="email" id="email" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                    <!-- password input -->
                    <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="password">
                        password
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-l" type="password" name="password" id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                    <!-- form submit -->
                    <div class="mb-6 mt-8">
                        <button type="submit" class="bg-blue-400 text-white uppercase rounded py-2 px-4 hover:bg-blue-500">
                            submit
                        </button>
                    </div>
                </div>
            </form>
        </main>
    </section>
</x-layout>