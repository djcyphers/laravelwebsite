
<div class="s-content__header col-full">
    <h1 class="s-content__header-title">{{$post->title}}</h1>
    <p class="lead">{{$post->subtitle}}</p>
    <ul class="s-content__header-meta">
        <li class="date">Posted {{$post->posted_at->diffForHumans()}}
            @includeWhen($post->author,"blogetc::partials.author",['post'=>$post])
        </li>
        <br>
        <li class="cat">
            @includeWhen($post->categories,"blogetc::partials.categories",['post'=>$post])
        </li>
    </ul>
</div> <!-- end s-content__header -->

<div class="s-content__media col-full">
    <div class="s-content__post-thumb">
        <?=$post->image_tag("large", false, 'flex-horizontal-center'); ?>
    </div>
</div> <!-- end s-content__media -->

<div class="col-full s-content__main">
    <p class="lead">
        {!! $post->post_body_output() !!}

        {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
        {{--                                // use a custom blade file for the output of those blog post--}}
        {{--   @include("blogetc::partials.use_view_file")--}}
        {{--@else--}}
        {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
        {{--   {{ $post->post_body }}          // for safe escaping --}}
        {{--@endif--}}
    </p>

    <div class="s-content__author">
        <img src="{{ asset('img/DJ_Avatar.png') }}" alt="">

        <div class="s-content__author-about">
            <h4 class="s-content__author-name">
                <a href="#0">DJ Cyphers</a>
            </h4>

            <p>
                An avid gamer, designer, developer, disc golfer, streamer, disc-jockey, music producer, and a bunch of other stuff. But most important of all, is being a dad to my daughter Aryana.
            </p>

            <ul class="s-content__author-social">
                <li><a href="https://www.facebook.com/iheardancemusic/">@fa('facebook') Facebook</a></li>
                <li><a href="https://www.twitter.com/djcyphers/">@fa('twitter') Twitter</a></li>
                <li><a href="https://www.instagram.com/djcyphers/">@fa('instagram') Instagram</a></li>
                <li><a href="https://www.pinterest.com/djcyphers/">@fa('pinterest') Pinterest</a></li>
                <li><a href="https://www.linkedin.com/in/djcyphers/">@fa('linkedin') LinkedIn</a></li>
                <li><a href="https://soundcloud.com/djcyphers/">@fa('soundcloud') SoundCloud</a></li>
                <li><a href="https://mixcloud.com/djcyphers/">@fa('mixcloud') MixCloud</a></li>
                <li><a href="https://github.com/djcyphers/">@fa('github') GitHub</a></li>
            </ul>
        </div>
    </div>
</div>
