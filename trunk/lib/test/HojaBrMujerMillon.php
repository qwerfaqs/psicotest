<?php

/**
 * Description of HojaBrMujerMillon
 *
 * @author QwerfaqS
 */
class HojaBrMujerMillon extends BaseHojaMillon {

    var $nombre = 'Br mujer';

    public function __construct() {
        // Cargando los Valores fijos
        $criteria = new Criteria();
        $criteria->add(HojasPeer::NOMBRE, "BrMujer");
        $hoja = HojasPeer::doSelectOne($criteria);
        $valores = $hoja->getValoress();
        foreach ($valores as $valor) {
//            $valor = new Valores();
            $this->hoja[$valor->getCelda()] = $valor->getValor();
        }
        //Cargando
        parent::__construct();
    }

    public function getValor($celda) {
        if (!isset($this->hoja[$celda]))
            switch ($celda) {
//            Me equivoque esto es del hombre
//                case "C2":                 
//                    $this->hoja[$celda] = ($this->getHoja("Resultados")->getValor("D3")) <= ($this->getHoja('BR hombre')->getValor("A2")) ? $this->getValor("B2") : 0;
//                    break;
                case"C2":
                case"C3":
                case"C4":
                case"C5":
                case"C6":
                case"C7":
                case"C8":
                case"C9":
                case"C10":
                case"C11":
                case"C12":
                case"C13":
                case"C14":
                case"C15":
                case"C16":
                case"C17":
                case"C18":
                case"C19":
                case"C20":
                case"C21":
                case"C22":
                case"C23":
                case"C24":
                case"C25":
                case"C26":
                case"C27":
                case"C28":
                case"C29":
                case"C30":
                case"C31":
                case"C32":
                case"C33":
                case"C34":
                case"C35":
                case"C36":
                case"C37":
                case"C38":
                case"C39":
                case"C40":
                case"C41":
                case"C42":
                case"C43":
                case"C44":
                case"C45":
                case"C46":
                case"C47":
                case"C48":
                case"C49":
                case"C50":
                case"C51":
                case"C52":
                case"C53":
                case"C54":
                case"C55":
                case"C56":
                case"C57":
                case"C58":
                case"C59":
                case"C60":
                case"C61":
                case"C62":
                case"C63":
                case"C64":
                case"C65":
                case"C66":
                case"C67":
                case"C68":
                case"C69":
                case"C70":
                case"C71":
                case"C72":
                case"C73":
                case"C74":
                case"C75":
                case"C76":
                case"C77":
                case"C78":
                case"C79":
                case"C80":
                case"C81":
                case"C82":
                case"C83":
                case"C84":
                case"C85":
                case"C86":
                case"C87":
                case"C88":
                case"C89":
                case"C90":
                case"C91":
                case"C92":
                case"C93":
                case"C94":
                case"C95":
                case"C96":
                case"C97":
                case"C98":
                case"C99":
                case"C100":
                case"C101":
                case"C102":
                case"C103":
                case"C104":
                case"C105":
                case"C106":
                case"C107":
                case"C108":
                case"C109":
                case"C110":
                case"C111":
                case"C112":
                case"C113":
                case"C114":
                case"C115":
                case"C116":
                case"C117":
                case"C118":
                case"C119":
                case"C120":
                case"C121":
                case"C122":
                case"C123":
                case"C124":
                case"C125":
                case"C126":
                case"C127":
                case"C128":
                case"C129":
                case"C130":
                case"C131":
                case"C132":
                case"C133":
                case"C134":
                case"C135":
                    $fila = ltrim($str, "C");
                    $this->hoja[$celda] = ($this->getHoja("Resultados")->getValor("D3")) == ($this->getValor("A" . $fila)) ? $this->getValor("B" . $fila) : 0;
                    break;
                case"C136":
                case"C137":
                case"C138":
                case"C139":
                case"C140":
                case"C141":
                case"C142":
                case"C143":
                case"C144":
                case"C145":
                case"C146":
                case"C147":
                case"C148":
                case"C149":
                case"C150":
                case"C151":
                case"C152":
                case"C153":
                case"C154":
                    $fila = ltrim($str, "C");
                    $this->hoja[$celda] = $this->getValor("D".$fila) == "VERDADERO" ? $this->getValor("B".$fila) :  0;
                    break;
                case"C155":
                    $this->hoja[$celda] = array_sum($this->getRangoValores("C", 2, 154));
                    break;
                default:
                    break;
            }
        return parent::getValor($celda);
    }

}

?>
