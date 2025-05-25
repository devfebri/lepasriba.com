<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Lepas Riba</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/meyawo.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    {{-- <style>
        .btn-success.custom-shadow:hover {
            box-shadow: 0 4px 16px rgba(60, 180, 75, 0.4);
            transition: box-shadow 0.5s;
            font-style: italic;

        }
    </style> --}}
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container justify-content-center">
            <a class="logo " href="#">Lepas Riba</a>
            
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header" >
        {{-- <div class="overlay"></div> --}}
        <div class="header-content container" >
           
            <h3 style="font-weight: bold; text-shadow: 2px 2px 6px rgba(0,0,0,0.3);margin-top:40px;">
                <center>KLIK TOMBOL DI BAWAH INI <br> SEKARANG JUGA!</center>
            </h3>
            <h5 style="font-weight: bold; text-shadow: 1px 1px 4px rgba(0,0,0,0.2);">
                <center>AGAR DAPAT TERHUBUNG DENGAN KONSULTAN KAMI</center>
            </h5>
            <br>
            <div style="height: 100px; border: 2px solid transparent;">
                <img id="panah-anim" src="{{ asset('img/panahred.png') }}" alt="Bootstrap" width="300" height="100" class="d-block mx-auto ">


            </div>
            <br>
            <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                <a href="https://wa.me/082319177519" target="_blank" class="btn btn-success custom-shadow" style="height: 40px; border-radius: 30px; display: flex; align-items: center; justify-content: center; padding: 0 40px;">


                    <b>HUBUNGI KONSULTAN SEKARANG</b>
                </a>
            </div>


        </div>
    </header><!-- end of page header -->
    <br>
    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="{{ asset('template/assets/imgs/man.png') }}" class="about-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <h2 class="section-title mb-3">Ga Bosen Terjerat Terus ?</h2>
                    <p>
                        Cukup catchy dan relatable! Ini seperti pertanyaan retoris yang membuat orang berpikir tentang situasi keuangan mereka.
                        Tagline ini juga punya potensi besar untuk resonansi dengan target audiens yang merasa terjebak dalam masalah keuangan.
                    </p>
                    {{-- <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button> --}}
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <h6 class="section-title ">1.000 Orang Alhamdulillah Sudah Praktek & Sudah <br> Terbantu Secara Nyata! </h6>
            <p class="section-subtitle mb-6">DAN ALHAMDULILLAH MELALUI DLR SUDAH BEBERAPA CLIENT MENJADI MUALAF</p>



            <iframe width="300" height="711" src="https://www.youtube.com/embed/kXQGPp8Jtnw" title="Setelah proses dengan Dakwah Lepas Riba" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="300" height="711" src="https://www.youtube.com/embed/kXQGPp8Jtnw" title="Setelah proses dengan Dakwah Lepas Riba" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <!-- row -->
            
            <p class="section-subtitle mt-5">Dan Hasilnya Mereka bisa merasakan bahagianya <b>TERBEBAS Dari Utang Riba Ratusan Juta Hingga Miliaran Rupiah, </b>
                Hidup TENANG, Keluarga Harmonis, dan Bisnis BERKEMBANG Dapatkan Kesempatan Untuk Berkonsultasi Langsung di Office Dakwah Lepas Riba</p>

        </div>
    </section><!-- end of service section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright
                <script>
                    document.write(new Date().getFullYear())

                </script> &copy; <a href="javascript:void(0)">Padepokan IT</a> Distribution </a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-youtube"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="{{asset('template/assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script>
        $(document).ready(function() {
            function animateArrow() {
                $("#panah-anim").animate({
                        marginTop: "-20px"
                    }, 700)
                    .animate({
                        marginTop: "0px"
                    }, 700, animateArrow);
            }
            animateArrow();
        });

    </script>

    <script src="{{asset('template/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{asset('template/assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Meyawo js -->
    <script src="{{asset('template/assets/js/meyawo.js')}}"></script>

    

</body>

</html>
