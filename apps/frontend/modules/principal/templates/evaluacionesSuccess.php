  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
          <h2>Bienvenido <em>LA CONCHA DE TU HERMANA POR GUARDAR EL ID SOLO</em></h2>
        <h3>Evaluaciones disponibles:</h3>
        <p>Seleccione Cualquiera de las evaluaciones disponibles, el link lo llevará a una pantalla con detalles de la evaluación y de cada uno de los Evaluación que deberá realizar.	</p>
        <p id="listadoevaluaciones">
        <ul class="listadoconimagen">
            <?php foreach($evaluaciones as $evaluacion) :  
                    include_partial('evaluacion',array('evaluacion'=>$evaluacion));            	
                 endforeach; 
            ?>        
                
        </ul>
            
        </p>
        <input type="image" src="/images/listado reload.png" id="btnactualizar" />
        
        
      </div>
      <div class="sidebar">
        
        <div class="gadget">
          <h2 class="star"><span>Opciones</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="<?php echo url_for("@derechos_signout")?>">Cerrar Sesión</a></li>
          </ul>
        </div>
        </div>
      <div class="clr"></div>
    </div>
  </div>