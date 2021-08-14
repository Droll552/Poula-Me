<x-base>
    <h2>Dashboard</h2>
    <h3>My Products:</h3>
    @if ($products->count())
        @foreach($products as $product)
            <x-products.user-card
                :product="$product"
            />
        @endforeach
    @else
        <p>No products yet, come back later</p>
    @endif
</x-base>
