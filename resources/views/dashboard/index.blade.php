<x-base>
    <h1>Dashboard</h1>
    <p>Here you can operate with your products and check your account statistics</p>

    <p><a href="/dashboard/products/">Check here your products</a></p>
    <p><a href="/dashboard/products/create">Create new product</a></p>
{{-- Section for admins --}}
    @superadmin
    <p><a href="/dashboard/categories">Categories</a></p>
    <p><a href="/dashboard/categories/create">Category create</a></p>
    @endsuperadmin
    @admin
    <p><a href="/dashboard/categories">Categories</a></p>
    <p><a href="/dashboard/categories/create">Category create</a></p>
    @endadmin
</x-base>
