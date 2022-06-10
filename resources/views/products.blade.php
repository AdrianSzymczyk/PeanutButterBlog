@extends('layouts.app')

@section('content')
  <section class="page-section sec1" id="section3">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ms-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Wytworzone z miłością</span>
              <span class="section-heading-lower">Masło orzechowe</span>
            </h2>
          </div>
        </div>
        <img id="productPic1" class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="#"
          alt="Toast bread with peanut butter" />
        <div class="product-item-description d-flex me-auto">
          <div class="bg-faded p-5 rounded" id="produkt-maslo">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section sec2">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex me-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Zawsze ciepłe pieczywo</span>
              <span class="section-heading-lower">Piekarnia i kuchnia</span>
            </h2>
          </div>
        </div>
        <img id="productPic2" class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="#"
          alt="Croissant and bread" />
        <div class="product-item-description d-flex ms-auto">
          <div class="bg-faded p-5 rounded" id="produkt-pieczywo">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section sec3">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex ">
          <div class="bg-faded p-5 d-flex ms-auto rounded shorter">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Z całego świata</span>
              <span class="section-heading-lower">Kawa i herbata</span>
            </h2>
          </div>
        </div>
        <img id="productPic3" class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="#"
          alt="Coffee and tea board" />
        <div class="product-item-description d-flex me-auto">
          <div class="bg-faded p-5 rounded" id="produkt-kawa">

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