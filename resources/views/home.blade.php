@extends('layouts.app')

@section('content')
    <div class="containerDashboard">
        <div class="d-flex flex-column ">
            <div class="d-flex flex-column">
                <h1>Explore the world <br> of Artificial Intelegence</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="playButton w-100 d-flex justify-content-end">
                <img src="{{ asset('images/playButton.png') }}" alt="playButton">
            </div>
        </div>
    </div>
    <div class="containerContentDashboard d-flex flex-column">
        <div>
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center tittleContainer">
                    <div class="tittle d-flex gap-3 align-items-center">
                        <h3>Kumpulan Program khusus special</h3>
                        <div style="width: 78px; height: 78px;" class="clockImage">
                            <img src="{{ asset('images/clock.png') }}" alt="playButton">
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <p class="exploreText">Explore Courses</p>
                        <div style="width: 19px; height: 19px;">
                            <img src="{{ asset('images/arrow.png') }}" alt="playButton">
                        </div>
                    </div>
                </div>
                <p class="courseContainerDescription">Lorem ipsum dolor sit amet</p>
            </div>
            <div class="d-flex gap-5 flex-column">
                <div class="gap-4 highlightContainer">
                    <div class="highlightCard" style="width: 100%;">
                        <x-card containerWidth="100%" containerHeight="100%"
                            tittle="Digital Marketing 101: Sosial Media Marketing" size="796x196" height="196px" />
                    </div>
                    <div class="highlightSecond highlightCard">
                        <x-card containerWidth="100%" containerHeight="100%"
                            tittle="UI/UX Design: Membuat Wireframe di Figma" size="380x196" height="196px" />
                    </div>
                </div>
                <div class="highlightSliderContainer">
                    <div id="custom-carousel" class="carousel slide" data-bs-ride="carousel">
                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="highlightCard" style="width: 100%;">
                                    <x-card containerWidth="100%" containerHeight="100%"
                                        tittle="Digital Marketing 101: Sosial Media Marketing" size="796x196"
                                        height="196px" />
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="highlightCard" style="width: 100%;">
                                    <x-card containerWidth="100%" containerHeight="100%"
                                        tittle="Digital Marketing 101: Sosial Media Marketing" size="796x196"
                                        height="196px" />
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="highlightCard" style="width: 100%;">
                                    <x-card containerWidth="100%" containerHeight="100%"
                                        tittle="Digital Marketing 101: Sosial Media Marketing" size="796x196"
                                        height="196px" />
                                </div>
                            </div>
                        </div>
                        <!-- Left and Right Arrows -->
                        <a class="carousel-control-prev" href="#custom-carousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <img src="{{ asset('images/prevArrow.png') }}" alt="arrowSlide">

                        </a>
                        <a class="carousel-control-next" href="#custom-carousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <img src="{{ asset('images/nextArrow.png') }}" alt="arrowSlide">

                        </a>
                    </div>
                </div>
                <div id="contentCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex flex-wrap justify-content-center carouselItemContainer">
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
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex flex-wrap justify-content-center carouselItemContainer">
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
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex flex-wrap justify-content-center carouselItemContainer">
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
                        </div>
                        <!-- Add more carousel-item entries for additional content slides -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <img src="{{ asset('images/prevArrow.png') }}" alt="arrowSlide" class="prevArrow">
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <img src="{{ asset('images/nextArrow.png') }}" alt="arrowSlide">
                    </button>
                    <ul class="carousel-indicators">
                        <li data-bs-target="#contentCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#contentCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#contentCarousel" data-bs-slide-to="2"></li>
                    </ul>

                </div>
            </div>
        </div>

        <div>
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center tittleContainer">
                    <div class="tittle d-flex gap-3 align-items-center">
                        <h3>Institusi kita</h3>
                        <div style="width: 78px; height: 78px;" class="komputer">
                            <img src="{{ asset('images/komputer.png') }}" alt="playButton">
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <p class="exploreText">Explore Courses</p>
                        <div style="width: 19px; height: 19px;">
                            <img src="{{ asset('images/arrow.png') }}" alt="playButton">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carouselDeksScreen">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                </div>
            </div>
            <div class="carouselMobileScreen">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                    <div>
                        <x-cardPartner image="{{ asset('images/institution.png') }}" text="Digital Marketing" />
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <img src="{{ asset('images/bannerMaxy.png') }}" alt="bannerMaxy" style="width: 100%">
            </div>
            <div class="d-flex flex-column specialCourse">
                <div class="d-flex justify-content-between align-items-center tittleContainer">
                    <div class="tittle d-flex gap-3 align-items-center">
                        <h3>Kursus Populer</h3>
                    </div>
                    <div class="d-flex gap-3">
                        <p class="exploreText">Lihat semua</p>
                        <div style="width: 19px; height: 19px;">
                            <img src="{{ asset('images/arrow.png') }}" alt="playButton">
                        </div>
                    </div>
                </div>
                <p class="courseContainerDescription">Lorem ipsum dolor sit amet</p>
            </div>
            <div id="contentCarousel2" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <!-- Add more carousel-item entries for additional content slides -->
                </div>
                <ul class="carousel-indicators">
                    <li data-bs-target="#contentCarousel2" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#contentCarousel2" data-bs-slide-to="1"></li>
                    <li data-bs-target="#contentCarousel2" data-bs-slide-to="2"></li>
                </ul>
            </div>
            <div class="popularCourseContainer">
                <div class="d-flex justify-content-between overflow-x-scroll gap-3">
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
            </div>
            <div class="d-flex flex-column specialCourse">
                <p class="courseContainerDescription">Kursus terbaik untuk</p>
                <div class="d-flex justify-content-between align-items-center tittleContainer">
                    <div class="tittle d-flex gap-3 align-items-center">
                        <h3>IT &Tech</h3>
                    </div>
                    <div class="d-flex gap-3">
                        <p class="exploreText">Lihat semua</p>
                        <div style="width: 19px; height: 19px;">
                            <img src="{{ asset('images/arrow.png') }}" alt="playButton">
                        </div>
                    </div>
                </div>
            </div>
            <div id="contentCarousel3" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <!-- Add more carousel-item entries for additional content slides -->
                </div>
                <ul class="carousel-indicators">
                    <li data-bs-target="#contentCarousel3" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#contentCarousel3" data-bs-slide-to="1"></li>
                    <li data-bs-target="#contentCarousel3" data-bs-slide-to="2"></li>
                </ul>
            </div>
            <div class="popularCourseContainer">
                <div class="d-flex justify-content-between overflow-x-scroll gap-3">
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
            </div>
            <div class="d-flex flex-column specialCourse">
                <p class="courseContainerDescription">Kursus terbaik untuk</p>
                <div class="d-flex justify-content-between align-items-center tittleContainer">
                    <div class="tittle d-flex gap-3 align-items-center">
                        <h3>Business & Entrepreneurship </h3>
                    </div>
                    <div class="d-flex gap-3">
                        <p class="exploreText">Lihat semua</p>
                        <div style="width: 19px; height: 19px;">
                            <img src="{{ asset('images/arrow.png') }}" alt="playButton">
                        </div>
                    </div>
                </div>
            </div>
            <div id="contentCarousel4" class="carousel slide" data-bs-ride="carousel" data-interval="false">
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between carouselItemContainer4">
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
                    </div>
                    <!-- Add more carousel-item entries for additional content slides -->
                </div>
                <ul class="carousel-indicators">
                    <li data-bs-target="#contentCarousel4" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#contentCarousel4" data-bs-slide-to="1"></li>
                    <li data-bs-target="#contentCarousel4" data-bs-slide-to="2"></li>
                </ul>
            </div>
            <div class="popularCourseContainer">
                <div class="d-flex justify-content-between overflow-x-scroll gap-3">
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
            </div>
        </div>
        <div class="joinContainer d-flex align-items-center">
            <div>
                <img src="{{ asset('images/MLogo.png') }}" alt="MLogo">
            </div>
            <div class="d-flex joinTextContainer justify-content-between">
                <div class="d-flex flex-column left">
                    <span class="textWhiteBig">Jadilah</span>
                    <span class="textYellow">Mitra Kami</span>
                </div>
                <div class="d-flex flex-column right">
                    <span class="textWhiteSmall">Berpartner dengan maxy dan dapatkan talent terbaik untuk perusahaan
                        anda</span>
                    <div>
                        <button class="textBlack">Gabung dengan Maxy!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
