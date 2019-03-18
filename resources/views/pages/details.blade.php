@extends('layouts.master')
@section('content')

<div class="col-lg-9 content-right">
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('categories')}}">Categories</a></li>
        <li><a href="#">Cell Phones & Accessories</a></li>
        <li><a href="#">Smartphones</a></li>
    </ol>
    <h2>Samsung Galaxy S4</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-detail-classified" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-detail-classified" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-detail-classified" data-slide-to="1"></li>
                            <li data-target="#carousel-detail-classified" data-slide-to="2"></li>
                            <li data-target="#carousel-detail-classified" data-slide-to="3"></li>
                            <li data-target="#carousel-detail-classified" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/classifieds/galaxy-s4.jpg" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+2" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+3" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+4" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+5" class="img-responsive" />
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-detail-classified" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-detail-classified" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row hidden-xs">
                <div class="col-md-12">
                    <div id="thumbs-detail-classified">
                        <ul class="list-inline">
                            <li data-target="#carousel-detail-classified" data-slide-to="0" class="active">
                                <img src="img/classifieds/galaxy-s4.jpg" class="img-responsive" />
                            </li>
                            <li data-target="#carousel-detail-classified" data-slide-to="1">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+2" class="img-responsive" />
                            </li>
                            <li data-target="#carousel-detail-classified" data-slide-to="2">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+3" class="img-responsive" />
                            </li>
                            <li data-target="#carousel-detail-classified" data-slide-to="3">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+4" class="img-responsive" />
                            </li>
                            <li data-target="#carousel-detail-classified" data-slide-to="4">
                                <img src="http://placehold.it/1024x768/e0e0e0/&amp;text=Image+5" class="img-responsive" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <table class="table table-condensed table-hover">
                <thead>
                    <th colspan="2">Details:</th>
                </thead>
                <tbody style="font-size: 12px;">
                    <tr>
                        <td>Classified ID</td>
                        <td>012345</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>550 EUR</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>New</td>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Samsung</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Cell Phone</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>US, UK, CZ</td>
                    </tr>
                    <tr>
                        <td>Returns</td>
                        <td>14 days money back</td>
                    </tr>
                    <tr>
                        <td>Payments</td>
                        <td>PayPal, Credit Card</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div style="padding: 5px; font-weight: bold;">Seller:</div>
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 style="margin-bottom: 0;"><a href="#">Alexandra Doe</a></h4>
                                <span title="Seller's rating: 4/5">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </span>
                                <br /><br />
                                <span class="glyphicon glyphicon-map-marker" title="Location"></span> Folsom Ave, San Francisco<br />
                                <span class="glyphicon glyphicon-envelope" title="E-mail"></span> alexandra.doe@example.com<br />
                                <span class="glyphicon glyphicon-phone-alt" title="Telephone"></span> +420 123 456 789<br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Description</h4>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at nisl sed nibh ornare pretium. Maecenas tincidunt elementum massa, vitae ultrices ligula viverra et. Phasellus cursus diam non semper iaculis. Maecenas cursus commodo augue id dignissim. Etiam eget ante odio. Suspendisse imperdiet purus purus, ut pellentesque lorem pharetra vitae. Cras sed tortor id tellus rutrum dictum. Morbi viverra urna nec metus pretium, sed ultrices lorem dictum. Nullam mattis turpis dapibus massa molestie.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>Send message to seller</h4>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="InputEmail">Email address</label>
                            <input type="email" class="form-control" id="InputEmail" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="InputText">Your text</label>
                            <textarea class="form-control" id="InputText" name="message" placeholder="Type in your message" rows="5" style="margin-bottom:10px;"></textarea>
                        </div>
                        <button class="btn btn-info" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
