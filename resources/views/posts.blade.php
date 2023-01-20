@extends('layouts/main')

@section('style')
  @if(isset($_GET["category"]))
    @if($_GET['category'] === "competition")
      <link rel="stylesheet" href="/css/competition_card.css">
    @else
      <link rel="stylesheet" href="/css/seminar-acara_card.css">
    @endif
  @endif
<!-- Navbar CSS -->
<!-- <link rel="stylesheet" href="/css/navbar.css"> -->

@section('container')

<!-- Uncomment this for rofi --> 
{{-- @include('partials.competition_slider') --}}

<!-- Uncomment this for rozi -->
{{-- @include('partials.event_slider') --}}

<!-- Put The Slider Here -->


<!-- Use the code below to create a loop to every posts  -->
@if ($posts->count())
  @if(isset($_GET["category"]))
    @if($_GET["category"] === "competition")
          @foreach ($posts as $post)
            <div class="card">
              <div class="image">
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
              </div>
              <div class="container">
                <h2>{{ $post->title }}</h2>
                <i>Author: {{$post->author->name}}</i>
                <i class="fa fa-calendar" style="font-size: 18px"> {{$post->created_at->diffForHumans()}}</i>
                <br/>
                <i class="fa fa-map-marker" style="font-size: 20px"><p>Universitas Pertamina</p></i>
                <br /><br />
                <div>
                  <a href="" class="button">Details</a>
                </div>
              </div>
            </div>
          @endforeach
    @elseif($_GET["category"] === "event")
      <div class="container">
        <div class="row">
          @foreach ($posts as $post)
            <div class="card">
              <div class="ribbon">
                <img src="img/ribbon.png" alt="" />
                  <div class="teks">
                    <a href="">
                    <span>15</span> <br />
                    Jan 2023
                    </a>
                  </div>
              </div>
              <div class="image">
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
              </div>
              <div class="container">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores,
                  dolorem.
                </p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      @else
        <div class="container">
          <div class="row">
            @foreach ($posts as $post)
              <div class="card">
                <div class="ribbon">
                  <img src="img/ribbon.png" alt="" />
                    <div class="teks">
                      <a href="">
                      <span>15</span> <br />
                      Jan 2023
                      </a>
                    </div>
                </div>
                <div class="image">
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
                </div>
                <div class="container">
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores,
                    dolorem.
                  </p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif
    @endif
  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>

@endsection
