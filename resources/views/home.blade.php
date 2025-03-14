@extends('layouts.app')

@section('title', 'Home')

{{-- Ubah heroTitle & heroSubtitle agar terdengar lebih personal --}}
@section('heroTitle', 'Haii, Booklibers!')
@section('heroSubtitle', 'Siap merasakan petualangan seru di setiap halaman? Temukan inspirasi baru, kenali penulis favorit, dan biarkan imajinasi melayang bersama Booklibs.')

@section('content')
  <h2 style="text-align:center; margin-bottom: 10px;">Daftar Buku Terbaru</h2>

  @if(session('success'))
    <div style="color: green; margin-bottom: 10px; text-align:center;">
      {{ session('success') }}
    </div>
  @endif

  @if(isset($books) && count($books) > 0)
    <div class="book-grid">
      @foreach($books as $book)
        <div class="book-item">
          {{-- Cover Image --}}
          @if($book->cover_image)
  <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" class="read-cover">
@else
  <img src="https://via.placeholder.com/200x200?text=No+Cover" alt="No Cover" class="read-cover">
@endif

          <div class="book-title">{{ $book->title }}</div>
          <div class="book-author">by {{ $book->author ?? 'Unknown' }}</div>

          {{-- Contoh rating statis 4 bintang --}}
          <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star" style="color: #ccc;">&#9733;</span>
          </div>

          <p class="book-description">
            {{ \Illuminate\Support\Str::limit($book->description, 60) }}
          </p>
          <a href="/book/{{ $book->id }}" class="read-more">Baca Selengkapnya</a>
        </div>
      @endforeach
    </div>
  @else
    <p style="text-align:center;">Belum ada buku yang tersedia.</p>
  @endif
@endsection
