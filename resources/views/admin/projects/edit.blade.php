@extends('admin.layout')

@section('content')

<div id="projects-create">

    <h1 class='admin-title p-3'>Edit Project</h1>       

    <div class="row">
        <div class="col-xl-6 col-lg-8 col-md-12 offset-xl-3 offset-lg-2">
            <div class="card mb-5   ">
                <div class="card-header">
                    Project Data Edit
                </div>
                <div class="card-body">
                    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Project name</label>
                            <input name="name" type="text" class="form-control" value="{{ old('name') ?? $project->name }} ">
                        </div>
                        
                        <div class="form-group">
                            <label>Project description</label>
                            <textarea name="description" class="form-control" cols="30" rows="4">{{old('description') ?? $project->description }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-5">
                            <button class="btn btn-danger">Back</button>
                            <button class="btn btn-success">Save</button>
                        </div>

                    </form>
                </div>           {{-- card card-body --}}
            </div>
            {{-- card1  --}}

            <div class="card">
                <div class="card-header">
                    Project Photos Edit
                </div>
                <div class="card-body"> 

                    <form action="/admin/projects/{{$project->id}}/addPhoto" method="POST"  enctype="multipart/form-data">
                        @csrf                        
                        <div class="form-group">
                            <label class="d-block">Add Photo</label>
                            <input type="file" name="image">
                        </div>
                        <button class="btn btn-success">Add</button>
                    </form>
                    <hr>
                    
                    <div class="photos-wrapper">                        
                        @foreach ($project->photos as $photo)

                            <div class="photo-wrapper">
                                <div class="img-wrapper">
                                    <img width="100px" src="/{{ $photo->thumb }}" alt="" class="img-fluid">
                                </div>
        
                                <form action="/admin/projects/{{$photo->id}}/removePhoto" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-danger btn-sm">delete</button>
                                    </div>
                                </form>

                            </div>                            
                            
                        @endforeach
                    </div>


                </div>
            </div>

        </div>        {{-- col  --}}
    </div>    {{-- row  --}}

</div>

@endsection