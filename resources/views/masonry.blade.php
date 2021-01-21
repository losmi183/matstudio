@extends('layouts.basic')

@section('extra-css')
    {{-- <style>
        * { box-sizing: border-box; }

        /* force scrollbar */
        html { overflow-y: scroll; }


        /* ---- grid ---- */

        .grid {
        background: #DDD;
        }

        /* clear fix */
        .grid:after {
        content: '';
        display: block;
        clear: both;
        }

        /* ---- .grid-item ---- */

        .grid-sizer,
        .grid-item {
        width: 25%;
        }

        .grid-item {
        float: left;
        }

        .grid-item img {
        display: block;
        max-width: 100%;
        }
        @media (max-width: 1199.98px) { 
            .grid-sizer, .grid-item {
                width: 33.333%;
            }
        }

        @media (max-width: 767.98px) { 
            .grid-sizer, .grid-item {
                width: 50%;
            }
        }
        @media (max-width: 575.98px) { 
            .grid-sizer, .grid-item {
                width: 100%;
            }
        }
    </style> --}}    
@endsection

@section('content')  

    <div class="space-150"></div>

    <h1 class="title-gray">Projects Gallery</h1>
    <div class="space-50"></div>


    <div class="grid">
        <div class="grid-sizer"></div>
        @foreach ($projects as $project)
            <div class="grid-item">
                <div class="masonry-box">
                    <div class="masonry-img">
                        <a href="{{ route('project', $project->id) }}">
                            <img src="/{{ $project->photos->first()->full ?? 'images/empty.jpeg'  }}" alt="">
                        </a>
                    </div>
                    <div class="masonry-text">
                        <a href="{{ route('project', $project->id) }}">{{ $project->name }}</a>                            
                    </div>
                </div>
            </div>        
        @endforeach
    </div>


@endsection

@section('extra-js')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>

    <script>

        // init Masonry
        var grid = document.querySelector('.grid');

        var msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        // gutter: 10
        });

        imagesLoaded( grid ).on( 'progress', function() {
        // layout Masonry after each image loads
        msnry.layout();
        });

    </script>
    
@endsection


    
