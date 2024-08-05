    @extends('layouts.web.master')

    @section('section2')
        <section class="section">
            <div class="container">
                <h3 class="titlee has-text-centered mb-6">Explore Our Comprehensive Online Services</h3>
                <div class="columns is-centered">
                    <div class="column is-one-third">
                        <div class="card has-text-centered huro-cardd">
                            <div class="card-contentt">
                                <span class="icon is-large mb-3">
                                    <i class="fas fa-globe fa-3x"></i>
                                </span>
                                <h2 class="titlee is-4">Domain</h2>
                                <p class="contentt">Find and secure the perfect web address with our easy-to-use domain registration platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card has-text-centered huro-cardd">
                            <div class="card-contentt">
                                <span class="icon is-large mb-3">
                                    <i class="fas fa-cloud fa-3x"></i>
                                </span>
                                <h2 class="titlee is-4">Cloud Hosting</h2>
                                <p class="contentt">Unlock unparalleled flexibility and performance with our cutting-edge cloud hosting solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card has-text-centered huro-cardd">
                            <div class="card-contentt">
                                <span class="icon is-large mb-3">
                                    <i class="fab fa-wordpress fa-3x"></i>
                                </span>
                                <h2 class="titlee is-4">WordPress Hosting</h2>
                                <p class="contentt">Enhance your WordPress site with our optimized hosting services designed for speed and security.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @push('styles')
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    @endpush

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    @endpush