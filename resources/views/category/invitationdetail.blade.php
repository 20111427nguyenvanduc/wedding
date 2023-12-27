@extends('layout.index')

@section("header")
@section('title',  $invitation->name )
@section('description',   "Tới dự bữa cơm thân mật chung vui cùng gia đình chúng tôi. Sự hiện diện của quý vị là niềm vinh hạnh cho gia đình chúng tôi." )
@section('image',  $invitation->image )
@endsection

@section('content')
    <section id="rsvp" class="section-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{$invitation->image}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
