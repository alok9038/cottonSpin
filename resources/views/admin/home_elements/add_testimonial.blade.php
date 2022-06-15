@extends('layouts.adminBase')
@section('content')
    <div class="container">
        <div class="card border-0" style="border-radius: 25px">
            <div class="card-header bg-transparent pt-3">
                <h4 class="text-center">Add new Testimonial</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.add.testimonial') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name"><strong>Name</strong></label>
                        <input type="text" id="name" name="name" class="form-control shadow-none">
                        @error('name')
                            <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="position"><strong>Position</strong></label>
                        <input type="text" id="position" name="position" class="form-control shadow-none">
                        @error('position')
                            <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image"><strong>Image</strong></label>
                        <input type="file" id="image" name="image" class="form-control shadow-none">
                        @error('image')
                            <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content"><strong>Content</strong></label>
                        <textarea id="content" rows="5" name="content" class="form-control shadow-none"></textarea>
                        @error('content')
                            <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex">
                        <button type="submit" class="mx-auto px-4 btn btn-dark"><i class="bx bx-plus"></i>Add Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
