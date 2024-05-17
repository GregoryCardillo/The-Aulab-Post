<div class="card">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        <a href="{{$urlCategory}}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
        @if ($tags)
            <p class="small fst-italic text-capitalize">
                @foreach ($tags as $tag)
                    # {{ $tag->name }}
                @endforeach
            </p>
        @endif
    </div>

    <div class="card-footer text-muted d-flex justify-content-center align-items-center ">
        Redatto il {{ $data }} da  <a href="{{ $urlUser }}">{{ $user }}</a>
        <a href="{{ $urlCategory }}" class="btn btn-info text-white">Leggi</a>

    </div>
</div>