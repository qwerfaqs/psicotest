      <div class="sidebar">
        <div class="searchform">

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
            <li><a href="<?php echo url_for('aspirantes/index') ?>">Ver Aspirantes</a></li>            
            <li><a href="<?php echo url_for('aspirantes/new') ?>">Nuevo aspirante</a></li>            
          </ul>
        </div>
          
        <div class="gadget">
          <h2 class="star"><span>Auditorias y reportes</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="<?php echo url_for('auditorias/index') ?>">Auditorias generales</a></li>            
            <li><a href="<?php echo url_for('estadisticas/aprobados') ?>">Cantidad de aprobados por test</a></li>
            <li><a href="<?php echo url_for('estadisticas/desaprobados') ?>">Cantidad de desaprobados por test</a></li>
            <li><a href="<?php echo url_for('estadisticas/aspirantes') ?>">Cantidad de aspirantes registrados</a></li>            
            <li><a href="<?php echo url_for('estadisticas/podiogeneral') ?>">20 aspirantes con mejores puntajes</a></li>            
          </ul>
        </div>
          
      </div>