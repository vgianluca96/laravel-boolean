<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container py-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Ingredient 1</th>
                        <th scope="col">Ingredient 2</th>
                        <th scope="col">Ingredient 3</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cocktails as $cocktail)
                        <tr>
                            <th scope="row">{{ $cocktail->id }}</th>
                            <td>{{ $cocktail->name }}</td>
                            <td>{{ $cocktail->ingredient_1 }}</td>
                            <td>{{ $cocktail->ingredient_2 }}</td>
                            <td>{{ $cocktail->ingredient_3 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
