@extends("layouts.app",['title'=>$title])
@section("content")

    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

@if(isset($blogetc_category) && $blogetc_category)
<section class="s-content">
    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1> Category: {{$blogetc_category->category_name}}</h1>

        @if($blogetc_category->category_description)
            <p class="lead">{{$blogetc_category->category_description}}</p>
        @endif
        </div>
    </div>
@endif

<div class="row masonry-wrap">
    <div class="masonry">

        <div class="grid-sizer"></div>

@forelse($posts as $post)
    @include("blogetc::partials.index_loop")
@empty
    <div class='alert alert-danger'>No posts</div>
@endforelse

    </div>
</div>

        <div class='text-center  col-sm-4 mx-auto'>
            {{$posts->appends( [] )->links()}}
        </div>
</section>
@endsection
