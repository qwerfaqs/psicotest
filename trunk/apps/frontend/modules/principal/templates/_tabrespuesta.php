</p>
<p style="text-align:center">
    <img src="/images/tests/<?php echo $pregunta->getTests()->getTitulo(); ?>/<?php echo $pregunta->getImagen(); ?>" alt="" width="203" height="227"/>
<div class="seleccionarficha" clear:both">
     <table align="center">
        <tbody>
            <tr>
                <td> Vertical
                    <input type="radio" name="orientacion" value="V" onclick="mostrarFicha('V');" checked="checked" />
                    <br />
                    Horizontal
                    <input type="radio" name="orientacion" value="H" onclick="mostrarFicha('H');" />
                </td>
                <td><table class="visible" cellpadding="5" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><input type="button" value=" 0 " onclick="fr('S',0);" />
                                    <input type="button" value=" 1 " onclick="fr('S',1);" />
                                    <input type="button" value=" 2 " onclick="fr('S',2);" />
                                    <input type="button" value=" 3 " onclick="fr('S',3);" />
                                    <input type="button" value=" 4 " onclick="fr('S',4);" />
                                    <input type="button" value=" 5 " onclick="fr('S',5);" />
                                    <input type="button" value=" 6 " onclick="fr('S',6);" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="2px"></td>
                            </tr>
                            <tr>
                                <td><input type="button" value=" 0 " onclick="fr('I',0);" />
                                    <input type="button" value=" 1 " onclick="fr('I',1);" />
                                    <input type="button" value=" 2 " onclick="fr('I',2);" />
                                    <input type="button" value=" 3 " onclick="fr('I',3);" />
                                    <input type="button" value=" 4 " onclick="fr('I',4);" />
                                    <input type="button" value=" 5 " onclick="fr('I',5);" />
                                    <input type="button" value=" 6 " onclick="fr('I',6);" />
                                </td>
                            </tr>
                        </tbody>
                    </table></td>
                <td><table id="ver" class="visible" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><img id="V11" src="/images/pb.png" /></td>
                                <td><img id="V12" src="/images/pb.png" /></td>
                                <td><img id="V13" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td><img id="V21" src="/images/pb.png" /></td>
                                <td><img id="V22" src="/images/pb.png" /></td>
                                <td><img id="V23" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td><img id="V31" src="/images/pb.png" /></td>
                                <td><img id="V32" src="/images/pb.png" /></td>
                                <td><img id="V33" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td class="linea" id="ver1" colspan="3" bgcolor="#000000" height="2px"></td>
                            </tr>
                            <tr>
                                <td><img id="V41" src="/images/pb.png" /></td>
                                <td><img id="V42" src="/images/pb.png" /></td>
                                <td><img id="V43" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td><img id="V51" src="/images/pb.png" /></td>
                                <td><img id="V52" src="/images/pb.png" /></td>
                                <td><img id="V53" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td><img id="V61" src="/images/pb.png" /></td>
                                <td><img id="V62" src="/images/pb.png" /></td>
                                <td><img id="V63" src="/images/pb.png" /></td>
                            </tr>
                        </tbody>
                    </table></td>
                <td><table id="hor" class="invisible" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><img id="H13" src="/images/pb.png" /></td>
                                <td><img id="H23" src="/images/pb.png" /></td>
                                <td><img id="H33" src="/images/pb.png" /></td>
                                <td class="nolinea" id="hor1" rowspan="3" bgcolor="#000000" width="2px"></td>
                                <td><img id="H43" src="/images/pb.png" /></td>
                                <td><img id="H53" src="/images/pb.png" /></td>
                                <td><img id="H63" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td><img id="H12" src="/images/pb.png" /></td>
                                <td><img id="H22" src="/images/pb.png" /></td>
                                <td><img id="H32" src="/images/pb.png" /></td>
                                <td><img id="H42" src="/images/pb.png" /></td>
                                <td><img id="H52" src="/images/pb.png" /></td>
                                <td><img id="H62" src="/images/pb.png" /></td>
                            </tr>
                            <tr>
                                <td><img id="H11" src="/images/pb.png" /></td>
                                <td><img id="H21" src="/images/pb.png" /></td>
                                <td><img id="H31" src="/images/pb.png" /></td>
                                <td><img id="H41" src="/images/pb.png" /></td>
                                <td><img id="H51" src="/images/pb.png" /></td>
                                <td><img id="H61" src="/images/pb.png" /></td>
                            </tr>
                        </tbody>
                    </table></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <form action="<?php echo url_for('principal/check') ?>" method="post" name="f_d" id="f_d" onsubmit="respuestaAcertada();return true;">
                        <input type="hidden" name="OK" value="0" />
                        <!-- aciertos -->
                        <input type="hidden" name="R1" value="0" />
                        <!-- Número superior -->
                        <input type="hidden" name="R2" value="0" />
                        <!-- Número inferior -->
                        <input type="hidden" name="R3" value="V" />
                        <!-- orientación H - V -->
                        <input type="hidden" name="FASE" value="1" />

                        <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />

                        <input type="hidden" name="pregunta<?php echo $n; ?>" value="<?php echo $pregunta->getId() ?>" />
                        
                         <input type="hidden" name="cantidad" value="<?php echo count($pregunta) ?>" />

                        <input type="submit" name="ir" value="Continuar" />
                    </form></td>
            </tr>
        </tbody>
    </table>
</div>         
</p>