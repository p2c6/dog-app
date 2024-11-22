<div class="flex flex-col">
    <h4 class="self-center my-5 text-xs md:text-md text-gray">Other users who might like dogs also</h4>
    <div class="border-b-2 border-gray-200"></div>
    <div>
        @forelse ( $users as $user )
            @livewire('show-user', ['user' => $user])
        @empty
        <div class="flex flex-col items-center justify-center mt-20">
            <i class="fa-regular fa-face-frown-open text-4xl text-gray-400"></i>
            <p class="text-gray-400 text-sm">No user/s found</p>
        </div>
        @endforelse
    </div>
</div>
