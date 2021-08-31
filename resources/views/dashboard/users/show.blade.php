<x-base>
    {{$user->username}}
    {{$user->email}}
    {{$user->city}}
    {{$user->role}}
    <a href="/dashboard/users/{{ $user->id }}/edit">Edit user preferences/role</a>
</x-base>
