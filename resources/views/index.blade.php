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

    <div class="grid">
        <div class="grid-sizer"></div>
        @foreach ($projects as $project)

            {{-- <div class="grid-item {{ ($loop->index == 0 OR $loop->index == 1) ? 'grid-item--width2' : '' }}"> --}}
            <div class="grid-item {{ $project->size == 'large' ? 'grid-item--width2' : '' }}">
                <div class="masonry-box">
                    <div class="masonry-img">
                        {{-- <a href="{{ route('project', $project->id) }}"> --}}
                        {{-- <a href="#"> --}}
                            <img src="/{{ $project->photos->first()->full ?? 'images/empty.jpeg'  }}" alt="">
                        {{-- </a> --}}
                        
                    </div>
                    {{-- <div class="masonry-text">
                        <a href="{{ route('project', $project->id) }}">{{ $project->name }}</a>                            
                    </div> --}}

                    <div class="masonry-text2">
                        <a href="{{ route('project', $project->id) }}">{{ $project->name }}</a>                            
                    </div>

                    <div class="box-footer">
                        <a href="{{ route('project', $project->id) }}" class="btn btn-outline-secondary btn-sm btn-block my-1">Open project  </a>
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

        // Select grid container
        var grid = document.querySelector('.grid');
        // Select all cells
        var gridItems = document.querySelectorAll('.grid-item');

        // init Masonry
        var msnry = new Masonry( grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            // gutter: 10
        });

        // Reload gallery when change screen width, using imagesLoaded function from imagesloaded library
        imagesLoaded( grid ).on( 'progress', function() {
            // layout Masonry after each image loads
            msnry.layout();
        });

        // Each element, on click toggle class for wouble width
        gridItems.forEach(element => {
            element.addEventListener('click', function() {

                if(element.classList.contains('grid-item--width2')) 
                {
                    element.classList.remove('grid-item--width2');
                }
                else 
                {
                    element.classList.add('grid-item--width2');
                }

                // element.classList.toggle('grid-item--width2');
                // element.classList.toggle('grid-item');
                msnry.layout();
            });
        });

    </script>

    {{-- <script>
        var allBoxes = document.querySelectorAll('.grid-item');
        console.log(allBoxes);

        allBoxes.forEach(element => {
            element.addEventListener('click', function() {
                element.classList.add("grid-item--width2");
            })
        })

    </script> --}}
    
@endsection


    
