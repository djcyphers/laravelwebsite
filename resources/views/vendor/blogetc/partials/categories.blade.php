<div class="entry__meta">
    <span class="entry__meta-links">
    @foreach($post->categories as $category)
        <a href="{{$category->url()}}">{{$category->category_name}}</a>
    @endforeach
    </span>
</div>
