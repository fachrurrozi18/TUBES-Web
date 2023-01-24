@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="/css/home.css">

@section('container')
<section class="kabinet">
      <h1 class="judul-kabinet">Kabinet Bersatu Maju</h1>
      <!-- ketua dan juga visi -->
      <div class="row1">
        <div class="ketua">
          <img src="img/jennie.png" alt="jennie" width="200px" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Ketua Himpunan</p>
          </div>
        </div>
        <div class="visi">
          <h2 class="judul-visi">Visi</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
            et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
            Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
            maecenas ultricies. Habitant morbi tristique senectus et netus et
            malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
            orci nulla pellentesque dignissim enim sit amet.
          </p>
        </div>
      </div>
      @include('slider_proker')
      <!-- end ketua dan visi -->

      <!-- wakil dan misi -->
      <div class="row2">
        <div class="misi">
          <h2 class="judul-misi">Misi</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
            et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
            Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
            maecenas ultricies. Habitant morbi tristique senectus et netus et
            malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
            orci nulla pellentesque dignissim enim sit amet.
          </p>
        </div>
        <div class="wakil">
          <img src="img/jennie.png" alt="jennie" width="200px" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Wakil Ketua Himpunan</p>
          </div>
        </div>
      </div>
      <!-- end wakil dan misi -->

      <!-- bph -->
      <div class="bph-row">
        <div class="bph">
          <img src="img/blackpink.png" alt="blackpink" width="400px" />
          <h2>Badan Pengurus Harian</h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>
      </div>
      <!-- end bph -->

      <!-- wave di bagian bawah -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,224L80,208C160,192,320,160,480,176C640,192,800,256,960,266.7C1120,
        277,1280,235,1360,213.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,
        320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
      <!-- end wave -->
    </section>

    <!-- internal -->
    <section class="internal">
      <h1 class="judul-internal">Departemen Internal</h1>

      <div class="container">
        <div class="kadept-internal">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Internal</p>
          </div>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="anggota-internal">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Internal</h4>
        </div>
      </div>
    </section>
    <!-- end internal -->

    <!-- proker internal -->

    <!-- external -->
    <section class="eksternal">
      <h1>Departemen Eksternal</h1>

      <div class="container">
        <div class="anggota-eksternal">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Eksternal</h4>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="kadept-eksternal">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Eksternal</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end external -->

    <!-- proker eksternal -->

    <!-- pendidikan it -->
    <section class="internal">
      <h1 class="judul-internal">Departemen Pendidikan IT</h1>

      <div class="container">
        <div class="kadept-internal">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Pendidikan IT</p>
          </div>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="anggota-internal">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Pendidikan IT</h4>
        </div>
      </div>
    </section>
    <!-- end pendidikan it -->

    <!-- proker pendidikan it -->

    <!-- pubdok -->
    <section class="eksternal">
      <h1>Departemen Publikasi dan Dokumentasi</h1>

      <div class="container">
        <div class="anggota-eksternal">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Publikasi dan Dokumentasi</h4>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="kadept-eksternal">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Publikasi dan Dokumentasi</p>
          </div>
        </div>
      </div>
    </section>
@endsection
