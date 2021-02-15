@extends('layouts.app')

@section('content')

<div class="space-125"></div>

<section id="project">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-9">
                <div class="img-wrapper ">
                    <img class="img-fluid mx-auto" src="/{{$project->photos->first()->full ?? 'images/empty.jpeg' }}" onContextMenu="return false;">
                </div>

                <div class="thumb-wrapper">
                    @foreach ($project->photos as $photo)
                        <div class="thumb"><img data-full="/{{$photo->full}}" src="/{{$photo->thumb}}" onContextMenu="return false;"></div>
                    @endforeach
                </div>

                <div class="space-20"></div>

            </div>

            <div class="col-lg-3">          
                
                <div class="col-12"><h2 class="main-title mt-5 mt-lg-0"> {{$project->name}} </h2></div>

                <p class="text-center text-lg-left "> {{$project->description}} </p>
            </div>
        </div>
    </div>
</section>
    
@endsection
