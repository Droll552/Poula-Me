<x-base>
    <h3>All Users</h3>
    @if ($users->count())
        <table class="table table-striped table-hove">
            <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>

{{--                    <td>--}}
{{--                        <a href="/dashboard/categories/{{ $category->id }}/edit">Edit</a>--}}
{{--                        <form method="POST" action="/dashboard/categories/{{ $category->id }}">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-info mt-4">Delete</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No users yet</p>
    @endif
</x-base>
