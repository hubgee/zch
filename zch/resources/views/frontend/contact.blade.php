@extends('layouts.app')
@section('content')

<!-- Page Title -->
<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ route('home') }}">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="section contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="address-block">
          <div class="media">
            <i class="far fa-map"></i>
            <div class="media-body">
              <h3>Location</h3>
              <p>PO Box 16122 Zomba Central Hospital <br>Zomba, Malawi</p>
            </div>
          </div>
          <div class="media">
            <i class="fas fa-phone"></i>
            <div class="media-body">
              <h3>Phone</h3>
              <p>
                (+265) 123-456-789
                <br>(+265) 123-456-790
              </p>
            </div>
          </div>
          <div class="media">
            <i class="far fa-envelope"></i>
            <div class="media-body">
              <h3>Email</h3>
              <p>
                info@zomba.mw
                <br>info@zomba.mw
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="contact-form">
          <form action="!#" class="row">
            <div class="col-lg-6">
              <input type="text" name="name" class="form-control main" placeholder="Name" required>
            </div>
            <div class="col-lg-6">
              <input type="email" class="form-control main" placeholder="Email" required>
            </div>
            <div class="col-lg-12">
              <input type="text" class="form-control main" placeholder="Phone" required>
            </div>
            <div class="col-lg-12">
              <textarea name="message" rows="10" class="form-control main" placeholder="Your message"></textarea>
            </div>
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--====  End of Contact Form  ====-->

<section class="map">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.569262372038!2d35.3101916751678!3d-15.399796885186882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d90570b4abdb5d%3A0x164984b729c090aa!2sZomba%20Central%20Hospital!5e0!3m2!1sen!2smw!4v1780406463759!5m2!1sen!2smw"
    width="1450"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--====  End of Google Map  ====-->

@endsection
