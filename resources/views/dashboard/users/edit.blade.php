<x-base>
    <section>
        <main>
            <h1>Edit User</h1>

            <form method="POST" action="/dashboard/users/{{ $user->id }}">
                @csrf
                @method('PATCH')
                <div>
                    <label
                        class="input-group-text" for="category_id">Select Role
                    </label>
                    <select
                        name="role"
                        id="role"
                        class="form-select"
                        aria-label="Default select example"
                    >
                        @foreach (\App\Models\User::all() as $user)
                            <option
                                value="{{ $user->role  }}">
                                {{$user->role}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-info mt-4">Publish</button>
            </form>
        </main>
    </section>
</x-base>
