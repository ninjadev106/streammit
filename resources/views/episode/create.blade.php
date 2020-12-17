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
                <form id="create-form" action="{{ route('admin.episode.store') }}" method="POST" enctype="multipart/form-data">
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
                                <input type="text" class="form-control" placeholder="Episode No." id="episode" name="episode">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Episode Name" id="name" name="name">
                            </div>
                            <div class="col-md-12 form_gallery form-group">
                                <label id="gallery4" for="file">Upload Image</label>
                                <input data-name="#gallery4" id="file" name="file"
                                    class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Running Time in Minutes" id="duration" name="duration">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control date-input basicFlatpickr" type="text"
                                    placeholder="Selete Date" id="date" name="date">
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
                                <input type="file" accept="video/mp4,video/x-m4v,video/*" id="video" name="video">
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
    <div class="progress-line" style="display: none">
        <div class="bar"></div >
        <div class="percent">0%</div >
    </div>
    <div class="overlay" style="display: none"></div>
</div>
@endsection

<style>
.form_video-upload {
    height: 385px;
    margin-bottom: 20px;
}
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
        function validate () {
            let episodeNo = $('#create-form #episode').val();
            let episodeName = $('#create-form #name').val();
            let episodeFile = $('#create-form #file')[0].files[0];
            let episodeVideo = $('#create-form #video')[0].files[0];
            let episodeDspt = $('#create-form #description').val();
            let episodeDate = $('#create-form #date').val();
            let episodeduration = $('#create-form #duration').val();
            let show = $('#create-form #show').val();
            let season = $('#create-form #season').val();

            let durationTester = /^(10|11|12|[1-9])h [0-5][0-9]m$/
            let episodeNoTester = /^[1-9][0-9]*$/
            if (!show) {
                alert("Please select show value");
                return false;
            }
            if (!season) {
                alert("Please select season");
                return false;
            }
            if (!episodeNoTester.test(episodeNo)) {
                alert("Please ensure valid episode number type. (e.g. 12)");
                return false;
            }
            if (!episodeName) {
                alert("Please enter episode name");
                return false;
            }
            if (!episodeFile) {
                alert("Please select episode image");
                return false;
            }
            if (!episodeVideo) {
                alert("Please select episode video");
                return false;
            }
            if (!episodeDspt) {
                alert("Please enter episode description");
                return false;
            }
            if (!episodeDate) {
                alert("Please select episode date");
                return false;
            }
            if (!durationTester.test(episodeduration)) {
                alert("Please ensure valid duration type. (e.g. 2h 12m)");
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
                    window.location.href = "{!! route('admin.episode.index'); !!}";
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