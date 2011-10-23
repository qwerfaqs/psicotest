<?php

/**
 * estadisticas actions.
 *
 * @package    psicotest
 * @subpackage estadisticas
 * @author     Psicotest
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadisticasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    
    
  public function executeAprobados(sfWebRequest $request) 
  {
        $aprobados = ResultadosPeer::getCantAprobados();


        $salida = null;
        foreach ($aprobados as $suma):
            $salida.= '<tr>
              <td>' . $suma['titulo'] . '</td>                 
              <td>' . $suma['cantidad'] . '</td>                
            </tr>';
        endforeach;
        // Set some content to print
        $html = <<<EOD
                        <style type="text/css">
                            table {
                            width: 635px;
                            border: 0;
                            background-color: #00CCFF;
                            color: #000000;
                            }

                            </style>


                            <table>     
                                <thead>
                                  <tr>
                                    <th scope="col">Test</th>
                                    <th scope="col">Cantidad de aspirantes</th>            
                                   </tr>
                                 </thead>     
                            <tbody>  
                               $salida
                               </tbody> 
                              </table>
EOD;

        $this->generarTabla($html);
    }
    
    
      public function executeDesaprobados(sfWebRequest $request) {
        $aprobados = ResultadosPeer::getCantDesaprobados();


        $salida = null;
        foreach ($aprobados as $suma):
            $salida.= '<tr>
              <td>' . $suma['titulo'] . '</td>                 
              <td>' . $suma['cantidad'] . '</td>                
            </tr>';
        endforeach;
        // Set some content to print
        $html = <<<EOD
                        <style type="text/css">
                            table {
                            width: 635px;
                            border: 0;
                            background-color: #00CCFF;
                            color: #000000;
                            }

                            </style>


                            <table>     
                                <thead>
                                  <tr>
                                    <th scope="col">Test</th>
                                    <th scope="col">Cantidad de aspirantes</th>            
                                   </tr>
                                 </thead>     
                            <tbody>  
                               $salida
                               </tbody> 
                              </table>
EOD;

        $this->generarTabla($html);
    }
    
    public function executeAspirantes(sfWebRequest $request) 
    {
        $deaprobados = ResultadosPeer::getCantAspirantes();


        $salida = null;
        foreach ($deaprobados as $suma):
            $salida.= '<tr>
              <td>' . $suma['sexo'] . '</td>                 
              <td>' . $suma['cantidad'] . '</td>                              
            </tr>';
        endforeach;
        
        // Set some content to print
        $html = <<<EOD
                        <style type="text/css">
                            table {
                            width: 635px;
                            border: 0;
                            background-color: #00CCFF;
                            color: #000000;
                            }

                            </style>


                            <table>     
                                <thead>
                                  <tr>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Cantidad de aspirantes</th>            
                                   </tr>
                                 </thead>     
                            <tbody>  
                               $salida
                               </tbody> 
                              </table>
EOD;

        $this->generarTabla($html);
    }
    
    
    public function executePodiogeneral(sfWebRequest $request) 
    {
        $mayorespuntajes = ResultadosPeer::getPodio();


        $salida = null;
        foreach ($mayorespuntajes as $dato):
            $salida.= '<tr>
              <td>' . $dato->getPruebas()->getTests()->getTitulo() . '</td>                 
              <td>' . $dato->getPuntaje() . '</td>    
              <td>' . $dato->getAspirantes()->getNombre() . '</td>                              
              <td>' . $dato->getAspirantes()->getApellido()  . '</td>  
              <td>' . $dato->getAspirantes()->getCedula()  . '</td>                                                
            </tr>';
        endforeach;
        
        // Set some content to print
        $html = <<<EOD
                        <style type="text/css">
                            table {
                            width: 635px;
                            border: 0;
                            background-color: #00CCFF;
                            color: #000000;
                            }

                            </style>

                            <table>     
                                <thead>
                                  <tr>
                                    <th scope="col">Test</th>
                                    <th scope="col">Puntaje obtenido</th>
                                    <th scope="col">Nombre</th>            
                                    <th scope="col">Apellido</th>            
                                    <th scope="col">Cedula</th>            
                                   </tr>
                                 </thead>     
                            <tbody>  
                               $salida
                               </tbody> 
                              </table>
EOD;

        $this->generarTabla($html);
    }
  
    
    
    
  protected function generarTabla($html) {

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Psicotest');
        $pdf->SetTitle('Psicotest reporte');
        $pdf->SetSubject('Psicotest');

// set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



// ---------------------------------------------------------
// set default font subsetting mode
        $pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
        $pdf->AddPage();



        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);

// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
        $pdf->Output('reporte_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+   
    }
  
}
