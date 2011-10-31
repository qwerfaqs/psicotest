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
        {

            //QUEDA EL PUNTAJE FINAL PERO ESE LO LLAMO DE AFUERA PARA TRAER TODOS LOS CAMPOS

            switch ($celda) {
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

                case "D14":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C2")*2 ,
                            $this->getHoja("Respuestas")->getValor("C8")*3,
                            $this->getHoja("Respuestas")->getValor("C13") * 2,
                            $this->getHoja("Respuestas")->getValor("C16"),
                            $this->getHoja("Respuestas")->getValor("C21")*2,
                            $this->getHoja("Respuestas")->getValor("C23")*2 ,
                            $this->getHoja("Respuestas")->getValor("C33") * 2,
                            $this->getHoja("Respuestas")->getValor("D35"),
                            $this->getHoja("Respuestas")->getValor("C39")*2,
                            $this->getHoja("Respuestas")->getValor("C41")*3,
                            $this->getHoja("Respuestas")->getValor("D43")*2,
                            $this->getHoja("Respuestas")->getValor("C44")*2 ,
                            $this->getHoja("Respuestas")->getValor("C45"),
                            $this->getHoja("Respuestas")->getValor("C49"),
                            $this->getHoja("Respuestas")->getValor("C56")* 2,
                            $this->getHoja("Respuestas")->getValor("C65") ,
                            $this->getHoja("Respuestas")->getValor("C74")*2,
                            $this->getHoja("Respuestas")->getValor("C75")*2 ,
                            $this->getHoja("Respuestas")->getValor("D78"),
                            $this->getHoja("Respuestas")->getValor("D79")*2,
                            $this->getHoja("Respuestas")->getValor("C81")*2,
                            $this->getHoja("Respuestas")->getValor("D82")*2,
                            $this->getHoja("Respuestas")->getValor("C86"),
                            $this->getHoja("Respuestas")->getValor("C87")*2 ,
                            $this->getHoja("Respuestas")->getValor("C88")*2,
                            $this->getHoja("Respuestas")->getValor("C92") * 2,
                            $this->getHoja("Respuestas")->getValor("C93")*3,
                            $this->getHoja("Respuestas")->getValor("C95")*3 ,
                            $this->getHoja("Respuestas")->getValor("C102"),
                            $this->getHoja("Respuestas")->getValor("C104")*3,
                            $this->getHoja("Respuestas")->getValor("C105"),
                            $this->getHoja("Respuestas")->getValor("C112"),
                            $this->getHoja("Respuestas")->getValor("C114"),
                            $this->getHoja("Respuestas")->getValor("C117")*3,
                            $this->getHoja("Respuestas")->getValor("C130")*2,
                            $this->getHoja("Respuestas")->getValor("C131")*3,
                            $this->getHoja("Respuestas")->getValor("C141"),
                            $this->getHoja("Respuestas")->getValor("C143")*2,
                            $this->getHoja("Respuestas")->getValor("C145")*2,
                            $this->getHoja("Respuestas")->getValor("C148")*3,
                            $this->getHoja("Respuestas")->getValor("C158"),
                            $this->getHoja("Respuestas")->getValor("C163")*3,
                            $this->getHoja("Respuestas")->getValor("C166")*2,
                            $this->getHoja("Respuestas")->getValor("C172"),
                            $this->getHoja("Respuestas")->getValor("C173")*3,
                    );
                    $this->hoja["D14"] = $this->sum($celdas);
                    break;

                case "D15":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C2")*2 ,
                            $this->getHoja("Respuestas")->getValor("C5")*3,
                            $this->getHoja("Respuestas")->getValor("C8"),
                            $this->getHoja("Respuestas")->getValor("C10")*3,
                            $this->getHoja("Respuestas")->getValor("C13")*3,
                            $this->getHoja("Respuestas")->getValor("C22")*2 ,
                            $this->getHoja("Respuestas")->getValor("C31") * 3,
                            $this->getHoja("Respuestas")->getValor("D32"),
                            $this->getHoja("Respuestas")->getValor("C33"),
                            $this->getHoja("Respuestas")->getValor("C39"),
                            $this->getHoja("Respuestas")->getValor("C41"),
                            $this->getHoja("Respuestas")->getValor("C42")*3 ,
                            $this->getHoja("Respuestas")->getValor("D43")*2,
                            $this->getHoja("Respuestas")->getValor("C44"),
                            $this->getHoja("Respuestas")->getValor("C45")* 3,
                            $this->getHoja("Respuestas")->getValor("C59") ,
                            $this->getHoja("Respuestas")->getValor("C65")*2,
                            $this->getHoja("Respuestas")->getValor("C67") ,
                            $this->getHoja("Respuestas")->getValor("D72"),
                            $this->getHoja("Respuestas")->getValor("C75")*2,
                            $this->getHoja("Respuestas")->getValor("D78")*2,
                            $this->getHoja("Respuestas")->getValor("D79")*2,
                            $this->getHoja("Respuestas")->getValor("C81"),
                            $this->getHoja("Respuestas")->getValor("C83")*2 ,
                            $this->getHoja("Respuestas")->getValor("C85")*2,
                            $this->getHoja("Respuestas")->getValor("C87"),
                            $this->getHoja("Respuestas")->getValor("C92")*2,
                            $this->getHoja("Respuestas")->getValor("C96") ,
                            $this->getHoja("Respuestas")->getValor("C102")*3,
                            $this->getHoja("Respuestas")->getValor("D107"),
                            $this->getHoja("Respuestas")->getValor("C108")*2,
                            $this->getHoja("Respuestas")->getValor("C116")*2,
                            $this->getHoja("Respuestas")->getValor("C122")*2,
                            $this->getHoja("Respuestas")->getValor("C130")*2,
                            $this->getHoja("Respuestas")->getValor("C135")*3,
                            $this->getHoja("Respuestas")->getValor("C136"),
                            $this->getHoja("Respuestas")->getValor("C143"),
                            $this->getHoja("Respuestas")->getValor("D146"),
                            $this->getHoja("Respuestas")->getValor("C147"),
                            $this->getHoja("Respuestas")->getValor("C148"),
                            $this->getHoja("Respuestas")->getValor("C149")*3,
                            $this->getHoja("Respuestas")->getValor("C156")*2,
                            $this->getHoja("Respuestas")->getValor("C164")*3,
                            $this->getHoja("Respuestas")->getValor("C166"),
                            $this->getHoja("Respuestas")->getValor("C167")*2,
                    );
                    $this->hoja["D15"] = $this->sum($celdas);
                    break;

                case "D16":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C5") ,
                            $this->getHoja("Respuestas")->getValor("D8"),
                            $this->getHoja("Respuestas")->getValor("D21")*2,
                            $this->getHoja("Respuestas")->getValor("C22")*3,
                            $this->getHoja("Respuestas")->getValor("C33"),
                            $this->getHoja("Respuestas")->getValor("C40")*3 ,
                            $this->getHoja("Respuestas")->getValor("D41"),
                            $this->getHoja("Respuestas")->getValor("D44"),
                            $this->getHoja("Respuestas")->getValor("C47")*3,
                            $this->getHoja("Respuestas")->getValor("D49")*2,
                            $this->getHoja("Respuestas")->getValor("D51"),
                            $this->getHoja("Respuestas")->getValor("D61"),
                            $this->getHoja("Respuestas")->getValor("C62")*3,
                            $this->getHoja("Respuestas")->getValor("C65")*2,
                            $this->getHoja("Respuestas")->getValor("D67"),
                            $this->getHoja("Respuestas")->getValor("C75") ,
                            $this->getHoja("Respuestas")->getValor("C76")*3,
                            $this->getHoja("Respuestas")->getValor("D78") ,
                            $this->getHoja("Respuestas")->getValor("C79"),
                            $this->getHoja("Respuestas")->getValor("C82"),
                            $this->getHoja("Respuestas")->getValor("D87")*2,
                            $this->getHoja("Respuestas")->getValor("C89")*3,
                            $this->getHoja("Respuestas")->getValor("D93"),
                            $this->getHoja("Respuestas")->getValor("D96") ,
                            $this->getHoja("Respuestas")->getValor("D104"),
                            $this->getHoja("Respuestas")->getValor("D112"),
                            $this->getHoja("Respuestas")->getValor("C127")*3,
                            $this->getHoja("Respuestas")->getValor("D129") ,
                            $this->getHoja("Respuestas")->getValor("C135")*2,
                            $this->getHoja("Respuestas")->getValor("C139")*3,
                            $this->getHoja("Respuestas")->getValor("D146")*2,
                            $this->getHoja("Respuestas")->getValor("C149")*2,
                            $this->getHoja("Respuestas")->getValor("C150")*3,
                            $this->getHoja("Respuestas")->getValor("C154")*3,
                            $this->getHoja("Respuestas")->getValor("D156"),
                            $this->getHoja("Respuestas")->getValor("C160")*2,
                            $this->getHoja("Respuestas")->getValor("C162")*2,
                            $this->getHoja("Respuestas")->getValor("C164")*2,

                    );
                    $this->hoja["D16"] = $this->sum($celdas);
                    break;

                case "D17":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C2") ,
                            $this->getHoja("Respuestas")->getValor("C5"),
                            $this->getHoja("Respuestas")->getValor("C10")*2,
                            $this->getHoja("Respuestas")->getValor("C13"),
                            $this->getHoja("Respuestas")->getValor("C17")*2,
                            $this->getHoja("Respuestas")->getValor("C22") ,
                            $this->getHoja("Respuestas")->getValor("C23")*3,
                            $this->getHoja("Respuestas")->getValor("C24"),
                            $this->getHoja("Respuestas")->getValor("C26"),
                            $this->getHoja("Respuestas")->getValor("C29")*2,
                            $this->getHoja("Respuestas")->getValor("C44")*2,
                            $this->getHoja("Respuestas")->getValor("C51")*3,
                            $this->getHoja("Respuestas")->getValor("C52"),
                            $this->getHoja("Respuestas")->getValor("C56")*3,
                            $this->getHoja("Respuestas")->getValor("C59"),
                            $this->getHoja("Respuestas")->getValor("D62") ,
                            $this->getHoja("Respuestas")->getValor("C65")*2,
                            $this->getHoja("Respuestas")->getValor("C67")*3 ,
                            $this->getHoja("Respuestas")->getValor("C74")*2,
                            $this->getHoja("Respuestas")->getValor("C75")*2,
                            $this->getHoja("Respuestas")->getValor("C78")*2,
                            $this->getHoja("Respuestas")->getValor("C83")*2,
                            $this->getHoja("Respuestas")->getValor("C87")*2,
                            $this->getHoja("Respuestas")->getValor("C96") *3,
                            $this->getHoja("Respuestas")->getValor("C102")*2,
                            $this->getHoja("Respuestas")->getValor("C105")*3,
                            $this->getHoja("Respuestas")->getValor("C108")*3,
                            $this->getHoja("Respuestas")->getValor("C111") ,
                            $this->getHoja("Respuestas")->getValor("C116")*2,
                            $this->getHoja("Respuestas")->getValor("C121"),
                            $this->getHoja("Respuestas")->getValor("C124")*2,
                            $this->getHoja("Respuestas")->getValor("C129")*2,
                            $this->getHoja("Respuestas")->getValor("C130"),
                            $this->getHoja("Respuestas")->getValor("C136")*3,
                            $this->getHoja("Respuestas")->getValor("C140"),
                            $this->getHoja("Respuestas")->getValor("D150")*2,
                            $this->getHoja("Respuestas")->getValor("C156")*2,
                            $this->getHoja("Respuestas")->getValor("C157")*3,
                            $this->getHoja("Respuestas")->getValor("D160")*2,
                            $this->getHoja("Respuestas")->getValor("C166")*3,
                            $this->getHoja("Respuestas")->getValor("C172")*3,

                    );
                    $this->hoja["D17"] = $this->sum($celdas);
                    break;

                case "D18":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C9") ,
                            $this->getHoja("Respuestas")->getValor("C11")*2,
                            $this->getHoja("Respuestas")->getValor("C17")*2,
                            $this->getHoja("Respuestas")->getValor("C19"),
                            $this->getHoja("Respuestas")->getValor("C24")*3,
                            $this->getHoja("Respuestas")->getValor("C26") ,
                            $this->getHoja("Respuestas")->getValor("C29")*2,
                            $this->getHoja("Respuestas")->getValor("C32"),
                            $this->getHoja("Respuestas")->getValor("C43")*2,
                            $this->getHoja("Respuestas")->getValor("C46")*2,
                            $this->getHoja("Respuestas")->getValor("C52")*2,
                            $this->getHoja("Respuestas")->getValor("C55")*2,
                            $this->getHoja("Respuestas")->getValor("C57")*2,
                            $this->getHoja("Respuestas")->getValor("C58")*3,
                            $this->getHoja("Respuestas")->getValor("C64"),
                            $this->getHoja("Respuestas")->getValor("C66")*3 ,
                            $this->getHoja("Respuestas")->getValor("C72"),
                            $this->getHoja("Respuestas")->getValor("C74") ,
                            $this->getHoja("Respuestas")->getValor("D75"),
                            $this->getHoja("Respuestas")->getValor("C78")*2,
                            $this->getHoja("Respuestas")->getValor("C82"),
                            $this->getHoja("Respuestas")->getValor("C83"),
                            $this->getHoja("Respuestas")->getValor("C100"),
                            $this->getHoja("Respuestas")->getValor("C107") *2,
                            $this->getHoja("Respuestas")->getValor("C111")*3,
                            $this->getHoja("Respuestas")->getValor("C116")*2,
                            $this->getHoja("Respuestas")->getValor("C121")*2,
                            $this->getHoja("Respuestas")->getValor("C122")*3 ,
                            $this->getHoja("Respuestas")->getValor("C129"),
                            $this->getHoja("Respuestas")->getValor("C133")*2,
                            $this->getHoja("Respuestas")->getValor("C134"),
                            $this->getHoja("Respuestas")->getValor("C140")*3,
                            $this->getHoja("Respuestas")->getValor("C142"),
                            $this->getHoja("Respuestas")->getValor("C146")*2,
                            $this->getHoja("Respuestas")->getValor("C155")*3,
                            $this->getHoja("Respuestas")->getValor("C156")*2,
                            $this->getHoja("Respuestas")->getValor("C168"),
                            $this->getHoja("Respuestas")->getValor("C169")*3,
                            $this->getHoja("Respuestas")->getValor("C172")*2,
                            $this->getHoja("Respuestas")->getValor("C174")*3,

                    );
                    $this->hoja["D18"] = $this->sum($celdas);
                    break;


                case "D21":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C3")*2 ,
                            $this->getHoja("Respuestas")->getValor("C4")*2,
                            $this->getHoja("Respuestas")->getValor("C9")*2,
                            $this->getHoja("Respuestas")->getValor("C11"),
                            $this->getHoja("Respuestas")->getValor("C14"),
                            $this->getHoja("Respuestas")->getValor("D15") ,
                            $this->getHoja("Respuestas")->getValor("C20"),
                            $this->getHoja("Respuestas")->getValor("C24"),
                            $this->getHoja("Respuestas")->getValor("C25")*3,
                            $this->getHoja("Respuestas")->getValor("C26"),
                            $this->getHoja("Respuestas")->getValor("C32")*2,
                            $this->getHoja("Respuestas")->getValor("C39")*2,
                            $this->getHoja("Respuestas")->getValor("C48")*3,
                            $this->getHoja("Respuestas")->getValor("C58")*3,
                            $this->getHoja("Respuestas")->getValor("D49"),
                            $this->getHoja("Respuestas")->getValor("C50")*2 ,
                            $this->getHoja("Respuestas")->getValor("C54"),
                            $this->getHoja("Respuestas")->getValor("D61") ,
                            $this->getHoja("Respuestas")->getValor("C64")*2,
                            $this->getHoja("Respuestas")->getValor("C70")*3,
                            $this->getHoja("Respuestas")->getValor("C78")*2,
                            $this->getHoja("Respuestas")->getValor("C84")*3,
                            $this->getHoja("Respuestas")->getValor("C86")*2,
                            $this->getHoja("Respuestas")->getValor("C101") *2,
                            $this->getHoja("Respuestas")->getValor("C103")*3,
                            $this->getHoja("Respuestas")->getValor("C109"),
                            $this->getHoja("Respuestas")->getValor("C113")*3,
                            $this->getHoja("Respuestas")->getValor("C114")*2 ,
                            $this->getHoja("Respuestas")->getValor("C119")*3,
                            $this->getHoja("Respuestas")->getValor("C121")*2,
                            $this->getHoja("Respuestas")->getValor("C124")*2,
                            $this->getHoja("Respuestas")->getValor("C125")*2,
                            $this->getHoja("Respuestas")->getValor("C131"),
                            $this->getHoja("Respuestas")->getValor("C134")*2,
                            $this->getHoja("Respuestas")->getValor("C137"),
                            $this->getHoja("Respuestas")->getValor("C142")*2,
                            $this->getHoja("Respuestas")->getValor("C148"),
                            $this->getHoja("Respuestas")->getValor("C151")*3,
                            $this->getHoja("Respuestas")->getValor("C159")*2,
                            $this->getHoja("Respuestas")->getValor("C161"),
                            $this->getHoja("Respuestas")->getValor("C162"),
                            $this->getHoja("Respuestas")->getValor("C163"),
                            $this->getHoja("Respuestas")->getValor("C165")*2,
                            $this->getHoja("Respuestas")->getValor("C166"),
                            $this->getHoja("Respuestas")->getValor("D167")*2,
                    );
                    $this->hoja["D21"] = $this->sum($celdas);
                    break;

                case "D22":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C6")*2 ,
                            $this->getHoja("Respuestas")->getValor("C8"),
                            $this->getHoja("Respuestas")->getValor("C23")*2,
                            $this->getHoja("Respuestas")->getValor("C24")*2,
                            $this->getHoja("Respuestas")->getValor("C26")*3,
                            $this->getHoja("Respuestas")->getValor("C27")*2 ,
                            $this->getHoja("Respuestas")->getValor("C28")*2,
                            $this->getHoja("Respuestas")->getValor("C36")*2,
                            $this->getHoja("Respuestas")->getValor("C37"),
                            $this->getHoja("Respuestas")->getValor("C41"),
                            $this->getHoja("Respuestas")->getValor("C44")*3,
                            $this->getHoja("Respuestas")->getValor("C45"),
                            $this->getHoja("Respuestas")->getValor("C51")*2,
                            $this->getHoja("Respuestas")->getValor("C52"),
                            $this->getHoja("Respuestas")->getValor("C54"),
                            $this->getHoja("Respuestas")->getValor("C55") ,
                            $this->getHoja("Respuestas")->getValor("C57")*3,
                            $this->getHoja("Respuestas")->getValor("C58") ,
                            $this->getHoja("Respuestas")->getValor("C59")*3,
                            $this->getHoja("Respuestas")->getValor("C60")*2,
                            $this->getHoja("Respuestas")->getValor("C66"),
                            $this->getHoja("Respuestas")->getValor("C67")*2,
                            $this->getHoja("Respuestas")->getValor("C68"),
                            $this->getHoja("Respuestas")->getValor("C73"),
                            $this->getHoja("Respuestas")->getValor("C74")*3,
                            $this->getHoja("Respuestas")->getValor("C75"),
                            $this->getHoja("Respuestas")->getValor("C78"),
                            $this->getHoja("Respuestas")->getValor("C79") ,
                            $this->getHoja("Respuestas")->getValor("C80")*2,
                            $this->getHoja("Respuestas")->getValor("C83")*3,
                            $this->getHoja("Respuestas")->getValor("C92")*2,
                            $this->getHoja("Respuestas")->getValor("C95"),
                            $this->getHoja("Respuestas")->getValor("C96")*2,
                            $this->getHoja("Respuestas")->getValor("C98")*2,
                            $this->getHoja("Respuestas")->getValor("C100"),
                            $this->getHoja("Respuestas")->getValor("C102")*2,
                            $this->getHoja("Respuestas")->getValor("C104"),
                            $this->getHoja("Respuestas")->getValor("C105"),
                            $this->getHoja("Respuestas")->getValor("C109"),
                            $this->getHoja("Respuestas")->getValor("C111"),
                            $this->getHoja("Respuestas")->getValor("C114")*3,
                            $this->getHoja("Respuestas")->getValor("C116")*3,
                            $this->getHoja("Respuestas")->getValor("C129")*3,
                            $this->getHoja("Respuestas")->getValor("C130")*2,
                            $this->getHoja("Respuestas")->getValor("C131"),
                            $this->getHoja("Respuestas")->getValor("C133"),
                            $this->getHoja("Respuestas")->getValor("C136"),
                            $this->getHoja("Respuestas")->getValor("C137")*2,
                            $this->getHoja("Respuestas")->getValor("C140"),
                            $this->getHoja("Respuestas")->getValor("C141")*2,
                            $this->getHoja("Respuestas")->getValor("C143")*2,
                            $this->getHoja("Respuestas")->getValor("C145"),
                            $this->getHoja("Respuestas")->getValor("C148"),
                            $this->getHoja("Respuestas")->getValor("155"),
                            $this->getHoja("Respuestas")->getValor("C156")*3,
                            $this->getHoja("Respuestas")->getValor("C157")*2,
                            $this->getHoja("Respuestas")->getValor("C163"),
                            $this->getHoja("Respuestas")->getValor("C166"),
                            $this->getHoja("Respuestas")->getValor("C168"),
                            $this->getHoja("Respuestas")->getValor("C169"),
                            $this->getHoja("Respuestas")->getValor("C172")*3,
                            $this->getHoja("Respuestas")->getValor("C174"),

                    );
                    $this->hoja["D22"] = $this->sum($celdas);
                    break;

                case "D23":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C7"),
                            $this->getHoja("Respuestas")->getValor("C13"),
                            $this->getHoja("Respuestas")->getValor("C16")*2,
                            $this->getHoja("Respuestas")->getValor("C17")*3,
                            $this->getHoja("Respuestas")->getValor("C22"),
                            $this->getHoja("Respuestas")->getValor("C23") ,
                            $this->getHoja("Respuestas")->getValor("C25")*2,
                            $this->getHoja("Respuestas")->getValor("C31"),
                            $this->getHoja("Respuestas")->getValor("C33")*3,
                            $this->getHoja("Respuestas")->getValor("C38")*2,
                            $this->getHoja("Respuestas")->getValor("C39")*3,
                            $this->getHoja("Respuestas")->getValor("C40"),
                            $this->getHoja("Respuestas")->getValor("C42"),
                            $this->getHoja("Respuestas")->getValor("C44"),
                            $this->getHoja("Respuestas")->getValor("C45"),
                            $this->getHoja("Respuestas")->getValor("C47")*2 ,
                            $this->getHoja("Respuestas")->getValor("C56"),
                            $this->getHoja("Respuestas")->getValor("C62") ,
                            $this->getHoja("Respuestas")->getValor("C64"),
                            $this->getHoja("Respuestas")->getValor("C65")*3,
                            $this->getHoja("Respuestas")->getValor("C69"),
                            $this->getHoja("Respuestas")->getValor("C75")*3,
                            $this->getHoja("Respuestas")->getValor("C76"),
                            $this->getHoja("Respuestas")->getValor("C81")*2,
                            $this->getHoja("Respuestas")->getValor("C85")*3,
                            $this->getHoja("Respuestas")->getValor("C86")*3,
                            $this->getHoja("Respuestas")->getValor("C90")*2,
                            $this->getHoja("Respuestas")->getValor("C99") ,
                            $this->getHoja("Respuestas")->getValor("C101")*2,
                            $this->getHoja("Respuestas")->getValor("C104")*2,
                            $this->getHoja("Respuestas")->getValor("C124")*2,
                            $this->getHoja("Respuestas")->getValor("C127")*2,
                            $this->getHoja("Respuestas")->getValor("C128")*1,
                            $this->getHoja("Respuestas")->getValor("C130")*2,
                            $this->getHoja("Respuestas")->getValor("C132")*2,
                            $this->getHoja("Respuestas")->getValor("C136"),
                            $this->getHoja("Respuestas")->getValor("C139"),
                            $this->getHoja("Respuestas")->getValor("C144"),
                            $this->getHoja("Respuestas")->getValor("C147")*3,
                            $this->getHoja("Respuestas")->getValor("C164"),
                            $this->getHoja("Respuestas")->getValor("C165")*3,
                            $this->getHoja("Respuestas")->getValor("C166"),
                            $this->getHoja("Respuestas")->getValor("C172"),
                            $this->getHoja("Respuestas")->getValor("C173"),
                    );
                    $this->hoja["D23"] = $this->sum($celdas);
                    break;

                case "D27":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C6"),
                            $this->getHoja("Respuestas")->getValor("C19")*2,
                            $this->getHoja("Respuestas")->getValor("C27"),
                            $this->getHoja("Respuestas")->getValor("C30")*3,
                            $this->getHoja("Respuestas")->getValor("C32"),
                            $this->getHoja("Respuestas")->getValor("C34")*3 ,
                            $this->getHoja("Respuestas")->getValor("C37"),
                            $this->getHoja("Respuestas")->getValor("D42"),
                            $this->getHoja("Respuestas")->getValor("C43"),
                            $this->getHoja("Respuestas")->getValor("C51"),
                            $this->getHoja("Respuestas")->getValor("C52")*2,
                            $this->getHoja("Respuestas")->getValor("C54")*2,
                            $this->getHoja("Respuestas")->getValor("C57"),
                            $this->getHoja("Respuestas")->getValor("C61"),
                            $this->getHoja("Respuestas")->getValor("C67"),
                            $this->getHoja("Respuestas")->getValor("C68")*2 ,
                            $this->getHoja("Respuestas")->getValor("C69")*3,
                            $this->getHoja("Respuestas")->getValor("C72")*3 ,
                            $this->getHoja("Respuestas")->getValor("C73")*3,
                            $this->getHoja("Respuestas")->getValor("C79"),
                            $this->getHoja("Respuestas")->getValor("C97")*3,
                            $this->getHoja("Respuestas")->getValor("C99")*2,
                            $this->getHoja("Respuestas")->getValor("C103"),
                            $this->getHoja("Respuestas")->getValor("C110"),
                            $this->getHoja("Respuestas")->getValor("C115")*2,
                            $this->getHoja("Respuestas")->getValor("C118"),
                            $this->getHoja("Respuestas")->getValor("C119"),
                            $this->getHoja("Respuestas")->getValor("C138") ,
                            $this->getHoja("Respuestas")->getValor("C146"),
                            $this->getHoja("Respuestas")->getValor("C171"),
                            $this->getHoja("Respuestas")->getValor("C174"),

                    );
                    $this->hoja["D27"] = $this->sum($celdas);
                    break;

                case "D28":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C12")*3,
                            $this->getHoja("Respuestas")->getValor("C15")*2,
                            $this->getHoja("Respuestas")->getValor("C18"),
                            $this->getHoja("Respuestas")->getValor("D20"),
                            $this->getHoja("Respuestas")->getValor("C21")*2,
                            $this->getHoja("Respuestas")->getValor("C29")*2 ,
                            $this->getHoja("Respuestas")->getValor("C38"),
                            $this->getHoja("Respuestas")->getValor("C41"),
                            $this->getHoja("Respuestas")->getValor("D43"),
                            $this->getHoja("Respuestas")->getValor("C51")*2,
                            $this->getHoja("Respuestas")->getValor("C59"),
                            $this->getHoja("Respuestas")->getValor("C61")*2,
                            $this->getHoja("Respuestas")->getValor("C67"),
                            $this->getHoja("Respuestas")->getValor("C68"),
                            $this->getHoja("Respuestas")->getValor("C74"),
                            $this->getHoja("Respuestas")->getValor("C87")*2 ,
                            $this->getHoja("Respuestas")->getValor("C90"),
                            $this->getHoja("Respuestas")->getValor("C94")*3 ,
                            $this->getHoja("Respuestas")->getValor("C96"),
                            $this->getHoja("Respuestas")->getValor("C99"),
                            $this->getHoja("Respuestas")->getValor("C102"),
                            $this->getHoja("Respuestas")->getValor("C104")*2,
                            $this->getHoja("Respuestas")->getValor("C112"),
                            $this->getHoja("Respuestas")->getValor("C122"),
                            $this->getHoja("Respuestas")->getValor("C126")*2,
                            $this->getHoja("Respuestas")->getValor("C128"),
                            $this->getHoja("Respuestas")->getValor("C129")*2,
                            $this->getHoja("Respuestas")->getValor("C132") ,
                            $this->getHoja("Respuestas")->getValor("C135")*2,
                            $this->getHoja("Respuestas")->getValor("C138")*2,
                            $this->getHoja("Respuestas")->getValor("C152")*3,
                            $this->getHoja("Respuestas")->getValor("D159"),
                            $this->getHoja("Respuestas")->getValor("D162"),
                            $this->getHoja("Respuestas")->getValor("C167"),
                            $this->getHoja("Respuestas")->getValor("C171")*2,
                            $this->getHoja("Respuestas")->getValor("C173"),
                            $this->getHoja("Respuestas")->getValor("C175")*3,

                    );
                    $this->hoja["D28"] = $this->sum($celdas);
                    break;

                case "D29":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C6")*2,
                            $this->getHoja("Respuestas")->getValor("C9")*2,
                            $this->getHoja("Respuestas")->getValor("C26"),
                            $this->getHoja("Respuestas")->getValor("C27")*2,
                            $this->getHoja("Respuestas")->getValor("C28")*3,
                            $this->getHoja("Respuestas")->getValor("C37")*2 ,
                            $this->getHoja("Respuestas")->getValor("D42"),
                            $this->getHoja("Respuestas")->getValor("C46")*3,
                            $this->getHoja("Respuestas")->getValor("C47"),
                            $this->getHoja("Respuestas")->getValor("C52")*2,
                            $this->getHoja("Respuestas")->getValor("C54")*2,
                            $this->getHoja("Respuestas")->getValor("C55")*3,
                            $this->getHoja("Respuestas")->getValor("C57"),
                            $this->getHoja("Respuestas")->getValor("C60")*2,
                            $this->getHoja("Respuestas")->getValor("C66")*2,
                            $this->getHoja("Respuestas")->getValor("C72")*2 ,
                            $this->getHoja("Respuestas")->getValor("C73")*2,
                            $this->getHoja("Respuestas")->getValor("C77")*2 ,
                            $this->getHoja("Respuestas")->getValor("C80")*3,
                            $this->getHoja("Respuestas")->getValor("C84")*2,
                            $this->getHoja("Respuestas")->getValor("D87"),
                            $this->getHoja("Respuestas")->getValor("C97")*2,
                            $this->getHoja("Respuestas")->getValor("C98")*3,
                            $this->getHoja("Respuestas")->getValor("C100")*3,
                            $this->getHoja("Respuestas")->getValor("C108"),
                            $this->getHoja("Respuestas")->getValor("C109")*3,
                            $this->getHoja("Respuestas")->getValor("C110")*2,
                            $this->getHoja("Respuestas")->getValor("C111") ,
                            $this->getHoja("Respuestas")->getValor("C133")*3,
                            $this->getHoja("Respuestas")->getValor("C137")*2,
                            $this->getHoja("Respuestas")->getValor("C140"),
                            $this->getHoja("Respuestas")->getValor("C155")*2,
                            $this->getHoja("Respuestas")->getValor("C156"),
                            $this->getHoja("Respuestas")->getValor("D167")*2,
                            $this->getHoja("Respuestas")->getValor("C168"),
                            $this->getHoja("Respuestas")->getValor("C169"),
                    );
                    $this->hoja["D29"] = $this->sum($celdas);
                    break;

                case "D30":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("D9"),
                            $this->getHoja("Respuestas")->getValor("C18")*3,
                            $this->getHoja("Respuestas")->getValor("C19")*2,
                            $this->getHoja("Respuestas")->getValor("C23"),
                            $this->getHoja("Respuestas")->getValor("C24"),
                            $this->getHoja("Respuestas")->getValor("C26") ,
                            $this->getHoja("Respuestas")->getValor("C28"),
                            $this->getHoja("Respuestas")->getValor("C36"),
                            $this->getHoja("Respuestas")->getValor("C41"),
                            $this->getHoja("Respuestas")->getValor("C47"),
                            $this->getHoja("Respuestas")->getValor("D53")*2,
                            $this->getHoja("Respuestas")->getValor("C55")*2,
                            $this->getHoja("Respuestas")->getValor("C66"),
                            $this->getHoja("Respuestas")->getValor("C71"),
                            $this->getHoja("Respuestas")->getValor("C74")*2,
                            $this->getHoja("Respuestas")->getValor("C81") ,
                            $this->getHoja("Respuestas")->getValor("C88")*3,
                            $this->getHoja("Respuestas")->getValor("C94") ,
                            $this->getHoja("Respuestas")->getValor("C96")*2,
                            $this->getHoja("Respuestas")->getValor("C97"),
                            $this->getHoja("Respuestas")->getValor("C98")*2,
                            $this->getHoja("Respuestas")->getValor("C104"),
                            $this->getHoja("Respuestas")->getValor("C105"),
                            $this->getHoja("Respuestas")->getValor("C106")*2,
                            $this->getHoja("Respuestas")->getValor("C109"),
                            $this->getHoja("Respuestas")->getValor("C110")*2,
                            $this->getHoja("Respuestas")->getValor("C112"),
                            $this->getHoja("Respuestas")->getValor("C115") ,
                            $this->getHoja("Respuestas")->getValor("C118"),
                            $this->getHoja("Respuestas")->getValor("C120")*3,
                            $this->getHoja("Respuestas")->getValor("D123")*2,
                            $this->getHoja("Respuestas")->getValor("C126"),
                            $this->getHoja("Respuestas")->getValor("C129"),
                            $this->getHoja("Respuestas")->getValor("C131"),
                            $this->getHoja("Respuestas")->getValor("C136"),
                            $this->getHoja("Respuestas")->getValor("C138"),
                            $this->getHoja("Respuestas")->getValor("C141"),
                            $this->getHoja("Respuestas")->getValor("C145")*2,
                            $this->getHoja("Respuestas")->getValor("C150"),
                            $this->getHoja("Respuestas")->getValor("C156"),
                            $this->getHoja("Respuestas")->getValor("C158")*3,
                            $this->getHoja("Respuestas")->getValor("C160"),
                            $this->getHoja("Respuestas")->getValor("C163"),
                            $this->getHoja("Respuestas")->getValor("C166"),
                            $this->getHoja("Respuestas")->getValor("C172"),
                            $this->getHoja("Respuestas")->getValor("C176")*2,
                    );
                    $this->hoja["D30"] = $this->sum($celdas);
                    break;

                case "D31":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C2")*2,
                            $this->getHoja("Respuestas")->getValor("C7"),
                            $this->getHoja("Respuestas")->getValor("C8")*2,
                            $this->getHoja("Respuestas")->getValor("C10")*2,
                            $this->getHoja("Respuestas")->getValor("C13"),
                            $this->getHoja("Respuestas")->getValor("C15") ,
                            $this->getHoja("Respuestas")->getValor("C21")*2,
                            $this->getHoja("Respuestas")->getValor("C23")*2,
                            $this->getHoja("Respuestas")->getValor("C31"),
                            $this->getHoja("Respuestas")->getValor("C34"),
                            $this->getHoja("Respuestas")->getValor("C36")*3,
                            $this->getHoja("Respuestas")->getValor("C41")*2,
                            $this->getHoja("Respuestas")->getValor("C44")*2,
                            $this->getHoja("Respuestas")->getValor("C45"),
                            $this->getHoja("Respuestas")->getValor("C51"),
                            $this->getHoja("Respuestas")->getValor("C56") ,
                            $this->getHoja("Respuestas")->getValor("C59")*2,
                            $this->getHoja("Respuestas")->getValor("C61") ,
                            $this->getHoja("Respuestas")->getValor("D62"),
                            $this->getHoja("Respuestas")->getValor("C67"),
                            $this->getHoja("Respuestas")->getValor("C71")*3,
                            $this->getHoja("Respuestas")->getValor("C74")*2,
                            $this->getHoja("Respuestas")->getValor("C81")*2,
                            $this->getHoja("Respuestas")->getValor("C83")*2,
                            $this->getHoja("Respuestas")->getValor("C87")*2,
                            $this->getHoja("Respuestas")->getValor("C90"),
                            $this->getHoja("Respuestas")->getValor("C92")*2,
                            $this->getHoja("Respuestas")->getValor("C93")*2 ,
                            $this->getHoja("Respuestas")->getValor("C94"),
                            $this->getHoja("Respuestas")->getValor("C95"),
                            $this->getHoja("Respuestas")->getValor("C96")*2,
                            $this->getHoja("Respuestas")->getValor("C102"),
                            $this->getHoja("Respuestas")->getValor("C104")*2,
                            $this->getHoja("Respuestas")->getValor("C105"),
                            $this->getHoja("Respuestas")->getValor("C106")*3,
                            $this->getHoja("Respuestas")->getValor("C112"),
                            $this->getHoja("Respuestas")->getValor("C114"),
                            $this->getHoja("Respuestas")->getValor("C115"),
                            $this->getHoja("Respuestas")->getValor("C116")*2,
                            $this->getHoja("Respuestas")->getValor("C118")*2,
                            $this->getHoja("Respuestas")->getValor("C117"),
                            $this->getHoja("Respuestas")->getValor("C121"),
                            $this->getHoja("Respuestas")->getValor("C124"),
                            $this->getHoja("Respuestas")->getValor("C126"),
                            $this->getHoja("Respuestas")->getValor("C129"),
                            $this->getHoja("Respuestas")->getValor("C130")*2,
                            $this->getHoja("Respuestas")->getValor("C131"),
                            $this->getHoja("Respuestas")->getValor("C138"),
                            $this->getHoja("Respuestas")->getValor("C141")*3,
                            $this->getHoja("Respuestas")->getValor("C145")*3,
                            $this->getHoja("Respuestas")->getValor("C147"),
                            $this->getHoja("Respuestas")->getValor("C156"),
                            $this->getHoja("Respuestas")->getValor("C163")*2,
                            $this->getHoja("Respuestas")->getValor("C166"),
                            $this->getHoja("Respuestas")->getValor("C167"),
                            $this->getHoja("Respuestas")->getValor("C172"),
                            $this->getHoja("Respuestas")->getValor("C173"),
                            $this->getHoja("Respuestas")->getValor("C176")*3,
                    );
                    $this->hoja["D31"] = $this->sum($celdas);
                    break;

                case "D34":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C4"),
                            $this->getHoja("Respuestas")->getValor("C9"),
                            $this->getHoja("Respuestas")->getValor("C14"),
                            $this->getHoja("Respuestas")->getValor("C20"),
                            $this->getHoja("Respuestas")->getValor("C24"),
                            $this->getHoja("Respuestas")->getValor("C25") ,
                            $this->getHoja("Respuestas")->getValor("C30"),
                            $this->getHoja("Respuestas")->getValor("C32"),
                            $this->getHoja("Respuestas")->getValor("C39")*2,
                            $this->getHoja("Respuestas")->getValor("C69")*2,
                            $this->getHoja("Respuestas")->getValor("C70")*2,
                            $this->getHoja("Respuestas")->getValor("C75"),
                            $this->getHoja("Respuestas")->getValor("C78")*2,
                            $this->getHoja("Respuestas")->getValor("C81")*2,
                            $this->getHoja("Respuestas")->getValor("C83"),
                            $this->getHoja("Respuestas")->getValor("C84")*2 ,
                            $this->getHoja("Respuestas")->getValor("C86")*2,
                            $this->getHoja("Respuestas")->getValor("C99")*3 ,
                            $this->getHoja("Respuestas")->getValor("C103")*2,
                            $this->getHoja("Respuestas")->getValor("C110")*3,
                            $this->getHoja("Respuestas")->getValor("C113")*2,
                            $this->getHoja("Respuestas")->getValor("C116")*2,
                            $this->getHoja("Respuestas")->getValor("C121")*2,
                            $this->getHoja("Respuestas")->getValor("C125")*3,
                            $this->getHoja("Respuestas")->getValor("C128")*3,
                            $this->getHoja("Respuestas")->getValor("C142"),
                            $this->getHoja("Respuestas")->getValor("C147")*2,
                            $this->getHoja("Respuestas")->getValor("C148") ,
                            $this->getHoja("Respuestas")->getValor("C157"),
                            $this->getHoja("Respuestas")->getValor("C161")*3,
                            $this->getHoja("Respuestas")->getValor("C162"),
                            $this->getHoja("Respuestas")->getValor("C165")*2,
                            $this->getHoja("Respuestas")->getValor("C168")*3,

                    );
                    $this->hoja["D34"] = $this->sum($celdas);
                    break;

                case "D35":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C6")*3,
                            $this->getHoja("Respuestas")->getValor("C20"),
                            $this->getHoja("Respuestas")->getValor("C27")*3,
                            $this->getHoja("Respuestas")->getValor("C34")*2,
                            $this->getHoja("Respuestas")->getValor("C37")*3,
                            $this->getHoja("Respuestas")->getValor("C46")*2 ,
                            $this->getHoja("Respuestas")->getValor("C48")*2,
                            $this->getHoja("Respuestas")->getValor("C51")*2,
                            $this->getHoja("Respuestas")->getValor("C52"),
                            $this->getHoja("Respuestas")->getValor("C54")*3,
                            $this->getHoja("Respuestas")->getValor("C55"),
                            $this->getHoja("Respuestas")->getValor("C57")*2,
                            $this->getHoja("Respuestas")->getValor("C58"),
                            $this->getHoja("Respuestas")->getValor("C59"),
                            $this->getHoja("Respuestas")->getValor("C60")*3,
                            $this->getHoja("Respuestas")->getValor("C66") ,
                            $this->getHoja("Respuestas")->getValor("C68"),
                            $this->getHoja("Respuestas")->getValor("C73")*2 ,
                            $this->getHoja("Respuestas")->getValor("C77")*3,
                            $this->getHoja("Respuestas")->getValor("C80")*2,
                            $this->getHoja("Respuestas")->getValor("C82"),
                            $this->getHoja("Respuestas")->getValor("C83"),
                            $this->getHoja("Respuestas")->getValor("C96"),
                            $this->getHoja("Respuestas")->getValor("C97")*2,
                            $this->getHoja("Respuestas")->getValor("C100"),
                            $this->getHoja("Respuestas")->getValor("C109")*2,
                            $this->getHoja("Respuestas")->getValor("C110")*2,
                            $this->getHoja("Respuestas")->getValor("C111") ,
                            $this->getHoja("Respuestas")->getValor("C118"),
                            $this->getHoja("Respuestas")->getValor("C137")*3,
                            $this->getHoja("Respuestas")->getValor("C155"),
                    );
                    $this->hoja["D35"] = $this->sum($celdas);
                    break;

                case "D36":
                    $celdas = array(
                            $this->getHoja("Respuestas")->getValor("C16"),
                            $this->getHoja("Respuestas")->getValor("C17")*2,
                            $this->getHoja("Respuestas")->getValor("C25")*2,
                            $this->getHoja("Respuestas")->getValor("C33"),
                            $this->getHoja("Respuestas")->getValor("C39")*2,
                            $this->getHoja("Respuestas")->getValor("C40") ,
                            $this->getHoja("Respuestas")->getValor("C70")*2,
                            $this->getHoja("Respuestas")->getValor("C75"),
                            $this->getHoja("Respuestas")->getValor("C81")*3,
                            $this->getHoja("Respuestas")->getValor("C85")*2,
                            $this->getHoja("Respuestas")->getValor("C86")*2,
                            $this->getHoja("Respuestas")->getValor("C90"),
                            $this->getHoja("Respuestas")->getValor("C99")*2,
                            $this->getHoja("Respuestas")->getValor("C101")*3,
                            $this->getHoja("Respuestas")->getValor("C113"),
                            $this->getHoja("Respuestas")->getValor("C124")*3 ,
                            $this->getHoja("Respuestas")->getValor("C127"),
                            $this->getHoja("Respuestas")->getValor("C132")*2 ,
                            $this->getHoja("Respuestas")->getValor("C139"),
                            $this->getHoja("Respuestas")->getValor("C144"),
                            $this->getHoja("Respuestas")->getValor("C147")*2,
                            $this->getHoja("Respuestas")->getValor("C165")*2,

                    );
                    $this->hoja["D36"] = $this->sum($celdas);
                    break;

                case "F2": $this->hoja["F2"] = $this->getHoja("Auxiliar")->getValor("E4")== "Verdadero" ? "Valido" : "Invalido";
                case "F3": $this->hoja["F3"] = $this->getHoja("Auxiliar")->getValor("C5")== "Verdadero" ? "Valido" : "Invalido";
                case "H10": $this->hoja["H10"] = $this->getHoja("Auxiliar")->getValor("E78")>0 ? $this->getHoja("Auxiliar")->getValor("E78") : $this->getHoja("Resultados")->getValor("F10");
                case "H18": $this->hoja["H18"] = $this->getHoja("Auxiliar")->getValor("F78")>0 ? $this->getHoja("Auxiliar")->getValor("F78") : $this->getHoja("Resultados")->getValor("F18");
                case "H22": $this->hoja["H22"] = $this->getHoja("Auxiliar")->getValor("G78")>0 ? $this->getHoja("Auxiliar")->getValor("G78") : $this->getHoja("Resultados")->getValor("G22");
                case "I21": $this->hoja["I21"] = round($this->getHoja("Auxiliar")->getValor("C81")+$this->getHoja("Resultados")->getValor("G21"));
                case "I22": $this->hoja["I22"] = round($this->getHoja("Auxiliar")->getValor("C81")+$this->getHoja("Resultados")->getValor("H22"));
                case "I26": $this->hoja["I26"] = round($this->getHoja("Auxiliar")->getValor("C81")+$this->getHoja("Resultados")->getValor("F26"));
                case "I27": $this->hoja["I27"] = round($this->getHoja("Auxiliar")->getValor("C81")+$this->getHoja("Resultados")->getValor("F27"));
                case "I29": $this->hoja["I29"] = round($this->getHoja("Auxiliar")->getValor("C81")+$this->getHoja("Resultados")->getValor("F29"));
                case "J21": $this->hoja["J21"] = $this->getHoja("Auxiliar")->getValor("C86")=='Verdadero' ? $this->getHoja("Resultados")->getValor("I21")+4 : $this->getHoja("Resultados")->getValor("I21");
                case "J22": $this->hoja["J22"] = $this->getHoja("Auxiliar")->getValor("C86")=='Verdadero' ? $this->getHoja("Resultados")->getValor("I22")+4 : $this->getHoja("Resultados")->getValor("I22");
                case "J23": $this->hoja["J23"] = $this->getHoja("Auxiliar")->getValor("C86")=='Verdadero' ? $this->getHoja("Resultados")->getValor("G23")+2 : $this->getHoja("Resultados")->getValor("G23");
                case "J26": $this->hoja["J26"] = $this->getHoja("Auxiliar")->getValor("C86")=='Verdadero' ? $this->getHoja("Resultados")->getValor("I26")+15 : $this->getHoja("Resultados")->getValor("I26");
                case "J27": $this->hoja["J27"] = $this->getHoja("Auxiliar")->getValor("C86")=='Verdadero' ? $this->getHoja("Resultados")->getValor("I27")+13 : $this->getHoja("Resultados")->getValor("I27");
                case "J29": $this->hoja["J29"] = $this->getHoja("Auxiliar")->getValor("C86")=='Verdadero' ? $this->getHoja("Resultados")->getValor("I29")+15 : $this->getHoja("Resultados")->getValor("I29");
                case "K21": $this->hoja["K21"] = $this->getHoja("Auxiliar")->getValor("C90")=='Verdadero' ? $this->getHoja("Resultados")->getValor("J21")-2 : $this->getHoja("Resultados")->getValor("J21");
                case "K22": $this->hoja["K22"] = $this->getHoja("Auxiliar")->getValor("C90")=='Verdadero' ? $this->getHoja("Resultados")->getValor("J22")-6 : $this->getHoja("Resultados")->getValor("J22");
                case "K23": $this->hoja["K23"] = $this->getHoja("Auxiliar")->getValor("C90")=='Verdadero' ? $this->getHoja("Resultados")->getValor("J23")-7 : $this->getHoja("Resultados")->getValor("J23");
                case "K26": $this->hoja["K26"] = $this->getHoja("Auxiliar")->getValor("C90")=='Verdadero' ? $this->getHoja("Resultados")->getValor("J26")-7 : $this->getHoja("Resultados")->getValor("J26");
                case "K27": $this->hoja["K27"] = $this->getHoja("Auxiliar")->getValor("C90")=='Verdadero' ? $this->getHoja("Resultados")->getValor("J27")-5 : $this->getHoja("Resultados")->getValor("J27");
                case "K29": $this->hoja["K29"] = $this->getHoja("Auxiliar")->getValor("C90")=='Verdadero' ? $this->getHoja("Resultados")->getValor("J29")-5 : $this->getHoja("Resultados")->getValor("J29");
                case "L34": $this->hoja["L34"] = $this->getHoja("Auxiliar")->getValor("D95")+ $this->getHoja("Resultados")->getValor("G34");
                case "L35": $this->hoja["L35"] = $this->getHoja("Auxiliar")->getValor("E95")+ $this->getHoja("Resultados")->getValor("G35");
                case "L36": $this->hoja["L36"] = $this->getHoja("Auxiliar")->getValor("F95")+ $this->getHoja("Resultados")->getValor("G36");
                default :
                    if(strpos($celda,'E')!=FALSE)
                        $this->calcularE();
                    if(strpos($celda,'F')!=FALSE)
                        $this->calcularF();
                    if(strpos($celda,'G')!=FALSE)
                        $this->calcularG();
                    break;
            }

        }

        return parent::getValor($celda); // finalmente retorno el valor cualquiera sea el caso
    }

    public function calcularE() {
        //CALCULA TODAS LAS E
        $columna = array($this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),
                $this->getHoja("Datos")->getValor("F12"),


        );

        $valor = array("M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M");

        $si = array($this->getHoja("Br hombre")->getValor("M44"),
                $this->getHoja("Br hombre")->getValor("P49"),
                $this->getHoja("Br hombre")->getValor("S54"),
                $this->getHoja("Br hombre")->getValor("V61"),
                $this->getHoja("Br hombre")->getValor("Y70"),
                $this->getHoja("Br hombre")->getValor("AB57"),
                $this->getHoja("Br hombre")->getValor("AE56"),
                $this->getHoja("Br hombre")->getValor("AH64"),
                $this->getHoja("Br hombre")->getValor("AK58"),
                $this->getHoja("Br hombre")->getValor("AN46"),

                $this->getHoja("Br hombre")->getValor("AQ51"),
                $this->getHoja("Br hombre")->getValor("AT67"),
                $this->getHoja("Br hombre")->getValor("AW65"),
                $this->getHoja("Br hombre")->getValor("AZ39"),
                $this->getHoja("Br hombre")->getValor("BC46"),
                $this->getHoja("Br hombre")->getValor("BF47"),
                $this->getHoja("Br hombre")->getValor("BI59"),
                $this->getHoja("Br hombre")->getValor("BL54"),
                $this->getHoja("Br hombre")->getValor("BO63"),
                $this->getHoja("Br hombre")->getValor("BR42"),
                $this->getHoja("Br hombre")->getValor("BU49"),
                $this->getHoja("Br hombre")->getValor("BX39"),

        );


        $no = array($this->getHoja("Br mujer")->getValor("L48"),
                $this->getHoja("Br mujer")->getValor("O54"),
                $this->getHoja("Br mujer")->getValor("R56"),
                $this->getHoja("Br mujer")->getValor("U55"),
                $this->getHoja("Br mujer")->getValor("X60"),
                $this->getHoja("Br mujer")->getValor("AA59"),
                $this->getHoja("Br mujer")->getValor("AD65"),
                $this->getHoja("Br mujer")->getValor("AG63"),
                $this->getHoja("Br mujer")->getValor("AJ56"),
                $this->getHoja("Br mujer")->getValor("AM51"),

                $this->getHoja("Br mujer")->getValor("AP51"),
                $this->getHoja("Br mujer")->getValor("AS68"),
                $this->getHoja("Br mujer")->getValor("AV62"),
                $this->getHoja("Br mujer")->getValor("AY42"),
                $this->getHoja("Br mujer")->getValor("BB47"),
                $this->getHoja("Br mujer")->getValor("BE48"),
                $this->getHoja("Br mujer")->getValor("BH60"),
                $this->getHoja("Br mujer")->getValor("BK53"),
                $this->getHoja("Br mujer")->getValor("BN66"),
                $this->getHoja("Br mujer")->getValor("BR50"),
                $this->getHoja("Br mujer")->getValor("BU51"),
                $this->getHoja("Br mujer")->getValor("BX39"),
        );

        $resultados = $this->SiesIgualValorColumnas($columna, $valor, $si, $no);
        $celdas = array("E9","E10","E11","E12","E13","E14","E15","E16","E17","E18","E21","E22","E23","E26","E27","E28","E29","E30","E31","E34","E35","E36");
        $this->setRangoValores($celdas, $resultados);
    }


    public function calcularF() {
        //CALCULA TODAS LAS F
        $valores = $this->getRangoValores("E",9,18);
        $constante = $this->getHoja("Auxiliar")->getValor("C66");
        $resultados = $this->sumValores($valores, $constante);
        $celdas = array("F9","F10","F11","F12","F13","F14","F15","F16","F17","F18");
        $this->setRangoValores($celdas, $resultados);

        //segunda parte de F
        $valores = $this->getRangoValores("E",26,31);
        $constante = $this->getHoja("Auxiliar")->getValor("C66");
        $resultados = $this->sumValores($valores, $constante);
        $celdas = array("F26","F27","F28","F29","F30","F31");
        $this->setRangoValores($celdas, $resultados);


    }

    public function calcularG() {
        //CALCULA TODAS LAS G
        //
        //PRIMERA PARTE
        $valores = $this->getRangoValores("G",21,23);
        $constante = $this->getHoja("Auxiliar")->getValor("G66");
        $resultados = $this->sumValores($valores, $constante);
        $celdas = array("G21","G22","G23");
        $this->setRangoValores($celdas, $resultados);

        //SEGUNDA PARTE
        $valores = $this->getRangoValores("G",34,36);
        $constante = $this->getHoja("Auxiliar")->getValor("G66");
        $resultados = $this->sumValores($valores, $constante);
        $celdas = array("G34","G35","G36");
        $this->setRangoValores($celdas, $resultados);
    }

    public function calcularFinal() {
        // PUNTAJE FINAL
        $celdas = array("M9","M10","M11","M12","M13","M14","M15","M16","M17","M18","M21","M22","M23","M26","M27","M28","M29","M30","M31","M34","M35","M36");
        $celdasvalores = array("F9","H10","F11","F12","F13","F14","F15","F16","F17","H18","K21","K22","K23","K26","K27","F28","K29","F30","F31","L34","L35","L36");
        $this->refCelda($celdas, $celdavalores);
    }
}

?>
