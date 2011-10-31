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
                case "C2":
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
                case "C32":
                case "C33":
                case "C34":
                case "C35":
                case "C36":
                case "C37":
                case "C38":
                case "C39":
                case "C40":
                case "C41":
                case "C42":
                case "C43":
                case "C44":
                case "C45":
                case "C46":
                case "C47":
                case "C48":
                case "C49":
                case "C50":
                case "C51":
                case "C52":
                case "C53":
                case "C54":
                case "C55":
                case "C56":
                case "C57":
                case "C58":
                case "C59":
                case "C60":
                case "C61":
                case "C62":
                case "C63":
                case "C64":
                case "C65":
                case "C66":
                case "C67":
                case "C68":
                case "C69":
                case "C70":
                case "C71":
                case "C72":
                case "C73":
                case "C74":
                case "C75":
                case "C76":
                case "C77":
                case "C78":
                case "C79":
                case "C80":
                case "C81":
                case "C82":
                case "C83":
                case "C84":
                case "C85":
                case "C86":
                case "C87":
                case "C88":
                case "C89":
                case "C90":
                case "C91":
                case "C92":
                case "C93":
                case "C94":
                case "C95":
                case "C96":
                case "C97":
                case "C98":
                case "C99":
                case "C100":
                case "C101":
                case "C102":
                case "C103":
                case "C104":
                case "C105":
                case "C106":
                case "C107":
                case "C108":
                case "C109":
                case "C110":
                case "C111":
                case "C112":
                case "C113":
                case "C114":
                case "C115":
                case "C116":
                case "C117":
                case "C118":
                case "C119":
                case "C120":
                case "C121":
                case "C122":
                case "C123":
                case "C124":
                case "C125":
                case "C126":
                case "C127":
                case "C128":
                case "C129":
                case "C130":
                case "C131":
                case "C132":
                case "C133":
                case "C134":
                case "C135":
                    $fila = ltrim($str, "C");
                    $this->hoja[$celda] = ($this->getHoja("Resultados")->getValor("D3")) == ($this->getValor("A" . $fila)) ? $this->getValor("B" . $fila) : 0;
                    break;
                case "C136":
                case "C137":
                case "C138":
                case "C139":
                case "C140":
                case "C141":
                case "C142":
                case "C143":
                case "C144":
                case "C145":
                case "C146":
                case "C147":
                case "C148":
                case "C149":
                case "C150":
                case "C151":
                case "C152":
                case "C153":
                case "C154":
                    $fila = ltrim($str, "C");
                    $this->hoja[$celda] = $this->getValor("D" . $fila) == "Verdadero" ? $this->getValor("B" . $fila) : 0;
                    break;
                case "C155":
                    $this->hoja[$celda] = array_sum($this->getRangoValores("C", 2, 154));
                    break;
                case "D136":
                case "D137":
                case "D138":
                case "D139":
                case "D140":
                case "D141":
                case "D142":
                case "D143":
                case "D144":
                case "D145":
                case "D146":
                case "D147":
                case "D148":
                case "D149":
                case "D150":
                case "D151":
                case "D152":
                case "D153":
                case "D154":
                    // =and(resultados!D3>'br mujer'!A135,resultados!D3<='br mujer'!A136)
                    $col = "A"; //columna que se usa para calcular contra resultados!D3>
                    $fila = $this->cell2row($celda); // obtengo la fila 136 a 154
                    $ResultadosD3 = $this->getHoja("Resultados")->getValor("D3");
                    //                                  "A"  + $fila - 1 = De 135 a 153,                         "A"    De 136 a 154
                    if ($ResultadosD3 > $this->getValor($col . ($fila - 1)) and $ResultadosD3 <= $this->getValor($col . ($fila))) {
                        $this->hoja[$celda] = "Verdadero";
                    } else {
                        $this->hoja[$celda] = "Falso";
                    }
                    break;
                case "F2":
                case "F3":
                case "F4":
                case "F5":
                case "F6":
                case "F7":
                case "F8":
                case "F9":
                case "F10":
                case "F11":
                case "F12":
                case "F13":
                case "F14":
                case "F15":
                case "F16":
                case "F17":
                case "F18":
                case "F19":
                case "F20":
                case "F21":
                case "F22":
                case "F23":
                    // F2  =IF(Resultados!D4='BR mujer'!D2,E2,0)
                    // F23 =IF(Resultados!D4>='BR mujer'!D23,E23,0)

                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ($this->getHoja("Resultados")->getValor("D4") == $this->getValor("D" . $fila)) ? $this->getValor("E" . $fila) : 0;
                    break;
                case "F23":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ($this->getHoja("Resultados")->getValor("D4") >= $this->getValor("D" . $fila)) ? $this->getValor("E" . $fila) : 0;
                    break;
                case "F24":
                    // F24 =SUM(F2:F23)
                    $this->hoja[$celda] = $this->sumBetween("F2", "F23");
                    break;
                case "I2":
                case "I3":
                case "I4":
                case "I5":
                case "I6":
                case "I7":
                case "I8":
                case "I9":
                case "I10":
                case "I11":
                case "I12":
                case "I13":
                case "I14":
                case "I15":
                case "I16":
                case "I17":
                case "I18":
                case "I19":
                case "I20":
                case "I21":
                case "I22":
                case "I23":
                case "I24":
                case "I25":
                case "I26":
                case "I27":
                case "I28":
                case "I29":
                case "I30":
                case "I31":
                case "I32":
                case "I33":
                case "I34":
                case "I35":
                    // I2   =IF(Resultados!D5='BR mujer'!G2,H2,0)
                    // I35  =IF(Resultados!D5='BR mujer'!G35,H35,0)
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D5") == $this->getValor("G" . $fila) ) ? $this->getValor("H" . $fila) : 0;
                    break;
                case "I36":
                    // I36  =IF(Resultados!D5>='BR mujer'!G36,H36,0)
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D5") >= $this->getValor("G" . $fila) ) ? $this->getValor("H" . $fila) : 0;
                    break;
                case "I37":
                    // I37 =SUM(I2:I36)
                    $this->hoja[$celda] = $this->sumBetween("I2", "I36");
                    break;
                case "L2":
                case "L3":
                case "L4":
                case "L5":
                case "L6":
                case "L7":
                case "L8":
                case "L9":
                case "L10":
                case "L11":
                case "L12":
                case "L13":
                case "L14":
                case "L15":
                case "L16":
                case "L17":
                case "L18":
                case "L19":
                case "L20":
                case "L21":
                case "L22":
                case "L23":
                case "L24":
                case "L25":
                case "L26":
                case "L27":
                case "L28":
                case "L29":
                case "L30":
                case "L31":
                case "L32":
                case "L33":
                case "L34":
                case "L35":
                case "L36":
                case "L37":
                case "L38":
                case "L39":
                case "L40":
                case "L41":
                case "L42":
                case "L43":
                case "L44":
                case "L45":
                case "L46":
                    // L2   =IF(Resultados!D9='BR mujer'!J2,K2,0)
                    // L46  =IF(Resultados!D9='BR mujer'!J46,K46,0)
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D9") == $this->getValor("J" . $fila) ) ? $this->getValor("K" . $fila) : 0;
                    break;
                case "L47":
                    // L47  =IF(Resultados!D9>='BR mujer'!J47,K47,0)
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D9") >= $this->getValor("J" . $fila) ) ? $this->getValor("K" . $fila) : 0;
                    break;
                case "L48":
                    // L48 =SUM(L2:L47)
                    $this->hoja[$celda] = $this->sumBetween("L2", "L47");
                    break;
                case "O2":
                case "O3":
                case "O4":
                case "O5":
                case "O6":
                case "O7":
                case "O8":
                case "O9":
                case "O10":
                case "O11":
                case "O12":
                case "O13":
                case "O14":
                case "O15":
                case "O16":
                case "O17":
                case "O18":
                case "O19":
                case "O20":
                case "O21":
                case "O22":
                case "O23":
                case "O24":
                case "O25":
                case "O26":
                case "O27":
                case "O28":
                case "O29":
                case "O30":
                case "O31":
                case "O32":
                case "O33":
                case "O34":
                case "O35":
                case "O36":
                case "O37":
                case "O38":
                case "O39":
                case "O40":
                case "O41":
                case "O42":
                case "O43":
                case "O44":
                case "O45":
                case "O46":
                case "O47":
                case "O48":
                case "O49":
                case "O50":
                case "O51":
                case "O52":
                    // O2   =IF(Resultados!D10='BR mujer'!M2,N2,0)
                    //  O52  =IF(Resultados!D10='BR mujer'!M52,N52,0)
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D10") == $this->getValor("M" . $fila) ) ? $this->getValor("N" . $fila) : 0;
                    break;
                case "O53":
                    // O53  =IF(Resultados!D10>='BR mujer'!M53,N53,0)
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D10") >= $this->getValor("N" . $fila) ) ? $this->getValor("N" . $fila) : 0;
                    break;
                case "O54":
                    // O54 =SUM(O2:O53)
                    $this->hoja[$celda] = $this->sumBetween("O2", "O53");
                    break;
                case "R2":
                case "R3":
                case "R4":
                case "R5":
                case "R6":
                case "R7":
                case "R8":
                case "R9":
                case "R10":
                case "R11":
                case "R12":
                case "R13":
                case "R14":
                case "R15":
                case "R16":
                case "R17":
                case "R18":
                case "R19":
                case "R20":
                case "R21":
                case "R22":
                case "R23":
                case "R24":
                case "R25":
                case "R26":
                case "R27":
                case "R28":
                case "R29":
                case "R30":
                case "R31":
                case "R32":
                case "R33":
                case "R34":
                case "R35":
                case "R36":
                case "R37":
                case "R38":
                case "R39":
                case "R40":
                case "R41":
                case "R42":
                case "R43":
                case "R44":
                case "R45":
                case "R46":
                case "R47":
                case "R48":
                case "R49":
                case "R50":
                case "R51":
                case "R52":
                case "R53":
                case "R54":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D11") == $this->getValor("P" . $fila) ) ? $this->getValor("Q" . $fila) : 0;
                    break;
                case "R55":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D11") >= $this->getValor("P" . $fila) ) ? $this->getValor("Q" . $fila) : 0;
                    break;
                case "R56":
                    $this->hoja[$celda] = $this->sumBetween("R2", "R55");
                    break;
                case "U2":
                case "U3":
                case "U4":
                case "U5":
                case "U6":
                case "U7":
                case "U8":
                case "U9":
                case "U10":
                case "U11":
                case "U12":
                case "U13":
                case "U14":
                case "U15":
                case "U16":
                case "U17":
                case "U18":
                case "U19":
                case "U20":
                case "U21":
                case "U22":
                case "U23":
                case "U24":
                case "U25":
                case "U26":
                case "U27":
                case "U28":
                case "U29":
                case "U30":
                case "U31":
                case "U32":
                case "U33":
                case "U34":
                case "U35":
                case "U36":
                case "U37":
                case "U38":
                case "U39":
                case "U40":
                case "U41":
                case "U42":
                case "U43":
                case "U44":
                case "U45":
                case "U46":
                case "U47":
                case "U48":
                case "U49":
                case "U50":
                case "U51":
                case "U52":
                case "U53":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D12") == $this->getValor("S" . $fila) ) ? $this->getValor("T" . $fila) : 0;
                    break;
                case "U54":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D12") >= $this->getValor("S" . $fila) ) ? $this->getValor("T" . $fila) : 0;
                    break;
                case "U55":
                    $this->hoja[$celda] = $this->sumBetween("U2", "U54");
                    break;
                case "X2":
                case "X3":
                case "X4":
                case "X5":
                case "X6":
                case "X7":
                case "X8":
                case "X9":
                case "X10":
                case "X11":
                case "X12":
                case "X13":
                case "X14":
                case "X15":
                case "X16":
                case "X17":
                case "X18":
                case "X19":
                case "X20":
                case "X21":
                case "X22":
                case "X23":
                case "X24":
                case "X25":
                case "X26":
                case "X27":
                case "X28":
                case "X29":
                case "X30":
                case "X31":
                case "X32":
                case "X33":
                case "X34":
                case "X35":
                case "X36":
                case "X37":
                case "X38":
                case "X39":
                case "X40":
                case "X41":
                case "X42":
                case "X43":
                case "X44":
                case "X45":
                case "X46":
                case "X47":
                case "X48":
                case "X49":
                case "X50":
                case "X51":
                case "X52":
                case "X53":
                case "X54":
                case "X55":
                case "X56":
                case "X57":
                case "X58":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D13") == $this->getValor("V" . $fila) ) ? $this->getValor("W" . $fila) : 0;
                    break;
                case "X59":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D13") >= $this->getValor("V" . $fila) ) ? $this->getValor("W" . $fila) : 0;
                    break;
                case "X60":
                    $this->hoja[$celda] = $this->sumBetween("X2", "X59");
                    break;
                case "AA2":
                case "AA3":
                case "AA4":
                case "AA5":
                case "AA6":
                case "AA7":
                case "AA8":
                case "AA9":
                case "AA10":
                case "AA11":
                case "AA12":
                case "AA13":
                case "AA14":
                case "AA15":
                case "AA16":
                case "AA17":
                case "AA18":
                case "AA19":
                case "AA20":
                case "AA21":
                case "AA22":
                case "AA23":
                case "AA24":
                case "AA25":
                case "AA26":
                case "AA27":
                case "AA28":
                case "AA29":
                case "AA30":
                case "AA31":
                case "AA32":
                case "AA33":
                case "AA34":
                case "AA35":
                case "AA36":
                case "AA37":
                case "AA38":
                case "AA39":
                case "AA40":
                case "AA41":
                case "AA42":
                case "AA43":
                case "AA44":
                case "AA45":
                case "AA46":
                case "AA47":
                case "AA48":
                case "AA49":
                case "AA50":
                case "AA51":
                case "AA52":
                case "AA53":
                case "AA54":
                case "AA55":
                case "AA56":
                case "AA57":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D14") == $this->getValor("Y" . $fila) ) ? $this->getValor("Z" . $fila) : 0;
                    break;
                case "AA58":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D14") >= $this->getValor("Y" . $fila) ) ? $this->getValor("Z" . $fila) : 0;
                    break;
                case "AA59":
                    $this->hoja[$celda] = $this->sumBetween("AA2", "AA58");
                    break;
                case "AD2":
                case "AD3":
                case "AD4":
                case "AD5":
                case "AD6":
                case "AD7":
                case "AD8":
                case "AD9":
                case "AD10":
                case "AD11":
                case "AD12":
                case "AD13":
                case "AD14":
                case "AD15":
                case "AD16":
                case "AD17":
                case "AD18":
                case "AD19":
                case "AD20":
                case "AD21":
                case "AD22":
                case "AD23":
                case "AD24":
                case "AD25":
                case "AD26":
                case "AD27":
                case "AD28":
                case "AD29":
                case "AD30":
                case "AD31":
                case "AD32":
                case "AD33":
                case "AD34":
                case "AD35":
                case "AD36":
                case "AD37":
                case "AD38":
                case "AD39":
                case "AD40":
                case "AD41":
                case "AD42":
                case "AD43":
                case "AD44":
                case "AD45":
                case "AD46":
                case "AD47":
                case "AD48":
                case "AD49":
                case "AD50":
                case "AD51":
                case "AD52":
                case "AD53":
                case "AD54":
                case "AD55":
                case "AD56":
                case "AD57":
                case "AD58":
                case "AD59":
                case "AD60":
                case "AD61":
                case "AD62":
                case "AD63":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D15") == $this->getValor("AB" . $fila) ) ? $this->getValor("AC" . $fila) : 0;
                    break;
                case "AD64":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D15") >= $this->getValor("AB" . $fila) ) ? $this->getValor("AC" . $fila) : 0;
                    break;
                case "AD65":
                    $this->hoja[$celda] = $this->sumBetween("AD2", "AD64");
                    break;
                case "AG2":
                case "AG3":
                case "AG4":
                case "AG5":
                case "AG6":
                case "AG7":
                case "AG8":
                case "AG9":
                case "AG10":
                case "AG11":
                case "AG12":
                case "AG13":
                case "AG14":
                case "AG15":
                case "AG16":
                case "AG17":
                case "AG18":
                case "AG19":
                case "AG20":
                case "AG21":
                case "AG22":
                case "AG23":
                case "AG24":
                case "AG25":
                case "AG26":
                case "AG27":
                case "AG28":
                case "AG29":
                case "AG30":
                case "AG31":
                case "AG32":
                case "AG33":
                case "AG34":
                case "AG35":
                case "AG36":
                case "AG37":
                case "AG38":
                case "AG39":
                case "AG40":
                case "AG41":
                case "AG42":
                case "AG43":
                case "AG44":
                case "AG45":
                case "AG46":
                case "AG47":
                case "AG48":
                case "AG49":
                case "AG50":
                case "AG51":
                case "AG52":
                case "AG53":
                case "AG54":
                case "AG55":
                case "AG56":
                case "AG57":
                case "AG58":
                case "AG59":
                case "AG60":
                case "AG61":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D16") == $this->getValor("AE" . $fila) ) ? $this->getValor("AF" . $fila) : 0;
                    break;
                case "AG62":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D16") >= $this->getValor("AE" . $fila) ) ? $this->getValor("AF" . $fila) : 0;
                    break;
                case "AG63":
                    $this->hoja[$celda] = $this->sumBetween("AG2", "AG62");
                    break;
                case "AJ2":
                case "AJ3":
                case "AJ4":
                case "AJ5":
                case "AJ6":
                case "AJ7":
                case "AJ8":
                case "AJ9":
                case "AJ10":
                case "AJ11":
                case "AJ12":
                case "AJ13":
                case "AJ14":
                case "AJ15":
                case "AJ16":
                case "AJ17":
                case "AJ18":
                case "AJ19":
                case "AJ20":
                case "AJ21":
                case "AJ22":
                case "AJ23":
                case "AJ24":
                case "AJ25":
                case "AJ26":
                case "AJ27":
                case "AJ28":
                case "AJ29":
                case "AJ30":
                case "AJ31":
                case "AJ32":
                case "AJ33":
                case "AJ34":
                case "AJ35":
                case "AJ36":
                case "AJ37":
                case "AJ38":
                case "AJ39":
                case "AJ40":
                case "AJ41":
                case "AJ42":
                case "AJ43":
                case "AJ44":
                case "AJ45":
                case "AJ46":
                case "AJ47":
                case "AJ48":
                case "AJ49":
                case "AJ50":
                case "AJ51":
                case "AJ52":
                case "AJ53":
                case "AJ54":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D17") == $this->getValor("AH" . $fila) ) ? $this->getValor("AI" . $fila) : 0;
                    break;
                case "AJ55":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D17") >= $this->getValor("AH" . $fila) ) ? $this->getValor("AI" . $fila) : 0;
                    break;
                case "AJ56":
                    $this->hoja[$celda] = $this->sumBetween("AJ2", "AJ55");
                    break;
                case "AM2":
                case "AM3":
                case "AM4":
                case "AM5":
                case "AM6":
                case "AM7":
                case "AM8":
                case "AM9":
                case "AM10":
                case "AM11":
                case "AM12":
                case "AM13":
                case "AM14":
                case "AM15":
                case "AM16":
                case "AM17":
                case "AM18":
                case "AM19":
                case "AM20":
                case "AM21":
                case "AM22":
                case "AM23":
                case "AM24":
                case "AM25":
                case "AM26":
                case "AM27":
                case "AM28":
                case "AM29":
                case "AM30":
                case "AM31":
                case "AM32":
                case "AM33":
                case "AM34":
                case "AM35":
                case "AM36":
                case "AM37":
                case "AM38":
                case "AM39":
                case "AM40":
                case "AM41":
                case "AM42":
                case "AM43":
                case "AM44":
                case "AM45":
                case "AM46":
                case "AM47":
                case "AM48":
                case "AM49":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D18") == $this->getValor("AK" . $fila) ) ? $this->getValor("AL" . $fila) : 0;
                    break;
                case "AM50":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D18") >= $this->getValor("AK" . $fila) ) ? $this->getValor("AL" . $fila) : 0;
                    break;
                case "AM51":
                    $this->hoja[$celda] = $this->sumBetween("AM2", "AM50");
                    break;
                case "AP2":
                case "AP3":
                case "AP4":
                case "AP5":
                case "AP6":
                case "AP7":
                case "AP8":
                case "AP9":
                case "AP10":
                case "AP11":
                case "AP12":
                case "AP13":
                case "AP14":
                case "AP15":
                case "AP16":
                case "AP17":
                case "AP18":
                case "AP19":
                case "AP20":
                case "AP21":
                case "AP22":
                case "AP23":
                case "AP24":
                case "AP25":
                case "AP26":
                case "AP27":
                case "AP28":
                case "AP29":
                case "AP30":
                case "AP31":
                case "AP32":
                case "AP33":
                case "AP34":
                case "AP35":
                case "AP36":
                case "AP37":
                case "AP38":
                case "AP39":
                case "AP40":
                case "AP41":
                case "AP42":
                case "AP43":
                case "AP44":
                case "AP45":
                case "AP46":
                case "AP47":
                case "AP48":
                case "AP49":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D21") == $this->getValor("AN" . $fila) ) ? $this->getValor("AO" . $fila) : 0;
                    break;
                case "AP50":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D21") >= $this->getValor("AN" . $fila) ) ? $this->getValor("AO" . $fila) : 0;
                    break;
                case "AP51":
                    $this->hoja[$celda] = $this->sumBetween("AP2", "AP50");
                    break;
                case "AS2":
                case "AS3":
                case "AS4":
                case "AS5":
                case "AS6":
                case "AS7":
                case "AS8":
                case "AS9":
                case "AS10":
                case "AS11":
                case "AS12":
                case "AS13":
                case "AS14":
                case "AS15":
                case "AS16":
                case "AS17":
                case "AS18":
                case "AS19":
                case "AS20":
                case "AS21":
                case "AS22":
                case "AS23":
                case "AS24":
                case "AS25":
                case "AS26":
                case "AS27":
                case "AS28":
                case "AS29":
                case "AS30":
                case "AS31":
                case "AS32":
                case "AS33":
                case "AS34":
                case "AS35":
                case "AS36":
                case "AS37":
                case "AS38":
                case "AS39":
                case "AS40":
                case "AS41":
                case "AS42":
                case "AS43":
                case "AS44":
                case "AS45":
                case "AS46":
                case "AS47":
                case "AS48":
                case "AS49":
                case "AS50":
                case "AS51":
                case "AS52":
                case "AS53":
                case "AS54":
                case "AS55":
                case "AS56":
                case "AS57":
                case "AS58":
                case "AS59":
                case "AS60":
                case "AS61":
                case "AS62":
                case "AS63":
                case "AS64":
                case "AS65":
                case "AS66":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D22") == $this->getValor("AQ" . $fila) ) ? $this->getValor("AR" . $fila) : 0;
                    break;
                case "AS67":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D22") >= $this->getValor("AQ" . $fila) ) ? $this->getValor("AR" . $fila) : 0;
                    break;
                case "AS68":
                    $this->hoja[$celda] = $this->sumBetween("AS2", "AS67");
                    break;
                case "AV2":
                case "AV3":
                case "AV4":
                case "AV5":
                case "AV6":
                case "AV7":
                case "AV8":
                case "AV9":
                case "AV10":
                case "AV11":
                case "AV12":
                case "AV13":
                case "AV14":
                case "AV15":
                case "AV16":
                case "AV17":
                case "AV18":
                case "AV19":
                case "AV20":
                case "AV21":
                case "AV22":
                case "AV23":
                case "AV24":
                case "AV25":
                case "AV26":
                case "AV27":
                case "AV28":
                case "AV29":
                case "AV30":
                case "AV31":
                case "AV32":
                case "AV33":
                case "AV34":
                case "AV35":
                case "AV36":
                case "AV37":
                case "AV38":
                case "AV39":
                case "AV40":
                case "AV41":
                case "AV42":
                case "AV43":
                case "AV44":
                case "AV45":
                case "AV46":
                case "AV47":
                case "AV48":
                case "AV49":
                case "AV50":
                case "AV51":
                case "AV52":
                case "AV53":
                case "AV54":
                case "AV55":
                case "AV56":
                case "AV57":
                case "AV58":
                case "AV59":
                case "AV60":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D23") == $this->getValor("AT" . $fila) ) ? $this->getValor("AU" . $fila) : 0;
                    break;
                case "AV61":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D23") >= $this->getValor("AT" . $fila) ) ? $this->getValor("AU" . $fila) : 0;
                    break;
                case "AV62":
                    $this->hoja[$celda] = $this->sumBetween("AV2", "AV61");
                    break;
                case "AY2":
                case "AY3":
                case "AY4":
                case "AY5":
                case "AY6":
                case "AY7":
                case "AY8":
                case "AY9":
                case "AY10":
                case "AY11":
                case "AY12":
                case "AY13":
                case "AY14":
                case "AY15":
                case "AY16":
                case "AY17":
                case "AY18":
                case "AY19":
                case "AY20":
                case "AY21":
                case "AY22":
                case "AY23":
                case "AY24":
                case "AY25":
                case "AY26":
                case "AY27":
                case "AY28":
                case "AY29":
                case "AY30":
                case "AY31":
                case "AY32":
                case "AY33":
                case "AY34":
                case "AY35":
                case "AY36":
                case "AY37":
                case "AY38":
                case "AY39":
                case "AY40":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D26") == $this->getValor("AW" . $fila) ) ? $this->getValor("AX" . $fila) : 0;
                    break;
                case "AY41":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D26") >= $this->getValor("AW" . $fila) ) ? $this->getValor("AX" . $fila) : 0;
                    break;
                case "AY42":
                    $this->hoja[$celda] = $this->sumBetween("AY2", "AY41");
                    break;
                case "BB2":
                case "BB3":
                case "BB4":
                case "BB5":
                case "BB6":
                case "BB7":
                case "BB8":
                case "BB9":
                case "BB10":
                case "BB11":
                case "BB12":
                case "BB13":
                case "BB14":
                case "BB15":
                case "BB16":
                case "BB17":
                case "BB18":
                case "BB19":
                case "BB20":
                case "BB21":
                case "BB22":
                case "BB23":
                case "BB24":
                case "BB25":
                case "BB26":
                case "BB27":
                case "BB28":
                case "BB29":
                case "BB30":
                case "BB31":
                case "BB32":
                case "BB33":
                case "BB34":
                case "BB35":
                case "BB36":
                case "BB37":
                case "BB38":
                case "BB39":
                case "BB40":
                case "BB41":
                case "BB42":
                case "BB43":
                case "BB44":
                case "BB45":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D27") == $this->getValor("AZ" . $fila) ) ? $this->getValor("BA" . $fila) : 0;
                    break;
                case "BB46":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D27") >= $this->getValor("AZ" . $fila) ) ? $this->getValor("BA" . $fila) : 0;
                    break;
                case "BB47":
                    $this->hoja[$celda] = $this->sumBetween("BB2", "BB46");
                    break;
                case "BE2":
                case "BE3":
                case "BE4":
                case "BE5":
                case "BE6":
                case "BE7":
                case "BE8":
                case "BE9":
                case "BE10":
                case "BE11":
                case "BE12":
                case "BE13":
                case "BE14":
                case "BE15":
                case "BE16":
                case "BE17":
                case "BE18":
                case "BE19":
                case "BE20":
                case "BE21":
                case "BE22":
                case "BE23":
                case "BE24":
                case "BE25":
                case "BE26":
                case "BE27":
                case "BE28":
                case "BE29":
                case "BE30":
                case "BE31":
                case "BE32":
                case "BE33":
                case "BE34":
                case "BE35":
                case "BE36":
                case "BE37":
                case "BE38":
                case "BE39":
                case "BE40":
                case "BE41":
                case "BE42":
                case "BE43":
                case "BE44":
                case "BE45":
                case "BE46":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D28") == $this->getValor("BC" . $fila) ) ? $this->getValor("BD" . $fila) : 0;
                    break;
                case "BE47":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D28") >= $this->getValor("BC" . $fila) ) ? $this->getValor("BD" . $fila) : 0;
                    break;
                case "BE48":
                    $this->hoja[$celda] = $this->sumBetween("BE2", "BB47");
                    break;
                case "BH2":
                case "BH3":
                case "BH4":
                case "BH5":
                case "BH6":
                case "BH7":
                case "BH8":
                case "BH9":
                case "BH10":
                case "BH11":
                case "BH12":
                case "BH13":
                case "BH14":
                case "BH15":
                case "BH16":
                case "BH17":
                case "BH18":
                case "BH19":
                case "BH20":
                case "BH21":
                case "BH22":
                case "BH23":
                case "BH24":
                case "BH25":
                case "BH26":
                case "BH27":
                case "BH28":
                case "BH29":
                case "BH30":
                case "BH31":
                case "BH32":
                case "BH33":
                case "BH34":
                case "BH35":
                case "BH36":
                case "BH37":
                case "BH38":
                case "BH39":
                case "BH40":
                case "BH41":
                case "BH42":
                case "BH43":
                case "BH44":
                case "BH45":
                case "BH46":
                case "BH47":
                case "BH48":
                case "BH49":
                case "BH50":
                case "BH51":
                case "BH52":
                case "BH53":
                case "BH54":
                case "BH55":
                case "BH56":
                case "BH57":
                case "BH58":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D29") == $this->getValor("BF" . $fila) ) ? $this->getValor("BG" . $fila) : 0;
                    break;
                case "BH59":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D29") >= $this->getValor("BF" . $fila) ) ? $this->getValor("BG" . $fila) : 0;
                    break;
                case "BH60":
                    $this->hoja[$celda] = $this->sumBetween("BH2", "BH59");
                    break;
                case "BK2":
                case "BK3":
                case "BK4":
                case "BK5":
                case "BK6":
                case "BK7":
                case "BK8":
                case "BK9":
                case "BK10":
                case "BK11":
                case "BK12":
                case "BK13":
                case "BK14":
                case "BK15":
                case "BK16":
                case "BK17":
                case "BK18":
                case "BK19":
                case "BK20":
                case "BK21":
                case "BK22":
                case "BK23":
                case "BK24":
                case "BK25":
                case "BK26":
                case "BK27":
                case "BK28":
                case "BK29":
                case "BK30":
                case "BK31":
                case "BK32":
                case "BK33":
                case "BK34":
                case "BK35":
                case "BK36":
                case "BK37":
                case "BK38":
                case "BK39":
                case "BK40":
                case "BK41":
                case "BK42":
                case "BK43":
                case "BK44":
                case "BK45":
                case "BK46":
                case "BK47":
                case "BK48":
                case "BK49":
                case "BK50":
                case "BK51":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D30") == $this->getValor("BI" . $fila) ) ? $this->getValor("BJ" . $fila) : 0;
                    break;
                case "BK52":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D29") >= $this->getValor("BI" . $fila) ) ? $this->getValor("BJ" . $fila) : 0;
                    break;
                case "BK53":
                    $this->hoja[$celda] = $this->sumBetween("BK2", "BK52");
                    break;
                case "BR2":
                case "BR3":
                case "BR4":
                case "BR5":
                case "BR6":
                case "BR7":
                case "BR8":
                case "BR9":
                case "BR10":
                case "BR11":
                case "BR12":
                case "BR13":
                case "BR14":
                case "BR15":
                case "BR16":
                case "BR17":
                case "BR18":
                case "BR19":
                case "BR20":
                case "BR21":
                case "BR22":
                case "BR23":
                case "BR24":
                case "BR25":
                case "BR26":
                case "BR27":
                case "BR28":
                case "BR29":
                case "BR30":
                case "BR31":
                case "BR32":
                case "BR33":
                case "BR34":
                case "BR35":
                case "BR36":
                case "BR37":
                case "BR38":
                case "BR39":
                case "BR40":
                case "BR41":
                case "BR42":
                case "BR43":
                case "BR44":
                case "BR45":
                case "BR46":
                case "BR47":
                case "BR48":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D34") == $this->getValor("BP" . $fila) ) ? $this->getValor("BQ" . $fila) : 0;
                    break;
                case "BR49":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D34") >= $this->getValor("BP" . $fila) ) ? $this->getValor("BQ" . $fila) : 0;
                    break;
                case "BR50":
                    $this->hoja[$celda] = $this->sumBetween("BR2", "BR49");
                    break;
                case "BU2":
                case "BU3":
                case "BU4":
                case "BU5":
                case "BU6":
                case "BU7":
                case "BU8":
                case "BU9":
                case "BU10":
                case "BU11":
                case "BU12":
                case "BU13":
                case "BU14":
                case "BU15":
                case "BU16":
                case "BU17":
                case "BU18":
                case "BU19":
                case "BU20":
                case "BU21":
                case "BU22":
                case "BU23":
                case "BU24":
                case "BU25":
                case "BU26":
                case "BU27":
                case "BU28":
                case "BU29":
                case "BU30":
                case "BU31":
                case "BU32":
                case "BU33":
                case "BU34":
                case "BU35":
                case "BU36":
                case "BU37":
                case "BU38":
                case "BU39":
                case "BU40":
                case "BU41":
                case "BU42":
                case "BU43":
                case "BU44":
                case "BU45":
                case "BU46":
                case "BU47":
                case "BU48":
                case "BU49":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D35") == $this->getValor("BS" . $fila) ) ? $this->getValor("BT" . $fila) : 0;
                    break;
                case "BU50":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D35") >= $this->getValor("BS" . $fila) ) ? $this->getValor("BT" . $fila) : 0;
                    break;
                case "BU51":
                    $this->hoja[$celda] = $this->sumBetween("BU2", "BU50");
                    break;
                case "BX2":
                case "BX3":
                case "BX4":
                case "BX5":
                case "BX6":
                case "BX7":
                case "BX8":
                case "BX9":
                case "BX10":
                case "BX11":
                case "BX12":
                case "BX13":
                case "BX14":
                case "BX15":
                case "BX16":
                case "BX17":
                case "BX18":
                case "BX19":
                case "BX20":
                case "BX21":
                case "BX22":
                case "BX23":
                case "BX24":
                case "BX25":
                case "BX26":
                case "BX27":
                case "BX28":
                case "BX29":
                case "BX30":
                case "BX31":
                case "BX32":
                case "BX33":
                case "BX34":
                case "BX35":
                case "BX36":
                case "BX37":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D36") == $this->getValor("BV" . $fila) ) ? $this->getValor("BW" . $fila) : 0;
                    break;
                case "BX38":
                    $fila = $this->cell2row($celda);
                    $this->hoja[$celda] = ( $this->getHoja("Resultados")->getValor("D36") >= $this->getValor("BV" . $fila) ) ? $this->getValor("BW" . $fila) : 0;
                    break;
                case "BX39":
                    $this->hoja[$celda] = $this->sumBetween("BX2", "BX38");
                    break;
                
                default:
                    break;
            }
        return parent::getValor($celda);
    }

}

?>
