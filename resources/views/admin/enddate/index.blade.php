@extends ('layouts.admin_layout')

@section ('title', 'Завершённые проекты')

@section ('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Завершённые проекты</h3>

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
            @foreach( $endDate as $endDateItem)
          <table class="table table-striped projects">
              <tbody>
                  <tr>
                      <td class="w-25">
                        Дата окончания: {{ $endDateItem->completed_at }}
                      </td>
                      <td class="">
                        <a>
                            {{ $endDateItem->name }}
                        </a>
                          <br/>
                      </td>
                      <td class="w-25">
                            <a>
                                Клиент: {{ $endDateItem->clients }}
                            </a>
                          <br/>
                      </td>
                      <td class="w-25">
                        Готовность: Завершён
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
      <div class="card-header">
        <h3 class="card-title">Незавершённые проекты</h3>

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
        @foreach( $endDateNull as $endDateNullItem)
      <table class="table table-striped projects">
          <tbody>
              <tr>
                  <td class="w-25">
                    Дата окончания: {{ $endDateNullItem->completed_at }}
                  </td>
                  <td class="">
                    <a>
                      {{ $endDateItem->name }}
                    </a>
                      <br/>
                  </td>
                  <td class="w-25">
                        <a>
                            Клиент: {{ $endDateNullItem->clients }}
                        </a>
                      <br/>
                  </td>
                  <td class="w-25">
                    Готовность: Незавершён
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
    

@endsection