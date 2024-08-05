@extends('layouts.web.master')

@section('section9')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    .elevate-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Menggunakan lebar penuh viewport */
    padding: 50px 0; /* Padding vertikal */
    box-sizing: border-box; /* Pastikan padding dihitung dalam lebar */
}

.elevate-section {
    background: radial-gradient(104.31% 150.2% at 0% 22.79%, rgba(100, 52, 147, 0.76) 23.63%, rgba(74, 109, 203, 0.8) 70.69%, rgba(100, 210, 247, 0.8) 100%);
    width: 100%; /* Pastikan menggunakan lebar penuh dari kontainer parent */
    max-width: 1440px; /* Lebar maksimum */
    height: 600px;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    margin: 0 auto; /* Mengatur agar berada di tengah */
}


    .elevate-content {
        width: 660px;
        padding-left: 120px;
    }

    .elevate-title {
        width: 660px;
        height: 43px;
        font-family: 'Inter', sans-serif;
        font-size: 36px;
        font-weight: 600;
        line-height: 43.2px;
        text-align: left;
        color: white;
        margin-bottom: 20px;
    }

    .elevate-description {
        width: 660px;
        height: 78px;
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 400;
        line-height: 26px;
        text-align: left;
        color: white;
        margin-bottom: 30px;
    }

    .contact-button {
        background-color: white;
        color: #643493;
        padding: 12px 24px;
        border-radius: 25px;
        text-decoration: none;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 16px;
        display: inline-block;
    }

    .elevate-image {
        position: absolute;
        right: 0;
        top: 0;
        width: 660px;
        height: 600px;
        overflow: hidden;
    }

    .elevate-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .diagonal-cut {
        position: absolute;
        top: 0;
        right: 660px;
        bottom: 0;
        width: 100px;
        /* background-color: white; */
        transform: skew(-15deg);
        transform-origin: top right;
    }
</style>

<div class="container-fluid">
    <div class="elevate-container">
        <div class="elevate-section">
            <div class="elevate-content">
                <h2 class="elevate-title">Ready to Elevate Your Website?</h2>
                <p class="elevate-description">
                    We're dedicated to providing effective solutions to ensure your
                    hosting experience is smooth and trouble-free. Reach out to us
                    anytime, and we'll be more than happy to assist you.
                </p>
                <a href="#" class="contact-button">Contact Us →</a>
            </div>
            <div class="diagonal-cut"></div>
            <div class="elevate-image">
                <img src="{{ asset('assets/img/Gambar.svg') }}" alt="Laptop on desk">
            </div>
        </div>
    </div>
</div>

@endsection