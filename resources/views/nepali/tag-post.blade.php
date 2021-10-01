@extends('nepali.layouts.app')

@section('title', 'वर्ग')

@section('content')

    <div class="container">
        <div class="redBg">

            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="antarastriya.php">{{ $tag->name }}</a>
                </h3>
            </div>

            <div class="row marSide">
                @foreach ($post as $posts )
                <div class="col-md-3 col-sm-4 categoryCard">
                    <img src="{{ asset('storage/' .$posts->image ) }}" alt="news" class="img-fluid">
                    <h5><a href="{{ route('nepali.details', $posts->slug) }}">{{ $posts->title }}</a></h5>
                </div>
                @endforeach

            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        {{-- {{ $post->links() }} --}}
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
