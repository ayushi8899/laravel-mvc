@extends('crudapp.admin.layout')
@section('titlename')
Manage All coustomer
@endsection 
@section('dashboard')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All coustomer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Manage coustomer</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage coustomer</h5>

              @if(Session('del'))
              <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong> {{session('del')}}
              </div>
              @endif

              <!-- Default Table -->
              <table class="table" id="tab1">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">address</th>
                    <th scope="col">mobile</th>
                    <th scope="col">dreated date</th>
                    <th scope="col">action</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->created_at}}</td>
                    <td><a href='{{URL("/admin-login/managecoustomer/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete data')"><i class="bi bi-trash3-fill"></i></a> |

                    <a href="https://api.whatsapp.com/send?phone=+91{{($row->mobile)}}&text=thanks%20%20for%20contact%20with%20us" class="btn btn-success" onclick="return confirm('Are you sure to send whatsapp')"><i class="bi bi-whatsapp text-white"></i></a></td>
                    
                  </tr>
                  
                  @endforeach
    
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->
  <script>
  $(document).ready(function () {
    $('#tab1').DataTable();
});
  </script>
@endsection