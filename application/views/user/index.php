
    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8">
            <a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=f5anLvfaLxk"
              class="play-button d-block">
              <span class="icon-play"></span>
            </a>
            <h1 class="text-uppercase">Umroh Tour And Travel</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="pricing-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Daftar</span>
            <h2 class="font-weight-bold text-black">Paket Umroh</h2>
          </div>
        </div>
        <br>
        <h3 class="text-center mt-4">Cari Paket</h3>
        <form action="<?php echo base_url('Homepage/index') ?>" method="post">
         <div class="row mx-auto justify-content-center mt-3 mb-5 pt-4" style="height: 40px;">
           <h6 class="mr-2">Cari Paket</h6>
           <input type="text" id="search" class="mr-3" placeholder="Berdasarkan Nama" name="keyword" autocomplete="off">
           <h6 class="mr-2">Keberangkatan</h6>
           <input type="date" name="tgl" class="mr-3">
           <select name="maskapai" class="mr-3">
              <option value="">Maskapai</option>
              <?php foreach($maskapai as $a) { ?>
                <option value="<?= $a->ID_MASKAPAI ?>"><?= $a->NAMA_MASKAPAI ?></option>
              <?php } ?>
           </select>
           <select name="katering" class="mr-3">
              <option value="">Paket Katering</option>
              <?php foreach($katering as $b) { ?>
                <option value="<?= $b->ID_PAKET_KATERING ?>"><?= $b->NAMA_PAKET_KATERING ?></option>
              <?php } ?>
           </select>
           <input type="submit" class="btn btn-primary" name="submit">
        </div>
        </form>
        
        <hr>
        <h3 class="text-center mt-5">Semua Paket Umrah</h3>
        <div class="row mt-4 mb-4 ml-4 justify-content-center">
          <?php 
          if($paket != null){
          foreach($paket as $x) { ?>
           <div class="col-md-4 mt-4">
              <div class="card shadow" style="width: 18rem;">
                 <img src="<?= base_url($x->GAMBAR_PAKET_UMROH) ?>" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title"><?= $x->NAMA_PAKET_UMROH ?></h5>
                    <p class="card-text">Keberangkatan : <?= date('M jS, Y', strtotime($x->KEBERANGKATAN)) ?></p>
                    <p class="card-text">Kedatangan : <?= date('M jS, Y', strtotime($x->KEDATANGAN)) ?></p>
                    <p class="card-text">Harga : <h6>Rp. <?= $x->HARGA_PAKET_UMROH ?></h6></p>
                    <a href="<?php echo base_url('Homepage/infopaket/'.$x->ID_PAKET) ?>" class="btn btn-primary">Lihat Info</a>
                 </div>
              </div>
           </div>
          <?php } }else { ?>
            <div class="col-md-4 mt-4">
              <div class="card shadow" style="width: 18rem;">
                 <img src="<?= base_url('assets/front/images/maskapai.jpg') ?>" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Data Tidak Ditemukan</h5>
                 </div>
              </div>
           </div>
          <?php } ?>
        </div>
        <?= $this->pagination->create_links() ?>
      </div>
    </div>

    <div class="site-section  border-bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="icon-hotel display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Review Kamar Hotel</h5>
                <a href="<?php echo base_url('Homepage/kamar') ?>">Lihat Review Kamar Hotel</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="icon-plane display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Review Maskapai</h5>
                <a href="<?php echo base_url('Homepage/maskapai') ?>">Lihat Review Maskapai</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="icon-restaurant_menu display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Review Katering</h5>
                <a href="<?php echo base_url('Homepage/paketkat') ?>">Lihat Review Katering</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section about-section" id="about-section">
      <div class="container">
        <div class="row align-items-center mb-5 pb-5">
          <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <img src="<?php echo base_url() ?>/assets/front/images/Logo1.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <span class="sub-title">Informasi</span>
            <h3 class="mb-4">Mengenai Kami</h3>
            <p class="mb-4">PT.Haromain adalah situs travel umroh yang membantu jamaah dalam merencanakan dan memesan
              perjalanan umroh selain itu Haromain wepage dapat memberikan rekomendasi tentang travel umroh, penginapan,
              katering dan paket umroh. </p>
            <ul class="list-unstyled ul-check text-left success mb-5">
              <li>Kepuasan</li>
              <li>Terpercaya</li>
              <li>Resmi</li>
              <li>Kualitas</li>
            </ul>
          </div>
        </div>


      </div>
    </div>

    <div class="site-section" id="faq-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="<?php echo base_url() ?>/assets/front/images/about_2.jpg" alt="Image" class="img-fluid">
          </div>

          <div class="col-lg-6 ml-auto pl-lg-5">
            <span class="sub-title">Tanya Kami, Kami Senang Menjawabnya</span>
            <h2 class="font-weight-bold text-black mb-5">Pertanyaan Yang Sering Ditanyakan</h2>
            <div class="accordion" id="accordionExample">


              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Apakah travel yang terdaftar resmi?</a>
                </h2>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                  data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Pasti Terjamin, Travel Umroh Yang Terdaftar Telah Resmi <a href="#">Cnsectetur adipisicing</a>
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    Apakah hasil review jujur?
                  </a>
                </h2>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Iya hanya costumer yang telah memesan yang dapat meeview .</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    Bagaimana cara aplikasi ini bekerja?
                  </a>
                </h2>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Kami merupakan platform advertsing dan jasa pemesanan travel umroh!</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                    aria-controls="collapseFour">
                    Bagaimana pemesanannya?
                  </a>
                </h2>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Anda harus menghubungi pihak kami dalam pemesenan dengan clik tombol pesan maka akan langsung
                      terkait dengan link whatshap.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="mb-0 rounded mb-2">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    Dimana Kantor Pusat PT.Haromain?
                  </a>
                </h2>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Surabaya.</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- berita -->

    <div class="site-section" id="news-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <span class="sub-title">Berita &amp; Informasi</span>
            <h2 class="section-heading">Ada Berita Apa Hari Ini?</h2>
            <h5 class="section-subheading text-muted"></h5>
            <br>
          </div>
        </div>
        <div class="row">

          <?php if ($berita != null) {
          foreach($berita as $y){ ?>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?= $y->ID_BERITA ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url($y->GAMBAR_BERITA) ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?= $y->JUDUL ?></h4>
              <p class="text-muted"><?= date('M jS, Y', strtotime($y->TANGGAL)) ?></p>
            </div>
          </div>
          <?php } }else{ ?>
            <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets/front/images/maskapai.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Tidak ada berita baru</h4>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>

    <!-- end of berita -->

    <?php foreach($berita as $z){ ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?= $z->ID_BERITA ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?= $z->JUDUL ?></h2>
                  <p class="item-intro text-muted"><?= date('M jS, Y', strtotime($y->TANGGAL)) ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?= base_url($z->GAMBAR_BERITA) ?>" alt="">
                  <p><?= $z->ISI_BERITA ?></p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <div class="site-section" id="our-team-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Daftar</span>
            <h2 class="font-weight-bold text-black">Kepengurusan</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="<?php echo base_url() ?>/assets/front/images/person_2.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Yusrizal</h2>
              <span class="sub-title d-block mb-3">Designer</span>

            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="<?php echo base_url() ?>/assets/front/images/person_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Ilham</h2>
              <span class="sub-title d-block mb-3">Designer</span>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="<?php echo base_url() ?>/assets/front/images/person_4.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Alvath</h2>
              <span class="sub-title d-block mb-3">Engineer</span>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="<?php echo base_url() ?>/assets/front/images/alvian.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>Alvian Ababil</h2>
              <span class="sub-title d-block mb-3">Programmer</span>
            </div>
          </div>



        </div>
      </div>
    </div>

    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Services</span>
            <h2 class="font-weight-bold text-black">Our Services</h2>
            <p>Kami memberikan beberapa kelebihan dalam pelayanan yang ada yaitu</p>
          </div>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-interior-design display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Kemudahan Melakukan Pemesanan dan Review</h5>
                <p>User dapat login dan dapat melakukan pemesanan dan review secara langsung</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-turned-off display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Review Paket Umrah</h5>
                <p>Dengan adanya review paket umrah, dapat memudahkan user dalam mempercayai paket umrah tersebut</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-step-ladder display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Sistem Validasi</h5>
                <p>Review yang ada dipaket telah divalidasi secara langsung oleh admin</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-window display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Rating</h5>
                Sistem rating memudahkan user dalam mencari paket yang berkualitas
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-measuring display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Detail Paket</h5>
                <p>Setiap list paket, user dapat melihat isi secara detail paket tersebut</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-sit-down display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Terpercaya</h5>
                <p>Kami telah menjadi layanan melakukan review selama bertahun-tahun</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Berhubungan</span>
            <h2 class="font-weight-bold text-black">Hubungi Kami</h2>
            <p class="mb-5"></p>
          </div>
        </div>
        <div class="row">

          <div class="col-md-12 col-lg-12">
              <?php echo form_open_multipart('Homepage/tambah_kontak') ?>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama </label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Alamat Email">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Pesan</label>
                  <textarea name="pesan" cols="30" rows="5" class="form-control"
                    placeholder="Kirim Pesan Dan Saran"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>
              </div>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>

    <!-- iki kotak Modal  -->

    <div class="modal fade" id="modalkontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Terima kasih atas tanggapan anda</h5>
          </div>


          <input type="hidden" name="jumlahAsli" value="fullname">
          <input type="hidden" name="idBahan" value="email">
          <input type="hidden" name="idUser" value="message">


          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>

      </div>
    </div>
  </div>
