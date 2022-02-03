@if (session()->has('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed bottom-0 right-0 bg-green-200 rounded-xl p-2 border border-green-400">
    <p class="block m-2 uppercase font-bold text-l text-gray-700">{{session('success')}}</p>
</div>
@endif