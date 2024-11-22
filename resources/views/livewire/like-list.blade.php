<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
    @forelse ($dogs as $dog )
        @livewire('like', ['dog' => $dog], key($dog['breed']))
    @empty
    <div class="w-96 rounded-md">
        <div class="flex flex-col items-center">
            No data found.
        </div>
    </div>
    @endforelse

</div>
