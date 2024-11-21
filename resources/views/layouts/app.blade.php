@extends('layouts.base')

@section('body')
    <div class="container">
        <div class="bg-gray-100 h-full w-screen">
            @auth
                @include('layouts.includes.navbar')
            @endauth
            <div class="container mx-auto">
                @yield('content')
            </div>
        </div>
    </div>
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
