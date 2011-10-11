      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="/images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Opciones</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="<?php echo url_for("principal/index") ?>">Inicio</a></li>
            <li><a href="<?php echo url_for("principal/index") ?>">Cerrar Sesion</a></li>
          </ul>
        </div>
          
        <div class="gadget">
          <h2 class="star"><span>Administradores</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="<?php echo url_for('administradores/index') ?>">Listado de administradores</a></li>
            <li><a href="<?php echo url_for('administradores/new') ?>">Nuevo administrador</a></li>            
          </ul>
        </div>  
          
        <div class="gadget">
          <h2 class="star"><span>Evaluaciones</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="<?php echo url_for('evaluaciones/index') ?>">Listado Evaluaciones</a></li>
            <li><a href="<?php echo url_for('evaluaciones/new') ?>">Nueva Evaluacion</a></li>            
            <li><a href="<?php echo url_for('evaluaciones/historial') ?>">Historial de evaluaciones</a></li>  
          </ul>
        </div>

        <div class="gadget">
          <h2 class="star"><span>Aspirantes</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Nuevo aspirante</a></li>
            <li><a href="#">Ver Aspirantes</a></li>            
          </ul>
        </div>
          
        <div class="gadget">
          <h2 class="star"><span>Estadisticas</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Cantidad de aprobados por test</a></li>
            <li><a href="#">Cantidad de desaprobados por test</a></li>
            <li><a href="#">Cantidad de aspirantes registrados</a></li>            
          </ul>
        </div>
          
      </div>