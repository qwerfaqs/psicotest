<ul class="listado">
        <li>
            <p>
                <?php echo $pregunta->getDescripcion() ?> 
                <br />
                <?php foreach ($respuestas as $respuesta) : ?>
                        <strong>
                            <?php echo $respuesta->getOpciones()->getTexto() ?>) <?php echo $respuesta->getDescripcion() ?>
                        </strong>
                        <br />  
                <?php endforeach;?>
            </p>
            <form  action="<?php echo url_for('principal/check') ?>" method="post">
                <label for="">La respuesta correcta es</label> 
                <select  name="valor" >
                    <option value="A" >A</option>
                    <option value="B" >B</option>
                    <option value="C" >C</option>
                </select>
                <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
                <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
                <input type="submit" value="Continuar" />
            </form>                      
        </li>     
</ul>