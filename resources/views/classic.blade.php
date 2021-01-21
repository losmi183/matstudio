@extends('layouts.app')

@section('content')

<div class="space-100"></div>

<section id="classic">
    <div class="classic-gallery">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-5">
                    <div class="classic-box">
                        <div class="classic-image">
                            <a href="{{ route('project', $project->id) }}">
                                <img src="/{{ $project->photos->first()->full ?? 'images/empty.jpeg' }}" alt="">
                            </a>
                        </div>
                        <div class="classic-text">
                            <a href="{{ route('project', $project->id) }}"><h3 class="">{{ $project->name }}</h3></a>                    
                        </div>
                    </div>
                </div>
            @endforeach  
        </div>
    </div>
</section>

@endsection

