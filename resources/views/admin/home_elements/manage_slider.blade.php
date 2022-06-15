@extends('layouts.adminBase')
@section('content')
    <div class="container">
        <div class="card border-0" style="border-radius: 25px">
            <div class="card-header bg-transparent pt-3 d-flex">
                <h4 class="text-center">Slider Manager</h4>
                <a href="{{ route('admin.add.slider') }}" style="height: 30px; width:30px" class="btn ms-auto btn-dark text-white justify-content-center align-items-center d-flex"><i class="bx bx-plus ms-1 text-white"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>#sr</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->image }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.slider.change.status') }}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $slider->id }}">
                                    @if ($slider->status == true)
                                        <button class="btn btn-sm bg-light-success text-success">Active</button>
                                    @else
                                        <button class="btn btn-sm bg-light-danger text-danger">Deactive</button>
                                    @endif
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-sm bg-light-danger text-danger" data-bs-toggle="modal" data-bs-target="#delete_{{ $slider->id }}"><i class="bx bx-trash ms-1"></i></button>
                            </td>
                        </tr>

                        <div class="modal fade" id="delete_{{ $slider->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.delete.slider') }}" method="post">
                                        @csrf
                                        <input type="text" hidden value="{{ $slider->id }}" name="id">
                                        <button class="btn btn-sm bg-light-danger text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-trash ms-1"></i></button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
