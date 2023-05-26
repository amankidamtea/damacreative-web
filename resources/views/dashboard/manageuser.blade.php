@extends('dashboard.layout.main')

@section('content')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <div class="float-end">
                <form action="" class="d-flex">
                    <input type="search" class="form-control" placeholder="search....">
                    <button type="submit" class="btn btn-primary ms-1"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Level</th>
                  <th scope="col">Email</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>brandon@gmail.com</td>
                  <td>
                    <form action="">
                        <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>brandon@gmail.com</td>
                    <td>
                      <form action="">
                          <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                          <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>brandon@gmail.com</td>
                    <td>
                      <form action="">
                          <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                          <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>HR</td>
                  <td>34</td>
                  <td>
                    <form action="">
                        <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Dynamic Division Officer</td>
                  <td>47</td>
                  <td>
                    <form action="">
                        <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
