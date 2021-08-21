<x-base>
    <section>
        <main>
            <h1>Edit Product</h1>

            <form method="POST" action="/dashboard/categories/{{ $category->id }}">
                @csrf
                @method('PATCH')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Product Name:</span>
                    <input
                        class="form-control"
                        aria-label="Product Name:"
                        aria-describedby="basic-addon1"
                        type="text"
                        name="name"
                        id="name"
                        required
                    >
                </div>
                <button type="submit" class="btn btn-info mt-4">Publish</button>
            </form>
        </main>
    </section>
</x-base>
