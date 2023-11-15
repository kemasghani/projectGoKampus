<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="card" id="card" style="height: 100%; width: {{ $containerWidth }};">
        @if ($tittle)
            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text={{ $size }}" alt="image"
                style="height: {{ $height }};" class="imageCardContainer">
            <div class="cardContent">
                <div class="topCardContent">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <img src="{{ asset('images/playBlue.png') }}" alt="playButton">
                            </div>
                            <div class="total">Total lesson</div>
                        </div>
                        <div>
                            <img src="{{ asset('images/rating.png') }}" alt="playButton">
                        </div>
                    </div>
                    <div class="tittle">{{ $tittle }}</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <div class="profileCard"></div>
                        <div>
                            <div class="profileNameCard">Nama Panjang</div>
                            <div class="role">Digital Marekting</div>
                        </div>
                    </div>
                    <div class="lesson">More</div>
                </div>
            </div>
        @endif
    </div>

</body>

</html>
