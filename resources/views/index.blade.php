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
    
                    <div class="box-footer d-flex justify-content-center">
                        <a href="{{ route('project', $project->id) }}" class="my-1 arrow-wrapper">
                            <svg class='arrow-svg' xmlns="http://www.w3.org/2000/svg" version="1.0" width="13.000000pt" height="20.000000pt" viewBox="0 0 79.000000 100.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M356 954 c-37 -37 -1 -103 49 -90 14 4 31 17 37 31 23 52 -46 100 -86 59z"/>
                                <path d="M196 784 c-22 -21 -20 -57 4 -79 46 -41 116 29 75 75 -22 24 -58 26 -79 4z"/>
                                <path d="M358 789 c-24 -14 -23 -62 2 -84 46 -41 116 29 75 75 -20 22 -50 25 -77 9z"/>
                                <path d="M516 778 c-21 -30 -20 -44 4 -68 24 -24 53 -26 74 -4 19 18 21 65 4 82 -20 20 -65 14 -82 -10z"/>
                                <path d="M25 606 c-35 -53 34 -115 79 -70 19 18 21 65 4 82 -21 21 -66 14 -83 -12z"/>
                                <path d="M192 618 c-17 -17 -15 -64 4 -82 45 -45 114 17 79 70 -17 26 -62 33 -83 12z"/>
                                <path d="M352 618 c-19 -19 -14 -63 8 -83 46 -41 116 29 75 75 -20 22 -64 27 -83 8z"/>
                                <path d="M516 614 c-25 -24 -20 -61 10 -81 24 -15 29 -15 53 -2 49 28 32 99 -24 99 -13 0 -31 -7 -39 -16z"/>
                                <path d="M675 610 c-23 -25 -13 -67 20 -82 52 -23 100 46 59 86 -21 22 -57 20 -79 -4z"/>
                                <path d="M352 448 c-21 -21 -14 -66 13 -84 52 -34 111 31 70 76 -20 22 -65 26 -83 8z"/>
                                <path d="M352 278 c-21 -21 -14 -66 13 -84 52 -34 111 31 70 76 -20 22 -65 26 -83 8z"/>
                                <path d="M352 108 c-21 -21 -14 -66 13 -84 52 -34 111 31 70 76 -20 22 -65 26 -83 8z"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    
                </div>
            </div>
        @endforeach
    
    </div>
    {{ $projects->links() }}

    <button id="loadMore">Load More</button>

@endsection

@section('js-cdn')
    {{-- masonry CDN --}}
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>    

    {{-- imagesloaded CDN --}}
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>   

@endsection

@section('extra-js')
    
@endsection


    
