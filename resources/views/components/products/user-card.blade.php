{{--@props(['user'])--}}
@props(['product'])

{{--<div class="card">--}}
{{--    <div class="card-body">--}}
{{--        <h5 class="card-title">--}}
{{--            <a href="/dashboard/products/{{ user->product->slug }}">--}}
{{--                {{ user->product->name }}--}}
{{--            </a>--}}
{{--        </h5>--}}

{{--    </div>--}}
{{--</div>--}}





<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="/dashboard/products/{{ $product->slug }}">
                {{ $product->name }}
            </a>
        </h5>
        <p class="card-text">
            {{ $product->category }}
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





