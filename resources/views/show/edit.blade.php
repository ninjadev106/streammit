@extends('layouts.admin', ['menu_name' => 'show', 'sub_menu_name' => 'add-show'])

@section('content')
<?php
    $categories = $references['categories'];
    $langs = $references['langs'];
    $qualities = $references['qualities'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Edit Show</h4>
                </div>
                </div>
                <div class="iq-card-body">
                    <form id="edit-form" action="{{ route('admin.show.update', $show->id) }}" method="POST" onsubmit="return onSubmit(event)" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="{{ $show->title }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" id="lang" name="lang" data-opt-value="{{ $show->lang }}">
                                        <option selected disabled="">Choose Language</option>
                                        @foreach ($langs as $lang)
                                            <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                                        @endforeach
                                        </select>                                   
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" id="category" name="category" data-opt-value="{{ $show->category }}">
                                        <option selected disabled="">Show Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" id="quality" name="quality" data-opt-value="{{ $show->quality }}">
                                        <option selected disabled="">Choose quality</option>
                                        @foreach ($qualities as $quality)
                                            <option value="{{ $quality->id }}">{{ $quality->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form_gallery form-group">
                                        <label id="gallery2" for="file">Upload Image</label>
                                        <input data-name="#gallery2" id="file" name="file"
                                        class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg" value="{{ $show->file }}">
                                    </div>
                                    <div class="col-md-6 form_gallery form-group">
                                        <label id="gallery3" for="banner">Upload Show Banner</label>
                                        <input data-name="#gallery3" id="banner" name="banner" class="form_gallery-upload"
                                        type="file" accept=".png, .jpg, .jpeg" value="{{ $show->banner }}">
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea id="description" name="description" rows="5" class="form-control"
                                        placeholder="Description">{{ $show->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="d-block position-relative">
                                    <div class="form_video-upload">
                                        <input type="file" accept="video/mp4,video/x-m4v,video/*" multiple id="trailer" name="trailer" value="{{ $show->trailer_link }}">
                                        <p>Trailer video</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="reset" class="btn btn-danger" href="{{ route('admin.show.index') }}">cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var cur_category = $('select#category').attr('data-opt-value');
    var cur_lang = $('select#lang').attr('data-opt-value');
    var cur_quality = $('select#quality').attr('data-opt-value');
    $('select#category').val(cur_category);
    $('select#lang').val(cur_lang);
    $('select#quality').val(cur_quality);

    function onSubmit(e) {
        let showTitle = $('#edit-form #title').val();
        let showFile = $('#edit-form #file').attr('value');
        let showCategory = $('#edit-form #category').val();
        let showQuality = $('#edit-form #quality').val();
        let showBanner = $('#edit-form #banner').attr('value');
        let showDspt = $('#edit-form #description').val();
        let showLang = $('#edit-form #lang').val();

        if (!showTitle) {
            alert("Please enter show title");
            return false;
        }
        if (!showFile) {
            alert("Please select show image");
            return false;
        }
        if (!showBanner) {
            alert("Please select show banner image");
            return false;
        }
        if (!showDspt) {
            alert("Please enter show description");
            return false;
        }
        if (!showCategory) {
            alert("Please select show category");
            return false;
        }
        if (!showQuality) {
            alert("Please select show quality");
            return false;
        }
        if (!showLang) {
            alert("Please select show language");
            return false;
        }
    }
</script>
@endsection