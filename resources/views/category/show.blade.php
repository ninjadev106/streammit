@extends('layouts.admin', ['menu_name' => 'category', 'sub_menu_name' => 'category-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Category Detail</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <div class="row">
                    <div class="col-md-9">
                        <h3>{{ $category->name }}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?= nl2br($category->description) ?></p>
                    </div>
                </div>
                <div class="row">
                    <form id="delete-form" action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="col-lg-5 d-flex">
                        <a class="btn btn-success" href="{{ route('admin.category.edit', $category->id) }}">Update</a>
                        <a type="reset" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                        <a class="btn btn-danger" href="{{ route('admin.category.index') }}">Back</a>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
#delete-form a{
    margin-left: 10px;
}
</style>