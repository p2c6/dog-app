<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach($dogs as $dog)
        @livewire('like', ['dog' => $dog], key($dog['breed']))
    @endforeach
</div>
