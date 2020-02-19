    <!-- button header -->
    <nav class="navbar navbar-light bg-white">
        <div class="garis1">
                 <a href="{{route('simulasi')}}"><button class="btn-simulasi my-2 my-sm-0 " type="submit">Simulasi</button></a>
        </div>
        <br>
    </nav>
        <div>
            <p class="huruf-simulasi">Simulasikan produk sesuai kebutuhan dan keinginan</p>
        </div>
        <div class="garis2"></div>

    <!-- Close button header -->

<div class="container-fluid">

    <div class="row">
        <div class="col-9">
            <nav>
                <div class="product-text">
                    <p>Product</p>
                </div>
                <div class="product-garis">
                </div>
            </nav>
            <br>
            <div class="product">
                                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{('assets/image/imgslading.jpg')}}" height="450px" width="100%" style="border-top-left-radius:20px; border-top-right-radius:20px; border-bottom-left-radius:20px; border-style:none;" alt="">
                    <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{('assets/image/imgslading2.jpg')}}" height="450px" width="100%" style="border-top-left-radius:20px; border-top-right-radius:20px; border-bottom-left-radius:20px; border-style:none;" alt="">
                    <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="{{('assets/image/imgslading3.jpg')}}" height="450px" width="100%" style="border-top-left-radius:20px; border-top-right-radius:20px; border-bottom-left-radius:20px; border-style:none;" alt="">
                        <div class="text">Caption Two</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="col-2">
            <nav>
                <div class="category-text">
                    <p>Category</p>
                </div>
                <div class="category-garis">
                </div>
            </nav>
            <br>
            <div class="category">

            </div>
        </div>
    </div>
      <!-- line Header -->
      <br>
      <nav class="navbar navbar-light bg-white">
        <img src="{{('assets/image/line1.png')}}"  height="6" width="100%" class="d-inline-block align-top" alt="">
    </nav>

    <div class="row">
        <div class="col-sm-12">
            <nav>
                <div class="warna-motif-text">
                    <p>Warna & Motif</p>
                </div>
                <div class="warna-motif-garis">
                </div>
            </nav>
            <br>

            <div class="warna-motif">
                <div id="carausel-main" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="warna-motif-content">

                      </div>
                      <div class="warna-motif-content">

                    </div>
                    <div class="warna-motif-content">

                    </div>
                    <div class="warna-motif-content">

                    </div>
                    <div class="warna-motif-content">

                    </div>
                    </div>
                    <a class="carousel-control-prev" href=".carousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href=".carousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

             <!-- line Header -->
            <br>
                <nav class="navbar navbar-light bg-white">
                    <img src="{{('assets/image/line1.png')}}"  height="6" width="100%" class="d-inline-block align-top" alt="">
                </nav>
                <div class="row">
                    <div class="col-sm-12">
                        <nav>
                            <div class="layanan-text">
                                <p>Layanan Kami</p>
                            </div>
                            <div class="layanan-garis">
                            </div>
                        </nav>
                        <br>

                        <div class="layanan">
                            <div class="layanan-content">
                                <center><img src="{{('assets/image/1.png')}}"  height="55" width="65" class="d-inline-block align-top" alt=""></center>
                                <p>Pengantaran</p>
                            </div>
                            <div class="layanan-content">
                                <center><img src="{{('assets/image/2.png')}}"  height="55" width="65" class="d-inline-block align-top" alt=""></center>
                                <p>Perakitan</p>
                            </div>
                            <div class="layanan-content">
                                <center><img src="{{('assets/image/3.png')}}"  height="55" width="65" class="d-inline-block align-top" alt=""></center>
                                <p>Pembayaran</p>
                            </div>
                            <div class="layanan-content">
                                <center><img src="{{('assets/image/4.png')}}"  height="55" width="65" class="d-inline-block align-top" alt=""></center>
                                <p>Cara Beli</p>
                            </div>
                            <div class="layanan-content">
                                <center><img src="{{('assets/image/5.png')}}"  height="55" width="65" class="d-inline-block align-top" alt=""></center>
                                <p>Hubungi Kami</p>
                            </div>
                            <div class="layanan-content">
                                <center><img src="{{('assets/image/6.png')}}"  height="55" width="60" class="d-inline-block align-top" alt=""></center>
                                <p>Pertanyaan</p>
                            </div>

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
        </div>
    </div>
</div>

