<x-base>
    <h3>Existing Categories: </h3>
    @if ($categories->count())
            <table class="table table-striped table-hove">
                <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->id }}/edit">Edit</a>
                            <form method="POST" action="/dashboard/categories/{{ $category->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-info mt-4">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    @else
        <p>No categories yet, create some</p>
    @endif
</x-base>
