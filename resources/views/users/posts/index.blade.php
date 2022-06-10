@extends('layouts.app')

@section('content')
  <section class="page-section cta " id="section4">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class='cta-inner2  '>
            <h1 class=''>{{ $user->name}}</h1>
            <p>Umieścił {{ $posts->count() }} {{ Str::plural('posts', $posts->count()) }} oraz otrzymał {{ $user->receivedLikes->count() }} likeow</p>
          </div>
          <div class="cta-inner bg-faded rounded">
            @if ($posts->count())
            @foreach ($posts as $post)
              <x-post :post="$post"/>
            @endforeach
              {{ $posts->links() }}
            @else
              <p>Brak postów od tego użytkownika :(</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection