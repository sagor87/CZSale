@extends('layouts.master')
@section('content')
<div class="col-lg-9 content-right">
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
    </ol>
    <h2>Contact</h2>
    <div class="row">
        <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3153.33730031349!2d-122.40063970000001!3d37.78213429999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807e0fbb1b7b%3A0x9b0401f7786f9a39!2s795+Folsom+St%2C+San+Francisco%2C+CA+94107%2C+Spojen%C3%A9+st%C3%A1ty+americk%C3%A9!5e0!3m2!1scs!2scz!4v1412057873232" frameborder="0" style="border: none; width: 100%; height: 400px;"></iframe>
        </div>
        <div class="col-md-4">
            <div class="well well-sm">
                <address>
                    <strong>Doe's Sales, Inc.</strong><br />
                    795 Folsom Ave, Suite 600<br />
                    San Francisco, CA 94107<br />
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                <address>
                    <strong>John Doe</strong><br />
                    <a href="mailto:#">john.doe@example.com</a>
                </address>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="InputEmail">Email address</label>
                            <input type="email" class="form-control" id="InputEmail" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Subject</label>
                            <input type="email" class="form-control" id="InputSubject" placeholder="Enter your subject">
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
