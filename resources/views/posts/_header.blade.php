<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

            <x-category-dropdown />

        </div>

        <!-- Other Filters -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="inline-flex lg:w-40 w-full py-2 pl-3 pr-9 text-sm font-semibold text-left">
                        Other Filters
                        <x-icon class="absolute pointer-events-none" name="down-arrow" />
                    </button>
                </x-slot>
                <x-dropdown-item href="/" :active="request()->routeIs('home')">All Posts</x-dropdown-item>
            </x-dropdown>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @endif
                <input type="text" name="search" placeholder="Find something" value="{{request('search')}}" class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>