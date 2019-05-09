@extends('layout')

@section('content')
    <div id="gallery-page">

        <div class="masonry px-2">
            <div class="item">
                <img src="{{url('media/images/1sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/5sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/8sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/2sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/3sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/6sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/7sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/4sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/9sd.jpg')}}" alt="">
            </div>


        </div>
    </div>
@endsection