@extends('layouts.adminBase')
@section('content')
    <div class="container">
        <div class="card border-0" style="border-radius: 25px">
            <div class="card-header bg-transparent pt-3 d-flex">
                <h4 class="text-center">Slider Manager</h4>
                <a href="{{ route('admin.view.add.testimonial') }}" style="height: 30px; width:30px" class="btn ms-auto btn-dark text-white justify-content-center align-items-center d-flex"><i class="bx bx-plus ms-1 text-white"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>#sr</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($testimonials as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>
                                <a href="#slider_{{ $t->id }}" data-bs-toggle="modal" data-bs-target="#slider_{{ $t->id }}">
                                    <div class="p-1 rounded shadow-sm" style="height: 50px; width:100px">
                                        <img src="{{ asset('testimonial/'.$t->image) }}" alt="{{ $t->image }}" class="img-fluid rounded" style="height: 50px; width:100px">
                                    </div>
                                </a>
                            </td>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->position }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.testimonial.change.status') }}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $t->id }}">
                                    @if ($t->status == true)
                                        <button class="btn btn-sm bg-light-success text-success">Active</button>
                                    @else
                                        <button class="btn btn-sm bg-light-danger text-danger">Deactive</button>
                                    @endif
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-sm bg-light-danger text-danger" data-bs-toggle="modal" data-bs-target="#delete_{{ $t->id }}"><i class="bx bx-trash ms-1"></i></button>
                            </td>
                        </tr>

                        <div class="modal fade" id="delete_{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                    <h3 style="font-size: 33px" class="text-center text-danger fs-1 h1"><i class='bx bx-alarm-exclamation text-center' ></i></h3>
                                    <h1 class="text-center h3">Are You Sure!</h1>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <form action="{{ route('admin.delete.testimonial') }}" method="post">
                                        @csrf
                                        <input type="text" hidden value="{{ $t->id }}" name="id">
                                        <button class="btn btn-sm bg-light-danger text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Yes</button>
                                    </form>
                                  <button type="button" class="btn bg-light-info text-info btn-sm" data-bs-dismiss="modal">No</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="slider_{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ asset('testimonial/'.$t->image) }}" alt="{{ $t->image }}" class="img-fluid rounded">
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
