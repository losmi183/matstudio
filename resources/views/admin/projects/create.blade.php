@extends('admin.layout')

@section('content')

<div id="projects-create">

    <h1 class='admin-title p-3'>Project Create</h1>       

    <div class="row">
        <div class="col-xl-6 col-lg-8 col-md-12 offset-xl-3 offset-lg-2">
            <div class="card mb-5">
                {{-- <div class="card-header">
                    Project Create
                </div> --}}
                <div class="card-body">
                    <form action="/admin/projects" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Project name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Project description</label>
                            <textarea name="description" class="form-control" cols="30" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="d-block">Photo</label>
                            <input type="file" name="images[]">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Photo</label>
                            <input type="file" name="images[]">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Photo</label>
                            <input type="file" name="images[]">
                        </div>

                        <span class="add-second">Add more Images</span>

                        <div class="second-group">
                            <div class="form-group">
                                <label class="d-block">Photo</label>
                                <input type="file" name="images[]">
                            </div>    
                            <div class="form-group">
                                <label class="d-block">Photo</label>
                                <input type="file" name="images[]">
                            </div>    
                            <div class="form-group">
                                <label class="d-block">Photo</label>
                                <input type="file" name="images[]">
                            </div>        
                            
                            <span class="add-third">Add more Images</span>
                        </div>

                        <div class="third-group">
                            <div class="form-group">
                                <label class="d-block">Photo</label>
                                <input type="file" name="images[]">
                            </div>    
                            <div class="form-group">
                                <label class="d-block">Photo</label>
                                <input type="file" name="images[]">
                            </div>    
                            <div class="form-group">
                                <label class="d-block">Photo</label>
                                <input type="file" name="images[]">
                            </div>                            
                        </div>
                    

                        <div class="d-flex justify-content-between mt-5">
                            <button class="btn btn-danger">Back</button>
                            <button class="btn btn-success">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection