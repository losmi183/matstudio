@extends('admin.layout')

@section('content')

<div id="projects-sort">

    <div class="row">
        <div class="col-6 offset-3">
            <h1 class='admin-title'>Sort projects</h1>
            <hr>

            {{-- <ul id="sortable">
                @foreach ($projects as $project)
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
                @endforeach
            </ul> --}}
            
            <div class="sort-list"  id="sortable">
                @foreach ($projects as $project)
                    <div class="sort-item">
                        <div class="row">
                            <div class="col-4">
                                <img height="{{ $project->size == 'large' ? '100' : '50' }}px" 
                                src="/{{ $project->photos->first()->thumb ?? 'images/empty.jpeg'   }}" alt="">
                            </div>
                            <div class="col-4">{{ $project->name }}</div>
                            <div class="col-4">{{ $project->order }}</div>
                        </div>        
                    </div>        
                @endforeach
            </div>    

        </div>
    </div>




    <div class="d-flex justify-content-center">
        {{ $projects->links() }}
    </div>

    <div class="space-80"></div>

</div>
    
@endsection

@section('extra-js')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        // $( function() {
        //     $( "#sortable" ).sortable();
        //     $( "#sortable" ).disableSelection();
        // } );


        $('#sortable').mousedown(function() {
            $(this).height($(this).height());
        }).sortable({
            axis: 'y',    
            start: function(event, ui) {
                $(this).height('auto');
            }
        });


    </script>

@endsection