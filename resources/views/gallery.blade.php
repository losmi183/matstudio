@extends('layouts.app')

@section('content')

<div class="space-100"></div>

<section id="gallery">
    <div class="image-gallery">
        @foreach ($projects as $project)
            <div class="gallery-box">
                <div class="gallery-image">
                    <a href="{{ route('project', $project->id) }}"><img src="/{{ $project->photos->first()->full }}" alt=""></a>
                </div>
                <div class="gallery-text">
                    <a href="{{ route('project', $project->id) }}"><h3 class="">{{ $project->name }}</h3></a>                    
                </div>
            </div>
        @endforeach  
    </div>
</section>

@endsection

{{-- <div class="project">
  <div class="img-wrapper">
    <a href="#">
      <img src="/{{ $project->photos->first()->full }}" alt="">
    </a>
  </div>
  <div class="text-wrapper">
    <h3>{{ $project->name }}</h3>
  </div>
</div> --}}