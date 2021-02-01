<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="scrolling-pagination">

                @foreach($projects as $project)
                        <a href="/blog/{{ $project->name }}">
                            <img src="/{{ $project->photos->first()->full ?? 'images/empty.jpeg'  }}" class="img-fluid" >
                        </a>

                        {{-- <div class="blog-detail">
                            <a href="/blog/{{ $project->slug }}">
                                <h6 class="">{{ $project->title }}</h6>
                            </a>
                        </div> --}}
                @endforeach
                {{ $projects->links() }}

            </div>
        </div>
    </div>

    
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>    


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.scrolling-pagination').jscroll({
                autoTrigger: true,
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.scrolling-pagination',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>




</body>
</html>