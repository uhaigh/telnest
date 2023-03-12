@extends('app')

@section('title', 'houtel-telnest')

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
                            <form class="row g-3" action="{{ url('/houtel/store') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="cities_id" class="form-lable">cities_id</label>
                                    <input type="number" name="cities_id" id="cities_id" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="addres" class="form-lable">addres</label>
                                    <input type="text" name="addres" id="addres" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="about" class="form-lable">about</label>
                                    <input type="text" name="about" id="about" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="facility" class="form-lable">facility</label>
                                    <input type="text" name="facility" id="facility" class="form-control">
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
