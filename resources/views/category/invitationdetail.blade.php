@extends('layout.index')

@section("header")
@section('title',  $invitation->name )
@section('description',   $invitation->name )
@section('image',  $invitation->phone )
@endsection

@section('content')
    <section id="rsvp" class="section-bg-color extra-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{$invitation->phone}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
