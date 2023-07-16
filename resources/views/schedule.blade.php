@extends('layout', ['active' => __('Schedule')])

@section('content')
    <!-- Untuk Instruktur -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Jadwal</span>
                    <h2 class="mb-3">Jadwal Belajar</h2>
                </div>
            </div>
            @php $i =1; @endphp
            <div class="row">
                <table class="table table-hover table-striped text-center table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jadwal_belajar as $i) : ?>
                        <tr>
                            <td><?= $i['hari'] ?></td>
                            <td><?= $i['jam'] ?></td>
                            <td><?= $i['kelas'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="row justify-content-center">
        <section class="ftco-section mx-2">
            <div class="container my-4">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Instruktur</span>
                        <h2 class="mb-3">Data Instruktur</h2>
                    </div>
                </div>
                <table class="table table-hover table-striped text-center table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Spesialisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($instruktur as $i) : ?>
                        <tr>
                            <td><?= $i['nama'] ?></td>
                            <td><?= $i['spesialisasi'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </section>


        <section class="ftco-section mx-2">
            <!-- Untuk Pengurus -->
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Pengurus</span>
                        <h2 class="mb-3">Data Pengurus</h2>
                    </div>
                </div>
                <table class="table table-hover table-striped text-center table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Jabatan</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengurus as $p) : ?>
                        <tr>
                            <td><?= $p['jabatan'] ?></td>
                            <td><?= $p['nama'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
