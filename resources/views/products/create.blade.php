<x-base>
    <section>
        <main>
            <h1>Create New Product</h1>

            <form method="POST" action="/dashboard/products" enctype="multipart/form-data">
                @csrf
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
                <div class="input-group mb-3">
                    <label
                        class="input-group-text" for="inputGroupFile01">Upload image</label>
                    <input
                        name="image"
                        type="file"
                        class="form-control"
                        id="inputGroupFile01"
                    >
                </div>
                <div>
                    <label
                        class="input-group-text" for="category_id">Select Category
                    </label>
                    <select
                        name="category_id"
                        id="category_id"
                        class="form-select"
                        aria-label="Default select example"
                    >
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id  }}">
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Price:</span>

                    <input
                        class="form-control"
                        aria-label="Price:"
                        aria-describedby="basic-addon1"
                        type="number"
                        name="price"
                        id="price"
                        required
                    >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Condition:</span>

                    <input
                        class="form-control"
                        aria-label="Condition:"
                        aria-describedby="basic-addon1"
                        type="text"
                        name="condition"
                        id="condition"
                        required
                    >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Description:</span>

                    <textarea
                        aria-label="Description:"
                        class="form-control"
                        name="description"
                        id="description"
                        required
                    ></textarea>
                </div>

                <button type="submit" class="btn btn-info mt-4">Publish</button>
            </form>
        </main>
    </section>
</x-base>


