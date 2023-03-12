@extends('app')

@section('title', 'room-telnest')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>hotel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">hotel</li>
                    <li class="breadcrumb-item">tambah</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">               
                            <form class="row g-3" action="{{ url('/room/store') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="houtels_id" class="form-lable">houtels_id</label>
                                    <input type="number" name="houtels_id" id="houtels_id" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="type" class="form-lable">type</label>
                                    <input type="text" name="type" id="type" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="price" class="form-lable">price</label>
                                    <input type="number" name="price" id="price" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="deskripsion" class="form-lable">deskripsion</label>
                                    <input type="text" name="deskripsion" id="deskripsion" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="photo" class="form-lable">photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control">
                                </div>
                               <div class="col-12">
                                    <label for="">recommendation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="recommendation" id="recommendation" value="yes" checked="">
                                            <label class="form-check-label" for="gridRadios1"> yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="recommendation" value="no" id="recommendation" checked="">
                                            <label class="form-check-label" for="gridRadios1"> no</label>
                                        </div>
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
