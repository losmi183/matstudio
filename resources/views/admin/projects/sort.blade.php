@extends('admin.layout')

@section('content')

<div id="projects-sort">
    <div class="container-fluid">

        <div class="d-flex align-items-center" >
            <h1 class='admin-title p-3'>Sort Projects</h1>       
            
            <form action="/admin/projects/sortUpdate" method="post">
                @csrf
                <input id="order" type="text" name="order" value="ovo je redosled">
                <button class="btn btn-primary">Apply Order</button>
            </form>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-6 offset-3">
    
                <ul class="sort-list"  id="sortable">
                    @foreach ($projects as $project)
                        <li class="sort-item" data-order="{{ $project->order }}" data-index="{{ $project->id }}">
                            <div class="row">
                                <div class="col-4">
                                    <img height="{{ $project->size == 'large' ? '100' : '50' }}px" 
                                    src="/{{ $project->photos->first()->thumb ?? 'images/empty.jpeg'   }}" alt="">
                                </div>
                                <div class="col-4">{{ $project->name }}</div>
                                <div class="col-4">{{ $project->order }}</div>
                            </div>        
                        </li>        
                    @endforeach
                    </ul>    
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $projects->links() }}
        </div>
    
        <div class="space-80"></div>
    </div>
</div>
    
@endsection

@section('extra-js')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

        $('#sortable').mousedown(function() {
            $(this).height($(this).height());
        }).sortable({
            axis: 'y',    
            start: function(event, ui) {
                $(this).height('auto');
            },
            update: function( event, ui ) {
                $(this).children().each(function(index) {
                    // if( $(this).attr('data-position') != (index + 1) ) {
                        $(this).attr('data-order', (index + 1)).addClass('updated');
                    // }
                });
                saveNewPositions();
            }
        });

        function saveNewPositions() {
            var positions = [];
            $('.updated').each(function() {
                positions.push([ $(this).attr('data-index'), $(this).attr('data-order') ]);
                $(this).removeClass('updated');
            })

            var data = JSON.stringify(positions);

            console.log(data);

            $('#order').val(data);

        }

    </script>

@endsection