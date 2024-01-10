@extends('layouts.layout')
@section('title') <title>E-School | Student IDcard</title>@endsection
@section('head-tags')
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <section id="IDCard">
        <div class="main-wrapper">
            
            <div class="passport-wrapper">
                <div class="passport passport-front">
                    <div class="passport-top bg-primary" style="height: 20%; width: 100%">

                    </div>
                    <div class="passport-img">
                        <img src="{{ asset('/img/user.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="passport-info">

                    </div>
                </div>
                {{-- <div class="passport passport-back">

                </div> --}}
            </div>
        </div>
    </section>
@endsection