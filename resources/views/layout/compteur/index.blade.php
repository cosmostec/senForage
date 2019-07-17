@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Liste de tous les compteurs 
                    <a href="{{ route('compteurs.create') }}" class="col-md-6">
                      <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-user-times"></i> Ajouter un nouveau compteur</button>
                  </a>
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-compteur">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Numero de Serie
                        </th>
                        <th>
                          Prenom Abonné
                        </th>
                        <th>
                          Nom Abonné
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
            $('#table-compteur').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('compteurs.list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'numero_serie',
                        name: 'numero_serie'
                    },
                    {
                        data: 'abonnements[0].client.user.firstname',
                        name: 'abonnements[0].client.user.firstname'
                    },
                    {
                        data: 'abonnements[0].client.user.name',
                        name: 'abonnements[0].client.user.name'
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
                            url_e = "{!! route('compteurs.edit',':id')!!}".replace(':id', data.id);
                            url_d = "{!! route('compteurs.destroy',':id')!!}".replace(':id', data.id);
                            return '<a href=' + url_e + '  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>' +
                                ' <a class="btn btn-danger" href=' + url_d + '><i class="fa-trash"></i></a>';
                        },
                        "targets": 4
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