@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/institution.css') }}">
@endpush

@push('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.1/axios.js"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Institusi</h1>

        <div class="row row-cols-6 g-3 pt-4">
            @for($i = 1; $i <= 24; $i++)
                <div class="col">
                    <div class="card card-institution border border-2 text-center p-3 bg-white">
                        <img src="{{ asset('images/institution.png') }}"
                             class="mx-auto"
                             width="75px"
                             alt="Institution"
                        >
                        <div class="card-body">
                            <h5 class="card-title m-0">Test {{$i}}</h5>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="mt-5">
            <img src="{{ asset('images/image-banner.png') }}" class="w-100" alt="Placeholder Banner">
        </div>
    </div>

    <div class="mt-5">
        <img src="{{ asset('images/bannerMaxy.png') }}" class="w-100" alt="bannerMaxy">
    </div>
@endsection
