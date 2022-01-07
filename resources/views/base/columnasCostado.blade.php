 <!-- columnas del costado inicio -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{asset('melody/images/faces/douglas.jpg')}}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Hola Douglas
            </p>
            <p class="designation">
              Super Admin
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index-2.html">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/widgets.html">
          <i class="fa fa-puzzle-piece menu-icon"></i>
          <span class="menu-title">Reportes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="page-layouts">
          <i class="fab fa-trello menu-icon"></i>
          <span class="menu-title">Compras</span>
        
        </a>
        
      </li>
      <li class="nav-item d-none d-lg-block">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
          <i class="fas fa-columns menu-icon"></i>
          <span class="menu-title">Ventas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sidebar-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
          </ul>
        </div>
      </li>
                 
     <!--Categorias -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
          <i class="fas fa-pen-square menu-icon"></i>
          <span class="menu-title">Categorias</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="editors">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="#">Mostrar Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Crear Categories</a></li>
          </ul>
        </div>
      </li>
      <!--Fin Categorias -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="fas fa-chart-pie menu-icon"></i>
          <span class="menu-title">Productos</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
 
          </ul>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="fas fa-table menu-icon"></i>
          <span class="menu-title">Tables</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
          </ul>
        </div>
      </li>
      <!-- solo opcion -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-minus-square menu-icon"></i>
          <span class="menu-title">Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-bell menu-icon"></i>
          <span class="menu-title">Proveedores</span>
        </a>
      </li>

 
  
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="https://www.youtube.com/watch?v=Gm7Q_qmFTaY&list=RDGm7Q_qmFTaY&start_radio=1" aria-expanded="false" aria-controls="error">
          <i class="fas fa-exclamation-circle menu-icon"></i>
          <span class="menu-title">Youtube</span>
      <!--    <i class="menu-arrow"></i>    flechas-->
        </a>
       
      </li>
    </ul>
  </nav>
   <!-- columnas del costado final -->
