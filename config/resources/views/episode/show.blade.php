@extends('layouts.admin', ['menu_name' => 'episode', 'sub_menu_name' => 'episode-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Episode Detail</h4>
                </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="video-container iq-main-slider">
                                <video class="video d-block" style="width: 100%;" controls loop>
                                    <source src="{{ asset('/'.$episode->video_link) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <section class="episode-detail container-fluid mt-2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>{{ $episode->show }}</h5>
                                        <h1 class="trending-text big-title text-uppercase mt-0">{{ $episode->title }}</h1>
                                        <ul class="p-0 list-inline d-flex align-items-center episode-content">
                                            <li class="text-white">Season{{ $episode->season }}</li>
                                            <li class="text-white ml-2">No{{ $episode->episode }}</li>
                                            <li class="text-white ml-2">{{ $episode->name }}</li>
                                        </ul>
                                        <div class="d-flex series mt-2 mb-4">
                                            <a href="javascript:void();"><img src="{{ asset('/'.$episode->file) }}" class="img-fluid"
                                                alt=""></a>
                                            <p class="trending-dec w-100 mb-2 ml-3">{{ $episode->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12">
                            <div class="action-group">
                                <form id="delete-form" action="{{ route('admin.episode.destroy', $episode->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="col-lg-5 d-flex">
                                        <a class="btn btn-success" href="{{ route('admin.episode.edit', $episode->id) }}">Update</a>
                                        <a type="reset" class="btn btn-primary ml-2" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                                        <a class="btn btn-danger ml-2" href="{{ route('admin.episode.index') }}">Back</a>
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