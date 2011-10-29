<?php
/**
 * Description of HojaBrMujerMillon
 *
 * @author QwerfaqS
 */
class HojaBrMujerMillon extends BaseHojaMillon {
    var $nombre = 'Br mujer';
    public function __construct() {
        $criteria = new Criteria();
        $criteria->add(HojasPeer::NOMBRE,  "BrMujer");
        $hoja = HojasPeer::doSelectOne($criteria);
        $valores = $hoja->getValoress();
        foreach ($valores as $valor) {
//            $valor = new Valores();
            $this->hoja[$valor->getCelda()] = $valor->getValor();
        }
        parent::__construct();
    }
    public function getValor($celda) {
        if (!isset($this->hoja[$celda]))
            switch ($celda) {
//            Me equivoque esto es del hombre
//                case "C2":                 
//                    $this->hoja[$celda] = ($this->getHoja("Resultados")->getValor("D3")) <= ($this->getHoja('BR hombre')->getValor("A2")) ? $this->getValor("B2") : 0;
//                    break;

                default:
                    break;
            }
        return parent::getValor($celda);
    }
}

?>
