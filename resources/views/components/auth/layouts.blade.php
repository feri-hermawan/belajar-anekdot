<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    Font Inter--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <!--- Trix Editor CDn --->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <title>{{$title}}</title>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
</head>
<body class="font-inter bg-main">
<div>
    <div class="block md:flex">
    <x-auth.navbar></x-auth.navbar>
        <div id="content" class="container bg-main md:h-lvh relative">
            {{$slot}}
        </div>
    </div>
</div>
</body>
<script src="/js/script.js"></script>

<script>
    document.addEventListener('trix-file-accept', function (e){
        e.preventDefault();
    })
</script>
</html>
