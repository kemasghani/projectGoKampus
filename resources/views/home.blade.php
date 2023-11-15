@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="containerDashboard d-flex flex-column flex-lg-row">
            <div class="d-flex flex-column gap-4 containerTextDashboard">
                <div class="d-flex flex-column">
                    <span class="tittlePreview">Digital Marketing:</span>
                    <span class="aboutTittle">Mengenal dunia Marketing</span>
                </div>
                <div class="descTittle">Kurikulum ini adalah solusi untuk Anda yang ingin memulai belajar digital marketing.
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <div class="institutionContainer">
                        <img src="{{ asset('images/institution.png') }}" alt="institution"
                            style="width: 70%; height:70%; transform: translateY(3px);">
                    </div>
                    <span class="institutionName">Verde Two</span>
                </div>
            </div>
            <div class="containerVideoDashboard">
                <img src="{{ asset('images/vidDashboard.png') }}" alt="vidDashboard" style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="containerContentDashboard d-flex flex-column">
        <div class="container">
            <div class="d-flex flex-column tittleContainer">
                <div class="d-flex justify-content-between align-items-baseline tittleTop">
                    <div class="tittle d-flex gap-3 align-items-end">
                        <h3>Kumpulan Program khusus special</h3>
                        <div class="clockImage">
                            <img src="{{ asset('images/clock.png') }}" alt="playButton" style="width: 100%">
                        </div>
                    </div>
                    <div class="d-flex gap-3 exploreContainer">
                        <p class="exploreText">Explore Courses</p>
                        <div class="exploreArrow">
                            <img src="{{ asset('images/arrow.png') }}" alt="playButton" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <span class="courseContainerDescription">Program yang paling hits!</span>
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
                        <img src="{{ asset('images/nextArrow.png') }}" alt="arrowSlide" class="nextArrow">
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
            <div class="container">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-baseline tittleContainer">
                        <div class="tittle d-flex gap-3 align-items-end">
                            <h3>belajar dari partner maxy yuk</h3>
                            <div style="width: 78px; height: 78px;" class="komputer">
                                <img src="{{ asset('images/komputer.png') }}" alt="playButton">
                            </div>
                        </div>
                        <div class="d-flex gap-3 exploreContainer">
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
            </div>
            <div class="mt-5 container">
                <img src="{{ asset('images/bannerDivision.png') }}" alt="bannerDivision" style="width: 100%">
            </div>
            <div class="allPopularCourseContainer">
                <div class="container">
                    <div class="d-flex flex-column specialCourse">
                        <div class="d-flex justify-content-between align-items-baseline tittleContainer">
                            <div class="tittle d-flex gap-3 align-items-center">
                                <h3>Kursus Populer</h3>
                            </div>
                            <div class="d-flex gap-3 exploreContainer">
                                <p class="exploreText">Lihat semua</p>
                                <div style="width: 19px; height: 19px;">
                                    <img src="{{ asset('images/arrow.png') }}" alt="playButton">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Carousel for desktop screen --}}
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
                    {{-- slider for mobile screen --}}
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
            </div>
            <div class="container specialCourseContainer">
                <div>
                    <div class="d-flex flex-column specialCourse">
                        <p class="courseContainerDescription">Kursus terbaik untuk</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="tittle d-flex gap-3 align-items-center">
                                <h3>IT &Tech</h3>
                            </div>
                            <div class="d-flex gap-3 exploreContainer">
                                <p class="exploreText">Lihat semua</p>
                                <div style="width: 19px; height: 19px;">
                                    <img src="{{ asset('images/arrow.png') }}" alt="arrow">
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
                </div>
                <div>
                    <div class="d-flex flex-column specialCourse">
                        <p class="courseContainerDescription">Kursus terbaik untuk</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="tittle d-flex gap-3 align-items-center">
                                <h3>Business & Entrepreneurship </h3>
                            </div>
                            <div class="d-flex gap-3 exploreContainer">
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
            </div>
        </div>
        <div class="container joinContainer d-flex align-items-center">
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
