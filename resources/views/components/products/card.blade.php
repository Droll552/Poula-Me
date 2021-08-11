@props(['product'])

<div>
    <h5>{{ $product->name }}</h5>
    <p>{{ $product->category }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->description }}</p>
    <p>{{ $product->condition }}</p>
    <time>{{ $product->created_at->diffForHumans() }}</time>

</div>
