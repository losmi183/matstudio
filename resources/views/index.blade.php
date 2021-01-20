@extends('layouts.app')

@section('content')




<div class="space-100"></div>
<!--     
<section id="showcase">
  <div class="space-80"></div>
  <div class="container-fluid text-center">
    <h1>mat. Studio</h1>
    <h3>Architect × CG artist</h3>
    <p>MAT architecture visualization studio</p>
    <a href="mailto:visualization.studio.mat@gmail.com">Contact: visualization.studio.mat@gmail.com</a>
  </div>
  <div class="space-80"></div>
</section>
<div class="space-80"></div> -->

<section id="gallery">
  
  <div class="container-fluid">
    <div class="row">
      
      @foreach ($projects as $project)
      <div class="col-xl-3 col-lg-4 col-md-6 col-12">
        <div class="project2">
            <div class="project">
              <a href="{{ route('project', $project->id) }}">
                <div class="img-wrapper">
                  <img src="{{ $project->photos->first()->thumb }}" alt="">
                </div>
              </a>
  
              <a href="#">
                <div class="text-wrapper">
                  <h3 class="text-center mt-2">{{ $project->name }}</h3>
                </div>
              </a>
            </div>
          </div> {{-- col  --}}          
        </div>  {{-- project2  --}}

      @endforeach

    </div>    {{-- Row --}}
  </div>  {{-- container-fluid --}}
</section>

{{-- <section id="projects">

    @foreach ($projects as $project)

      <div class="project">
        <div class="img-wrapper">
          <a href="#">
            <img src="/images/projects/{{ $project->images->first()->full }}" alt="">
          </a>
        </div>
        <div class="text-wrapper">
          <h3>{{ $project->name }}</h3>
        </div>
      </div>

    @endforeach  

</section> --}}


    
@endsection