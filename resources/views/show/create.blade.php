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
                    <h4 class="card-title">Add Show</h4>
                </div>
                </div>
                <div class="iq-card-body">
                <form id="create-form" action="{{ route('admin.show.store') }}" method="POST" onsubmit="return onSubmit(event)" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Title" id="title" name="title">
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-control" id="lang" name="lang">
                                    <option selected disabled="">Choose Language</option>
                                    @foreach ($langs as $lang)
                                        <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                                    @endforeach
                                    </select>                                 
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-control" id="category" name="category">
                                    <option selected disabled="">Show Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-control" id="quality" name="quality">
                                    <option selected disabled="">Choose quality</option>
                                    @foreach ($qualities as $quality)
                                        <option value="{{ $quality->id }}">{{ $quality->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form_gallery form-group">
                                    <label id="gallery2" for="file">Upload Image</label>
                                    <input data-name="#gallery2" id="file" name="file"
                                    class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                                </div>
                                <div class="col-md-6 form_gallery form-group">
                                    <label id="gallery3" for="banner">Upload Show Banner</label>
                                    <input data-name="#gallery3" id="banner" name="banner" class="form_gallery-upload"
                                    type="file" accept=".png, .jpg, .jpeg">
                                </div>
                                <div class="col-12 form-group">
                                    <textarea id="description" name="description" rows="5" class="form-control"
                                    placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-block position-relative">
                                <div class="form_video-upload">
                                    <input type="file" id="trailer" name="trailer" accept="video/mp4,video/x-m4v,video/*" multiple>
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
    function onSubmit(e) {
        let showTitle = $('#create-form #title').val();
        let showFile = $('#create-form #file')[0].files[0];
        let showCategory = $('#create-form #category').val();
        let showQuality = $('#create-form #quality').val();
        let showBanner = $('#create-form #banner')[0].files[0];
        let showDspt = $('#create-form #description').val();
        let showLang = $('#create-form #lang').val();

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