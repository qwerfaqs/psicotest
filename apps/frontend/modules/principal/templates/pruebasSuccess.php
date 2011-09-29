<?php
foreach($pruebas as $prueba) :
    
echo $prueba->getTests()->getTitulo().'<br/><br/><br/><br/><br/>';
echo $prueba->getTests()->getHistoria();

endforeach;
?> 

<br/><br/><br/>
<a href="<?php echo url_for('principal/progress') ?>?num=0" >Iniciar test</a>



