@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center">
    <div class="flex flex-col md:flex-row gap-5">
        <div>
            <div class="bg-white w-auto md:w-96 h-48 mt-5">
                <div class="flex items-center justify-center mt-10">
                    <div class="flex flex-col items-center justify-center mt-2">
                        <div class="bg-teal-500 rounded-full w-10 h-10 pt-2">
                            <p class="text-xl text-white flex items-center justify-center font-bold">{{ $user['name'][0] }}</p>
                        </div>
                        <h4 class="self-center mt-5 text-xs md:text-md text-blue-600 font-semibold"> {{ $user['name'] }}</h4>
                        @if($user['description'])
                            <div class="w-48 text-center">
                                <p class="text-gray-300 text-xs">{{ $user['description'] }}</p>
                            </div>
                        @endif
                        @if($user['address'])
                            <div>
                                <p class="text-gray-300 text-xs"><i class="fa-solid fa-location-dot"></i> {{ $user['address'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>
                
            </div>
            
            <div class="bg-white w-auto md:w-96 h-96 mt-5">
                @livewire('user-list', ['otherUser' => $user])
            </div>
            
        </div>
        <div class="flex flex-col">
            <div class="mt-5">
                <h4 class="text-sm text-red-500"><i class="fa-regular fa-heart text-sm"></i> Liked dog/s</h4>
                @livewire('like-list', ['dogs' => $dogs])
            </div>
        </div>

    </div>
</div>

@endsection
