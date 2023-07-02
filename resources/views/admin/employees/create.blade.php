@extends ('layouts.admin_layout')

@section ('title', 'Создать отдел')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить сотрудника</h1>
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
                    <form action="{{ route('Employees.store') }}" method="POST">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Название</label>
                          <input type="text" class="form-control m-2" name="fname" id="exampleInputEmail1" placeholder="Имя" required>
                          <input type="text" class="form-control m-2" name="lname" id="exampleInputEmail1" placeholder="Фамилия" required>
                          <input type="text" class="form-control m-2" name="salary" id="exampleInputEmail1" placeholder="Зарплата" required>
                          <input type="text" class="form-control m-2" name="hdate" id="exampleInputEmail1" placeholder="Дата начала работы" required>
                          <input type="text" class="form-control m-2" name="did" id="exampleInputEmail1" placeholder="id отдела" required>
                        </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
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