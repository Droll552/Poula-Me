<x-base>
    <section>
        <main>
            <h1>Register!</h1>

            <form method="POST" action="/register">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Username</span>
                    <input
                        class="form-control"
                        aria-label="Username:"
                        aria-describedby="basic-addon1"
                        type="text"
                        name="username"
                        id="username"
                        required
                    >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">City:</span>
                    <input
                        class="form-control"
                        aria-label="City:"
                        aria-describedby="basic-addon1"
                        type="text"
                        name="city"
                        id="city"
                        required
                    >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email:</span>
                    <input
                        class="form-control"
                        aria-label="Email:"
                        aria-describedby="basic-addon1"
                        type="text"
                        name="email"
                        id="email"
                        required
                    >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Password:</span>

                    <input
                        class="form-control"
                        aria-label="Password:"
                        aria-describedby="basic-addon1"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                </div>

                <div>
                    <button type="submit" class="btn btn-info mt-4">Register</button>
                </div>
            </form>
        </main>
    </section>
</x-base>
