<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/institution.css') }}">
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1 class="institutionTittle">Institusi</h1>
            @foreach($institutions as $institution)
                <div class="d-flex cardInstiutionContainer justify-content-between gap-2 gap-md-3 gap-lg-4">
                    <div class="d-flex flex-column cardInstitution">
                        <div>
                            <div class="imageContainer">
                                <img src="{{ asset('images/institution.png') }}" alt="institution">
                            </div>
                            <span>{{ $institution->name }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-5">
                <img src="{{ asset('images/bannerMaxy.png') }}" alt="bannerMaxy" style="width: 100%">
            </div>
        </div>
    @endsection
</body>

</html>
