<x-base>
    @if ($products->count())
        @foreach($products as $product)
            <x-products.card
                :product="$product"
            />
        @endforeach
    @else
        <p>No products yet, come back later</p>
    @endif
</x-base>
