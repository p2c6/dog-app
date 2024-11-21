@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="flex flex-col items-center justify-center">
        <div>
            <h4>Choose your favorite dog</h4>
        </div>
        <div>
            @livewire('card-list')
        </div>
        <div>
            Other users who also likes dog
        </div>
    </div>
</div>

@endsection
