@extends('layouts.admin', ['menu_name' => 'episode', 'sub_menu_name' => 'add-episode'])

@section('content')
<?php
    $shows = $references['shows'];
    $seasons = $references['seasons'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Add Episode</h4>
                </div>
                </div>
                <div class="iq-card-body">
                <form action="{{ route('admin.episode.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                            <div class="col-md-6 form-group">
                                <select class="form-control" id="show" name="show">
                                    <option disabled="">Select Show</option>
                                    @foreach ($shows as $show)
                                    <option value="{{ $show->id }}">{{ $show->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <select class="form-control" id="season" name="season">
                                    <option disabled="">Select Seasons</option>
                                    @foreach ($seasons as $season)
                                    <option value="{{ $season['id'] }}">{{ $season['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Episode No." name="episode">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Episode Name" name="name">
                            </div>
                            <div class="col-md-12 form_gallery form-group">
                                <label id="gallery4" for="show3">Upload Image</label>
                                <input data-name="#gallery4" id="show3" name="file"
                                    class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Running Time in Minutes" name="duration">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control date-input basicFlatpickr" type="text"
                                    placeholder="Selete Date" name="date">
                            </div>
                            <div class="col-12 form-group">
                                <textarea id="text" name="description" rows="5" class="form-control"
                                    placeholder="Description"></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-block position-relative">
                            <div class="form_video-upload">
                                <input type="file" accept="video/mp4,video/x-m4v,video/*" multiple name="video">
                                <p>Upload video</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="reset" class="btn btn-danger" href="{{ route('admin.episode.index') }}">cancel</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
.form_video-upload {
    height: 385px;
    margin-bottom: 20px;
}
</style>