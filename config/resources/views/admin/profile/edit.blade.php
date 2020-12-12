@extends('layouts.admin', ['menu_name' => '', 'sub_menu_name' => ''])

@section('content')
<?php
    $countries = $references['countries'];
    $states = $references['states'];
?>
<div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                           <ul class="iq-edit-profile d-flex nav nav-pills">
                              <li class="col-md-4 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Personal Information
                                 </a>
                              </li>
                              <li class="col-md-4 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                    Email and SMS
                                 </a>
                              </li>
                              <li class="col-md-4 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                    Manage Contact
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
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form action="{{ route('admin.profile.update', 'personal') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row align-items-center">
                                       <div class="col-md-12">
                                          <div class="profile-img-edit">
                                             <img class="profile-pic" src="{{ asset('/'.$user->profile->image) }}" alt="profile-pic">
                                             <div class="p-image">
                                                <i class="ri-pencil-line upload-button"></i>
                                                <input class="file-upload" type="file" name="file" accept="image/*" value="{{ $user->profile->image }}"/>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class=" row align-items-center">
                                       <div class="form-group col-sm-6">
                                          <label for="fname">First Name:</label>
                                          <input type="text" class="form-control" id="fname" name="firstName"value="{{ $user->profile->firstName }}">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="lname">Last Name:</label>
                                          <input type="text" class="form-control" id="lname" name="lastName" value="{{ $user->profile->lastName }}">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="uname">User Name:</label>
                                          <input type="text" class="form-control" id="uname" name="name" value="{{ $user->name }}">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="cname">City:</label>
                                          <input type="text" class="form-control" id="cname" name="city" value="{{ $user->profile->city }}">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label class="d-block">Gender:</label>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="gender-male" name="gender" class="custom-control-input" checked="" value="male">
                                             <label class="custom-control-label" for="gender-male"> Male </label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="gender-female" name="gender" class="custom-control-input" value="female">
                                             <label class="custom-control-label" for="gender-female"> Female </label>
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>Date Of Birth:</label>
                                          <input class="form-control date-input basicFlatpickr" type="text" name="birthDate" value="{{ $user->profile->birthDate }}">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>Marital Status:</label>
                                          <select class="form-control" id="marital" name="marital" data-opt-value="{{ $user->profile->marital }}">
                                             <option value="single" selected="">Single</option>
                                             <option value="married">Married</option>
                                             <option value="widowed">Widowed</option>
                                             <option value="divorced">Divorced</option>
                                             <option value="separated">Separated </option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>Age:</label>
                                          <select class="form-control" id="age" name="age">
                                             <option>12-18</option>
                                             <option>19-32</option>
                                             <option selected="">33-45</option>
                                             <option>46-62</option>
                                             <option>63 > </option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>Country:</label>
                                          <select class="form-control" id="country" name="country" data-opt-value="{{ $user->profile->country }}">
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>State:</label>
                                          <select class="form-control" id="state" name="state" data-opt-value="{{ $user->profile->state }}">
                                            @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-12">
                                          <label>Address:</label>
                                          <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">{{ $user->profile->address }}</textarea>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Email and SMS</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form>
                                    <div class="form-group row align-items-center">
                                       <label class="col-8 col-md-3" for="emailnotification">Email Notification:</label>
                                       <div class="col-4 col-md-9 custom-control custom-switch">
                                          <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                          <label class="custom-control-label" for="emailnotification"></label>
                                       </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                       <label class="col-8 col-md-3" for="smsnotification">SMS Notification:</label>
                                       <div class="col-4 col-md-9 custom-control custom-switch">
                                          <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                          <label class="custom-control-label" for="smsnotification"></label>
                                       </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                       <label class="col-md-3" for="npass">When To Email</label>
                                       <div class="col-md-9">
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="email01">
                                             <label class="custom-control-label" for="email01">You have new notifications.</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="email02">
                                             <label class="custom-control-label" for="email02">You're sent a direct message</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                             <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                       <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                       <div class="col-md-9">
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="email04">
                                             <label class="custom-control-label" for="email04"> Upon new order.</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="email05">
                                             <label class="custom-control-label" for="email05"> New membership approval</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                             <label class="custom-control-label" for="email06"> Member registration</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Manage Contact</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form action="{{ route('admin.profile.update', 'contact') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                       <label for="cno">Contact Number:</label>
                                       <input type="text" class="form-control" id="cno" name="mobileNo" value="{{ $user->profile->mobileNo }}">
                                    </div>
                                    <div class="form-group">
                                       <label for="email">Email:</label>
                                       <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                       <label for="url">Url:</label>
                                       <input type="text" class="form-control" id="url" name="url" value="https://getbootstrap.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
@endsection

@section('script')
<script>
    var country = $('select#country').attr('data-opt-value');
    var state = $('select#state').attr('data-opt-value');
    var marital = $('select#marital').attr('data-opt-value');
    $('select#country').val(country);
    $('select#state').val(state);
    $('select#marital').val(marital);
</script>
@endsection