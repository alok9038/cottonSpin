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
                            <td>
                                <a href="#slider_{{ $slider->id }}" data-bs-toggle="modal" data-bs-target="#slider_{{ $slider->id }}">
                                    <div class="p-1 rounded shadow-sm" style="height: 50px; width:100px">
                                        <img src="{{ asset('slider/'.$slider->image) }}" alt="{{ $slider->image }}" class="img-fluid rounded" style="height: 50px; width:100px">
                                    </div>
                                </a>
                            </td>
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
                                <div class="modal-body">
                                    <h3 style="font-size: 33px" class="text-center text-danger fs-1 h1"><i class='bx bx-alarm-exclamation text-center' ></i></h3>
                                    <h1 class="text-center h3">Are You Sure!</h1>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <form action="{{ route('admin.delete.slider') }}" method="post">
                                        @csrf
                                        <input type="text" hidden value="{{ $slider->id }}" name="id">
                                        <button class="btn btn-sm bg-light-danger text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Yes</button>
                                    </form>
                                  <button type="button" class="btn bg-light-info text-info btn-sm" data-bs-dismiss="modal">No</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="slider_{{ $slider->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ asset('slider/'.$slider->image) }}" alt="{{ $slider->image }}" class="img-fluid rounded">
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
