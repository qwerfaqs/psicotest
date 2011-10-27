<?php include_partial('enunciado'.$test, array("pagina"=>$pagina)); ?>

<style type="text/css">
    <!--
    .invisible {border-color:#FFFFFF;border-width:2px; border-style:solid;}
    .linea {background-color:#000000}
    .nolinea {background-color:#FFFFFF}
    .visible {border-color:#000000;border-width:2px; border-style:solid;}
    -->
</style>
<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <span id="contador"></span>
            <script>
                function fr(z, n) { //fr=fichaRespuesta
                    if (z == 'S') f_d.R1.value = n;
                    if (z == 'I') f_d.R2.value = n;
                    fro(z, f_d.R3.value, n);
                }	
                function fro(z, o, n) { //fro=ficharespuestaOrientacion
                    d=document;
                    if (z == "S") {
                        fila1=o+"1"
                        fila2=o+"2"
                        fila3=o+"3"
                    } else {
                        fila1=o+"4"
                        fila2=o+"5"
                        fila3=o+"6"
                    }
                    if (n==2||n==3||n==4||n==5||n==6) d.getElementById(fila1+"1").src='/images/p.png'; else d.getElementById(fila1+"1").src='/images/pb.png';
                    if (n==4||n==5||n==6)			d.getElementById(fila1+"3").src='/images/p.png'; else d.getElementById(fila1+"3").src='/images/pb.png';
			
                    if (n==6) 						d.getElementById(fila2+"1").src='/images/p.png'; else d.getElementById(fila2+"1").src='/images/pb.png';
                    if (n==1||n==3||n==5) 			d.getElementById(fila2+"2").src='/images/p.png'; else d.getElementById(fila2+"2").src='/images/pb.png';
                    if (n==6) 						d.getElementById(fila2+"3").src='/images/p.png'; else d.getElementById(fila2+"3").src='/images/pb.png';
			
                    if (n==4||n==5||n==6)			d.getElementById(fila3+"1").src='/images/p.png'; else d.getElementById(fila3+"1").src='/images/pb.png';
                    if (n==2||n==3||n==4||n==5||n==6) d.getElementById(fila3+"3").src='/images/p.png'; else d.getElementById(fila3+"3").src='/images/pb.png';
                }
                function mostrarFicha(o) {
                    d=document;
                    if (o == "H") {
                        document.getElementById('hor').className='visible';
                        document.getElementById('hor1').className='linea';
                        document.getElementById('ver').className='invisible';
                        document.getElementById('ver1').className='nolinea';
                        fro("S", "V", 0)
                        fro("I", "V", 0)
                    } else {
                        document.getElementById('hor').className='invisible';
                        document.getElementById('hor1').className='nolinea';
                        document.getElementById('ver').className='visible';
                        document.getElementById('ver1').className='linea'
                        fro("S", "H", 0)
                        fro("I", "H", 0)
                    }
                    f_d.R3.value = o
                    fr('S', f_d.R1.value)
                    fr('I', f_d.R2.value)
                }	
                function mostrarSolucion() {
				
                    document.getElementById('sver').className='visible';
                    document.getElementById('sver1').className='linea'
				
                    document.getElementById('stexto').className='textovisible';
                    fro("S", "SV", 4)
                    fro("I", "SV", 5)
                }
                function respuestaAcertada() {
                    if (f_d.R3.value == "V" && f_d.R1.value == 4 && f_d.R2.value == 5)
                        f_d.OK.value = parseInt(f_d.OK.value) + 1;
                }
            </script>
            <h3><?php // echo $currentprueba->getTests()->getTitulo();  ?></h3>
            <p>
                <?php // echo $currentprueba->getTests()->getEnunciado(); ?>      
                <?php   
                
                
                foreach ($preguntas as $n=>$pregunta)
                    include_partial('tabrespuesta', array('pregunta' =>$pregunta, 'pagina' => $pagina,'n'=>$n));
                ?>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php include_partial('relojito'); ?>
