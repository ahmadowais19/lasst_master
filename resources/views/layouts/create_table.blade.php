@extends('index_dash')




@section('content6')
<div class="content-wrapper d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card w-100">
                <div class="card-body">
                    <h4 class="card-title text-center">Add new  Table</h4>
                    <form class="forms-sample" method="POST" action="{{ route('tables.store') }} "enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="name">table_number</label>
                            <input type="text" name="table_number" class="form-control" id="name" style= "border:1px solid #ccc" placeholder="  table_number" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="name">seating_capacity</label>
                            <input type="text" name="seating_capacity" class="form-control" id="name" style= "border:1px solid #ccc" placeholder=" seating_capacity" required>
                        </div>
                        {{-- <br> --}}
                        {{-- <div class="form-group  mt-3">
                            <label for="description">Course description</label>
                            <textarea name="description" class="form-control" id="description" rows="3"style= "border:1px solid #ccc" placeholder=" description"></textarea>
                        </div> --}}
                        {{-- <div class="form-group mt-3">
                            <label for="image">Image </label>
                            <input type="file" name="image" class="form-control" id="image_course"style= "border:1px solid #ccc" placeholder="image"> --}}
                            {{-- <input type="file" name="image_course" class="form-control-file custom-file-gray"  id="image_course"> --}}
                            {{-- <input type="file"name="image_course"class="form-control"id="image_course"style="background-color: #f2f2f2; border: 1px solid #ccc; color: #333;"placeholder="image"> --}}
                            {{-- <input type="file" name="image_course" id="image_course" class="form-control custom-file-input" style="border: 1px solid #ccc; padding: 5px;"> --}}
                        {{-- </div> --}}
                       
                       
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            {{-- <a href="{{ route('tables.edit') }}" class="btn btn-light">Edit</a> --}}
                            {{-- <a href="{{ route('course.store') }}" class="btn btn-secondary">Added</a> --}}
                            <a href="/dashboard" class="btn btn-secondary">Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection