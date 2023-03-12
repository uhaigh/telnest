@extends('app')

@section('title','city-telnest')
    
@section('main')
<main id="main" class="main">

        <div class="pagetitle">
          <h1>City</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item">City</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
           <div class="row">
            <div class="col-lg-12">
              <a href="{{url('/City/tambah')}}" class="btn btn-primary mb-3">tambah data</a>
          <div class="card">
            <div class="card-body">
              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">photo</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{$city->name}}</td>
                      <td>{{$city->photo}}</td>
                      <td>
                          <button class="btn btn-info rounded-pill">edit</button>
                          <button class="btn btn-danger rounded-pill">delete</button>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
        </div>
           </div>
        </section>
</main>
@endsection