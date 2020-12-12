@extends('layouts.admin', ['menu_name' => 'show', 'sub_menu_name' => 'show-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Show Lists</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('admin.show.create') }}" class="btn btn-primary">Add Show</a>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="table-view">
                    <table class="data-tables table movie_table " style="width:100%">
                        <thead>
                            <tr>
                            <th>Show</th>
                            <th>Quality</th>
                            <th>Category</th>
                            <th>Seasons</th>
                            <th>Language</th>
                            <th style="width:20%">Description</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shows as $show)
                            <tr>
                            <td>
                                <div class="media align-items-center">
                                    <div class="iq-movie">
                                        <a href="javascript:void(0);"><img src="{{ asset('/'.$show->file) }}"
                                            class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                    </div>
                                    <div class="media-body text-white text-left ml-3">
                                        <p class="mb-0">{{ $show->title }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $show->quality }}</td>
                            <td>{{ $show->category }}</td>
                            <td>{{ $show->seasons }}</td>
                            <td>{{ $show->lang }}</td>
                            <td>
                                <p>{{ $show->description }}</p>
                            </td>
                            <td>
                                <form id="{{ 'delete-form-'.$show->id }}" action="{{ route('admin.show.destroy', $show->id) }}" method="POST">
                                <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="View" href="{{ route('admin.show.show', $show->id) }}"><i class="lar la-eye"></i></a>
                                    <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('admin.show.edit', $show->id) }}"><i class="ri-pencil-line"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete" data-id="{{ $show->id }}"><i
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
        $show_id = $(this).attr('data-id');
        $('#delete-form-' + $show_id).submit();
    })
</script>
@endsection