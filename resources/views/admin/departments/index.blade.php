@extends ('layouts.admin_layout')

@section ('title', 'Отделы')

@section('content')

        <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Сотрудники</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
       
        <div class="card-body p-0">
            @foreach ($departments as $departmentItem)
          <table class="table table-striped projects">
              <tbody>
                  <tr>
                      <td class="w-25">
                        Начало работы: {{ $departmentItem->hire_date }} год
                      </td>
                      <td class="w-25">
                          <a>
                            {{ $departmentItem->last_name }}
                          </a>
                          <br/>
                      </td>
                      
                      <td class="w-25">
                        {{ $departmentItem->name }}
                      </td>
                      <td class="project-state">
                        Salary: <span class="badge badge-success">{{ $departmentItem->salary }}</span>
                      </td>
                  </tr>
              </tbody>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
    
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Отделы</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          @foreach ($departmentsAll as $departmentsAllItem)
          <table class="table table-striped projects">
              <tbody>
                  <tr>
                      <td class="w-25">
                        {{ $departmentsAllItem->name }}
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('departments.edit', $departmentsAllItem->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="{{ route('departments.destroy', $departmentsAllItem->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                          </form>
                      </td>
                  </tr>
              </tbody>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      @if (session('success'))
            <div class="alert alert-success w-100" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    
@endsection