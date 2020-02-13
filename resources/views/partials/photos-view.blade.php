@if(count($album->photos) > 0)
    <div class="container">
        <div class="row">
            @foreach ($album->photos as $photo)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                        <img src="/storage/albums/{{ $album->id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" height="225px">
                            <div class="card-body">
                                <p class="card-text">{{ $photo->description }}</p>
                                    <small class="text-muted">Size: {{ $photo->size }}kb</small>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    @else
        <h3>No photos created...</h3>
    </div>
@endif
