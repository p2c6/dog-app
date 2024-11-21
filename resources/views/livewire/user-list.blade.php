<div class="flex flex-col">
    <h4 class="self-center my-5 text-xs md:text-md text-gray">Other users who might like dog also</h4>
    <div class="border-b-2 border-gray-200"></div>
    <div>
        @foreach($users as $user)
            @livewire('show-user', ['user' => $user])
        @endforeach
    </div>
</div>
