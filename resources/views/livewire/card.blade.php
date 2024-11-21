<div class="w-auto bg-white rounded-md">
    <div class="flex flex-col items-center">
        <img class="w-auto h-72 m-2" src="{{ $dog['imageUrl'] }}">
        <div></div>
        <div>
            {{ $dog['displayBreed'] }}
        </div>
        <div class="border-t-2 border-teal-500 w-full p-2">
            <div class="cursor-pointer hover:text-red-500"><i class="fa-regular fa-heart text-lg"></i> Like</div>
        </div>
    </div>
</div>
