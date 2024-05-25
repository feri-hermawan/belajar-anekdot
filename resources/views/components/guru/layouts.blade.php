<!DOCTYPE html>
<html lang="en">

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Sidebar With Bootstrap</title>--}}
{{--    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="/css/sidebar-style.css">--}}
{{--</head>--}}
<x-header :title="$title"></x-header:title>

<body>
<div class="wrapper">
    <x-guru.sidebar-guru></x-guru.sidebar-guru>
    <div class="main p-3">
        <div class="text-center">
            <h1>
                {{$header}}
            </h1>
        </div>
        <div>
            {{$slot}}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="/js/toggle-sidebar.js"></script>
</body>

</html>
