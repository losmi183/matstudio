@extends('layouts.app')

@section('content')

<div class="space-125"></div>

<section id="project">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12"><h2 class="main-title"> {{$project->name}} </h2></div>

            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img class="img-fluid" src="/images/projects/{{$project->images->first()->full}}" alt="">
                </div>

                <div class="thumb-wrapper">
                    <div class="thumb"><img data-full="/images/projects/2.jpg" src="/images/projects/2-thumb.jpg" alt=""></div>
                    <div class="thumb"><img data-full="/images/projects/3.jpg" src="/images/projects/3-thumb.jpg" alt=""></div>
                    <div class="thumb"><img data-full="/images/projects/4.jpg" src="/images/projects/4-thumb.jpg" alt=""></div>
                    <div class="thumb"><img data-full="/images/projects/5.jpg" src="/images/projects/5-thumb.jpg" alt=""></div>
                </div>

                <div class="space-20"></div>

            </div>

            <div class="col-lg-6">                    
                <p> {{$project->description}} </p>
            </div>
        </div>
    </div>
</section>
    
@endsection
