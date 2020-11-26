@extends('layouts.admin', ['menu_name' => 'category', 'sub_menu_name' => 'add-category'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Add Category</h4>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                            <textarea id="text" rows="5" class="form-control"
                            placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="form-group radio-box">
                            <label>Status</label>
                            <div class="radio-btn">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" name="status" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="customRadio6">enable</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio7" name="status" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="customRadio7">disable </label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a type="reset" class="btn btn-danger" href="{{ route('admin.category.index') }}">cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection