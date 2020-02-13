<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    <body>
        <!-- Parallax Effect -->
        <div id="parallax-bg" class="parallax">
            <img id="main-bg" alt="Landscape" src="{{ asset('img/tacomacityscape_opacity40.png') }}">
        </div>

        <!-- End Effect -->
        <div id="header">
            <!-- <div id="firefly"></div> -->
            <ul id="menu">
                <li><a href="#box1" class="link">Home</a></li>
                <li><a href="#box2" class="link">About</a></li>
                <li><a href="#box3" class="link">Portfolio</a></li>
                <li><a href="#box4" class="link">Social</a></li>
            </ul>
        </div><!-- end header -->
        <!-- Begin Wrapper -->
        <div id="wrapper">
        <ul id="mask">
            <li id="box1" class="box">
                <a name="box1"></a>
                <div class="content1 float-left">

                    <div class="content1-wrapper">
                        <!-- Temp Stuff -->
                        <div id="myname">
                            DJ Cyphers
                        </div>
                        <div id="content" class="flex-box">
                            Under Developement. Stay tuned for more updates!
                        </div>

                        <div class="links">
                            <!-- Links go here -->
                            <a href="https://github.com/djcyphers/laravelwebsite">GitHub</a>
                            <a href="https://www.linkedin.com/in/dennis-cyphers-74932219/">LinkedIn</a>
                            <a href="https://www.facebook.com/iheardancemusic">Facebook</a>
                            <a href="https://djcyphers.com/blog">Blog</a>
                        </div>
                    </div>
                    <!-- End Temp -->

                </div>
            </li><!-- end box1 -->

            <li id="box2" class="box">
                <a name="box2"></a>
                <div class="content2 scroller">

                    @include('partials.about-info')

                </div>
            </li><!-- end box2 -->

            <li id="box3" class="box">

                <a name="box3"></a>

                <div class="content3 scroller">
                    @include('partials.albums-view')
                </div>

            </li><!-- end box3 -->

            <li id="box4" class="box">
                <a name="box4"></a>
                <div class="content4 scroller">
                    <div class="content row">
                        <div class="col-lg-12">
                        <ul class="juicer-feed" data-feed-id="facebook-c0982d7f-ccd1-4f5a-8a99-24ab5e0bf5e8"></ul>
                        <!-- <iframe src="http://www.ustream.tv/embed/10054617" width="608" height="368" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe><br /> -->
                        </div>
                    </div>
                </div>
            </li><!-- end box4 -->

        </ul><!-- end mask -->
    </div><!-- end wrapper -->

        <!-- Footer Layout -->
        @include('partials.footer-scripts')
    </body>
</html>
