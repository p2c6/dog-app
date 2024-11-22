@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center">
    <div class="flex flex-col md:flex-row gap-5">
        <div>
            <div class="bg-white w-auto md:w-96 h-48 mt-5">
                <div class="flex flex-col items-center justify-center">
                    <img class="rounded-full w-16 h-16" src="https://i.pravatar.cc/150?img=8" alt="">
                    <h4 class="self-center my-5 text-xs md:text-md text-gray"> {{ $user['name'] }}</h4>
                </div>
                
            </div>
            
            <div class="bg-white w-auto md:w-96 h-96 mt-5">
                @livewire('user-list', ['otherUser' => $user])
            </div>
            
        </div>
        <div class="flex flex-col">
            <div class="mt-2">
                @livewire('like-list', ['dogs' => $dogs])
            </div>
        </div>

    </div>
</div>

@endsection
