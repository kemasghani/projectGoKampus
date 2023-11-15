<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/specialCourse.css') }}">
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="d-flex flex-lg-row flex-column justify-content-between specialCourseInfo">
                <div class="d-flex flex-row flex-lg-column align-items-start justify-content-between left">
                    <div class="tittleContainer">
                        <h1 class="tittle">Digital Marketing 101: Sosial Media Marketing</h1>
                        <span class="desc">Lorem Ipsum dolor sit amet</span>
                    </div>
                    <div class="d-flex flex-column flex-lg-row align-items-center institutionContainer">
                        <div class="institutionLogo">
                            <img src="{{ asset('images/institution.png') }}" alt="institution">
                        </div>
                        <span class="institutionName">Verde Two</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between infoCourseContainer right">
                    <div class="infoCourseItem gap-2 d-flex flex-column align-items-center">
                        <span>Lesson</span>
                        <div>Digital Marketing</div>
                    </div>
                    <div class="infoCourseItem gap-2 d-flex flex-column align-items-center">
                        <span>Durasi</span>
                        <div>1hr Duration</div>
                    </div>
                    <div class="infoCourseItem gap-2 d-flex flex-column align-items-center">
                        <span>Lesson</span>
                        <div>100 Members</div>
                    </div>
                </div>
            </div>
            <div class="previewMateriContainer d-flex flex-column flex-md-row">
                <div class="circleBorder d-none d-md-block">
                    <img src="{{ asset('images/circleBorder.png') }}" alt="circleBorder">
                </div>
                <div class="left">
                    <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=677x380" alt="">
                </div>
                <div class="right d-flex flex-column gap-2">
                    <div class="d-flex justify-content-between infoPreviewMateri">
                        <span>Preview Materi</span>
                        <span>3 videos</span>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex listPreview align-items-center gap-3">
                            <div class="listPreviewImage">
                                <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=69x38" alt="">
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <span>Introduction</span>
                                <span>2:30</span>
                            </div>
                        </div>
                        <div class="d-flex listPreview  align-items-center gap-3">
                            <div class="listPreviewImage">
                                <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=69x38" alt="">
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <span>Introduction</span>
                                <span>2:30</span>
                            </div>
                        </div>
                        <div class="d-flex listPreview  align-items-center gap-3">
                            <div class="listPreviewImage">
                                <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=69x38" alt="">
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <span>Introduction</span>
                                <span>2:30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detailInfoSpecialCourse">
                <div class="d-flex flex-column gap-lg-3 gap-2">
                    <div
                        class="d-flex gap-lg-4 align-items-lg-end align-items-start justify-content-between justify-content-lg-start">
                        <h1>Kiat sukses mendalamai dunia Digital Marketing</h1>
                        <div class="announce">
                            <img src="{{ asset('images/announce.png') }}" alt="announce">
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book.</p>
                </div>
                <div class="d-flex">
                    <div class="target">
                        <h1>Target Kelas Ini</h1>
                        <div class="d-flex flex-column">
                            <div class="d-flex gap-3 align-items-start">
                                <div>
                                    <img src="{{ asset('images/checklist.png') }}" alt="checklist">
                                </div>
                                <span>Memahami Dunia digital marketing untuk kebutuhan industri</span>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <div>
                                    <img src="{{ asset('images/checklist.png') }}" alt="checklist">
                                </div>
                                <span>Memahami Dunia digital marketing untuk kebutuhan industri</span>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <div>
                                    <img src="{{ asset('images/checklist.png') }}" alt="checklist">
                                </div>
                                <span>Memahami Dunia digital marketing untuk kebutuhan industri</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block cocok">
                        <h1>Cocok untuk</h1>
                        <div class="d-flex flex-column">
                            <div class="d-flex gap-3">
                                <div>
                                    <img src="{{ asset('images/checklist.png') }}" alt="checklist">
                                </div>
                                <p>Yang ingin menjadi digital marketing</p>
                            </div>
                            <div class="d-flex gap-3">
                                <div>
                                    <img src="{{ asset('images/checklist.png') }}" alt="checklist">
                                </div>
                                <p>Yang ingin menjadi digital marketing</p>
                            </div>
                            <div class="d-flex gap-3">
                                <div>
                                    <img src="{{ asset('images/checklist.png') }}" alt="checklist">
                                </div>
                                <p>Yang ingin menjadi digital marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="circle d-none d-md-block">
                        <img src="{{ asset('images/circle.png') }}" alt="circle">
                    </div>
                </div>
            </div>
            <div class="CourseLearned">
                <h1 class="text-lg-center ">Kursus-kursus yang akan kamu pelajari</h1>
                <div class="d-flex cardCourseContainer flex-column flex-md-row  gap-4">
                    <div class="d-flex cardCourse expand">
                        <div class="cardCourseImage">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=271x271" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-between contentCard">
                            <div class="d-flex flex-column">
                                <h3>Kursus 2</h3>
                                <span class="student show">1000 Pelajar</span>
                                <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and </p>
                            </div>
                            <span>1000 Pelajar</span>
                        </div>
                        <div class="dropdown rotate">
                            <img src="{{ asset('images/dropdown.png') }}" alt="dropdown">
                        </div>
                    </div>
                    <div class="d-flex cardCourse expand">
                        <div class="cardCourseImage">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=271x271" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-between contentCard">
                            <div class="d-flex flex-column">
                                <h3>Kursus 2</h3>
                                <span class="student show">1000 Pelajar</span>
                                <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and </p>
                            </div>
                            <span>1000 Pelajar</span>
                        </div>
                        <div class="dropdown rotate">
                            <img src="{{ asset('images/dropdown.png') }}" alt="dropdown">
                        </div>
                    </div>
                </div>
            </div>
            <div class="popularContainer">
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
        <script src="{{ asset('js/specialCourse.js') }}"></script>
    @endsection

</body>

</html>
