@extends('layouts.main')
@section('content')
<div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Add New Room Type</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li><a href="#"><span>form</span></a></li>
        <li class="active"><span>form-element</span></li>
        </ol>
    </div>
    <!-- /Breadcrumb -->
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Basic Form</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="form-wrap">
                        <form action="{{ route('room-type-store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Nama Room Type</label>
                                <input type="text" class="form-control" name="namaRoomType" placeholder="ex. Single Room">
                            </div>

                            <div class="form-group mb-30">
                                <label class="control-label mb-10 text-left">Banquet</label>
                                <div class="radio radio-info">
                                    <input type="radio" name="banquet" id="radio1" value="ya" checked="">
                                    <label for="radio1">
                                        Yes
                                    </label>
                                </div>
                                <div class="radio radio-info">
                                    <input type="radio" name="banquet" id="radio2" value="tidak" checked="">
                                    <label for="radio2">
                                        Tidak
                                    </label>
                                </div>
                                <span class="help-block mt-10 mb-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>

                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Simpan</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
