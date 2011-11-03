<?php

/**
 * Description of HojaBrHombreMillon
 *
 * @author QwerfaqS
 */
class HojaBrHombreMillon extends BaseHojaMillon {

    var $nombre = 'Br hombre';

    //put your code here
    public function __construct() {
        // Cargando los Valores fijos
        $criteria = new Criteria();
        $criteria->add(HojasPeer::NOMBRE, "BrHombre");
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
                case "C3":
                case "C4":
                case "C5":
                case "C6":
                case "C7":
                case "C8":
                case "C9":
                case "C10":
                case "C11":
                case "C12":
                case "C13":
                case "C14":
                case "C15":
                case "C16":
                case "C17":
                case "C18":
                case "C19":
                case "C20":
                case "C21":
                case "C22":
                case "C23":
                case "C24":
                case "C25":
                case "C26":
                case "C27":
                case "C28":
                case "C29":
                case "C30":
                case "C31":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getValor("D" . $fila) == "Verdadero" ) ? $this->getValor("B" . $fila) : 0;
                    break;
                case "C2":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D3") <= $this->getValor("A" . $fila) ) ? $this->getValor("B" . $fila) : 0;
                    break;
                case "C32":
                    $this->hoja[$celda] = $this->sumBetween("C2", "C31");
                    break;
                case "D3":
                case "D4":
                case "D5":
                case "D6":
                case "D7":
                case "D8":
                case "D9":
                case "D10":
                case "D11":
                case "D12":
                case "D13":
                case "D14":
                case "D15":
                case "D16":
                case "D17":
                case "D18":
                case "D19":
                case "D20":
                case "D21":
                case "D22":
                case "D23":
                case "D24":
                case "D25":
                case "D26":
                case "D27":
                case "D28":
                case "D29":
                case "D30":
                case "D31":
                    $fila = $this->cell2row($celda);
                    $ResultadosD3 = $this->getHoja("Resultados")->getValor("D3");
                    if ($ResultadosD3 > $this->getValor("A" . ($fila - 1)) and $ResultadosD3 <= $this->getValor("A" . $fila)) {
                        $this->hoja[$celda] = "Verdadero";
                    } else {
                        $this->hoja[$celda] = "Falso";
                    }
                    break;
                case "G2":
                case "G3":
                case "G4":
                case "G5":
                case "G6":
                case "G7":
                case "G8":
                case "G9":
                case "G10":
                case "G11":
                case "G12":
                case "G13":
                case "G14":
                case "G15":
                case "G16":
                case "G17":
                case "G18":
                case "G19":
                case "G20":
                case "G21":
                case "G22":
                case "G23":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D4") == $this->getValor("E" . $fila) ) ? $this->getValor("F" . $fila) : 0;
                    break;
                case "G24":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D4") >= $this->getValor("E" . $fila) ) ? $this->getValor("F" . $fila) : 0;
                    break;
                case "G25":
                    $this->hoja[$celda] = $this->sumBetween("G2", "G24");
                    break;
                case "J2":
                case "J3":
                case "J4":
                case "J5":
                case "J6":
                case "J7":
                case "J8":
                case "J9":
                case "J10":
                case "J11":
                case "J12":
                case "J13":
                case "J14":
                case "J15":
                case "J16":
                case "J17":
                case "J18":
                case "J19":
                case "J20":
                case "J21":
                case "J22":
                case "J23":
                case "J24":
                case "J25":
                case "J26":
                case "J27":
                case "J28":
                case "J29":
                case "J30":
                case "J31":
                case "J32":
                case "J33":
                case "J34":
                case "J35":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D5") == $this->getValor("H" . $fila) ) ? $this->getValor("I" . $fila) : 0;
                    break;
                case "J36":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D5") >= $this->getValor("H" . $fila) ) ? $this->getValor("I" . $fila) : 0;
                    break;
                case "J37":
                    $this->hoja[$celda] = $this->sumBetween("J2", "J36");
                case "M2":
                case "M3":
                case "M4":
                case "M5":
                case "M6":
                case "M7":
                case "M8":
                case "M9":
                case "M10":
                case "M11":
                case "M12":
                case "M13":
                case "M14":
                case "M15":
                case "M16":
                case "M17":
                case "M18":
                case "M19":
                case "M20":
                case "M21":
                case "M22":
                case "M23":
                case "M24":
                case "M25":
                case "M26":
                case "M27":
                case "M28":
                case "M29":
                case "M30":
                case "M31":
                case "M32":
                case "M33":
                case "M34":
                case "M35":
                case "M36":
                case "M37":
                case "M38":
                case "M39":
                case "M40":
                case "M41":
                case "M42":

                    break;
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D9") == $this->getValor("K" . $fila) ) ? $this->getValor("L" . $fila) : 0;
                    break;
                case "M43":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D9") >= $this->getValor("K" . $fila) ) ? $this->getValor("L" . $fila) : 0;
                    break;
                case "M44":
                    $this->hoja[$celda] = $this->sumBetween("M2", "M43");
                    break;
                case "P2":
                case "P3":
                case "P4":
                case "P5":
                case "P6":
                case "P7":
                case "P8":
                case "P9":
                case "P10":
                case "P11":
                case "P12":
                case "P13":
                case "P14":
                case "P15":
                case "P16":
                case "P17":
                case "P18":
                case "P19":
                case "P20":
                case "P21":
                case "P22":
                case "P23":
                case "P24":
                case "P25":
                case "P26":
                case "P27":
                case "P28":
                case "P29":
                case "P30":
                case "P31":
                case "P32":
                case "P33":
                case "P34":
                case "P35":
                case "P36":
                case "P37":
                case "P38":
                case "P39":
                case "P40":
                case "P41":
                case "P42":
                case "P43":
                case "P44":
                case "P45":
                case "P46":
                case "P47":
                     break;
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D10") == $this->getValor("N" . $fila) ) ? $this->getValor("O" . $fila) : 0;
                    break;
                case "P48":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D10") >= $this->getValor("N" . $fila) ) ? $this->getValor("O" . $fila) : 0;
                    break;
                case "P49":
                    $this->hoja[$celda] = $this->sumBetween("P2", "P48");
                    break;
                

                default:
                    break;
            }
        return parent::getValor($celda);
    }

}

?>
