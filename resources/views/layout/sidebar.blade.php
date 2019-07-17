<div class="sidebar" data-color="orange">
  
        <div class="logo">
          <a href="{{ asset('http://www.creative-tim.com') }}" class="simple-text logo-mini">
          
          </a>
          <a href="{{  asset('/dashbord') }}" class="simple-text logo-normal">
            Dashbord
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li class="active ">
              <a href="{{  asset('/dashbord') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Vue d'ensemble</p>
              </a>
            </li>
          
           @roles('Gestionnaire')
            <li>
              <a href="{{ asset('villages') }}">
                <i class="now-ui-icons business_bank"></i>
                <p>Gestion des Villages</p>
              </a>
          </li>
          
          <li>
            <a href="{{  asset('/clients') }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Gestion des Clients</p>
            </a>
        </li>
        @endroles
        <li>
                <a href="{{ asset('/user/controlleur') }}">
                  <i class="now-ui-icons business_money-coins"></i>
                  <p>Gestion des Abonnements</p>
                </a>
            </li>
            <li>
                <a href="{{asset('/user/gestionnaires') }}">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>Gestion des Gestionnaires</p>
                </a>
            </li>
       
            <li>
                <a href="{{ asset('comptables') }}">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>Gestion des Comptables</p>
                </a>
            </li>
         
            <li>
              <a href="{{asset('/agents') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p>Gestion des Agents</p>
              </a>
          </li>
          
            <li>
              <a href="{{ asset('compteurs') }}">
                <i class="now-ui-icons location_compass-05"></i>
                <p>Gestion des Compteurs</p>
              </a>
          </li>
          <li>
            <a href="{{ asset('consommations') }}">
              <i class="now-ui-icons files_paper"></i>
              <p>Gestion des consommations</p>
            </a>
        </li>
          {{--   <li>
              <a href="./map.html">
                <i class="now-ui-icons location_map-big"></i>
                <p>Maps</p>
              </a>
            </li> --}}
           {{--  <li>
                <a href="./tables.html">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>Gestion des Villages</p>
                </a>
              </li>
          
                <li>
                    <a href="./tables.html">
                      <i class="now-ui-icons design_bullet-list-67"></i>
                      <p>Gestion des Factures</p>
                    </a>
                  </li> --}}
                  <li>
                      <a href="./map.html">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Deconnexion</p>
                      </a>
                    </li>
              
            
          
         {{--    <li>
              <a href="./typography.html">
                <i class="now-ui-icons text_caps-small"></i>
                <p>Typography</p>
              </a>
            </li> --}}
          {{--   <li class="active-pro">
              <a href="{{  asset('/dashbord') }}">
                <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                <p>Page d'accueil</p>
              </a>
            </li> --}}
          </ul>
        </div>
      </div>