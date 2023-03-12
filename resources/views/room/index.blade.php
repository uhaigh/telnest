@extends('app')

@section('title','room-telnest')
    
@section('main')
<main id="main" class="main">

        <div class="pagetitle">
          <h1>room </h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item">room</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
            <div class="col-lg-12">
              <a href="{{url('/room/tambah')}}" class="btn btn-primary mb-3">tambah data</a>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Table with hoverable rows</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">houtel_id</th>
                        <th scope="col">type</th>
                        <th scope="col">price</th>
                        <th scope="col">description</th>
                        <th scope="col">photo</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($room as $room)
                            
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{$room->houtel_id}}</td>
                          <td>{{$room->type}}</td>
                          <td>{{$room->price}}</td>
                          <td>{{$room->deskripsion}}</td>
                          <td>{{$room->photo}}</td>
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