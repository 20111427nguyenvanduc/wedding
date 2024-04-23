@extends('layout.index')

@section('content')
    <section id="rsvp" class="section-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">
                    <div class="form-wrapper">
                        <h1 class="section-title">Tên thiệp hồng</h1>
                        <form class="form validate-rsvp-form row">
                            <div>
                                <input type="text" name="name" placeholder="Tên người mời" class="form-control"
                                       value="">
                                <select name="type" >
                                    <option selected value="/duyetphuong/thiepcuoi1.jpg">Nhà Trai</option>
                                    <option value="/duyetphuong/thiepcuoi2.jpg">Nhà Gái</option>
                                </select>
                            </div>

                            <div class="center">
                                <button type="submit" class="btn btn-primary submit_form">In thiệp mời</button>
                            </div>
                        </form>
                        <br>
                        <img src="{{$invitation}}" alt="">

                        <div class="center">
                            <div class="center m-0 mb-5">
                                <a href="{{$link}}" target="_blank"
                                   class="btn btn-primary px-2"
                                   style="min-width:240px;max-width:240px;">Xem thiệp mời</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
