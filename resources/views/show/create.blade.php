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
                <form action="{{ route('admin.show.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Title" name="title">
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
                            <label id="gallery2" for="form_gallery-upload">Upload Image</label>
                            <input data-name="#gallery2" id="form_gallery-upload" name="file"
                            class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                        </div>
                        <div class="col-md-6 form_gallery form-group">
                            <label id="gallery3" for="show2">Upload Show Banner</label>
                            <input data-name="#gallery3" id="show2" name="banner" class="form_gallery-upload"
                            type="file" accept=".png, .jpg, .jpeg">
                        </div>
                        <div class="col-12 form-group">
                            <textarea id="text1" name="description" rows="5" class="form-control"
                            placeholder="Description"></textarea>
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