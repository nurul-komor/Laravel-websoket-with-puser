<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Scripts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    user Id : {{ auth()->user()->id }}
    <script type="module">
        Echo.private("order.1.1").listen("OrderPlaceEvent", (e) => {
            // Handle the broadcasted data here
            console.log('ok')
            console.log(e.order);
        });
    </script>
</body>

</html>
