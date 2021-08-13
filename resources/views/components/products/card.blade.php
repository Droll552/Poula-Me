@props(['product'])

<div>
    <h5>
        <a href="/products/{{ $product->slug }}">
            {{ $product->name }}
        </a>
    </h5>
    <p>{{ $product->category }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->description }}</p>
    <p>{{ $product->condition }}</p>
    <p>Created: <time>{{ $product->created_at->diffForHumans() }}</time></p>

</div>
