
@extends('layouts.admin', ['menu_name' => 'f-content', 'sub_menu_name' => $category ])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Lists</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="#" class="btn btn-primary add">Add New</a>
                </div>
                </div>
                <div class="iq-card-body">
                <div class="table-view">
                    <table class="data-tables table movie_table " style="width:100%">
                        <thead>
                            <tr>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $item)
                            <tr>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <form id="{{ 'delete-form-'.$item->id }}" action="{{ route('admin.f-content.destroy', [$category, $item->id]) }}" method="POST">
                                <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="View" href="{{ route('admin.f-content.show', [$category, $item->id])  }}"><i class="lar la-eye"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete" data-id="{{ $item->id }}"><i
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.f-content.store', $category) }}" method="POST">
            @csrf
            <div class="modal-header">
                Add New
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- the result to be displayed apply here -->
                    <div class="col-lg-12 form-group">
                        <label>Content Type </label>
                        <select class="form-control select2" id="content-type" name="content_type">
                            <option value="movie">Movie</option>
                            <option value="show">Show</option>
                            <option value="episode">Episode</option>
                        </select>
                    </div>
                    <div class="col-lg-12 form-group">
                        <label>Content Title</label>
                        <select class="form-control select2" id="content-title" name="content_id">
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-label="Close">cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

<style>
.select2-container--default .select2-selection--single {
    height: 45px!important;
}
</style>
@section('script')
<script>

    $('.add').click(function () {
        $('#addModal').modal('show');
    })
    $('.delete').click(function (e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        $('#delete-form-' + id).submit();
    })
    var S2type = $('#addModal #content-type');
    var S2title = $('#addModal #content-title');

    S2type.select2();
    S2title.select2();

    S2type.on('select2:select', function (){
        S2title.select2('destroy');
        S2title.empty();

        var contentType = $(this).val();
        $.ajax({
            url: '/admin/f-content/content/' + contentType,
            method: 'GET',
            success: function (result) {
                var items = result.data;
                for (var index in items) {
                    items[index].text = items[index].title ? items[index].title : items[index].name;
                }
                S2title.select2({data: items});
            }   
        })
    })

    S2type.trigger({type: 'select2:select'});
</script>
@endsection
