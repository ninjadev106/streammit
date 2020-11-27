@extends('layouts.admin', ['menu_name' => 'episode', 'sub_menu_name' => 'episode-list'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Episode Lists</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('admin.episode.create') }}" class="btn btn-primary">Add Episode</a>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="table-view">
                    <table class="data-tables table movie_table " style="width:100%">
                        <thead>
                            <tr>
                            <th>Episode</th>
                            <th>Show</th>
                            <th>Season</th>
                            <th>Quality</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Language</th>
                            <th style="width: 20%;">Description</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($episodes as $episode)
                            <tr>
                            <td>
                                <div class="media align-items-center">
                                    <div class="iq-movie">
                                        <a href="javascript:void(0);"><img
                                            src="{{ asset('/'.$episode->file) }}"
                                            class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                    </div>
                                    <div class="media-body text-white text-left ml-3">
                                        <p class="mb-0">{{ $episode->name }}</p>
                                        <small>{{ $episode->duration }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $episode->show }}</td>
                            <td>{{ $episode->season }}</td>
                            <td>{{ $episode->quality }}</td>
                            <td>{{ $episode->category }}</td>
                            <td>{{ $episode->date }}</td>
                            <td>{{ $episode->lang }}</td>
                            <td>
                                <p>{{ $episode->description }}</p>
                            </td>
                            <td>
                                <form id="{{ 'delete-form-'.$episode->id }}" action="{{ route('admin.episode.destroy', $episode->id) }}" method="POST">
                                <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="View" href="{{ route('admin.episode.show', $episode->id) }}"><i class="lar la-eye"></i></a>
                                    <a class="iq-bg-success edit" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('admin.episode.edit', $episode->id) }}"><i class="ri-pencil-line"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete" data-id="{{ $episode->id }}"><i
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
        $episode_id = $(this).attr('data-id');
        $('#delete-form-' + $episode_id).submit();
    })
</script>
@endsection