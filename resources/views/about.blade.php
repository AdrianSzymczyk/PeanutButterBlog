@extends('layouts.app')

@section('content')
  <section class="page-section about-heading" id="section2">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{URL::asset('images/homemade-organic-peanut-butter-with-peanuts.jpg')}}" alt="..." />
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Intensywne masło jakiego jeszcze nie jadłeś, niesmowita społeczność</span>
                <span class="section-heading-lower">O naszym sklepie i blogu</span>
              </h2>
              <p><b>Założona w 1969</b> roku przez rodzeństwo Przybyszewskich, nasza firma oferuje wyśmienite masło orzechowe
                stworzone z orzechów pozyskanych od lokalnych dostawców z całej Polski ale i z zagranicy. Różnorodne
                orzechy pozwalają nam stworzyć niesamowicie kremowe masło lub jeżeli wolisz sobie pochrupać, masło z
                kawałkami orzechów.</p>
              <p class="mb-0"><b>Gwarantujemy</b>, że zakochasz się w naszych masła od pierwszego kęsa i będziesz chciał do nas
                wracać częściej. Dołącz do nas już dziś i zamów swój pierwszy słoik masła orzechowego 🥜🥜. </p>
              <p class="mb-0"><b>Klimat</b> panujący na naszym blogu, od razu skłoni Cię do podzielenia się swoją opinią o naszym miejscu.
                Z pewnością nawiążesz dłuższy kontak z innymi użytkownikami i będziesz odwiedzał naszego bloga częściej niż swoją skrzynkę pocztową </p>
            </div>
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