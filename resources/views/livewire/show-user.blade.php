<div class="flex flex-row gap-1 px-5 py-0 mt-2">
    <img class="rounded-full w-5 h-5" src="https://i.pravatar.cc/150?img=8" alt="avatar">
    <a href="{{ route('user-profile', $user) }}" class="text-xs text-blue-900 hover:cursor-pointer">{{ $user['name'] }}</a>
</div>