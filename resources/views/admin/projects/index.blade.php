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
            <th>Description</th>
            <th>Created</th>
            <th></th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td> <span class="mobile-hide">ID: </span> {{ $project->id }}</td>
                <td> <span class="mobile-hide">Name: </span> {{ $project->name }}</td>
                <td> <span class="mobile-hide">Image: </span> <img height="65px" src="/{{ $project->photos->first()->thumb ?? 'images/empty.jpeg'   }}" alt=""> </td>
                <td> <span class="mobile-hide">Description: </span> {{ limitText($project->description) }}</td>
                <td> <span class="mobile-hide">Created: </span> {{ formatDate($project->created_at) }}</td>
                <td>
                    <form action="" >
                        <a href="/admin/projects/{{ $project->id }}/edit" class="btn btn-primary mb-1">Edit</a>
                        <button class="btn btn-danger mb-1">Delete</button>
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