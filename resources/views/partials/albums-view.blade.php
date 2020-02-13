<div class="container container-wrapper">
    @if(count($albums) > 0)
    <div class="row" id="gallery">
        @foreach ($albums as $album)

            <div class="album-container col-6 col-md-4 col-lg-3" data-container="{{ $album->id }}">
                <div class="card text-white border-0 bg-transparent mb-3 mt-4">
                    <img src="/storage/album_covers/{{ $album->cover_image }}" class="card-img-top zoom" alt="{{ $album->cover_image }}" height="225px">
                    <p class="card-text" style="z-index: 1">{{ $album->name }}</p>
                </div>
            </div>

            @foreach ($album->photos as $photo)
        <div class="album-image" data-album="{{ $album->id }}" data-image="{{ $photo->photo }}" data-description="{{ $photo->description }}"></div>
            @endforeach

        @endforeach
        </div>
    @else
        <h3>No albums created...</h3>
    @endif
</div>