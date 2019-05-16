<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Indonesian Resto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Tasty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="specialties.php" class="nav-link">Specialties</a></li>
            <li class="nav-item"><a href="reservation.php" class="nav-link">Reservation</a></li>
           
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
              <h1 class="mb-3">Discover Our Exclusive Menu</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
            <div class="block-17">
              <form action="" method="post" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">

                  <div class="textfield-name one-third"><input type="text" class="form-control" placeholder="Name"></div>

                  <div class="textfield-phone one-third"><input type="text" class="form-control" placeholder="Phone"></div>

                  <div class="book-date one-third"><input type="text" id="book_date" class="form-control" placeholder="M/D/YYYY"></div>

                  <div class="book-time one-third">
                    <input type="text" id="book_time" class="form-control" placeholder="Time">
                  </div>

                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Person</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4+</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Book a table">  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Menu</span>
            <h2>Discover Our Exclusive Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span> Main</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Dessert</a>
              <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Drinks</a>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/ayam-cincane.jpeg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Ayam Cincane</h3>
                          <p>Ayam cincane khas Kalimantan Timur</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: initial;">Rp.45.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/buburpedas.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Bubur Pedas</h3>
                          <p>Bubur pedas khas Kalimantan Barat</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp.15.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/gudeg.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Gudeg Manis</h3>
                          <p>Gudeg khas Daerah Istimewa Yogyakarta</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp.25.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/ayam-betutu-bali.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Ayam Betutu</h3>
                          <p>Ayam betutu khas Bali</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 70.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/ayam-taliwang.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Ayam Taliwang</h3>
                          <p>Ayam taliwang khas Nusa Tenggara Barat</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 85.000</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/gulai-belacan.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Gulai Belacan</h3>
                          <p>Gulai belacan khas Riau</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 40.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/Gulai-ikan.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Gulai Ikan Patin</h3>
                          <p>Gulai ikan patin khas Jambi</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 38.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/rujak-cingur.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Rujak Cingur</h3>
                          <p>Rujak cingur khas Jawa Timur</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 13.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/sup-konro.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sup Konro</h3>
                          <p>Sup konro khas Sulawesi Selatan</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 45.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/soto-banjar.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Soto Banjar</h3>
                          <p>Soto banjar khas Kalimantan Selatan</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 35.000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/serabi-solo.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Serabi Solo</h3>
                          <p>Serabi solo khas Jawa Tengah</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 10.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/klepon.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Klepon</h3>
                          <p>Klepon khas Jawa Timur</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 10.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/lupis.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Lupis Ketan</h3>
                          <p>Lupis Ketan khas Jawa</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 8.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/nagasari.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Kue Nagasari</h3>
                          <p>Kue Nagasari khas Makassar</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 5.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/semar-mendem.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Semar Mendem</h3>
                          <p>Semar mendem khas Jawa</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 5.000</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/wajik.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Wajik Gula Jawa</h3>
                          <p>Wajik gula jawa khas Jawa Tengah</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 23.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/kue-bugis.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Kue Bugis</h3>
                          <p>Kue bugis khas Sulawesi</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 7.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/kerak-telor.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Kerak Telor</h3>
                          <p>Kerak telor khas Betawi(Jakarta)</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 15.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/Lumpia.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Lumpia</h3>
                          <p>Lumpia khas Semarang</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 10.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/gethuk.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Gethuk Kelapa</h3>
                          <p>Gethuk kelapa khas Jawa Tengah</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 12.000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/air-kawa.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Air Kawa</h3>
                          <p>Air kawa khas Padang Sumatera Barat</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 12.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/air-mata-pengantin.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Air Mata Pengantin</h3>
                          <p>Air mata pengantin khas Riau</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 15.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/wedang-angsle.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Wedang Angsle</h3>
                          <p>Wedang angsle khsa Jawa Timur</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 15.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/jus-pinang.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Jus Pinang</h3>
                          <p>Jus pinang khas Jambi</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 9.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/kacang-merah.png);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Es Kacang Merah</h3>
                          <p>Es kacang merah khas Sumatra Selatan</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 18.000</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/bir-pletok.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Bir Pletok</h3>
                          <p>Bir pletok khas Betawi</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 10.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/wedang-ronde.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Wedang Ronde</h3>
                          <p>Wedang ronde khas Jawa Tengah</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 15.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/sekoteng.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sekoteng</h3>
                          <p>Sekoteng khas Jawa Tengah</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 9.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/teler.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Es Teler</h3>
                          <p>Es teler khas Jakarta</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 10.000</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/selendang.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Es Selendang Mayang</h3>
                          <p>Es selendang mayang khas Betawi</p>
                        </div>
                        <div class="one-forth">
                          <span class="price" style="font-size: inherit;">Rp. 13.000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

   <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Indonesian Resto</h2>
              <p>Restoran kami menyediakan berbagai macam makanan khas Nusantara, yang mampu menyesuaikan dengan selera para pelanggan.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Opening Hours</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Monday: <span>08:00 - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Tuesday: <span>08:00 - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Wednesday: <span>08:00 - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Thursday: <span>08:00 - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Friday: <span>08:00 - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Saturday: <span>08:00 - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Sunday: <span>08:00 - 22:00</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Jl. Jawa No. 96 Jember, Jawa Timur</a></li>
                <li><a href="#" class="py-2 d-block">(0336) 962 154</a></li>
                <li><a href="#" class="py-2 d-block">info@indonesianresto.com</a></li>
                <li><a href="#" class="py-2 d-block">indonesianresto@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Subscribe">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>