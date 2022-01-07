@extends('layouts.user_layouts')
@section('content')
<?php $pages='contact';?>
    <main>
        <section class="contact-section">
            <h2 class="section-title">GET IN TOUCH</h2>
            <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>

            <div class="contact-cards-wrapper">
                <div class="contact-card">
                    <h6 class="contact-card-title">CALL US</h6>
                    <p class="contact-card-content">+8801849498958</p>
                </div>
                <div class="contact-card">
                    <h6 class="contact-card-title">Email Us</h6>
                    <p class="contact-card-content">mehedituhsar@gmail.com</p>
                </div>
            </div>

            <form action="{{route('contact.store')}}" class="contact-form" method="post">
                @csrf
                <div class="form-group form-group-name">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="NAME">
                </div>
                <div class="form-group form-group-email">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
                </div>
                <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <textarea name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5"></textarea>
                </div>
                <div id="success">@include('alert.msg')</div>
                <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>
            </form>

        </section>
        <section class="location-section">
            <h5 class="section-title">MY LOCATION</h5>

            <div class="map-wrapper embed-responsive embed-responsive-16by9"">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2216835574031!2d90.4163819848832!3d23.763530516306947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c742c99a7d39%3A0xcfd8e3e6896a96f8!2sRahat%20Complex!5e0!3m2!1sen!2sbd!4v1641227193189!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" class="embed-responsive-item"></iframe>
            </div>
        </section>
        <footer>Live Resume @ <a href="#" target="_blank" rel="noopener noreferrer">Own</a>. All Rights Reserved 2020</footer>
    </main>


@endsection
