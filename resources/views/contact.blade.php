@extends('layouts.app')

@section('title', 'Contact')

@section('heroTitle', 'Hubungi Kami')
@section('heroSubtitle', 'Kami siap mendengarkan saran, kritik, dan pertanyaan Anda.')

@section('content')
<div class="contact-container">
    <h2>Kontak Kami</h2>
    <p>Silakan isi form di bawah ini untuk menghubungi kami. Kami akan segera merespon pesan Anda.</p>
    
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form action="/contact/send" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="name" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Masukkan email Anda" required>
        </div>
        <div class="form-group">
            <label>Pesan:</label>
            <textarea name="message" placeholder="Tulis pesan Anda" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Kirim Pesan</button>
    </form>
</div>
@endsection

<style>
    /* Contact Page */
.contact-container {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align: center;
}

.contact-container h2 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.contact-container p {
    margin-bottom: 20px;
    font-size: 1rem;
    color: #555;
}

.form-group {
    text-align: left;
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group textarea {
    resize: vertical;
    min-height: 100px;
}

.submit-btn {
    display: block;
    width: 100%;
    background-color: #ff7e5f;
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #ff5733;
}

.success-message {
    background-color: #ddffdd;
    border: 1px solid #55aa55;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    color: #336633;
}

</style>