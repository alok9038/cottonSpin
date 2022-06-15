@extends('layouts.adminBase')
@section('content')
    <div class="container">
        <div class="card border-0" style="border-radius: 25px">
            <div class="card-header bg-transparent pt-3">
                <h4 class="text-center">Add new Slider</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.add.slider') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title"><strong>Title</strong></label>
                        <input type="text" id="title" name="title" class="form-control shadow-none">
                        @error('title')
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
                    <div class="mb-3 d-flex">
                        <button type="submit" class="mx-auto px-4 btn btn-dark"><i class="bx bx-plus"></i>Add slider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
