@extends ('layouts.admin_layout')

@section ('title', 'Создать отдел')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить отдел</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Название</label>
                          <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Название отдела" required>
                        </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Создать</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success w-100" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection