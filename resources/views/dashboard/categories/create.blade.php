<x-base>
    <section>
        <main>
            <h1>Create New Category</h1>

            <form method="POST" action="/dashboard/categories">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Category Name:</span>
                    <input
                        class="form-control"
                        aria-label="Category Name:"
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


