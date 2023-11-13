<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/cardPartner.css') }}">
</head>

<body>
    <div class="card d-flex flex-column justify-center align-items-center" id="cardPartner">
        <div><img src="{{ $image }}" alt="{{ $image }}" class="institutionImage"></div>
        <p>{{ $text }}</p>
    </div>
</body>

</html>
