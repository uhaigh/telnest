@extends('app')

@section('title','bank-telnest')
    
@section('main')
<main id="main" class="main">

        <div class="pagetitle">
          <h1>Bank</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item">Bank</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
            <div class="col-lg-12">
              <a href="{{url('/bank/tambah')}}" class="btn btn-primary mb-3">tambah data</a>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Table with hoverable rows</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Rekening</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($banks as $bank)
                            
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{$bank->name}}</td>
                          <td>{{$bank->rek}}</td>
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