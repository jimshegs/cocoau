@extends('layouts.master')
@section('title', 'Contact Us')

@section('content')
<div class="container" style="height:150px;"></div>
<div class="container" style="padding-bottom: 50px;">
    <h1 class="title text-left" id="contact">Contact Us</h1>
    <div class="space"></div>
    <div class="row">
        <div class="col-sm-6">
            <div>
                @include('backend.partials.errors')
                @include('backend.partials.success')
                <form action="/contact" method="post" role="form" id="footer-form">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Name" name="name" required>
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter email" name="email" required>
                        <i class="fa fa-envelope form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone Number" required>
                        <i class="fa fa-phone form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="message">Message</label>
                        <textarea class="form-control" rows="8" id="message" value="{{ old('message') }}" placeholder="Message" name="message" required></textarea>
                        <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                    <input type="submit" value="Send" class="btn btn-default">
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <p class="large">Should you need our help, feel free to reach out to us at anytime. We are always available and ready to help you.</p>
                <p class="large">God loves you.</p>
                <p class="large">The Church of Christ loves you.</p>
                <ul class="list-icons">
                    <li><i class="fa fa-map-marker pr-10"></i> Health Sciences Lecture Theatre A [Sundays - 9AM]</li>
                    <li><i class="fa fa-phone pr-10"></i> +2348031352102</li>
                    <li><i class="fa fa-envelope-o pr-10"></i>oaucoc@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
