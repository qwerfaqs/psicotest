<?php
/**
 * Description of hojaDatosMillon
 *
 * @author QwerfaqS
 */
class HojaDatosMillon extends BaseHojaMillon {
    var $nombre = 'Datos';
    
    public function __construct(Aspirantes $aspirante) {
        // como no tiene nada calculado, entonces lo inicializamos aca y dejamos el getValor por defecto
        $this->hoja = array();
        
        //Inicializando F12
        //tengo que obtener de la base datos el sexo del aspirante
        
        $this->hoja["F12"] = $aspirante->getSexo();
        
        //Inicializando F14
        //Obtener la edad
        $this->hoja["F14"] = $aspirante->getEdad();
        
        
        //Inicializando F17 y F18
        $this->hoja["F17"] = null;
        $this->hoja["F18"] = null;
        //Inicializando F19
        $this->hoja["F19"] = "X";
        parent::__construct();
    }
//    public function getValor($celda) {
//        $valor = null;
//        
//        switch ($celda) 
//        {
//            case "F12": // aca retorno Género:  "M" o "F"
//                if(isset($this->hoja[$celda])){
//                   $valor =  $this->hoja[$celda];
//                }else {
//                    //obtengo el sexo del aspirante
//                }
//                break;
//            case "F14": // Edad
//                break;
//            case "F17":
//            case "F18":
//                break;
//            case "F19":
//                $valor = "X";
//            default:
//                $valor = parent::getValor($celda);
//                break;
//        }
//        return $valor;
//        
//    }
}

?>
