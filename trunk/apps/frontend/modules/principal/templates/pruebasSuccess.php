  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
     <?php
foreach($pruebas as $prueba) :
    include_partial('prueba',array('prueba'=>$prueba));
endforeach;
?> 
          <a href="<?php echo url_for('principal/asistencia') ?>?evaluacion=<?php echo $evaluacion->getId() ?>"  ><input type="image" src="/images/btncomenzar.png" id="btncomenzar" /></a> 
      </div>
     
       <div class="sidebar">
        
        <div class="gadget">
          <h2 class="star"><span>Opciones</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Cerrar Sesión</a></li>                        
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>




<br/><br/><br/>
<a href="" >Iniciar test</a>



