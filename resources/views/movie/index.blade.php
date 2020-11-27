@extends('layouts.admin', ['menu_name' => 'movie', 'sub_menu_name' => 'movie-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Movie Lists</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('admin.movie.create') }}" class="btn btn-primary">Add movie</a>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="table-view">
                    <table class="data-tables table movie_table " style="width:100%">
                        <thead>
                            <tr>
                            <th>Movie</th>
                            <th>Quality</th>
                            <th>Category</th>
                            <th>Release Year</th>
                            <th>Language</th>
                            <th style="width: 20%;">Description</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movies as $movie)
                            <tr>
                            <td>
                                <div class="media align-items-center">
                                    <div class="iq-movie">
                                        <a href="javascript:void(0);"><img
                                            src="{{ asset('/'.$movie->file) }}"
                                            class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                    </div>
                                    <div class="media-body text-white text-left ml-3">
                                        <p class="mb-0">{{ $movie->title }}</p>
                                        <small>{{ $movie->duration }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $movie->quality }}</td>
                            <td>{{ $movie->category }}</td>
                            <td>{{ $movie->releseDate }}</td>
                            <td>{{ $movie->lang }}</td>
                            <td>
                                <p>{{ $movie->description }}</p>
                            </td>
                            <td>
                                <form id="{{ 'delete-form-'.$movie->id }}" action="{{ route('admin.movie.destroy', $movie->id) }}" method="POST">
                                <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="View" href="{{ route('admin.movie.show', $movie->id)  }}"><i class="lar la-eye"></i></a>
                                    <a class="iq-bg-success edit" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('admin.movie.edit', $movie->id) }}"><i class="ri-pencil-line"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete" data-id="{{ $movie->id }}"><i
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
        $movie_id = $(this).attr('data-id');
        $('#delete-form-' + $movie_id).submit();
    })
</script>
@endsection