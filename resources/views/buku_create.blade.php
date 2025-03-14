@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('heroTitle', 'Tambah Buku Baru')
@section('heroSubtitle', 'Isi form di bawah untuk menambahkan buku ke koleksi kami.')

@section('heroTitle', 'Tambah Buku Baru')
@section('heroSubtitle', 'Isi form di bawah untuk menambahkan buku ke koleksi kami.')

@section('heroTitle', 'Tambah Buku Baru')
@section('heroSubtitle', 'Isi form di bawah untuk menambahkan buku ke koleksi kami.')

@section('content')
<div class="form-container">
    <h2>Form Buku Baru</h2>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/buku/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Masukkan judul buku">
        </div>
        <div class="form-group">
            <label>Deskripsi:</label>
            <textarea name="description" placeholder="Masukkan deskripsi buku">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label>Isi Buku:</label>
            <textarea name="content" placeholder="Masukkan isi buku lengkap">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" value="{{ old('author') }}" placeholder="Masukkan nama penulis">
        </div>
        <div class="form-group">
            <label>Cover Image:</label>
            <input type="file" name="cover_image">
        </div>
        <div class="form-group">
            <label>Published At:</label>
            <input type="date" name="published_at" value="{{ old('published_at') }}">
        </div>
        <button type="submit" class="submit-btn">Simpan Buku Baru</button>
    </form>
</div>
@endsection
