<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.header')
    </head>
    <body>
        <!-- Parallax Effect -->
        <div id="parallax-bg" class="parallax">
            <img id="main-bg" alt="Landscape" src="{{ asset('img/Wide-landscape-lakeview.png') }}">
        </div>

        <!-- End Effect -->
        <div id="header">
            <!-- <div id="firefly"></div> -->
            <ul id="menu">
                <li><a href="#box1" class="link">Home</a></li>
                <li><a href="#box2" class="link">About</a></li>
                <li><a href="#box3" class="link">Gallery</a></li>
                <li><a href="#box4" class="link">Social Media</a></li>
            </ul>
        </div><!-- end header -->
        <!-- Begin Wrapper -->
        <div id="wrapper">
        <ul id="mask">
            <li id="box1" class="box">
                <a name="box1"></a>
                <div class="content1">

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
                    </div>
                    <!-- End Temp -->

                </div>
            </li><!-- end box1 -->
            <li id="box2" class="box">
                <a name="box2"></a>
                <div class="content2">
                    <div class="inner">
                    @include('partials.about-info')
                    </div>
                </div>
            </li><!-- end box2 -->
            <li id="box3" class="box">
                <a name="box3"></a>
                <div class="content3">
                <div id="pics2">Gallery Goes Here</div>
                </div>
            </li><!-- end box3 -->
            <li id="box4" class="box">
                <a name="box4"></a>
                <div class="content4">

               <!-- <iframe src="http://www.ustream.tv/embed/10054617" width="608" height="368" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe><br /> -->

                </div>

            </li><!-- end box4 -->
        </ul><!-- end mask -->
    </div><!-- end wrapper -->

        <!-- Footer Layout -->
        @include('partials.footer')
        @include('partials.footer-scripts')
    </body>
</html>
