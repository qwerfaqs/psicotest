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
       $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); //objeto de PHPExcel, para escribir en el excel 
        
        
        $objPHPExcel->setActiveSheetIndex(1);
        for($x=2;$x<=176;$x++)
         $objPHPExcel->getActiveSheet()->setCellValue("D".$x,"");
        
        for($x=2;$x<=176;$x++)
        $objPHPExcel->getActiveSheet()->setCellValue("D".$x,"1");
     //   $objPHPExcel->getActiveSheet()->setCellValue("D175","1");
        $objWriter->save("baby1.xlsx");//guardamos el archivo excel
   

?>
