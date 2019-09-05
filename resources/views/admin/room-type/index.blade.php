@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Room Type</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="dataTables_wrapper">
                        <div id="example_filter" class="dataTables_filter">
                            <label>Search:
                            <input type="search" class="" placeholder="" aria-controls="example"></label>
                        </div>
                        <div class="dt-buttons">
                            <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example" href="{{route('room-type-create')}}"><span>Tambah Room Type</span></a>
                            <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example" href="#"><span>Lihat Room Type</span></a>
                            {{-- <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example" href="#"><span>Excel</span></a> --}}
                        </div>
                    </div>
                    <p class="text-muted">List <code>Room Type</code> yang tersedia.</p>
                    <div class="table-wrap mt-40">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>ROOM TYPE ID</th>
                                    <th>NAMA ROOM TYPE</th>
                                    <th>BANQUET</th>
                                    <th>STATUS</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($room_types as $key => $room_type)
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $room_type->id }}</td>
                                            <td>{{ $room_type->nama_room_type}}</td>
                                            <td>{{ $room_type->banquet == 1 ? 'Ya' : 'Tidak' }}</td>
                                            <td>
                                                @if ($room_type->status == 1)
                                                    <span class="label label-success">Aktif</span>
                                                @else
                                                    <span class="label label-danger">Nonaktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="admin/room-type/show/{{$room_type->id}}"><span class="label label-info">View</span></a>
                                                <a href="admin/room-type/edit/{{$room_type->id}}">
                                                    <span class="label label-warning">Edit</span>
                                                </a>
                                                <a href="#"><span class="label label-danger">Delete</span></a>
                                                @if ($room_type->status == 1)
                                                    <a href="#"><span class="label label-success">Disabled</span></a>
                                                @else
                                                    <a href="#"><span class="label label-danger">Enabled</span></a>
                                                @endif
                                            </td>

                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
