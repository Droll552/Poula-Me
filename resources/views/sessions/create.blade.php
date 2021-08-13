<x-base>
    <section>
        <main>
            <h1 >Login!</h1>

            <form method="POST" action="/login" >
                @csrf

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

                <div>
                    <button type="submit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-base>
