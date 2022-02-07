<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-blue-100 border border-blue-400 p-10 rounded-xl">
            <h1 class="text-center font-bold uppercase text-gray-700 text-xl mb-10">user login</h1>
            <form method="POST" action="/sessions">
                <!-- form-protecting protection -->
                {{csrf_field()}}
                <div class="mb-6">
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
                    <div class="mb-6 mt-8 flex items-center">
                        <button type="submit" class="bg-blue-400 text-white uppercase rounded py-2 px-4 hover:bg-blue-500 mx-auto px-10">
                            log in
                        </button>
                    </div>
                </div>
            </form>
        </main>
    </section>
</x-layout>