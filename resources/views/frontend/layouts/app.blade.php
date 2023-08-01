<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>ASIK</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('TemplateFront') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('TemplateFront') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('TemplateFront') }}/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="{{ asset('TemplateFront') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('TemplateFront') }}/assets/css/lightbox.css">
    <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->

    <style>
        /* CSS untuk tampilan overlay loading */
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.87);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            color: #fff;
            font-size: 24px;
        }

        #loading-text {
            font-size: 24px;
            animation: blink-animation 1s infinite;
        }

        @keyframes blink-animation {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
    </style>
</head>


<body>

    <div id="loading-overlay">
        <span id="loading-text">
            <img src="https://fileshaudy.000webhostapp.com/files/logokotabogor.gif" width="25px" alt=""> ASIK
            KOTA BOGOR
        </span>
    </div>


    <!--header-->
    @include('frontend.layouts.header')

    <!-- ***** Main Banner Area Start ***** -->
    @include('frontend.layouts.banner')
    <!-- ***** Main Banner Area End ***** -->


    @yield('content')

    @include('frontend.layouts.footer')



    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('TemplateFront') }}/vendor/jquery/jquery.min.js"></script>
    {{-- <script src="{{ asset('TemplateFront') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('TemplateFront') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('TemplateFront') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('TemplateFront') }}/assets/js/lightbox.js"></script>
    <script src="{{ asset('TemplateFront') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('TemplateFront') }}/assets/js/video.js"></script>
    <script src="{{ asset('TemplateFront') }}/assets/js/slick-slider.js"></script>
    <script src="{{ asset('TemplateFront') }}/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>

    <script>
        // Fungsi untuk menampilkan overlay loading saat halaman dimuat ulang
        function showLoadingOverlay() {
            var loadingOverlay = document.getElementById('loading-overlay');
            loadingOverlay.style.display = 'flex';
        }

        // Fungsi untuk menyembunyikan overlay loading setelah halaman selesai dimuat
        function hideLoadingOverlay() {
            var loadingOverlay = document.getElementById('loading-overlay');
            loadingOverlay.style.display = 'none';
        }

        // Event listener untuk menampilkan overlay loading sebelum halaman dimuat ulang
        window.addEventListener('beforeunload', showLoadingOverlay);
        // Event listener untuk menyembunyikan overlay loading setelah halaman selesai dimuat
        window.addEventListener('load', hideLoadingOverlay);
    </script>
</body>

</html>
