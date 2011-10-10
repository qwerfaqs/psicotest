<div class="main">
  		

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      	            
     

           
            	<ul class="listado">
        <?php
                foreach ($preguntas as $pregunta)
                    include_partial('pingpon', array('pregunta' =>$pregunta, 'pagina' => $pagina , 'opciones'=>$opciones));
                ?>
                
                            	
	            </ul>
        <p style="text-align:center">&nbsp;</p>
        
                 		
      </div>

      <div class="clr"></div>
    </div>
  </div>
 
</div>