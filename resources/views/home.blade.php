@extends('layouts.main')
@section('konten')
    <main class="main users chart-page" id="skip-target">

        <div class="container" style="margin-top: -10px">

            <div class="stat-cards-item" style="height:  60px; margin-bottom: 10px;">
                <div class="card-body" style="margin-top: -27px;">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <h2 class="main-title float-sm-start" style="letter-spacing: 2px;">
                                Halaman
                            </h2>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end m-1">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active">Halaman {{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row stat-cards">
                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon primary">
                            {{-- <i data-feather="bar-chart-2" aria-hidden="true"></i> --}}
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">1478 286</p>
                            <p class="stat-cards-info__title">Total visits</p>
                            <p class="stat-cards-info__progress">
                                <span class="stat-cards-info__profit success">
                                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                </span>
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon warning">
                            {{-- <i data-feather="file" aria-hidden="true"></i> --}}
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">1478 286</p>
                            <p class="stat-cards-info__title">Total visits</p>
                            <p class="stat-cards-info__progress">
                                <span class="stat-cards-info__profit success">
                                    {{-- <i data-feather="trending-up" aria-hidden="true"></i> --}}
                                    0.24%
                                </span>
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon purple">
                            <i data-feather="file" aria-hidden="true"></i>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">1478 286</p>
                            <p class="stat-cards-info__title">Total visits</p>
                            <p class="stat-cards-info__progress">
                                <span class="stat-cards-info__profit danger">
                                    {{-- <i data-feather="trending-down" aria-hidden="true"></i> --}}
                                    1.64%
                                </span>
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon success">
                            <i data-feather="feather" aria-hidden="true"></i>
                        </div>
                        <div class="stat-cards-info">
                            <p class="stat-cards-info__num">1478 286</p>
                            <p class="stat-cards-info__title">Total visits</p>
                            <p class="stat-cards-info__progress">
                                <span class="stat-cards-info__profit warning">
                                    {{-- <i data-feather="trending-up" aria-hidden="true"></i> --}}
                                    0.00%
                                </span>
                                Last month
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
