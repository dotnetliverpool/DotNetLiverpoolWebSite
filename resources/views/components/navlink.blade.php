<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
@props(['is_mobile' => false, 'active' => false])
<a
    {{ $attributes }}
    class="{{
    $active ?
    'bg-white-900 text-gray-900':
    'text-gray-700 hover:bg-gray-300 hover:text-gray-900' .
     $is_mobile ?? 'block'}}
    rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}"
>
    {{ $slot }}
</a>
