 <!-- Cabecera de la aplciacion en donde se muestra el logo, y opciones del administrador ya sea para salir de la aplicacion o actual sesion o para redirigirse a la configuracion del sistema-->
 <header id="header" class="header">    
    <div class="top-left">
        <div class="navbar-header"> 

            <!---Esto es lo que aparece en la seccion de logo, se puede reemplazar por una imagen tipo PNG para su mejor presentacion-->
            <a class="navbar-brand" href="./">UPV</a>
            
            <a id="menuToggle" class="menutoggle"><i class="fas fa-bars"></i></a> 

        </div> 
    </div>

    <div class="top-right"> 
        <div class="header-menu"> 

            <div class="user-area dropdown float-right">

                <!--Nombre que representa al usuario actualmente logeado-->
                <a href="#" class="btn btn-primary" data-toggle="dropdown">
                    Admin <i class="fas fa-arrow-down"></i>
                </a>

                <!--Dos opciones que se aparecen al momento de que se da click al nombre de arriba-->
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i>Configuracion</a>
                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Salir</a>
                </div>

            </div> 
        </div>  
    </div>
    
</header>