@extends('index')



@section('content')

<section class="site-section" id="section-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Delicious Menu</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">

          <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item site-animate">
              <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
            </li>
            <li class="nav-item site-animate">
              <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
            </li>
            <li class="nav-item site-animate">
              <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
            </li>
          </ul>

          <div class="tab-content text-left">
            <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
              <div class="row">
                <div class="col-md-6 site-animate">
                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$35.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$24.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$14.50</h6>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 site-animate">
                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$35.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$12.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$18.50</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
              <div class="row">
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$14.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$35.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$24.50</h6>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$18.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$35.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$12.50</h6>
                    </div>
                  </div>

                  
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
              <div class="row">
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$24.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$35.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$14.50</h6>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$18.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Italian Sauce Mushroom</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$35.50</h6>
                    </div>
                  </div>

                  <div class="media menu-item">
                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">Salted Fried Chicken</h5>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <h6 class="text-primary menu-price">$12.50</h6>
                    </div>
                  </div>

                  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  @endsection