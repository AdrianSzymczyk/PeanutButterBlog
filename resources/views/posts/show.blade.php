@extends('layouts.app')

@section('content')
  <section class="page-section cta " id="section4">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner bg-faded rounded">
            <h2>Notatki naszych zdolnych studentów</h2>
            <p>Tylko u nas takie perełki</p>
            <hr>
            @if ($posts->count())
            @foreach ($posts as $post)
              <x-post :post="$post"/>
            @endforeach
              {{ $posts->links() }}
            @else
              <p>Brak notatek :(</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2021</p>
    </div>
  </footer>
@endsection