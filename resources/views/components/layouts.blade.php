<!DOCTYPE html>
<html lang="en">

<x-header :title="$title"></x-header:title>

<body class="">
    <x-navbar></x-navbar>
    <main class="container">
        {{ $slot }}
    </main>

    <x-javascript-import></x-javascript-import>
</body>

</html>
