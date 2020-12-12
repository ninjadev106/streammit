@extends('layouts.admin', ['menu_name' => 'user', 'sub_menu_name' => ''])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">User Lists</h4>
                    </div>
                </div>  
                <div class="iq-card-body">
                    <div class="table-view">
                        <table class="data-tables table movie_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">Profile</th>
                                    <th style="width: 10%;">Name</th>
                                    <th style="width: 20%;">Contact</th>
                                    <th style="width: 20%;">Email</th>
                                    <th style="width: 10%;">Country</th>    
                                    <th style="width: 10%;">Status</th>
                                    <th style="width: 10%;">Join Date</th>
                                    <th style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr id="{{ 'info-'.$user->id }}">
                                    <td>
                                        <img src="{{ asset('/'.$user->profile->image) }}" class="img-fluid avatar-50" alt="author-profile">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->profile->mobileNo }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->profile->country_record ? $user->profile->country_record->name : '' }}</td>
                                    <td class="status">
                                    @if ($user->status == 0)
                                    <span class="badge iq-bg-warning" data-status="0">Pending</span>
                                    @elseif ($user->status == 1)
                                    <span class="badge iq-bg-success" data-status="1">Active</span>
                                    @elseif ($user->status == 2)
                                    <span class="badge iq-bg-primary" data-status="2">Blocked</span>
                                    @endif
                                    </td>
                                    <td>{{ $user->joinDate }}</td>
                                    <td>
                                        <form id="{{ 'delete-form-'.$user->id }}" action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                        <div class="flex align-items-center list-user-action">
                                            <input type="hidden" class="status-saver" value="{{ $user->status }}">
                                            <a class="iq-bg-success edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-warning save non-visible" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save" href="#"><i 
                                                class="ri-save-line"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <a class="iq-bg-primary delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#" data-id="{{ $user->id }}"><i
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

<style>
    .non-visible {
        display: none!important;
    }
</style>

@section('script')
<script>
    $('.delete').click(function (e){
        e.preventDefault();
        $user_id = $(this).attr('data-id');
        $('#delete-form-' + $user_id).submit();
    })

    $('.edit').click(function (e){
        $(this).addClass("non-visible");
        $(this).siblings("a.save").removeClass("non-visible");

        var user = $(this).siblings("a.delete").attr("data-id");
        var status = $('#info-' + user + ' .status span').attr("data-status");
        $('#info-' + user + ' .status').empty();
        $('#info-' + user + ' .status').append(
            '<select class="form-control">' + 
                '<option value="0">Pending</option>' + 
                '<option value="1">Active</option>' + 
                '<option value="2">Blocked</option>' + 
            '</select>'
        );
        $('#info-' + user + ' .status select').val(parseInt(status));
    })
    $('.save').click(function (e){
        $(this).addClass("non-visible");
        $(this).siblings("a.edit").removeClass("non-visible");

        var user = $(this).siblings("a.delete").attr("data-id");
        var status = $('#info-' + user + ' .status select').val();

        var _token = $('meta[name=csrf-token]').attr('content');

        $.ajax({
            url: '/admin/user/' + user,
            method: 'PUT',
            data: {status: status, _token: _token},
            success: function (result){
                if (!result.success)
                    status = $(this).siblings("input.status-saver").val();
                $('#info-' + user + ' .status').empty();
                if (status == 0)
                    $('#info-' + user + ' .status').append('<span class="badge iq-bg-warning" data-status="0">Pending</span>');
                else if (status == 1)
                    $('#info-' + user + ' .status').append('<span class="badge iq-bg-success" data-status="1">Active</span>');
                else if (status == 2)
                    $('#info-' + user + ' .status').append('<span class="badge iq-bg-primary" data-status="2">Blocked</span>');        
            }
        })
        
    })
</script>
@endsection