@extends('layouts.admin', ['menu_name' => 'f-content', 'sub_menu_name' => $category ])

@section('content')
<?php
    $content = $shell->content;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Content Detail</h4>
                </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="movie-detail container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="trending-text big-title text-uppercase mt-0">{{ $content->title ? $content->title : $content->name }}</h1>
                                        <div class="d-flex align-items-center text-white text-detail mt-2">
                                            <span class="badge badge-secondary p-3">13+</span>
                                            <span class="ml-3">{{ $content->duration }}</span>
                                            <span class="ml-3 trending-year">{{ $content->releseDate }}</span>
                                        </div> 
                                        <div class="d-flex series mt-2 mb-4">
                                            <a href="javascript:void();"><img src="{{ asset('/'.$content->file) }}" class="img-fluid"
                                                alt=""></a>
                                            <p class="trending-dec w-100 mb-2 ml-3">{{ $content->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12">
                            <div class="action-group">
                                <form id="delete-form" action="{{ route('admin.f-content.destroy', [$category, $shell->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="col-lg-5 d-flex">
                                        <a type="reset" class="btn btn-primary ml-2" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                                        <a class="btn btn-danger ml-2" href="{{ url()->previous() }}">Back</a>
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