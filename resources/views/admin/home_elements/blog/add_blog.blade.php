@extends('layouts.adminBase')
@section('content')
<link rel="stylesheet" href="{{ asset('editor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ asset('editor/rte.js') }}"></script>
<script type="text/javascript" src="{{ asset('editor/plugins/all_plugins.js') }}"></script>

<link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@section('content')
<div class="container p-lg-2 p-0">
    <div class="card border-0  rounded-10 card-shadow" style="border-radius: 15px;">
                <div class="card-header border-0 pt-3 bg-transparent d-flex">
                    <h4 class="card-title">Add Post </h4>
                    {{-- <span class="ms-auto"><a href="#addcategory" data-bs-toggle="modal" class="btn btn-info btn-sm"><i class="bx bx-plus-circle"></i>Add new Subcategory</a></span> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.store.post') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input name="content" class="form-control" id="inp_htmlcode" type="hidden" />
                        <div class="mb-3">
                            <label for="title" class="fw-bold">Title <span class="text-danger"><sup>*</sup></span></label>
                            <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control shadow-none rounded-0 text-muted mt-2 p-0 pt-3 pb-1 border-2 border-top-0 border-start-0 border-end-0 border-bottom @error('title') is-invalid @enderror">
                            @error('title')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="summary" class="fw-bold">Summary <span class="text-danger"><sup>*</sup></span></label>
                            <textarea rows="4" name="summary" id="summary" class="form-control shadow-none text-muted mt-2 p-0 pt-3 pb-1" style="border-radius: 10px">{{ old('summary') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label><strong>Post Content <span class="text-danger"><sup>*</sup></span></strong></label>
                            @error('content')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                            <div id="div_editor1" class="richtexteditor p-0 w-100 mt-2 @error('content')  id-invalid @enderror" style="min-height:100vh;">
                                {{ old('content') }}
                            </div>

                        </div>
                        <div class="mb-3">
                            @error('cover_image')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                            <label><strong>Cover image <span class="text-danger"><sup>*</sup></span></strong></label>
                            <input id="image-uploadify" class="form-control" name="cover_image" type="file" accept="image/*">
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <label for="category"><strong>Category <span class="text-danger"><sup>*</sup></span></strong></label>
                                <select name="category" class="form-select shadow-none @error('category') is-invalid @enderror" id="category">
                                    <option value="" selected hidden disabled>select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <div class="form-check form-switch">
                                <label class="form-check-label mt-2 ms-2" for="flexSwitchCheckChecked"><strong>Featured</strong></label>
                                <input class="form-check-input" name="featured" type="checkbox" style="height: 30px;width:60px;" id="flexSwitchCheckChecked" value="1">
                            </div>
                        </div> --}}
                        <div class="mb-3">
                            <button class="btn btn-secondary d-flex ms-auto" type="submit"> Publish</button>
                        </div>
                    </form>
                </div>
            </div>

    <script>
        var editor1 = new RichTextEditor(document.getElementById("div_editor1"), { skin: "rounded-corner"});
        editor1.attachEvent("change", function () {
            document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
        });

    </script>

</div>
@endsection
