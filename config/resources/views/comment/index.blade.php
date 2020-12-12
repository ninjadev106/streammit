@extends('layouts.admin', ['menu_name' => 'comment', 'sub_menu_name' => ''])
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Comment Lists</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="data-tables table movie_table" style="width:100%">
                        <thead>
                        <tr>
                            <th style="width: 10%;">No</th>
                            <th style="width: 20%;">Title</th>
                            <th style="width: 10%;">Author</th>
                            <!-- <th style="width: 25%;">Description</th> -->
                            <th style="width: 15%;">Created Date</th>
                            <th style="width: 10%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($comments as $key => $comment)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                {{ $comment->title }}
                            </td>
                            <td>{{ $comment->author->firstName.' '.$comment->author->lastName }}</td>
                            <!-- <td>
                                <p class="mb-0">{{ $comment->description }}</p>
                            </td> -->
                            <td>
                                {{ $comment->date }}
                            </td>
                            <td>
                                <form id="{{ 'delete-form-'.$comment->id }}" action="{{ route('admin.comment.destroy', $comment->id) }}" method="POST">
                                <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="View" href="{{ route('admin.comment.show', $comment->id) }}"><i class="lar la-eye"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete" data-id="{{ $comment->id }}"><i
                                        class="ri-delete-bin-line"></i></a>
                                </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.delete').click(function (e){
        e.preventDefault();
        $comment_id = $(this).attr('data-id');
        $('#delete-form-' + $comment_id).submit();
    })
</script>
@endsection