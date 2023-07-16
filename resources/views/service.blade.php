@extends('layout', ['active' => __('Services')])

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Pelayanan</span>
                    <h2 class="mb-3">Pelayanan Kami</h2>
                </div>
            </div>
            @php $i =1; @endphp
            <div class="row">
                @foreach ($pelayanan as $index)
                    <div class="col-md-3">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-route"></span></div>
                            <div class="text w-100">
                                <h3 class="heading mb-2">{{ $index['judul'] }}</h3>
                                <p>{{ $index['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php
                        
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
@endsection
