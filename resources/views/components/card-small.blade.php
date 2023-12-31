<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/cardSmallest.css') }}">
</head>

<body>
    <div class="card" id="cardSmallest">
        <img src="{{ $imgCoverUrl ?? 'https://via.placeholder.com/1920x1080.png/CCCCCC?text=' . ($size ?? '1920x1080') }}" alt="image"
            class="imageCardContainer">
        <div class="cardContent">
            <div class="topCardContent">
                <div class="d-flex justify-content-between">
                    <div class="d-flex gap-2 align-items-center">
                        <div>
                            <img src="{{ asset('images/playBlue.png') }}" alt="playButton" class="playImage">
                        </div>
                        <div class="total">{{ $totalLessons ?? 0 }} Total Lessons</div>
                    </div>
                    <div>
                        <img src="{{ asset('images/rating.png') }}" alt="playButton" class="ratingImage">
                    </div>
                </div>
                <div class="tittle">{{ $title ?? "Title" }}</div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <div class="profileCard bg-white rounded-circle">
                        <img src="{{ $institutionImg ?? '' }}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <div class="profileNameCard">{{ $institutionName ?? "Nama Institusi" }}</div>
                        <div class="role">{{ $category ?? "Kategori" }}</div>
                    </div>
                </div>
                <div class="lesson">More</div>
            </div>
        </div>
    </div>

</body>

</html>
