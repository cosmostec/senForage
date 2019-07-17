@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <h6 class="card-category"> Liste des villages enrégistrer</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tableVillage" class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom
                        </th>
                        <th>
                            Chef de village
                        </th>
                        <th>
                            Commune
                        </th>
                        <th>
                          Info
                        </th>
                      </thead>
                      <tbody>
                          @foreach ($villages as $village)
                              
                          

                        <tr>
                          <td>
                            {{$village->id}} 
                          </td>
                          <td>
                            {{$village->nom}}<br>
                            Region de {{$village->commune->arrondissement->departement->region->nom}}<br>
                            Commune de {{$village->commune->nom}}

                          </td>
                          <td>
                                {{$village->chef->user->name."  ".$village->chef->user->firstname}}
                          </td>
                          <td>
                            {{$village->commune->nom}}
                          </td>
                          <td>
                              <a class="btn btn-primary"><i class="fa fa-edit"></i> Edit </a>
                              {{-- href={{route('villages.show',['village'=>$village->id])}} --}}
                          </td>
                   
                        </tr>
                        @endforeach
                      </tbody>
                     
                    </table>
                    {{-- {{ $villages->links() }} --}}
                  </div>
                </div>
              </div>
            </div>
       
       
          </div>
        </div>
      </div>

   
      @endsection

      @push('scripts')
          
          <script>
            $(document).ready( function () {
                $('#tableVillage').DataTable();
            } );
        </script>
      @endpush