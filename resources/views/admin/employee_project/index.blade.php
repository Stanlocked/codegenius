@extends ('layouts.admin_layout')

@section ('title', 'Сотрудники')

@section ('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Сотрудники</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
       
        <div class="card-body p-0">
            @foreach( $employees as $employee)
          <table class="table table-striped projects">
              <tbody>
                  <tr>
                      <td class="w-25">
                        {{ $employee->name }}
                      </td>
                      <td class="w-25">
                            <a>
                              {{ $employee->clients }}
                            </a>
                          <br/>
                      </td>
                      <td class="">
                        {{ $employee->completed }}
                      </td>
                      <td class="">
                        {{ $employee->last_name }}
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
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
          <h3 class="card-title">Проектов у каждого сотрудника</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="card-body p-0">
          @foreach( $employeesCount as $employeesCountItem)
        <table class="table table-striped projects">
            <tbody>
                <tr>
                    <td class="w-25">
                      {{ $employeesCountItem->first_name }}
                    </td>
                    <td class="w-25">
                          <a>
                            {{ $employeesCountItem->last_name }}
                          </a>
                        <br/>
                    </td>
                    <td class="">
                      {{ $employeesCountItem->project_count }}
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection