@extends('admin.layout')

@section('content')

<div id="projects-index">

    <h1 class='admin-title p-3'>
        Projects
        <a  href="/admin/projects/create" class="btn btn-primary ml-3">Add Project</a>
    </h1>
       
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            {{-- <th>Position</th> --}}
            <th>Change Position</th>
            <th>Up / Down Position</th>
            <th>Initial size</th>
            {{-- <th>Description</th> --}}
            <th>Created</th>
            <th></th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td> <span class="mobile-hide">ID: </span> {{ $project->id }}</td>
                <td> <span class="mobile-hide">Name: </span> {{ $project->name }}</td>
                <td> <span class="mobile-hide">Image: </span> <img height="{{ $project->size == 'large' ? '100' : '50' }}px" src="/{{ $project->photos->first()->thumb ?? 'images/empty.jpeg'   }}" alt=""> </td>
                {{-- <td> {{ orderNumber($project->id, $count) }} </td> --}}
                <td>
                    {{-- Changing with select  --}}
                    <form action="/changePosition" method="POST">
                        @csrf
                        <input type="hidden" name="current_order" value="{{ $project->order }}">
                        <select name="new_order" onchange="this.form.submit()">
                            @foreach ($orders as $key => $value)
                                <option {{ $project->order == $value ? 'selected' : '' }} value="{{ $value }}">{{ orderNumber($value, $count) }}</option>
                            @endforeach
                        </select>
                        {{-- <button class="mr-2">Change</button> --}}
                    </form>                    
                </td>
                <td class="d-flex">
                    {{-- Increment Up one  --}}
                    <form action="/changePosition" method="POST">
                        @csrf
                        <input type="hidden" name="current_order" value="{{ $project->order }}">
                        <input type="hidden" name="new_order" value="{{ $project->order - 1 }}">
                        <button {{ $loop->last ? 'disabled' : '' }} class="mr-1"><i class="fas fa-chevron-down"></i></button>
                    </form>
                    {{-- Increment Down one  --}}
                    <form action="/changePosition" method="POST">
                        @csrf
                        <input type="hidden" name="current_order" value="{{ $project->order }}">
                        <input type="hidden" name="new_order" value="{{ $project->order + 1 }}">
                        <button {{ $loop->first ? 'disabled' : '' }} class="mr-1"><i class="fas fa-chevron-up"></i></button>
                    </form>
                </td>
                <td>
                    <form action="/changeSize" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $project->id }}">
                        <select name="size" onchange="this.form.submit()">
                            <option {{ $project->size == 'normal' ? 'selected' : '' }} value="normal">Normal</option>
                            <option {{ $project->size == 'large' ? 'selected' : '' }} value="large">Large</option>
                        </select>
                        {{-- <button>Ok</button> --}}
                    </form>
                </td>
                {{-- <td> <span class="mobile-hide">Description: </span> {{ limitText($project->description) }}</td> --}}
                <td> <span class="mobile-hide">Created: </span> {{ formatDate($project->created_at) }}</td>
                <td>
                    <form action="" >
                        <a href="/admin/projects/{{ $project->id }}/edit" class="btn btn-primary mb-1">Edit</a>
                        {{-- <button class="btn btn-danger mb-1">Delete</button> --}}
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-center">
        {{ $projects->links() }}
    </div>

    <div class="space-80"></div>

</div>



    
@endsection