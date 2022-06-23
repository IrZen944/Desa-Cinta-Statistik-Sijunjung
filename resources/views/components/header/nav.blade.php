<x-header-layout :title="$title">
    <x-header.item menu="Beranda" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    <x-header.item menu="Desa" href="{{ route('desa') }}" :active="request()->routeIs('desa')" />
</x-header-layout>
