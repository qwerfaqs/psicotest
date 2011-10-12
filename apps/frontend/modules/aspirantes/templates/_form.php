  <div class="content">
    <div id="registro" class="contenido">
    	<img src="/images/registerbackgroundtop.png"  style="position:relative; left:-10px; top:-10px;"/>
    	<h2>Formulario de Registro</h2>
         
        <form style="display: block; "  class="cmxform" action="<?php echo url_for('aspirantes/create'); ?>" method="POST">  
          <?php if (!$form->getObject()->isNew()): ?>
                <input type="hidden" name="sf_method" value="put" />
           <?php endif; ?>           
              <fieldset>   
                             <?php echo $form->renderGlobalErrors() ?>
                            <ol>
                                <li>
                                  <label for="name"><span>Nombre</span></label><?php echo $form['nombre']->render(array('class'=>'txt')); ?> </li>
                                
                                <li>
                                  <label for="surname"><span>Apellido</span></label> <?php echo $form['apellido']->render(array('class'=>'txt')); ?></li>
                                <li>
                                  <label for="cedula"><span>Cédula</span></label> 
                                  <?php echo $form['cedula']->render(array('class'=>'txt')); ?></li>
                                  <li>
                                  <label for="pass"><span>Contraseña</span></label> 
                                  <?php echo $form['password']->render(array('class'=>'txt')); ?></li>
                                  <li>
                                  <label for="repeatpassword"><span>Repita su contraseña</span></label> 
                                   <?php echo $form['password_check']->render(array('class'=>'txt')); ?></li>
                                
                                                                               
                                <li>
                                  <?php echo $form['id']->render(); ?>
                                  <?php echo $form['_csrf_token']->render(); ?>
                                                                    
                                </li>
                                <li>
                                    <p><input type="image" value="Enviar" id="boton_enviar" src="/images/contactformsend.png" alt="Enviar"/></p>
                                </li> 	
                                
                            </ol>
                        </fieldset>                        
                    </form>
                    <img src="/images/registerbackgroundbottom.png"  style="position:relative; left:-10px; bottom:-10px;"/>
                </div>
  </div>
