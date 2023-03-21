<div>
    @foreach($dasoss as $post)
    <li>{{ $post->name }}</li>
    @endforeach

    {{ $dasoss->links() }}
</div>