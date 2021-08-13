<x-base>

    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->category }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->description }}</p>
        <p>{{ $product->condition }}</p>
        <p>Created: <time>{{ $product->created_at->diffForHumans() }}</time></p>
        <a href="/">Back</a>
    </div>


</x-base>
