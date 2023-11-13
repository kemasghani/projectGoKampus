<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/detailCourse.css') }}">
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div>
                <div class="d-flex justify-content-between headContainer">
                    <h1>Kursus Populer</h1>
                    <div class="filterContainer d-flex gap-3">
                        <div class="filterItem active">Popular</div>
                        <div class="filterItem">IT & Tech</div>
                        <div class="filterItem">UI/UX</div>
                        <div class="filterItem">Digital Marketing</div>
                        <div class="filterItem">Finance</div>
                        <div class="filterItem">Management</div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center detailCourseCardContainer">
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                    <div>
                        <x-cardSmallest tittle="Frontend: Membuat website dasar css" size="284x146" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="{{ asset('images/bannerMaxy.png') }}" alt="bannerMaxy" style="width: 100%">
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
