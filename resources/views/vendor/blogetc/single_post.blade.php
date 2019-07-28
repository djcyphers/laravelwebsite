@extends("layouts.app",['title'=>$post->gen_seo_title()])
@section("content")


    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">

            @include("blogetc::partials.show_errors")
            @include("blogetc::partials.full_post_details")

        </article>


            @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                <div class="comments-wrap">
                    <div id="comments" class="row">
                        <div class="col-full">
                            <ol class="commentlist">

                            <h3 class="h2">Comments</h3>
                            @include("blogetc::partials.show_comments")

                            </ol>
                        </div>
                    </div>
                </div>
            @else
                {{--Comments are disabled--}}
            @endif

    </section>


@endsection
