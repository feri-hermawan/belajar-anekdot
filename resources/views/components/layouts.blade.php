@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<x-header :title="$title"></x-header:title>

<body class="">
    @if(\Illuminate\Support\Facades\Auth::user()) :
        <x-navbar></x-navbar>
    @endif
    <main class="container">
        {{ $slot }}
    </main>

    <x-javascript-import></x-javascript-import>
</body>

</html>
