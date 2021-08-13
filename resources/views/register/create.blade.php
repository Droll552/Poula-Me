<x-base>
    <section>
        <main>
            <h1>Register!</h1>

            <form method="POST" action="/register">
                @csrf

                <div>
                    <label
                           for="username"
                    >
                        Username
                    </label>

                    <input
                           type="text"
                           name="username"
                           id="username"
                           required
                    >
                </div>

                <div >
                    <label
                           for="city"
                    >
                        City
                    </label>

                    <input
                           type="text"
                           name="city"
                           id="city"
                           required
                    >
                </div>

                <div>
                    <label
                           for="email"
                    >
                        Email
                    </label>

                    <input
                           type="email"
                           name="email"
                           id="email"
                           required
                    >
                </div>

                <div>
                    <label
                           for="password"
                    >
                        Password
                    </label>

                    <input
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                </div>

                <div >
                    <button type="submit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-base>
