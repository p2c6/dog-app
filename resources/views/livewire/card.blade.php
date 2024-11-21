<div class="w-auto bg-white rounded-md">
    <div class="flex flex-col items-center">
        <img class="w-72 h-48 m-2" src="{{ $dog['imageUrl'] }}">
        <div></div>
        <div>
            {{ $dog['displayBreed'] }}
        </div>
        <div class="border-t-2 border-teal-500 w-full p-2" x-data="{isLike: {{ $dog['isLike'] }} }">
            <div :class="isLike ? 'text-red-500' : ''" class="cursor-pointer hover:text-red-500" wire:click="likeOrUnlikeDog"><i class="fa-regular fa-heart text-lg"></i> {{ $dog['isLike'] ? 'Unlike' : 'Like' }}</div>
        </div>
    </div>
</div>
