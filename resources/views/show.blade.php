@extends('layouts.app')

@section('content')

<div class="space-125"></div>

<section id="project">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-6">
                <div class="img-wrapper ">
                    <img class="img-fluid mx-auto" src="/{{$project->photos->first()->full ?? 'images/empty.jpeg' }}" alt="">
                </div>

                <div class="thumb-wrapper">
                    @foreach ($project->photos as $photo)
                        <div class="thumb"><img data-full="/{{$photo->full}}" src="/{{$photo->thumb}}" alt=""></div>
                    @endforeach
                </div>

                <div class="space-20"></div>

            </div>

            <div class="col-lg-6">          
                
                <div class="col-12"><h2 class="main-title"> {{$project->name}} </h2></div>

                <p> {{$project->description}} </p>
            </div>
        </div>
    </div>
</section>
    
@endsection