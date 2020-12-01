@extends('layouts.admin', ['menu_name' => '', 'sub_menu_name' => ''])

@section('content')
<div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body p-0">
                    <div class="iq-edit-list">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                            <li class="col-md-4 p-0">
                                <a class="nav-link active" data-toggle="pill" href="#account-info">
                                Account Setting
                                </a>
                            </li>
                            <li class="col-md-4 p-0">
                                <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                Change Password
                                </a>
                            </li>
                            <li class="col-md-4 p-0">
                                <a class="nav-link" data-toggle="pill" href="#social-link">
                                Social Media
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-info" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Account Setting</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="acc-edit">
                                        <form action="{{ route('admin.account.update', 'other') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="uname">User Name:</label>
                                            <input type="text" class="form-control" id="uname" name="name" value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Id:</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="altemail">Alternate Email:</label>
                                            <input type="email" class="form-control" id="altemail" name="altemail" value="{{ $user->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Language Known:</label>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="english" checked="">
                                                <label class="custom-control-label" for="english">English</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="french" checked="">
                                                <label class="custom-control-label" for="french">French</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="hindi">
                                                <label class="custom-control-label" for="hindi">Hindi</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="spanish" checked="">
                                                <label class="custom-control-label" for="spanish">Spanish</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="arabic">
                                                <label class="custom-control-label" for="arabic">Arabic</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="italian">
                                                <label class="custom-control-label" for="italian">Italian</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form action="{{ route('admin.account.update', 'password') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                        <label for="cpass">Current Password:</label>
                                        <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                        <input type="Password" class="form-control" id="cpass" name="current_password" value="">
                                        </div>
                                        <div class="form-group">
                                        <label for="npass">New Password:</label>
                                        <input type="Password" class="form-control" id="npass" name="new_password" value="">
                                        </div>
                                        <div class="form-group">
                                        <label for="vpass">Verify Password:</label>
                                        <input type="Password" class="form-control" id="vpass" name="new_confirm_password" value="">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social-link" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Social Media</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="acc-edit">
                                        <form action="{{ route('admin.account.update', 'other') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="name" value="{{ $user->name }}">
                                        <input type="hidden" name="email" value="{{ $user->email }}">
                                        <div class="form-group">
                                            <label for="facebook">Facebook:</label>
                                            <input type="text" class="form-control" id="facebook" name="facebookLink" value="{{ $user->facebookLink }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter:</label>
                                            <input type="text" class="form-control" id="twitter" name="twitterLink" value="{{ $user->twitterLink }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="google">Google +:</label>
                                            <input type="text" class="form-control" id="google" name="googleLink" value="{{ $user->googleLink }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram:</label>
                                            <input type="text" class="form-control" id="instagram" name="instagramLink" value="{{ $user->instagramLink }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="youtube">You Tube:</label>
                                            <input type="text" class="form-control" id="youtube" name="youtubeLink" value="{{ $user->youtubeLink }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
@endsection