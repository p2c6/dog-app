@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center">
    <div class="flex flex-col md:flex-row gap-5">
        
        <div class="bg-white w-auto md:w-96 h-96 mt-5">
            @livewire('user-list')
        </div>

        <div class="flex flex-col items-center justify-center">
            <div>
                <h4><i class="fa-solid fa-paw"></i> Choose your favorite dog</h4>
            </div>
            @if(session('message'))
            <div class="w-full bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-2" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">Info</p>
                    <p class="text-sm">{{ session('message') }}</p>
                  </div>
                </div>
              </div>
            @endif
    
            <div>
                @livewire('card-list')
            </div>
        </div>

    </div>
</div>

@endsection
