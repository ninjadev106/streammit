@extends('layouts.admin', ['menu_name' => 'index', 'sub_menu_name' => ''])

@section('content')
<?php
    $rcItem = [
        [
            'iq' => 'iq-bg-red',
            'text' => 'text-red',
            'bg' => 'bg-red',
            'icon' => 'la-film'
        ],
        [
            'iq' => 'iq-bg-secondary',
            'text' => 'text-secondary',
            'bg' => 'bg-secondary',
            'icon' => 'la-laugh-squint'
        ],
        [
            'iq' => 'iq-bg-info',
            'text' => 'text-info',
            'bg' => 'bg-info',
            'icon' => 'la-skull-crossbones'
        ],
        [
            'iq' => 'iq-bg-warning',
            'text' => 'text-warning',
            'bg' => 'bg-warning',
            'icon' => 'la-theater-masks'
        ],
        [
            'iq' => 'iq-bg-success',
            'text' => 'text-success',
            'bg' => 'bg-success',
            'icon' => 'la-child'
        ],
        [
            'iq' => 'iq-bg-danger',
            'text' => 'text-danger',
            'bg' => 'bg-danger',
            'icon' => 'la-grin-beam'
        ],
    ];
    function KBConverter($value) {
        if ($value < 1000)
            return $value;
        else if($value >= 1000 && $value < 1000000)
            return '+'.($value / 1000).'K';
        else
            return '+'.($value / 1000000).'M';
    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-xl-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <div class="iq-cart-text text-capitalize">
                            <p class="mb-0">
                                view
                            </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-warning">
                            <i class="las la-eye"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-3">
                            <h4 class=" mb-0">
                            <?php
                                echo KBConverter($viewCount);
                            ?>
                            </h4>
                            <p class="mb-0 text-warning"><span><i class="fa fa-caret-down mr-2"></i></span>35%</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-lg-12 col-xl-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <div class="iq-cart-text text-capitalize">
                            <p class="mb-0 font-size-14">
                                Downloaded
                            </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-info">
                            <i class="las la-download"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-3">
                            <h4 class=" mb-0">
                            <?php
                                echo KBConverter($downCount);
                            ?>
                            </h4>
                            <p class="mb-0 text-info"><span><i class="fa fa-caret-up mr-2"></i></span>80%</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-lg-12 col-xl-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <div class="iq-cart-text text-uppercase">
                            <p class="mb-0 font-size-14">
                                Visitors
                            </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-success">
                            <i class="lar la-user"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-3">
                            <h4 class=" mb-0">
                            <?php
                                echo KBConverter($visitCount);
                            ?>
                            </h4>
                            <p class="mb-0 text-success"><span><i class="fa fa-caret-up mr-2"></i></span>80%</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                <div class="iq-header-title">
                    <h4 class="card-title">Top Rated Item </h4>
                </div>
                <div id="top-rated-item-slick-arrow" class="slick-aerrow-block"></div>
                </div>
                <div class="iq-card-body">
                <ul class="list-unstyled row top-rated-item mb-0">
                    @foreach ($topItems as $item)
                    <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                        <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                            <div class="iq-thumb">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('/'.$item->file) }}" class="img-fluid w-100 img-border-radius" alt="">
                                </a>
                            </div>
                            <div class="iq-feature-list">
                                <h6 class="font-weight-600 mb-0">{{ $item->title }}</h6>
                                <p class="mb-0 mt-2">{{ $item->type }}</p>
                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i><?= KBConverter($item->viewCount) ?></p>
                                    <p class="mb-0 "><i class="las la-download ml-2"></i> <?= KBConverter($item->downCount) ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    
                </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="iq-card iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header">
                <div class="iq-header-title">
                    <h4 class="card-title text-center">User's Of Product</h4>
                </div>
                </div>
                <div class="iq-card-body pb-0">
                <div id="view-chart-01">
                </div>
                <div class="row mt-1">
                    <input class="memships-data-set" data-set="{{ $memships }}" style="display:none;">
                    @foreach ($memships as $key => $item)
                    <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                        <div class="iq-card">
                            <div class="iq-card-body">
                            <div class="media align-items-center">
                                <div class="iq-user-box {{ $rcItem[$key]['bg'] }}"></div>
                                <div class="media-body text-white">
                                    <p class="mb-0 font-size-14 line-height">{{ $item->name }} User
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                        <div class="iq-card">
                            <div class="iq-card-body">
                            <div class="media align-items-center">
                                <div class="iq-user-box bg-warning"></div>
                                <div class="media-body text-white">
                                    <p class="mb-0 font-size-14 line-height">Exsisting <br>
                                        Subscriber's
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                        <div class="iq-card">
                            <div class="iq-card-body">
                            <div class="media align-items-center">
                                <div class="iq-user-box bg-info"></div>
                                <div class="media-body text-white">
                                    <p class="mb-0 font-size-14 line-height">Daily<br>
                                        Visitor's
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                        <div class="iq-card">
                            <div class="iq-card-body">
                            <div class="media align-items-center">
                                <div class="iq-user-box bg-danger"></div>
                                <div class="media-body text-white">
                                    <p class="mb-0 font-size-14 line-height">Extented <br>
                                        Subscriber's
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-sm-12  col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex align-items-center justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Categories</h4>
                </div>
                </div>
                <div class="iq-card-body p-0">
                <div id="view-chart-03"></div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex align-items-center justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Category Details</h4>
                </div>
                <!-- <div class="iq-card-header-toolbar d-flex align-items-center seasons">
                    <div class="iq-custom-select d-inline-block sea-epi s-margin">
                        <select name="cars" class="form-control season-select">
                            <option value="season1">Today</option>
                            <option value="season2">This Week</option>
                            <option value="season2">This Month</option>
                        </select>
                    </div>
                </div> -->
                </div>
                <div class="iq-card-body row align-items-center">
                <div class="col-lg-7">
                    <div class="row list-unstyled mb-0 pb-0">
                        <input class="category-list-data-set" data-set="{{ $categories }}" style="display:none;">
                        @foreach ($categories as $key => $item)
                        <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical {{ $rcItem[$key]['iq'] }}">
                            <span class="{{ $rcItem[$key]['bg'] }}" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: {{$item->percent}}%;"></span>
                            </div>
                            <div class="media align-items-center">
                            <div class="iq-icon-box-view rounded mr-3 {{ $rcItem[$key]['iq'] }}"><i class="las {{ $rcItem[$key]['icon'] }} font-size-32"></i></div>
                            <div class="media-body text-white">
                                <h6 class="mb-0 font-size-14 line-height">{{ $item->name }}</h6>
                                <small class="{{ $rcItem[$key]['text'] }} mb-0">{{ $item->percent }}%</small>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-secondary">
                            <span class="bg-secondary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 70%;"></span>
                            </div>
                            <div class="media align-items-center">
                            <div class="iq-icon-box-view rounded mr-3 iq-bg-secondary"><i class="las la-laugh-squint font-size-32"></i></div>
                            <div class="media-body text-white">
                                <p class="mb-0 font-size-14 line-height">Comedy</p>
                                <small class="text-secondary mb-0">+44%</small>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-info">
                            <span class="bg-info" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 40%;"></span>
                            </div>
                            <div class="media align-items-center">
                            <div class="iq-icon-box-view rounded mr-3 iq-bg-info"><i class="las la-skull-crossbones font-size-32"></i></div>
                            <div class="media-body text-white">
                                <p class="mb-0 font-size-14 line-height">Horror</p>
                                <small class="text-info mb-0">+56%</small>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                            <span class="bg-warning" data-percent="100" style="transition: height 2s ease 0s; width: 40%; height: 40%;"></span>
                            </div>
                            <div class="media align-items-center">
                            <div class="iq-icon-box-view rounded mr-3 iq-bg-warning"><i class="las la-theater-masks font-size-32"></i></div>
                            <div class="media-body text-white">
                                <p class="mb-0 font-size-14 line-height">Drama</p>
                                <small class="text-warning mb-0">+65%</small>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 mb-lg-0 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-success">
                            <span class="bg-success" data-percent="100" style="transition: height 2s ease 0s; width: 60%; height: 60%;"></span>
                            </div>
                            <div class="media align-items-center mb-lg-0 mb-3">
                            <div class="iq-icon-box-view rounded mr-3 iq-bg-success"><i class="las la-child font-size-32"></i></div>
                            <div class="media-body text-white">
                                <p class="mb-0 font-size-14 line-height">Kids</p>
                                <small class="text-success mb-0">+74%</small>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6  mb-lg-0 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                            <span class="bg-danger" data-percent="100" style="transition: height 2s ease 0s; width: 80%; height: 80%;"></span>
                            </div>
                            <div class="media align-items-center">
                            <div class="iq-icon-box-view rounded mr-3 iq-bg-danger"><i class="las la-grin-beam font-size-32"></i></div>
                            <div class="media-body text-white">
                                <p class="mb-0 font-size-14 line-height">Thrilled</p>
                                <small class="text-danger mb-0">+40%</small>
                            </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div id="view-chart-02" class="view-cahrt-02"></div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Recently Viewd Items</h4>
                </div>
                <!-- <div class="iq-card-header-toolbar d-flex align-items-center seasons">
                    <div class="iq-custom-select d-inline-block sea-epi s-margin">
                        <select name="cars" class="form-control season-select">
                            <option value="season1">Most Likely</option>
                            <option value="season2">Unlikely</option>
                        </select>
                    </div>
                </div> -->
                </div>
                <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="data-tables table movie_table" style="width:100%">
                        <thead>
                            <tr>
                            <th style="width:20%;">Movie</th>
                            <th style="width:20%;">Category</th>
                            <th style="width:10%;">Download/Views</th>
                            
                            <th style="width:20%;">Date</th>
                            <th style="width:10%;"><i class="lar la-heart"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentViews as $item)
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href="javascript:void(0);"><img src="{{ asset('/'.$item->file) }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <p class="mb-0">{{ $item->title }}</p>
                                            <small>{{ $item->seasons ? $item->seasons : $item->duration}}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <i class="las la-download"></i>
                                    <small> <?= KBConverter($item->downCount) ?></small>
                                    <i class="lar la-eye "></i>
                                    <small> <?= KBConverter($item->viewCount) ?></small>
                                </td>
                                
                                <td>{{ $item->date }}</td>
                                <td><i class="las la-heart text-primary"></i></td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td >
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/images/show-thumb/05.jpg') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <p class="mb-0">Last Race</p>
                                        </div>
                                    </div>
                                </td>
                                <td><i class="lar la-star mr-2"></i> 7.2</td>
                                <td>Horror</td>
                                <td>
                                    <i class="lar la-eye "></i>
                                </td>
                                <td>subcriber</td>
                                <td>22 July,2020</td>
                                <td><i class="las la-heart text-primary"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/images/show-thumb/07.jpg') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <p class="mb-0">Boop Bitty</p>
                                        </div>
                                    </div>
                                </td>
                                <td><i class="lar la-star mr-2"></i> 8.2</td>
                                <td>Thriller</td>
                                <td>
                                    <i class="lar la-eye "></i>
                                </td>
                                <td>Unsubcriber</td>
                                <td>23 July,2020</td>
                                <td><i class="las la-heart text-primary"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/images/show-thumb/10.jpg') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <p class="mb-0">Dino Land</p>
                                        </div>
                                    </div>
                                </td>
                                <td><i class="lar la-star mr-2"></i> 8.5</td>
                                <td>Action</td>
                                <td>
                                    <i class="lar la-eye "></i>
                                </td>
                                <td>Unsubcriber</td>
                                <td>24 July,2020</td>
                                <td><i class="las la-heart text-primary"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/images/show-thumb/04.jpg') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <p class="mb-0">The Last Breath</p>
                                        </div>
                                    </div>
                                </td>
                                <td><i class="lar la-star mr-2"></i> 8.9</td>
                                <td>Horror</td>
                                <td>
                                    <i class="lar la-eye "></i>
                                </td>
                                <td>subcriber</td>
                                <td>25 July,2020</td>
                                <td><i class="las la-heart text-primary"></i></td>
                            </tr> -->
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
  // top chart 2
    let categoryList = JSON.parse($('.category-list-data-set').attr('data-set'));
    let labels = [];
    let series = [];
    for (var inx in categoryList) {
        series.push(categoryList[inx].movie);
        labels.push(categoryList[inx].name);
    }
    if($('#view-chart-02').length){
        var options = {
            series: series,
            chart: {
            width: 250,
            type: 'donut',
        },
        colors:['#e20e02','#83878a', '#007aff','#f68a04', '#14e788','#545e75'],
        labels: labels,
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: false,
            width: 0
        },
        legend: {
            show: false,
            formatter: function(val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex]
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#view-chart-02"), options);
        chart.render();
    }

    let memships = JSON.parse($('.memships-data-set').attr('data-set'));
    series = [];
    labels = [];
    for (var inx in memships) {
        labels.push(memships[inx].name);
        series.push(memships[inx].userCount);
    }
    // top chart 1
    if(jQuery('#view-chart-01').length){
       var options = {
          series: series,
          chart: {
        width: 250,
          type: 'donut',
        },
        colors:['#e20e02','#83878a', '#007aff'],
        labels: labels,
        dataLabels: {
          enabled: false
        },
        stroke: {
            show: false,
            width: 0
        },
        legend: {
            show: false,
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#view-chart-01"), options);
        chart.render();
      
    }
</script>
@endsection