<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>
    {!!\WebDevEtc\BlogEtc\Helpers::rss_html_tag()!!}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

</head>
<body id="top">
@if(Request::url() === 'http://djcyphers.com/blog')
    <section class="s-pageheader s-pageheader--home">
@else
    <section class="s-pageheader">
@endif

        <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <a class="logo">
                        <img src="{{ asset('img/Relevant_to_My_Interests.svg') }}" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="https://www.facebook.com/iheardancemusic/">@fa('facebook')</a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/djcyphers/">@fa('twitter')</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/djcyphers/">@fa('instagram')</a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/djcyphers/">@fa('pinterest')</a>
                    </li>
                    <li>
                        <a href="https://github.com/djcyphers/">@fa('github')</a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0">@fas('search')</a>
                <div class="header__search">
                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Search for:</span>
                            <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>
                </div>  <!-- end header__search -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
                <nav class="header__nav-wrap">
                    <h2 class="header__nav-heading h6">Site Navigation</h2>
                    <ul class="header__nav">
                        <li class="current"><a href="{{route('blogetc.index')}}" title="">@fa('home') Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">@fa('sitemap') Categories</a>
                            <ul class="sub-menu">
                                @include('blogetc::sitewide.show_all_categories')
                            </ul>
                        </li>
                        <li><a href="http://djcyphers.com/#box2" title="">@fa('info-circle') About</a></li>
                        <li><a href="{{ route('contactetc.form.main_contact_form') }}" title="">@fa('address-card') Contact</a></li>

                        <!-- Login if Guest-->
                        @guest
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        <!-- Login Name -->
                        <li class="has-children">
                            <a href="#0" title="">@fa('user') {{ Auth::user()->name }}</a>
                            <ul class="sub-menu">
                                <li>
                                    @if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts())
                                        Admin User
                                        <br>
                                        <a href='{{route("blogetc.admin.index")}}'>Admin Panel</a>
                                    @endif
                                </li>
                                    @if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts() && \Request::is('blog/*'))
                                        @isset($post)
                                    <li>
                                        <a href="{{$post->edit_url()}}">Edit Post</a>
                                    </li>
                                        @endisset
                                    @endif
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest

                    </ul> <!-- end header__nav -->
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
                </nav> <!-- end header__nav-wrap -->
            </div> <!-- header-content -->
        </header>

        @if(Request::url() === 'http://djcyphers.com/blog')
        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('img/halloweenparty.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="http://djcyphers.com/blog/category/lifestyle">Lifestyle</a></span>

                                <h1><a href="http://djcyphers.com/blog/welcome-to-my-blog" title="">Welcome to My Blog</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="img/DJ_Avatar.png" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">DJ</a></li>
                                        <li>July 14th, 2019</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcPost::inRandomOrder()->limit(2)->get() as $post)
                        <div class="entry">
                            <?=$post->image_tag("medium", true, ''); ?>
                            <div class="entry__content">

                                @foreach($post->categories as $category)
                                <span class="entry__category"><a href='{{$category->url()}}'>{{$category->category_name}}</a></span>
                                @endforeach
                                <h1><a href="{{$post->url()}}" title="">{{$post->title}}</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="img/DJ_Avatar.png" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li>Posted {{$post->posted_at->diffForHumans()}}</li>
                                        <li>@includeWhen($post->author,"blogetc::partials.author",['post'=>$post])</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->
                        @endforeach
                    </div> <!-- end featured__small -->

                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->
        @endif

    </section> <!-- end s-pageheader -->

    @if(Request::url() === 'http://djcyphers.com/contact-us')
    <section class="s-content s-content--narrow">
    @else
    <section class="s-content">
    @endif

    @yield('content')
    </section> <!-- end s-content -->

    @include('partials.footer')

    <!-- preloader -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Java Script -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
