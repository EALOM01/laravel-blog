<x-dropdown>
    <x-slot name="trigger">
        <button class="inline-flex lg:w-32 w-full py-2 pl-3 pr-9 text-sm font-semibold text-left">
            {{isset($currentCategory)? ucwords($currentCategory->name) : 'Categories'}}
            <x-icon class="absolute pointer-events-none" name="down-arrow" />
        </button>
    </x-slot>

    <x-dropdown-item href="{{http_build_query(request()->except('category', 'page'))}}" :active="request()->routeIs('home')">All Categories</x-dropdown-item>
    @foreach ($categories as $category)
    <x-dropdown-item href="/?category={{$category->slug}}&{{http_build_query(request()->except('category', 'page'))}}" :active='request()->is("categories/{$category->slug}")'>
        {{ucwords($category->name)}}
    </x-dropdown-item>
    @endforeach
</x-dropdown>