<!DOCTYPE html>
<html lang="en">

  @include('layout.header')

<body class="">
    
  <div class="wrapper ">
  
  {{-- Partie Sidebar --}}
  @include("layout.sidebar")

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
          @include('layout.nav') 

          <br><br>

     @Section('content')
      <div class="content">
       
      <div class="row">
  

          

         {{-- Liste des Utilisateurs --}}
         @include('layout.gestionnaire.collections')
        </div>
      </div>
      @Show
  {{-- Partie footer --}}
  @Section('footer')
      @include('layout.footer')
  @Show
    </div>
  </div>
  {{-- Tous les script --}}

  @include("layout.scripts")
</body>

</html>
