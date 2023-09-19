@extends('layouts.layout')
@section('content')

<div class="page-title">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-6">
                <div class="page-title-content">
                    <h3>Contact Us</h3>
                    <p class="mb-2">We are waiting your question</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="breadcrumbs"><a href="https://rekruter.imsaifun.com/contact#">Home </a><span><i class="bi bi-chevron-right"></i></span><a href="https://rekruter.imsaifun.com/contact#" class="active">Contact</a></div>
            </div>
        </div>
    </div>
</div>
<div class="contact-form section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="section-title text-center mb-50">
                    <h2>Find Us There</h2>
                    <p>Morbi convallis bibendum urna ut viverra.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center m-t-20">
            <div class="col-lg-4 mt-">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat
                        eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.
                    </p>
                    <ul class="m-t-30">
                        <li><i class="bi bi-phone"></i><strong>Phone:</strong> (123) 123-456</li>
                        <li><i class="bi bi-globe"></i><strong>Web:</strong> www.example.com</li>
                        <li><i class="bi bi-envelope"></i><strong>Email:</strong> mail@example.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 mt-50">
                <form action="https://rekruter.imsaifun.com/contact#">
                    <div class="row">
                        <div class="mb-30 col-lg-6"><input type="text" placeholder="First Name" class="form-control"></div>
                        <div class="mb-30 col-lg-6"><input type="text" placeholder="Last Name" class="form-control"></div>
                        <div class="mb-30 col-lg-6"><input type="email" placeholder="Email" class="form-control"></div>
                        <div class="mb-30 col-lg-6"><input type="text" placeholder="Subject" class="form-control"></div>
                        <div class="mb-30 col-lg-12"><textarea class="form-control" rows="10" name="name"></textarea></div>
                        <div class="col"><button class="btn btn-primary f-w-700 p-l-20 p-r-20 m-t-15" type="submit">Send Message</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection