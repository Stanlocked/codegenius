@extends ('layouts.admin_layout')

@section ('title', 'Зарплата')

@section('content')

        <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Зарплата</h3>

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
            @foreach ($salary as $salaryItem)
          <table class="table table-striped projects">
              <tbody>
                  <tr>
                      <td class="w-25">
                        {{ $salaryItem->last_name}}
                      </td>
                      <td class="w-25">
                          <a>
                            {{ $salaryItem->salary }}
                          </a>
                          <br/>
                      </td>
                      
                      <td class="w-25">
                        
                        
                      </td>
                      <td class="project-state">
                        <span class="badge badge-success"></span>
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