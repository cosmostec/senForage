@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Liste de tous les gestionnaires 
                      {{-- <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a>  --}}
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-gestionnaire">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Matricule
                        </th>
                        <th>
                          Nom
                        </th>
                        <th>
                          Prenom
                        </th>
                      
                        <th>
                          Email
                        </th>
                        <th>
                          Numero Téléphone
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
        $(document).ready(function() {
            $('#table-gestionnaire').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('gestionnaires.list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'matricule',
                        name: 'matricule'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'user.firstname',
                        name: 'user.firstname'
                    },
                    {
                        data: 'user.email',
                        name: 'user.email'
                    },
                    {
                        data: 'user.telephone',
                        name: 'user.telephone'
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false
                    }
    
                ],
                "columnDefs": [{
                        "data": null,
                        "render": function(data, type, row) {
                            url_e = "{!! route('gestionnaires.edit',':id')!!}".replace(':id', data.id);
                            url_d = "{!! route('gestionnaires.destroy',':id')!!}".replace(':id', data.id);
                            return '<a href=' + url_e + '  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>' +
                                ' <a class="btn btn-danger" href=' + url_d + '><i class="fa-trash"></i></a>';
                        },
                        "targets": 6
                    },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
    
            });
        });
    </script>

          
      @endpush