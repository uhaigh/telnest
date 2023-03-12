@extends('app')

@section('title','houtel-telnest')
    
@section('main')
<main id="main" class="main">

        <div class="pagetitle">
          <h1>houtel</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item">houtel</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
            <div class="col-lg-12">
              <a href="{{url('/houtel/tambah')}}" class="btn btn-primary mb-3">tambah data</a>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Table with hoverable rows</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">cities_id</th>
                        <th scope="col">addres</th>
                        <th scope="col">about</th>
                        <th scope="col">facility</th>
                        <th scope="col">photo</th>
                        <th scope="col">recommendation</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($houtels as $houtel)
                            
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{$houtel->cities_id}}</td>
                          <td>{{$houtel->addres}}</td>
                          <td>{{$houtel->about}}</td>
                          <td>{{$houtel->facility}}</td>
                          <td>{{$houtel->photo}}</td>
                          <td>{{$houtel->recommendation}}</td>
                          <td>
                              <button class="btn btn-info">edit</button>
                              <button class="btn btn-danger">delete</button>
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