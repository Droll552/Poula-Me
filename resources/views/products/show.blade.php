<x-base>
    <div class="card mb-3">
        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="...">
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
        <a href="/dashboard/products/{{ $product->id }}/edit">Edit</a>
        <form method="POST" action="/dashboard/products/{{ $product->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-info mt-4">Delete</button>
        </form>
    </div>

</x-base>
