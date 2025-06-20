@extends('index')

@section('content')

<section class="site-section bg-light" id="section-contact">
    <div class="container">
      <div class="row">

<div class="col-md-12 text-center mb-5 site-animate">
    <h2 class="display-4">Get In Touch</h2>
    <div class="row justify-content-center">
      <div class="col-md-7">
        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
  </div>

  <div class="col-md-7 mb-5 site-animate">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="sr-only">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="message" class="sr-only">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
      </div>
    </form>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-4 site-animate">
    <p><img src="images/about_img_1.jpg" alt="" class="img-fluid"></p>
    <p class="text-black">
      Address: <br> 121 Street, Melbourne Victoria <br> 3000 Australia <br> <br>
      Phone: <br> 90 987 65 44 <br> <br>
      Email: <br> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
    </p>

  </div>
  
</div>
</div>
</section>
<div id="map"></div>

@endsection