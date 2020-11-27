@extends('layouts.admin', ['menu_name' => 'show', 'sub_menu_name' => 'show-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Show Detail</h4>
                </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex series mt-2 mb-4">
                                <div class="show-post">
                                    <h6>Post Image</h6>
                                    <a href="javascript:void();"><img src="{{ asset('/'.$show->file) }}" class="img-fluid"
                                        alt=""></a>
                                </div>  
                                <div class="show-banner ml-2">
                                    <h6>Banner Image</h6>
                                    <a href="javascript:void();"><img src="{{ asset('/'.$show->banner) }}" class="img-fluid"
                                        alt=""></a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <h1 class="trending-text big-title text-uppercase mt-0">{{ $show->title }}</h1>
                            <ul class="p-0 list-inline d-flex align-items-center show-content">
                                <li class="text-white">{{ $show->category }}</li>
                            </ul>
                            <div class="d-flex align-items-center text-white text-detail mt-2">
                                <span class="badge badge-secondary p-3">13+</span>
                                <span class="ml-3">{{ $show->seasons }} seasons</span>
                            </div>
                            <div class="d-flex series mt-2 mb-4">
                                <p class="trending-dec w-100 mb-2 ml-3">{{ $show->description }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="action-group">
                                <form id="delete-form" action="{{ route('admin.show.destroy', $show->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="col-lg-5 d-flex">
                                        <a class="btn btn-success" href="{{ route('admin.show.edit', $show->id) }}">Update</a>
                                        <a type="reset" class="btn btn-primary ml-2" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                                        <a class="btn btn-danger ml-2" href="{{ route('admin.show.index') }}">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection