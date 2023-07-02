@extends ('layouts.admin_layout')

@section ('title', 'Клиенты')

@section('content')

        <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Клиенты</h3>

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
            @foreach ($clients as $client)
          <table class="table table-striped projects">
              <tbody>
                  <tr>
                      <td class="w-25">
                        {{ $client->clients }}
                      </td>
                      <td class="w-25">
                          <a>
                            {{ $client->name }}
                          </a>
                          <br/>
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
      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Клиенты</h3>

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
          @foreach ($pCount as $pCountItem)
        <table class="table table-striped projects">
            <tbody>
                <tr>
                    <td class="w-25">
                      {{ $pCountItem->clients }}
                    </td>
                    <td class="w-25">
                        <a>
                          Количество заказов: {{ $pCountItem->total_projects }}
                        </a>
                        <br/>
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