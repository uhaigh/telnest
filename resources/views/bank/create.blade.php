@extends('app')

@section('title', 'bank-telnest')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>bank</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">bank</li>
                    <li class="breadcrumb-item">tambah</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">               
                            <form class="row g-3" action="{{ url('/bank/store') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="name" class="form-lable">name</label>
                                    <input type="text" name="name" id="houtels_id" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="rek" class="form-lable">rek</label>
                                    <input type="number" name="rek" id="rek" class="form-control">
                                </div>

                                <div class="col-12">
                                    <label for="logo" class="form-lable">logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-pill">save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
