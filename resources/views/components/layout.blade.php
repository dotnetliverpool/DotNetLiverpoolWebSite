<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
@include('components.partials._header')
<body class="mx-12 max-w-7xl px-2 sm:px-6 lg:px-8 min-h-screen bg-gray-100">
<x-navbar />
    {{$slot}}
</body>
</html>
