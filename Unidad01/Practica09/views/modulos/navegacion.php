<!-- Navegacion principal de la pagina, Esta en la parte izquierda del navegador --> 
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default"> 
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="menu-title">Administracion</li>


                <!--Opcion de los alumnos, que tiene dos subopciones, una para listar los alumnos acutlamente existentes y otra para agregar uno nuevo-->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 

                        <i class="menu-icon fas fa-user"></i>Alumnos
                    
                    </a>

                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <a href="index.php?action=alumnos">
                            <i class="fas fa-list-ol"></i> Listar
                            </a>
                        </li>

                        <li>
                            
                            <a href="index.php?action=agregar_alumno">
                                <i class="fas fa-plus"></i> Agregar
                            </a>
                        </li>
                    </ul>

                </li>



                <li>
                    <a href=""> 
                        <i class="menu-icon fas fa-chalkboard-teacher"></i> Tutores
                    </a>
                </li>

                <li>
                    <a href=""> 
                        <i class="menu-icon fas fa-graduation-cap"></i> Carreras
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</aside>