@extends('layouts.admin', ['menu_name' => 'category', 'sub_menu_name' => 'category-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Edit Category</h4>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                            <textarea id="text" rows="5" class="form-control"
                            placeholder="Description" name="description">{{ $category->description }}</textarea>
                            </div>
                            <div class="form-group radio-box">
                            <label>Status</label>
                            <div class="radio-btn">
                                <input type="hidden" id="status" value="{{ $category->status }}"/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="enable" name="status" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="customRadio6">enable</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="disable" name="status" class="custom-control-input" value="1">
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

@section('script')
<script>
    var status = $('#status').val();
    if (status == 0)
        $("input[type=radio]#enable").attr('checked', 'checked');
    else
        $("input[type=radio]#disable").attr('checked', 'checked');
</script>
@endsection