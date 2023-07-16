@extends('layout', ['active' => __('Home')])

@section('content')
    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Yang kami tawarkan</span>
                    <h2 class="mb-2">Kendaraan Unggulan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets') }}/images/car-1.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets') }}/images/car-2.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets') }}/images/car-3.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets') }}/images/car-4.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('assets') }}/images/about.jpg);">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Selamat Datang CarDrive</h2>

                        <p>"CarDrive adalah sebuah perusahaan pelatihan mengemudi berbasis di Jakarta yang
                            berfokus pada pemberian pelatihan mengemudi berkualitas tinggi kepada individu dari segala usia
                            dan latar belakang. Didirikan pada tahun 2023, misi kami adalah untuk memberikan pengetahuan,
                            keterampilan, dan kepercayaan diri yang diperlukan oleh setiap pengemudi untuk beroperasi di
                            jalan dengan aman dan efisien. Dengan tim instruktur profesional dan berpengalaman, kami
                            menawarkan berbagai paket pelatihan, dari kursus mengemudi dasar hingga pelatihan lanjutan dan
                            persiapan ujian SIM.</p>

                        <p>Kami sangat bangga dengan metode pengajaran kami yang inovatif dan pendekatan personal terhadap
                            setiap siswa. Setiap kursus kami dirancang untuk memastikan bahwa siswa kami mendapatkan
                            pemahaman yang mendalam tentang aturan jalan, kesadaran situasional, dan teknik mengemudi
                            defensif. Dengan track record kami yang terbukti dalam menciptakan pengemudi yang aman dan
                            bertanggung jawab, CarDrive menjadi pilihan terpercaya bagi individu dan
                            keluarga di seluruh Jakarta dan sekitarnya untuk belajar mengemudi.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Harga</span>
                    <h2 class="mb-3">Paket Terbaru</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach ($paket as $index)
                            <div class="item">
                                <div class="testimony-wrap rounded text-center py-4 pb-5">

                                    <p class="name">{{ $index['nama_paket'] }}</p>
                                    <span class="position">{{ $index['harga'] }}</span>
                                    <div class="text pt-4">
                                        <p class="mb-4">{{ $index['durasi'] }}</p>
                                        <p class="mb-4">{{ $index['layanan'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Pelayanan</span>
                    <h2 class="mb-3">Pelayanan Terbaru Kami</h2>
                </div>
            </div>
            @php $i =1; @endphp
            <div class="row">
                @foreach ($pelayanan as $index)
                    <div class="col-md-3">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-wedding-car"></span></div>
                            <div class="text w-100">
                                <h3 class="heading mb-2">{{ $index['judul'] }}</h3>
                                <p>{{ $index['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                        if ($i > 4) {
                            break;
                        }
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
@endsection
