<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
@include('components.partials._header')
<body>
<x-navbar />
    {{$slot}}
</body>
</html>
