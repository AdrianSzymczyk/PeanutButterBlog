@extends('layouts.app')

@section('content')
  <section class="page-section cta" id="section4">
    <div class="container">
      <div class="row">
        <!-- User Profile Section -->
        <div class="col-xl-4 mx-auto">
          <div class="profile-card" style="padding: 30px;"> <!-- Increased padding -->
            <h1 class="profile-title">Konto</h1>
            <div class="d-flex align-items-center mb-4">
              <img src="{{ $user->profile_photo_url ?: asset('images/user-icon.png') }}" alt="{{ $user->name }}" class="profile-icon rounded-circle">
              <h1 class="profile-name">{{ $user->name }}</h1>
            </div>
            <div class="user-quote profile-card" style="background-color: #f7dab2; padding: 30px; border-radius: 10px;"> <!-- Increased padding -->
              <p style="font-style: italic;">"Nauka to podróż, na której odkrywanie nowych horyzontów nigdy się nie kończy."</p>
            </div>
          </div>
        </div>

        <!-- Right Section -->
        <div class="col-xl-8 mx-auto">
          <!-- User Data Section -->
          <div class="posts-section" style="margin-bottom: 20px;">
              <h2 class="section-title">Dane użytkownika</h2>
              <ul>
                  <li class="custom-list-item">Nazwa użytkownika: <b>{{ $user->username }}</b></li>
                  <li class="custom-list-item">Email: <b>{{ $user->email }}</b></li>
                  <li class="custom-list-item">Telefon: <b>{{ $user->phone }}</b></li>
                  <li class="custom-list-item">Data utworzenia konta: <b>{{ $user->created_at }}</b></li>
              </ul>
          </div>
          <!-- Posts Section -->
          <div class="posts-section" style="margin-top: 40px; margin-bottom: 20px;">
            <h2 class="section-title">Twoje notatki</h2>
            @if ($posts->count())
              @foreach ($posts as $post)
                <!-- Assuming x-post is a Blade component for individual posts -->
                <x-post :post="$post" class="note-item"/>
              @endforeach
              {{ $posts->links() }}
            @else
              <p>No posts from this user :(</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection