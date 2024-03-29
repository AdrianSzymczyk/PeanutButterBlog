@extends('layouts.app')

@section('content')
  <section class="page-section cta " id="section4">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner bg-faded rounded">
            <h2>Chcesz powiedzieć za co kochasz masło orzechowe</h2>
            <p>Napisz post i poznaj nowych miłośników masła orzechowego</p>
            <hr>
            <form action="{{ route('posts') }}" method='post'>
              @csrf
              <div class="form-group test">
                <label for="title"><b>Tytuł</b></label><br>
                <input type='text' class="form-control @error('title') border-red-500 @enderror" name="title" id="title" value="{{old('title')}}" placeholder="Podaj tytuł..." style="width: 80%"></input>
                @error('title')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group test">
                <label for="body"><b>Treść</b></label><br>
                <textarea class="form-control @error('body') border-red-500 @enderror" name="body" id="body" value="{{old('body')}}" cols="30" rows="4" placeholder="Wylej swoje myśli i podziel się nimi z innymi..." style="width: 80%"></textarea>
                @error('body')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary skladanieZamowienia">Umieść post</button>
            </form>
            <hr>
            @if ($posts->count())
            @foreach ($posts as $post)
              <x-post :post="$post"/>
            @endforeach
              {{ $posts->links() }}
            @else
              <p>Brak postów na blogu :(</p>
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