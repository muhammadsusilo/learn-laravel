
<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>