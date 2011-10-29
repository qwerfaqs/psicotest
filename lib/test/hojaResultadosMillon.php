<?php

/**
 * Description of hojaResultadosMillon
 *
 * @author QwerfaqS
 */
class HojaResultadosMillon extends BaseHojaMillon {

    var $nombre = 'Resultados';

    public function getValor($celda) {
        if (!isset($this->hoja[$celda])) // Si no esta guarda la celda
            switch ($celda) 
            { // hago el calculo que corresponda
              
               case "D2":
                    $celdas = array($this->getHoja("Respuestas")->getValor("C63"),
                        $this->getHoja("Respuestas")->getValor("C91"),
                        $this->getHoja("Respuestas")->getValor("C153"),
                        $this->getHoja("Respuestas")->getValor("C170"));
                    $this->hoja["D2"] = $this->sum($celdas);
                    break;
                
                case "D9":
                    $celdas = array($this->getHoja("Respuestas")->getValor("C2") * 3,
                        $this->getHoja("Respuestas")->getValor("C11") * 2,
                        $this->getHoja("Respuestas")->getValor("C14") * 3,
                        $this->getHoja("Respuestas")->getValor("D15"),
                        $this->getHoja("Respuestas")->getValor("C17"),
                        $this->getHoja("Respuestas")->getValor("C20") * 3,
                        $this->getHoja("Respuestas")->getValor("D21") * 2,
                        $this->getHoja("Respuestas")->getValor("C23"),
                        $this->getHoja("Respuestas")->getValor("C26"),
                        $this->getHoja("Respuestas")->getValor("D29"),
                        $this->getHoja("Respuestas")->getValor("C34") * 2,
                        $this->getHoja("Respuestas")->getValor("C35") * 3,
                        $this->getHoja("Respuestas")->getValor("C47"),
                        $this->getHoja("Respuestas")->getValor("C48") * 2,
                        $this->getHoja("Respuestas")->getValor("D49") * 2,
                        $this->getHoja("Respuestas")->getValor("C54"),
                        $this->getHoja("Respuestas")->getValor("D61"),
                        $this->getHoja("Respuestas")->getValor("D79"),
                        $this->getHoja("Respuestas")->getValor("C82") * 3,
                        $this->getHoja("Respuestas")->getValor("C84") * 2,
                        $this->getHoja("Respuestas")->getValor("C86"),
                        $this->getHoja("Respuestas")->getValor("D96"),
                        $this->getHoja("Respuestas")->getValor("D104"),
                        $this->getHoja("Respuestas")->getValor("C107") * 2,
                        $this->getHoja("Respuestas")->getValor("C109"),
                        $this->getHoja("Respuestas")->getValor("D112"),
                        $this->getHoja("Respuestas")->getValor("C125") * 2,
                        $this->getHoja("Respuestas")->getValor("D126"),
                        $this->getHoja("Respuestas")->getValor("C142"),
                        $this->getHoja("Respuestas")->getValor("C143"),
                        $this->getHoja("Respuestas")->getValor("C144") * 3,
                        $this->getHoja("Respuestas")->getValor("C151") * 2,
                        $this->getHoja("Respuestas")->getValor("C160"),
                        $this->getHoja("Respuestas")->getValor("C161"),
                        $this->getHoja("Respuestas")->getValor("C162") * 3,
                    );
                    $this->hoja["D9"] = $this->sum($celdas);
                    break;
                
                  case "D10":
                    $celdas = array(
                        $this->getHoja("Respuestas")->getValor("C3") ,
                        $this->getHoja("Respuestas")->getValor("C4") * 3,
                        $this->getHoja("Respuestas")->getValor("C9") * 3,
                        $this->getHoja("Respuestas")->getValor("D15"),
                        $this->getHoja("Respuestas")->getValor("C20")* 2,
                        $this->getHoja("Respuestas")->getValor("D22") ,
                        $this->getHoja("Respuestas")->getValor("C24") * 2,
                        $this->getHoja("Respuestas")->getValor("C26") * 2,
                        $this->getHoja("Respuestas")->getValor("C28")*2,
                        $this->getHoja("Respuestas")->getValor("D29"),
                        $this->getHoja("Respuestas")->getValor("C33") * 2,
                        $this->getHoja("Respuestas")->getValor("C35") ,
                        $this->getHoja("Respuestas")->getValor("C46"),
                        $this->getHoja("Respuestas")->getValor("C48") * 2,
                        $this->getHoja("Respuestas")->getValor("C50") * 3,
                        $this->getHoja("Respuestas")->getValor("C57") * 2 ,
                        $this->getHoja("Respuestas")->getValor("C58") * 2,
                        $this->getHoja("Respuestas")->getValor("C64") * 3,
                        $this->getHoja("Respuestas")->getValor("C78") * 3,
                        $this->getHoja("Respuestas")->getValor("C82"),
                        $this->getHoja("Respuestas")->getValor("C84") * 2,
                        $this->getHoja("Respuestas")->getValor("C86"),
                        $this->getHoja("Respuestas")->getValor("C103")* 2,
                        $this->getHoja("Respuestas")->getValor("C107") ,
                        $this->getHoja("Respuestas")->getValor("C110"),
                        $this->getHoja("Respuestas")->getValor("C111") * 2,
                        $this->getHoja("Respuestas")->getValor("C114"),
                        $this->getHoja("Respuestas")->getValor("C116") * 2,
                        $this->getHoja("Respuestas")->getValor("C119") * 2,
                        $this->getHoja("Respuestas")->getValor("C121") * 3,
                        $this->getHoja("Respuestas")->getValor("D126"),
                        $this->getHoja("Respuestas")->getValor("C134"),
                        $this->getHoja("Respuestas")->getValor("C140"),
                        $this->getHoja("Respuestas")->getValor("C142")* 3,
                        $this->getHoja("Respuestas")->getValor("C148"),
                        $this->getHoja("Respuestas")->getValor("C151")*2,
                        $this->getHoja("Respuestas")->getValor("C156")* 2,
                        $this->getHoja("Respuestas")->getValor("C159")*3,
                        $this->getHoja("Respuestas")->getValor("C161"),
                        $this->getHoja("Respuestas")->getValor("D164"),
                        $this->getHoja("Respuestas")->getValor("C172")*2,
                    );
                    $this->hoja["D10"] = $this->sum($celdas);
                    break;
                
                  case "D11":
                    $celdas = array(
                        $this->getHoja("Respuestas")->getValor("D5")*2 ,
                        $this->getHoja("Respuestas")->getValor("D8"),
                        $this->getHoja("Respuestas")->getValor("C11") * 3,
                        $this->getHoja("Respuestas")->getValor("D13"),
                        $this->getHoja("Respuestas")->getValor("D22"),
                        $this->getHoja("Respuestas")->getValor("D29") ,
                        $this->getHoja("Respuestas")->getValor("C32") * 3,
                        $this->getHoja("Respuestas")->getValor("C35") * 2,
                        $this->getHoja("Respuestas")->getValor("D41"),
                        $this->getHoja("Respuestas")->getValor("D42"),
                        $this->getHoja("Respuestas")->getValor("C43") * 3,
                        $this->getHoja("Respuestas")->getValor("D44") ,
                        $this->getHoja("Respuestas")->getValor("C50"),
                        $this->getHoja("Respuestas")->getValor("C55"),
                        $this->getHoja("Respuestas")->getValor("C58") * 2,
                        $this->getHoja("Respuestas")->getValor("C61") * 2 ,
                        $this->getHoja("Respuestas")->getValor("D75"),
                        $this->getHoja("Respuestas")->getValor("C76") ,
                        $this->getHoja("Respuestas")->getValor("C78") * 2,
                        $this->getHoja("Respuestas")->getValor("C79") * 3,
                        $this->getHoja("Respuestas")->getValor("C82") * 2,
                        $this->getHoja("Respuestas")->getValor("D92"),
                        $this->getHoja("Respuestas")->getValor("D93"),
                        $this->getHoja("Respuestas")->getValor("C98")*2 ,
                        $this->getHoja("Respuestas")->getValor("D102"),
                        $this->getHoja("Respuestas")->getValor("C107") * 3,
                        $this->getHoja("Respuestas")->getValor("C111"),
                        $this->getHoja("Respuestas")->getValor("C126") ,
                        $this->getHoja("Respuestas")->getValor("C134") * 3,
                        $this->getHoja("Respuestas")->getValor("C146") * 3,
                        $this->getHoja("Respuestas")->getValor("D148"),
                        $this->getHoja("Respuestas")->getValor("C150"),
                        $this->getHoja("Respuestas")->getValor("C160")*3,
                        $this->getHoja("Respuestas")->getValor("D163"),
                        $this->getHoja("Respuestas")->getValor("D164"),
                        $this->getHoja("Respuestas")->getValor("C169"),
                        $this->getHoja("Respuestas")->getValor("C174")* 3,                      
                    );
                    $this->hoja["D11"] = $this->sum($celdas);
                    break;
                
                   case "D12":
                        $celdas = array(
                        $this->getHoja("Respuestas")->getValor("D4") ,
                        $this->getHoja("Respuestas")->getValor("C8"),
                        $this->getHoja("Respuestas")->getValor("C10") * 2,
                        $this->getHoja("Respuestas")->getValor("C15")*3,
                        $this->getHoja("Respuestas")->getValor("D20"),
                        $this->getHoja("Respuestas")->getValor("C21") * 3 ,
                        $this->getHoja("Respuestas")->getValor("C29") * 3,
                        $this->getHoja("Respuestas")->getValor("C38"),
                        $this->getHoja("Respuestas")->getValor("D40"),
                        $this->getHoja("Respuestas")->getValor("C41"),
                        $this->getHoja("Respuestas")->getValor("C42"),
                        $this->getHoja("Respuestas")->getValor("C43")*2 ,
                        $this->getHoja("Respuestas")->getValor("C44")*2,
                        $this->getHoja("Respuestas")->getValor("C49")*3,
                        $this->getHoja("Respuestas")->getValor("D52"),
                        $this->getHoja("Respuestas")->getValor("C57") ,
                        $this->getHoja("Respuestas")->getValor("C61")*3,
                        $this->getHoja("Respuestas")->getValor("D62")*2 ,
                        $this->getHoja("Respuestas")->getValor("C67") * 2,
                        $this->getHoja("Respuestas")->getValor("D78"),
                        $this->getHoja("Respuestas")->getValor("C87") * 3,
                        $this->getHoja("Respuestas")->getValor("C90"),
                        $this->getHoja("Respuestas")->getValor("C92"),
                        $this->getHoja("Respuestas")->getValor("C96") ,
                        $this->getHoja("Respuestas")->getValor("C104")*2,
                        $this->getHoja("Respuestas")->getValor("C112") * 3,
                        $this->getHoja("Respuestas")->getValor("C126")*3,
                        $this->getHoja("Respuestas")->getValor("D127") ,
                        $this->getHoja("Respuestas")->getValor("C129"),
                        $this->getHoja("Respuestas")->getValor("C131"),
                        $this->getHoja("Respuestas")->getValor("C134")*2,
                        $this->getHoja("Respuestas")->getValor("C138")*3,
                        $this->getHoja("Respuestas")->getValor("C143"),
                        $this->getHoja("Respuestas")->getValor("D159")*2,
                        $this->getHoja("Respuestas")->getValor("C163"),
                        $this->getHoja("Respuestas")->getValor("C167")*2,
                        $this->getHoja("Respuestas")->getValor("C171")* 3,                      
                        $this->getHoja("Respuestas")->getValor("C172"),       
                        $this->getHoja("Respuestas")->getValor("C173"),       
                        $this->getHoja("Respuestas")->getValor("C174"),  
                    );
                    $this->hoja["D12"] = $this->sum($celdas);
                    break;
                
                    case "D13":
                        $celdas = array(
                        $this->getHoja("Respuestas")->getValor("C2")*3 ,
                        $this->getHoja("Respuestas")->getValor("C3"),
                        $this->getHoja("Respuestas")->getValor("C5") * 2,
                        $this->getHoja("Respuestas")->getValor("C7")*3,
                        $this->getHoja("Respuestas")->getValor("D9"),
                        $this->getHoja("Respuestas")->getValor("C13") ,
                        $this->getHoja("Respuestas")->getValor("C15") * 2,
                        $this->getHoja("Respuestas")->getValor("C16")*3,
                        $this->getHoja("Respuestas")->getValor("C17")*2,
                        $this->getHoja("Respuestas")->getValor("C23"),
                        $this->getHoja("Respuestas")->getValor("C29"),
                        $this->getHoja("Respuestas")->getValor("D32") ,
                        $this->getHoja("Respuestas")->getValor("C33"),
                        $this->getHoja("Respuestas")->getValor("C38")*3,
                        $this->getHoja("Respuestas")->getValor("C42")* 2,
                        $this->getHoja("Respuestas")->getValor("D43")*2 ,
                        $this->getHoja("Respuestas")->getValor("C44"),
                        $this->getHoja("Respuestas")->getValor("D46") ,
                        $this->getHoja("Respuestas")->getValor("C52"),
                        $this->getHoja("Respuestas")->getValor("D56"),
                        $this->getHoja("Respuestas")->getValor("C61"),
                        $this->getHoja("Respuestas")->getValor("D79"),
                        $this->getHoja("Respuestas")->getValor("C81"),
                        $this->getHoja("Respuestas")->getValor("C86") ,
                        $this->getHoja("Respuestas")->getValor("C87")*2,
                        $this->getHoja("Respuestas")->getValor("C90") * 3,
                        $this->getHoja("Respuestas")->getValor("C92")*3,
                        $this->getHoja("Respuestas")->getValor("C104")*2 ,
                        $this->getHoja("Respuestas")->getValor("D107"),
                        $this->getHoja("Respuestas")->getValor("C112")*2,
                        $this->getHoja("Respuestas")->getValor("C126")*2,
                        $this->getHoja("Respuestas")->getValor("C127"),
                        $this->getHoja("Respuestas")->getValor("C130")*3,
                        $this->getHoja("Respuestas")->getValor("C131"),
                        $this->getHoja("Respuestas")->getValor("C132")*3,
                        $this->getHoja("Respuestas")->getValor("C135"),
                        $this->getHoja("Respuestas")->getValor("C136"),                      
                        $this->getHoja("Respuestas")->getValor("C138")*2,       
                        $this->getHoja("Respuestas")->getValor("C143")*3,       
                        $this->getHoja("Respuestas")->getValor("C144"),  
                        $this->getHoja("Respuestas")->getValor("C147"), 
                        $this->getHoja("Respuestas")->getValor("D150")*2, 
                        $this->getHoja("Respuestas")->getValor("D159")*2, 
                        $this->getHoja("Respuestas")->getValor("C164"), 
                        $this->getHoja("Respuestas")->getValor("C166")*2, 
                        $this->getHoja("Respuestas")->getValor("C167")*3,     
                        $this->getHoja("Respuestas")->getValor("C171")*2,   
                        $this->getHoja("Respuestas")->getValor("C172")*2,   
                        $this->getHoja("Respuestas")->getValor("C173")*2,       
                    );
                    $this->hoja["D13"] = $this->sum($celdas);
                    break;
            }

        return parent::getValor($celda); // finalmente retorno el valor cualquiera sea el caso
    }

}

?>
