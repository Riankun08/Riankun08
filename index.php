<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Rian Saputra</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <style type="text/css">
        
        #animasi-teks{
            font-size: 60px ;
            width: 100%;
            white-space: nowrap;
            overflow:hidden;
            -webkit-animation: typing 5s steps(70,end);
            animation: animasi-ketik 5s steps(70,end);
        }

        @keyframes animasi-ketik{
            form {width: 0;}
        }

        @-webkit-keyframes animasi-ketik{
            form {width: 0;}   
        }

    </style>
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <p class="footer-site-logo" href="#0" style="width:100%; margin:2px;font-size: 35px; font-family: arial; color: white;">Muhamad Rian Saputra</p>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll"  href="#home" title="home">Beranda</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">Tentang</a></li>
                <li><a class="smoothscroll"  href="#works" title="works">Pekerjaan</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Kontak</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/saya2.JPG" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Halo</h3>

                <h1 id="animasi-teks">
                    Saya Rian Saputra. <br>
                    Saya Seorang Web  <br>
                    Sistem Developer.
                </h1>
            

                <div class="home-content__buttons">
                    <a href="#works" class="smoothscroll btn btn--stroke">
                        projects terakhir
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                       Tentang saya
                    </a>
                </div>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/jaelani.error"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#contact"><i class="im im-whatsapp" aria-hidden="true"></i><span>Whatsapp</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/rian_saputra_62/?hl=id"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">
        
        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h3>Tentang</h3>
                <h1>Ketahui tentang saya </h1>
                <p class="lead">Perjalanan hidup saya tertuju pada satu hal yaitu <u>Belajar</u> saya tidak sangat pintar tapi saya akan berusaha agar lebih pintar dari orang yang sangat pintar sekalipun, yang terpenting saya mempunyai kemauan untuk terus <u>Belajar</u> dan terus bisa Memperbarui diri saya agar menjadi lebih <u>Baik</u> lagi</p>
            </div>
        </div>

        <div class="row about-content">

            <div class="col-six tab-full left">
                <h3>Tentang kemampuan saya</h3>

                <p>Pertama saya mengenal dunia programer yaitu pas masuk kedalam sekolah menengah kejuruan (SMK) .</p>

                <p>
                Saya memperdalam bahasa <u>Pemrograman</u> dan melatih logika saya di saat saya mulai memasuki dunia pekerjaan dibagian IT dan disamping semua itu saya senantiasa selalu berdoa dan selalu beribadah, nilai <u>Agama</u> tidak pernah terlupakan didalam kehidupan saya .	
                </p>
            </div>

            <div class="col-six tab-full right">
                <h3>Kemampuan yang Saya punya.</h3>

                <ul class="skill-bars">
                    <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>HTML5</strong>
                    </li>
                    <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>CSS</strong>
                    </li>
                    <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>JQuery</strong>
                    </li>
                    <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>PHP</strong>
                    </li>
                    <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Framework Laravel</strong>
                    </li>   
                </ul>
            </div>

        </div> <!-- end about-content -->

        <div class="row about-content about-content--buttons">

            <div class="col-six tab-full left">
                <a href="cv/rian.pdf" class="btn btn--primary full-width">Download CV Saya</a>
            </div>
            <div class="col-six tab-full right">
                <a href="#contact" class="btn full-width">Disini Saya sekarang</a>
            </div>

        </div> <!-- end about-content buttons -->

        <div class="row about-content about-content--timeline">

            <div class="col-full text-center">
                <h3>Pengalaman Kerja Saya.</h3>
            </div>

            <div class="col-six tab-full left">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">Agustus 2019 - September 2019</p>
                            <h3>Developer Web</h3>
                            <h5>Back End</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>Pengalaman bekerja saya sebagai Back end developer dari Agustus 2019 - September 2019.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">Oktober 2019 - November 2019</p>
                            <h3>Security Enginering</h3>
                            <h5>System</h5>
                        </div>
                        <div class="timeline__desc">	
                            <p>Pengalaman bekerja saya sebagai security enginering dari Oktober 2019 - November 2019.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end left -->

            <div class="col-six tab-full right">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">November 2019 - Desember 2019</p>
                            <h3>Developer Web</h3>
                            <h5>Front End</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>Pengalaman bekerja saya sebagai Front end developer dari November 2019 - Desember 2019.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">Januari 2020 - Februari 2020</p>
                            <h3>Design Web</h3>
                            <h5>UI & UX</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>Pengalaman bekerja saya sebagai UI & UX dari Januari 2020 - Februari 2020.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end right -->

        </div> <!-- end about-content timeline -->

    </section> <!-- end about -->
    

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Portfolio</h3>
                <h1>Projects saya.</h1>
                
                <p class="lead">Disini berisi semua project - project yang pernah saya buat atau saya telah menjadi peran dalam membuat project tersebut dan contoh nya bisa langsung dilihat dengan cara mengklik project mana yang ingin di lihat.</p>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="http://membership.aliya.asia" class="" title="Sistem Aplikasi Membership" data-size="1050x700">
                                <img src="images/portfolio/membership.png" 
                                     srcset="images/portfolio/membership.png 1x, images/portfolio/membership.png 2x" alt="">
                                <span class="Web Developer || Laravel"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Sistem Aplikasi Membership
                            </h3>
                            <p class="item-folio__cat">
                                Web Developer || Laravel
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://id-id.facebook.com/" class="thumb-link" title="Facebook" data-size="1050x700">
                                <img src="images/portfolio/koko.jpg" 
                                     srcset="images/portfolio/koko.jpg 1x, images/portfolio/koko.jpg 2x" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Facebook
                            </h3>
                            <p class="item-folio__cat">
                                Web System || Security Enginering
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/accounts/login/?hl=id" title="Instagram" class="thumb-link" data-size="1050x700">
                                <img src="images/portfolio/kk.jpg" 
                                     srcset="images/portfolio/kk.jpg 1x, images/portfolio/kk@2x.jpg 2x" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Instagram
                            </h3>
                            <p class="item-folio__cat">
                                Web System || Security Enginering
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.youtube.com/" class="thumb-link" data-size="1050x700">
                                <img src="images/portfolio/yt.jpg"
                                     srcset="images/portfolio/yt.jpg 1x, images/portfolio/yt@2x.jpg 2x" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Youtube
                            </h3>
                            <p class="item-folio__cat">
                                Web Design || UI & UX
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


    </section> <!-- end works -->



    <!-- testimonials
    ================================================== -->
    <div class="s-testimonials">

        <div class="overlay"></div>

        <div class="row testimonials-header">
            <div class="col-full">
                <h1 class="h02">Apa yang orang katakan.</h1>
            </div>
        </div>

        <div class="row testimonials">

            <div class="col-full testimonials__slider">

                <div class="testimonials__slide">
                    <img src="images/avatars/oke.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Orang ini sangat terpercaya dan punya kemauan untuk terus belajar dan orang seperti ini akan menjadi anak bangsa yang akan sukses dikemudian hari.</p>
                    <div class="testimonials__author h06">
                        Ir.Jokowi dodo
                        <span>Presiden Republik Indonesia</span>
                    </div>
                </div>

                <div class="testimonials__slide">
                    <img src="images/avatars/gates.jpg" alt="Author image" class="testimonials__avatar">
                    <p>Tipe orang yang tidak mempunyai batasan untuk belajar dan terus menerus berusaha menjadi yang terbaik dan tidak pernah mengecewakan orang yang sudah percaya padanya.</p>
                    <div class="testimonials__author h06">
                        Billgates
                        <span>CEO, Microsoft</span>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
    <section id="stats" class="s-stats">
        <div class="row block-1-4 block-tab-1-2 block-mob-full stats">

            <div class="col-block stats__col ">
                <div class="stats__count">
                    100
                </div>
                <h4>Awards Received</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    1500
                </div>
                <h4>Cups of Coffee</h4>
            </div>
            <div class="col-block stats__col stats__col--highlight">
                <div class="stats__upsign">
                    <a href="#"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
                <div class="stats__count">
                    110
                </div>
                <h4>Projects Selesai</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    101
                </div>
                <h4>Clients Senang</h4> 
            </div>

        </div>
    </section> <!-- end s-stats -->


    <!-- s-stats
    ================================================== -->
    <section id="contact" class="s-contact target-section" >

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-full">
                <h3>Kontak</h3>
                <h1>Ucapkan Halo.</h1>
                
                <p class="lead">Ini adalah tentang kontak saya jika anda tertarik bisa langsung menghubungi saya jika tidak silahkan isi kolom dibawah dan submit jika sudah terisi semua akan otomatis masuk ke gmail saya.</p>
            </div>
        </div>

        <div class="row contact__main">
            <div class="col-eight tab-full contact__form">
                <form action="kirim.php" method="post" >
                    <fieldset>
    
                    <div class="form-field">
                        <input name="nama" type="text" id="contactName" placeholder="nama" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="email" type="email" id="contactEmail" placeholder="email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="judul" type="text" id="contactSubject" placeholder="judul" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="pesan" id="contactMessage" placeholder="pesan" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button type="submit" name="kirim" class="full-width btn--primary">Submit</button>
                        
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>
                        
            </div>
            <div class="col-four tab-full contact__infos">
                <h4 class="h06">Telepon</h4>
                <p>HandPhone: 0882-1961-2668<br>  
                    Whatsapp: 0882-1961-2668
                </p>

                <h4 class="h06">Email</h4>
                <p>muhamadrian81182@gmail.com<br>
                riankun.com
                </p>

                <h4 class="h06">Alamat</h4>
                <p>
                Kp.Leuweungkolot<br>
                Bogor
                </p>
            </div>
            Indonesia<br>

        </div>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <p class="footer-site-logo" href="#0" style="width:100%;font-size: 70px; font-family: times new roman; color: white;">Developer</p>
                </div>

                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/jaelani.error">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#contact">
                        <i class="im im-whatsapp" aria-hidden="true"></i>
                        <span>Whatsapp</span>
                    </a></li>
                    <li><a href="https://www.instagram.com/rian_saputra_62/?hl=id">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Muhamad Rian Saputra 2020</span> 
                    <span>Desain Dari <a href="https://www.styleshout.com/">styleshout</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("header-nav-wrap").style.top = "0";
              } else {
                document.getElementById("header-nav-wrap").style.top = "-50px";
              }
            }
    </script>

</body>

</html>