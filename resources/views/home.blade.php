@extends('layouts.app')

@section('content')
  <section class="page-section clearfix" id="section1">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{URL::asset('images/getlstd-property-photo.jpg')}}" alt="..." />
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Mocno orzechowe</span>
            <span class="section-heading-lower">Jedyne takie masło</span>
          </h2>
          <p class="mb-3">Każda łyżka naszego wspaniałego masła orzechowego zaczyna się od ręcznie zbieranych
            orzechów przez lokalnych dostawców. Po spróbowaniu nasze masło stanie się twoim ulubionym i bez wahania
            polecisz je swoim znajomym!<br> Podziel się swoją opinią w zakładce POSTY.</p>
          <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{ route('findus') }}">Odwiedź nas dzis!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner bg-faded text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Nasze obietnice</span>
              <span class="section-heading-lower">Dla Ciebie</span>
            </h2>
            <p class="mb-0">Po wejściu do naszego sklepu od razu zakochasz się w klimacie jaki tam panuje, a zapach
              masła orzechowego ogarnie twój umysł. Przyjazna obsługa mile cię obsłuży i z radością opowie ci o naszych
              produktach. Chcesz poznać opnie naszych klientów, lub nie byłeś zadowolony daj nam znać i napisz komentarz.</p>
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