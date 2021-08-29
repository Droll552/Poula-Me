<x-base>
    @if ($products->count())
        @foreach($products as $product)
            <x-products.card
                :product="$product"
            />
        @endforeach
        {{$products->links()}}
    @else
        <p>No products yet, come back later</p>
    @endif
</x-base>
