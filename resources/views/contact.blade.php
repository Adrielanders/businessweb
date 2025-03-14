@extends('layout.app')
@section('body')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
        background-color: #f5f5f5; /* Soft gray background */
    }
    header.contact-header {
        background-color: black;
        color: white;
        padding: 60px 0;
        text-align: center;
    }
    header.contact-header h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 0;
    }
    h1{
        margin-top: ;
    }
    .social-icons a {
        margin: 0 10px;
        color: #333;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: #0d47a1; /* Color change on hover */
    }
</style>

<!-- Contact Us Header -->
<header class="position-relative text-center text-white bg-dark">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">{{ $content['title'] }}</h1>
  
    </div>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
</header>

<!-- Main Section -->
<section class="py-5">
    <div class="container">
        <!-- Status Message -->
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <form action="#" method="POST" class="shadow-sm p-4 rounded border bg-light">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" class="form-control text-muted" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control text-muted" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea name="message" id="message" class="form-control text-muted" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <div class="contact-info">
                    <p class="fw-bold">Email: {!!  $content['email']  !!}</p>
                    <p class="fw-bold">Phone: {!!  $content['phone']  !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media & Map Section -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h3>Follow Us on Social Media</h3>
        <div class="social-icons mt-3">
            <a href="{{ $content['instagram'] }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="{{ $content['whatsapp'] }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="{{ $content['linkedin'] }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>

        <h3 class="mt-5">Our Location</h3>
        <div class="map-responsive mt-3">
            {!! $content['map'] !!}
        </div>
    </div>
</section>

<!-- Font Awesome CDN for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@stop
