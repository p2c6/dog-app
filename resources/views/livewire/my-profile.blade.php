@extends('layouts.base')

@section('body')
<div class="flex justify-center h-screen mt-5">
    <div class="flex items-center justify-center bg-white w-auto h-96 p-5">
        <form class="self-start mt-10">
            <div class="flex flex-col gap-1">
                <label for="">Profile Picture </label>
                <input type="file" wire:model="photo">
            </div>
            <div class="flex flex-col gap-1">
                <label for="">Name</label>
                <input type="text" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">Date of Birth</label>
                <input type="date" />
            </div>
            <button type="submit" class="bg-teal-500 p-2 mt-5">Save</button>
        </form>
    </div>
</div>

@endsection
