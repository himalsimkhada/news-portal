@extends('nepali.layouts.app')

@section('title', 'सबै समाचार')

@section('content')

    <div class="container">
        <div class="redBg">

            <div class="white newsTypeHeading d-flex justify-content-between">
                <h3>
                    <a href="">सम्बन्धित समाचार</a>
                </h3>
            </div>

            <div class="row marSide">
                @foreach ($relatedPost as $post )
                <div class="col-md-3 col-sm-4 categoryCard">
                    <img src="{{ asset('storage/' .$post->image ) }}" alt="news" class="img-fluid">
                    <h5><a href="{{ route('nepali.details', $post->slug) }}">{{ $post->title }}</a></h5>
                </div>
                @endforeach

            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        {{ $relatedPost->links() }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
