@extends('layouts.admin', ['menu_name' => 'category', 'sub_menu_name' => 'category-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Category Lists</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add Category</a>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="table-view">
                    <table class="data-tables table movie_table " style="width:100%">
                        <thead>
                            <tr>
                            <th style="width:10%;">No</th>
                            <th style="width:20%;">Name</th>
                            <th style="width:40%;">Description</th>
                            <th style="width:10%;">Movie</th>
                            <th style="width:20%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <p>{{ $category->description }}</p>
                                </td>
                                <td>{{ $category->movie }}</td>
                                <td>
                                    <form id="{{ 'delete-form-'.$category->id }}" action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                    <div class="flex align-items-center list-user-action">
                                        <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="View" href="{{ route('admin.category.show', $category->id) }}"><i class="lar la-eye"></i></a>
                                        <a class="iq-bg-success edit" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Edit" href="{{ route('admin.category.edit', $category->id) }}"><i class="ri-pencil-line"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Delete" data-id="{{ $category->id }}"><i
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
        $category_id = $(this).attr('data-id');
        $('#delete-form-' + $category_id).submit();
    })
</script>
@endsection
