@props(['product'])

<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="/products/{{ $product->slug }}">
                {{ $product->name }}
            </a>
        </h5>
        <p class="card-text">
            Category: {{ $product->category->name }}
        </p>
        <p class="card-text">
            <small class="text-muted">
                {{ $product->condition }}
            </small>
        </p>
        <p class="card-text">
            <small class="text-muted">
                {{ $product->created_at->diffForHumans() }}
            </small>
        </p>
    </div>
    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-bottom" alt="...">
</div>





