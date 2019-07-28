@foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(200)->get() as $category)
    <li>
        <a href='{{$category->url()}}'>{{$category->category_name}}</a>
    </li>
@endforeach
