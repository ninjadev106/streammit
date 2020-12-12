@extends('layouts.admin', ['menu_name' => 'comment', 'sub_menu_name' => ''])
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Comment Detail</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <div class="row">
                    <div class="col-md-9">
                        <h3>{{ $comment->title }}</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="media align-items-center">
                            <div class="iq-movie">
                                <a href="javascript:void(0);"><img
                                    src="{{ asset($comment->author->image) }}"
                                    class="img-border-radius avatar-50 img-fluid" alt=""></a>
                            </div>
                            <div class="media-body text-white text-left ml-3">
                                <p class="mb-0">{{ $comment->author->firstName.' '.$comment->author->lastName }}</p>
                                <small>{{ $comment->date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?= nl2br($comment->description) ?></p>
                    </div>
                </div>
                <div class="row">
                    <form id="delete-form" action="{{ route('admin.comment.destroy', $comment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="col-lg-5 d-flex">
                        <a type="reset" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                        <a class="btn btn-danger" href="{{ route('admin.comment.index') }}">Back</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
#delete-form a{
    margin-left: 10px;
}
.img-border-radius {
    border-radius: 50%!important;
}
</style>
@section('script')
<script>
</script>
@endsection