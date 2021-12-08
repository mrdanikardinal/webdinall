@extends('layouts.main')
@section('isContents')
    <section>
        <div class="row">
            <div class="col-12 text-center">
                <img src="assets/img/example.png" alt="" width="279" height="79">
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <div class="input-group">
                                <input class="form-control py-2 rounded-pill mr-1 pr-5 text-center" type="search"
                                    placeholder="search">
                                <span class="input-group-append">
                                    <button class="btn rounded-pill border-0 ml-n5" type="button">
                                        <i class="fas fa-search"> </i>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- button dooble -->
    <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end button dooble -->
    <!-- notif -->
    <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <p>Layanan iklan</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <p>Layanan Edukasi</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <div class="slider round"></div>
                        </label>
                        <!-- <em>Enable Dark Mode!</em> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end notif -->
@endsection()
