<form method="POST" action="/register" class="mt-10">
    @csrf

    <div>
        <label for="name">Name</label>

        <input
            type="text"
            name="name"
            id="name"
            required
        >
    </div>
    <div>
        <label for="slug">Slug</label>

        <input
            type="text"
            name="slug"
            id="slug"
            required
        >
    </div>
    <div>
        <label for="category">Category</label>

        <input
            type="text"
            name="category"
            id="category"
            required
        >
    </div>
    <div>
        <label for="price">Price</label>

        <input
            type="number"
            name="price"
            id="price"
            required
        >
    </div>
    <div>
        <label for="description">Description</label>

        <input
            type="text"
            name="description"
            id="description"
            required
        >
    </div>
    <div>
        <label for="condition">Condition</label>

        <input
            type="text"
            name="condition"
            id="condition"
            required
        >
    </div>

    <button type="submit">Publish</button>
</form>
