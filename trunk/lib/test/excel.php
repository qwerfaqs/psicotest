<?php

/**
 * Description of test
 *
 * @author potich
 */
class Excel 
{
    
    
    
    
    public function writeCells($celdas,$srcOrigen,$srcDestino,$sheet) // escribe las celdas especificas de un archivo de excel existente
    {
       $objReader = new PHPExcel_Reader_Excel2007();       
       $objPHPExcel = $objReader->load($srcOrigen);
       $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); //objeto de PHPExcel, para escribir en el excel                 
       $objPHPExcel->setActiveSheetIndex($sheet);
        
       foreach($celdas as $campo=>$celda)
        $objPHPExcel->getActiveSheet()->setCellValue($campo,$celda);
     //   $objPHPExcel->getActiveSheet()->setCellValue("D175","1");
       
       
        $objWriter->save($srcDestino);//guardamos el archivo excel
                       
    }
    
    
    public function readCells($celdas,$src,$sheet) // lee las celdas especificas de un archivo de excel existente
    {
       $extraccion = array(); 
       $objReader = new PHPExcel_Reader_Excel2007();       
       $objPHPExcel = $objReader->load($src);                   
       $objPHPExcel->setActiveSheetIndex($sheet);
       
        foreach($celdas as $celda)
          $extraccion[] = $objPHPExcel->getActiveSheet()->getCell($celda)->getCalculatedValue();         
              
        return($extraccion);              
                       
    }
    
    
}

?>