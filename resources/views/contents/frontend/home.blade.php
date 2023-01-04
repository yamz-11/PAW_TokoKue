@extends('layouts.frontend')
@section('content')
<!-- carausel -->
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    {{-- <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
    </ol> --}}
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/gmbr1.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/gmbr2.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/gmbr3.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/gmbr4.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/gmbr5.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
@section('javascript')

@endsection