@extends('layouts.admin', ['menu_name' => 'movie', 'sub_menu_name' => 'add-movie'])

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
                    <h4 class="card-title">Add Movie</h4>
                </div>
                </div>
                <div class="iq-card-body">
                <form id="create-form" action="{{ route('admin.movie.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Title" id="title" name="title">
                                </div>
                                <div class="col-12 form_gallery form-group">
                                    <label id="gallery2" for="file">Upload Image</label>
                                    <input data-name="#gallery2" id="file" class="form_gallery-upload"
                                        type="file" name="file" accept=".png, .jpg, .jpeg">
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-control" id="category" name="category">
                                        <option disabled="">Movie Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="quality" name="quality">
                                        <option disabled="">Choose quality</option>
                                        @foreach ($qualities as $quality)
                                            <option value="{{ $quality->id }}">{{ $quality->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea id="description" rows="5" class="form-control"
                                        placeholder="Description" name="description"></textarea>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="text" class="form-control" placeholder="Release year" id="releseDate" name="releseDate">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="lang" name="lang">
                                    <option selected disabled="">Choose Language</option>
                                    @foreach ($langs as $lang)
                                        <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input type="text" class="form-control" pla ceholder="Movie Duration" id="duration" name="duration">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-block position-relative">
                                <div class="form_video-upload_alpha">
                                    <input type="file" id="video" name="video" accept="video/mp4,video/x-m4v,video/*" multiple>
                                    <p>Upload video</p>
                                </div>
                                <div class="form_video-upload_alpha">
                                    <input type="file" id="trailer" name="trailer" accept="video/mp4,video/x-m4v,video/*" multiple>
                                    <p>Trailer video</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a type="reset" class="btn btn-danger" href="{{ route('admin.movie.index') }}">cancel</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="progress-line" style="display: none">
        <div class="bar"></div >
        <div class="percent">0%</div >
    </div>
    <div class="overlay" style="display: none"></div>
</div>
@endsection
<style>
.progress-line { position:relative; width:100%; border: 1px solid white; padding: 1px; border-radius: 3px;  z-index: 11}
.bar { background-color: #017afe; width:0%; height:25px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:3px; left:48%; color: white;}
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 10;
}
</style>
@section('script')
<script>
    $(document).ready(function () {
        function validate(formData, jqForms, options) {
            let movieTitle = $('#create-form #title').val();
            let movieFile = $('#create-form #file')[0].files[0];
            let movieCategory = $('#create-form #category').val();
            let movieQuality = $('#create-form #quality').val();
            let movieVideo = $('#create-form #video')[0].files[0];
            let movieDspt = $('#create-form #description').val();
            let movieRlsDate = $('#create-form #releseDate').val();
            let movieLang = $('#create-form #lang').val();
            let movieduration = $('#create-form #duration').val();

            let durationTester = /^(10|11|12|[1-9])h [0-5][0-9]m$/
            let releseDateTester = /^\d{4}$/
            if (!movieTitle) {
                alert("Please enter movie title");
                return false
            }
            if (!movieFile) {
                alert("Please select movie image");
                return false
            }
            if (!movieVideo) {
                alert("Please select movie video");
                return false
            }
            if (!movieDspt) {
                alert("Please enter movie description");
                return false
            }
            if (!movieCategory) {
                alert("Please select movie category");
                return false
            }
            if (!movieQuality) {
                alert("Please select movie quality");
                return false
            }
            if (!movieLang) {
                alert("Please select movie language");
                return false
            }
            
            if (!durationTester.test(movieduration)) {
                alert("Please ensure valid duration type. (e.g. 2h 12m)");
                return false
            }
            if (!releseDateTester.test(movieRlsDate)) {
                alert("please ensure valid year type. (e.g. 2020)");
                return false
            }
            return true
        }
        var bar = $('.progress-line .bar');
        var percent = $('.progress-line .percent');
        function init_progress_bar () {
            percent.html('0%')
            bar.width('0%')
        }
        function show_progress_bar () {
            $('.progress-line').show()
            $('.overlay').show()
        }
        function hide_progress_bar () {
            $('.progress-line').hide()
            $('.overlay').hide()
        }
        $('#create-form').ajaxForm({
            beforeSubmit: validate,
            beforeSend: function() {
                // status.empty();
                init_progress_bar()
                show_progress_bar()
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                bar.width(percentVal)
                percent.html(percentVal);
                console.log(percentComplete)
            },
            success: function() {
                var percentVal = 'Wait, Saving';
                bar.width(percentVal)
                percent.html(percentVal);
            },
            complete: function(xhr) {
                console.log(xhr);
                if (xhr.responseJSON == 'success') {
                    alert('Uploaded Successfully');
                    window.location.href = "{!! route('admin.movie.index'); !!}";
                } else {
                    alert('Sorry, uploading failed because of some reasons');
                }
                init_progress_bar()
                hide_progress_bar()
            } 
        });
    })
    
</script>
@endsection