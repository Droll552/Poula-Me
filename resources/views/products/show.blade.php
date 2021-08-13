<x-base>
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">
                <small class="text-muted">
                    {{ $product->created_at->diffForHumans() }}
                </small>
            </p>

            <h5 class="card-title">
                {{ $product->name }}
            </h5>
            <p class="card-text">
                Price: {{ $product->price }}
            </p>
            <p class="card-text">
                Condition: {{ $product->condition }}
            </p>
            <p class="card-text">
                Description: {{ $product->description }}
            </p>

        </div>
        <a href="/">Back</a>
    </div>

</x-base>
