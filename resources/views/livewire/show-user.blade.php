<div class="flex flex-row gap-1 px-5 py-0 mt-2 items-center">
    <div class="bg-teal-500 rounded-full w-6 h-6 pt-1">
        <p class="text-xs text-white flex items-center justify-center font-bold">{{ $user['name'][0] }}</p>
    </div>
    <a href="{{ route('user-profile', $user['user_id']) }}" class="text-xs text-blue-900 hover:cursor-pointer">{{ $user['name'] }}</a>
</div>