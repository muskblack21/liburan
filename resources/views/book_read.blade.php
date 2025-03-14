@extends('layouts.app')

@section('title', $book->title)

@section('content')
<div class="read-container">
  <div class="read-card">
    <div class="read-header">
    @if($book->cover_image)
  <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" class="read-cover">
@else
  <img src="https://via.placeholder.com/150x200?text=No+Cover" alt="No Cover" class="read-cover">
@endif

      <div class="read-info">
        <h1 class="read-title">{{ $book->title }}</h1>
        <p class="read-author">by {{ $book->author }}</p>
      </div>
    </div>
    <div class="read-content">
      {!! $book->content ?? $book->description !!}
    </div>
    <div class="read-footer">
      <a href="/" class="back-home-btn">Kembali ke Home</a>
    </div>
  </div>
</div>
@endsection
