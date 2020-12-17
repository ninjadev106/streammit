@extends('layouts.admin', ['menu_name' => 'movie', 'sub_menu_name' => 'movie-list'])

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
                    <h4 class="card-title">Edit Movie</h4>
                </div>
                </div>
                <div class="iq-card-body">
                <form id="edit-form" action="{{ route('admin.movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="{{ $movie->title }}">
                                </div>
                                <div class="col-12 form_gallery form-group">
                                    <label id="gallery2" for="file">Upload Image</label>
                                    <input data-name="#gallery2" id="file" class="form_gallery-upload"
                                        type="file" accept=".png, .jpg, .jpeg" name="file" value="{{ asset('/'.$movie->file) }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-control" id="category" name="category" data-opt-value="{{ $movie->category }}">
                                        <option disabled="">Movie Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="quality" name="quality" data-opt-value="{{ $movie->quality }}">
                                        <option disabled="">Choose quality</option>
                                        @foreach ($qualities as $quality)
                                            <option value="{{ $quality->id }}">{{ $quality->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea id="description" rows="5" class="form-control"
                                        placeholder="Description" name="description">{{ $movie->description }}</textarea>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="text" class="form-control" placeholder="Release year" id="releseDate" name="releseDate" value="{{ $movie->releseDate }}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="lang" name="lang" data-opt-value="{{ $movie->lang }}">
                                    <option selected disabled="">Choose Language</option>
                                    @foreach ($langs as $lang)
                                        <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input type="text" class="form-control" placeholder="Movie Duration" id="duration" name="duration" value="{{ $movie->duration }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-block position-relative">
                                <div class="form_video-upload_alpha">
                                    <input type="file" accept="video/mp4,video/x-m4v,video/*" multiple id="video" name="video" value="{{ $movie->video_link }}">
                                    <p>Upload video</p>
                                </div>
                                <div class="form_video-upload_alpha">
                                    <input type="file" accept="video/mp4,video/x-m4v,video/*" multiple id="trailer" name="trailer" value="{{ $movie->trailer_link }}">
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
        var cur_category = $('select#category').attr('data-opt-value');
        var cur_lang = $('select#lang').attr('data-opt-value');
        var cur_quality = $('select#quality').attr('data-opt-value');
        $('select#category').val(cur_category);
        $('select#lang').val(cur_lang);
        $('select#quality').val(cur_quality);

        function validate () {
            let movieTitle = $('#edit-form #title').val();
            let movieFile = $('#edit-form #file').attr('value');
            let movieCategory = $('#edit-form #category').val();
            let movieQuality = $('#edit-form #quality').val();
            let movieVideo = $('#edit-form #video').attr('value');
            let movieDspt = $('#edit-form #description').val();
            let movieRlsDate = $('#edit-form #releseDate').val();
            let movieLang = $('#edit-form #lang').val();
            let movieduration = $('#edit-form #duration').val();

            let durationTester = /^(10|11|12|[1-9])h [0-5][0-9]m$/
            let releseDateTester = /^\d{4}$/
            if (!movieTitle) {
                alert("Please enter movie title");
                return false;
            }
            if (!movieFile) {
                alert("Please select movie image");
                return false;
            }
            if (!movieVideo) {
                alert("Please select movie video");
                return false;
            }
            if (!movieDspt) {
                alert("Please enter movie description");
                return false;
            }
            if (!movieCategory) {
                alert("Please select movie category");
                return false;
            }
            if (!movieQuality) {
                alert("Please select movie quality");
                return false;
            }
            if (!movieLang) {
                alert("Please select movie language");
                return false;
            }
            
            if (!durationTester.test(movieduration)) {
                alert("Please ensure valid duration type. (e.g. 2h 12m)");
                return false;
            }
            if (!releseDateTester.test(movieRlsDate)) {
                alert("please ensure valid year type. (e.g. 2020)");
                return false;
            }
            return true;
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
        $('#edit-form').ajaxForm({
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