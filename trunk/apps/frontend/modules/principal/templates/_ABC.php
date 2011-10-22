<ul class="listado">
        <li>
            <p>
                <?php echo $pregunta->getDescripcion() ?> 
                <br />
                <?php $respuestasMias = $pregunta->getRespuestass(); // Forro Hijo de puta, Que haces? ?>
                <?php foreach ($respuestasMias as $respuesta) : ?>
                        <strong>
                            <?php echo $respuesta->getOpciones()->getTexto() ?>) <?php echo $respuesta->getDescripcion() ?>
                        </strong>
                        <br />  
                <?php endforeach;?>
            </p>
            
                <label for="">La respuesta correcta es</label> 
                <select  name="valor<?php echo $n; ?>" >
                    <option value="A" >A</option>
                    <option value="B" >B</option>
                    <option value="C" >C</option>
                </select>
                <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
                <input type="hidden" name="pregunta<?php echo $n; ?>" value="<?php echo $pregunta->getId() ?>" />
                            
        </li>     
</ul>