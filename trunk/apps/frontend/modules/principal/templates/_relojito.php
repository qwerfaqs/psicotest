<script>
    function verificar(){
//        alert(i++);
$.get('<?php echo url_for('principal/consultaTiempo') ?>?ts='+Math.random(), function(data) {
          //$('.result').html(data);
          if(data == 'patadaNinja'){
              patadaEnElOrto();
          }else{
              verificarRecurrente();
          }
        });
        
    }
    function verificarRecurrente(){
        setTimeout('verificar()', 2000);
    }
    function patadaEnElOrto(){
        document.location.href = '<?php echo url_for('principal/pregunta') ?>';
    }
    $(document).ready(function(){
//        $('#contador').countdown({seconds: 30 });
        $('#contador').countdown({until: '+<?php echo $sf_user->getTimeDiff() ?>s', significant: 2, 
    layout: '{d<}{dn} {dl} {d>}{h<}{hn} {hl} {h>}{m<}{mn} {ml} {m>}{s<}{sn} {sl}{s>}'}); 
        verificarRecurrente();
    });
    
</script>

