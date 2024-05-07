<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <!-- <link rel="stylesheet" href="~/css/output.css"> -->
    @vite('resources/css/app.css')
</head>

<body class="   ">
    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>

    <x-footer></x-footer>
    <x-javascript-import></x-javascript-import>
</body>

</html>