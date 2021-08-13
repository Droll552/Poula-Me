<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Poula Me</title>
</head>

<body>
<h1>Poula Me</h1>

@auth
    <p>Welcome {{ auth()->user()->username }}</p>
    <a href="/dashboard/create/">Create Product</a>

    <form id="logout-form" method="POST" action="/logout">
        @csrf
        <button type="submit"
        >
            Logout
        </button>
    </form>
@else
    <a href="/register">Register</a>
    <a href="/login">Login</a>
@endif
    {{ $slot }}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</body>
</html>
