<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Liste des Villages
         <a href="{{  asset('villages') }}" class="btn btn-primary btn-add">
          <i class="fas fa-list"> Lister tous les villages</i>
        </a> 
        <a href="{{  asset('user/client') }}" class="btn btn-primary btn-add">
          <i class="fas fa-plus"> Ajouter</i>
        </a>
      </h4><br/>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">SENFORAGE</h4>
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
                    
                          
                      

                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        SINTHIOU NGABA
                        Region de TAMBACOUNDA
                        Commune de DIALACOTO

                      </td>
                      <td>
                        SOW YORO
                      </td>
                      <td>
                        DIALACOTO
                      </td>
                      <td>
                          <a class="btn btn-primary"><i class="fa fa-edit"></i> Edit </a>
                          {{-- href={{route('villages.show',['village'=>$village->id])}} --}}
                      </td>
               
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        SOUCOUTO
                        Region de TAMBACOUNDA
                        Commune de DIALACOTO

                      </td>
                      <td>
                        TANDIAN EL HADJI YOUNOUSSA
                      </td>
                      <td>
                        DIALACOTO
                      </td>
                      <td>
                          <a class="btn btn-primary"><i class="fa fa-edit"></i> Edit </a>
                          {{-- href={{route('villages.show',['village'=>$village->id])}} --}}
                      </td>
               
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                        TAIBATOU
                        Region de TAMBACOUNDA
                        Commune de DIALACOTO

                      </td>
                      <td>
                        DRAME BANNA
                      </td>
                      <td>
                        DIALACOTO
                      </td>
                      <td>
                          <a class="btn btn-primary"><i class="fa fa-edit"></i> Edit </a>
                          {{-- href={{route('villages.show',['village'=>$village->id])}} --}}
                      </td>
               
                    </tr>

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
</div>




<div class="col-md-6">
        <div class="card">
          <div class="card-header">
          
            <h4 class="card-title"> Liste des Clients <a href="{{  asset('user/client') }}" class="btn btn-primary btn-add"> <i class="fas fa-plus"></i> Ajouter</a></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th>
                     N°
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
                 
                </thead>
                <tbody>
                  <tr>
                      <td>
                          1
                        </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
  
                  
                  </tr>
                  <tr>
                      <td>
                          2
                        </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
 
                  
                  </tr>
                  <tr>
                      <td>
                          3
                        </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>

                  </tr>
                  <tr>
                      <td>
                          4
                        </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>

                  
                  </tr>
                  <tr>
                      <td>
                          5
                        </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          
            <h4 class="card-title"> Liste des Gestionnaires <a href="{{  asset('user/gestionnaire') }}" class="btn btn-primary btn-add"> <i class="fas fa-plus"></i> Ajouter</a></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th>
                     N°
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
                 
                </thead>
                <tbody>
                  <tr>
                      <td>
                          1
                        </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
  
                  
                  </tr>
                  <tr>
                      <td>
                          2
                        </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
 
                  
                  </tr>
                  <tr>
                      <td>
                          3
                        </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>

                  </tr>
                  <tr>
                      <td>
                          4
                        </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>

                  
                  </tr>
                  <tr>
                      <td>
                          5
                        </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          
            <h4 class="card-title"> Liste des Comptables <a href="{{  asset('user/comptable') }}" class="btn btn-primary btn-add"><i class="fas fa-plus"></i> Ajouter</a></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th>
                     N°
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
                 
                </thead>
                <tbody>
                  <tr>
                      <td>
                          1
                        </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
  
                  
                  </tr>
                  <tr>
                      <td>
                          2
                        </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
 
                  
                  </tr>
                  <tr>
                      <td>
                          3
                        </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>

                  </tr>
                  <tr>
                      <td>
                          4
                        </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>

                  
                  </tr>
                  <tr>
                      <td>
                          5
                        </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>




      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          
            <h4 class="card-title"> Liste des Controlleurs <a href="{{  asset('user/controlleur') }}" class="btn btn-primary btn-add"><i class="fas fa-plus"></i> Ajouter</a></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th>
                     N°
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
                 
                </thead>
                <tbody>
                  <tr>
                      <td>
                          1
                        </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
  
                  
                  </tr>
                  <tr>
                      <td>
                          2
                        </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
 
                  
                  </tr>
                  <tr>
                      <td>
                          3
                        </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>

                  </tr>
                  <tr>
                      <td>
                          4
                        </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>

                  
                  </tr>
                  <tr>
                      <td>
                          5
                        </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>






