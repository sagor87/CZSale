@extends('layouts.master')
@section('content')
<div class="col-lg-9 content-right">
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('categories')}}">Categories</a></li>
        <li><a href="#">Computers & Networking</a></li>
        <li><a href="#">PC, Computers</a></li>
    </ol>
    <h2>PC, Computers</h2>
    <div class="well well-sm" style="padding: 0; background-color: #FCF8E3;">
        <div class="row top-classifieds">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="thumbnail">
                    <a href="#"><img src="http://placehold.it/400x300/e0e0e0" /></a>
                    <div class="caption">
                        <h5><a href="#">Samsung Galaxy S4</a></h5>
                        <p class="price">550 EUR</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="thumbnail">
                    <a href="#"><img src="http://placehold.it/400x300/e0e0e0" /></a>
                    <div class="caption">
                        <h5><a href="#">Vizio 60" Slim Frame 3D</a></h5>
                        <p class="price">370 EUR</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="thumbnail">
                    <a href="#"><img src="http://placehold.it/400x300/e0e0e0" /></a>
                    <div class="caption">
                        <h5><a href="#">Logitech 2.1 HS-263</a></h5>
                        <p class="price">36 EUR</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="thumbnail">
                    <a href="#"><img src="http://placehold.it/400x300/e0e0e0" /></a>
                    <div class="caption">
                        <h5><a href="#">Apple McBook Pro</a></h5>
                        <p class="price">740 EUR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row classifieds-table">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Views</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12" style="text-align: center;">
            <ul class="pagination">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
@endsection
