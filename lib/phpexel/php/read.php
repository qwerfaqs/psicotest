&nbsp;<?php
/** Incluir la ruta **/
set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');

/** Clases necesarias */
require_once('Classes/PHPExcel.php');
require_once('Classes/PHPExcel/Reader/Excel2007.php');

// Variables de la página
// Cargando el excel



       

       $objReader = new PHPExcel_Reader_Excel2007();       
       $objPHPExcel = $objReader->load("baby.xlsx");    
        
        
        $objPHPExcel->setActiveSheetIndex(1);
        for($x=2;$x<=176;$x++)
        {
        $c2 = $objPHPExcel->getActiveSheet()->getCell("C".$x)->getValue();        
        echo "C ".$c2;
        }
        
         $objPHPExcel->setActiveSheetIndex(3);
        $c2 = $objPHPExcel->getActiveSheet()->getCell("D3")->getCalculatedValue();  
         echo "C ".$c2;
      
        
   

?>
