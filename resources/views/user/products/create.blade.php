<x-base>
    <form method="POST" action="/dashboard/create">
        @csrf

        <x-form.input/>
        <button type="submit">Publish</button>
    </form>



</x-base>
