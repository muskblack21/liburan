@extends('layouts.app')

@section('title', $book->title)

{{-- Kosongkan hero agar tampilan detail lebih fokus di konten --}}
@section('heroTitle', '')
@section('heroSubtitle', '')

@section('content')
<div class="detail-container">
  <div class="book-detail-card">
    {{-- Cover "frame" ala smartphone/ebook --}}
    <div class="cover-frame">
    @if($book->cover_image)
  <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" class="read-cover">
@else
  <img src="https://via.placeholder.com/150x200?text=No+Cover" alt="No Cover" class="read-cover">
@endif

    </div>

    <h2 class="detail-title">{{ $book->title }}</h2>
    <p class="detail-author">Author: {{ $book->author ?? 'Unknown' }}</p>
    <p class="detail-desc">{{ $book->description }}</p>

    <a href="/book/read/{{ $book->id }}" class="back-home-btn">Baca Buku</a>
    <a href="/" class="back-home-btn">Kembali ke Home</a>
  </div>
</div>
@endsection