{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

<article class="masonry__brick entry format-standard" data-aos="fade-up">
    <div class="entry__thumb">
        <?=$post->image_tag("medium", true, ''); ?>
    </div>

    <div class="entry__text">

        <div class="entry__header">
            <div class="entry__date">
                Posted <strong>{{$post->posted_at->diffForHumans()}}</strong>
                @includeWhen($post->author,"blogetc::partials.author",['post'=>$post])
            </div>
            <h1 class="entry__title"><a href="{{$post->url()}}">{{$post->title}}</a></h1>
        </div>

        <div class="entry__excerpt">
            <p>
                {!! $post->generate_introduction(300) !!}
            </p>
        </div>

        <div class="entry__meta">
            <span class="entry__meta-links">
                @includeWhen($post->categories,"blogetc::partials.categories",['post'=>$post])
            </span>
        </div>

    </div>
</article> <!-- end article -->
