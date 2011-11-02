<?php

/**
 * Description of test
 *
 * @author potich
 */
class Excel 
{
           
    
    public function writeCells($celdas,$srcOrigen,$sheet) // escribe las celdas especificas de un archivo de excel existente
    {
       $objReader = new PHPExcel_Reader_Excel5();       
       $objPHPExcel = $objReader->load($srcOrigen);
       $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); //objeto de PHPExcel, para escribir en el excel                 
       $objPHPExcel->setActiveSheetIndex($sheet);
        
       foreach($celdas as $campo=>$celda)
        $objPHPExcel->getActiveSheet()->setCellValue($campo,$celda);
 
       return($objPHPExcel);
          
    }
    
    
    public function readCells($objPHPExcel,$celdas,$sheet) // lee las celdas especificas de un archivo de excel existente
    {
       $extraccion = array();                               
       $objPHPExcel->setActiveSheetIndex($sheet);       
        foreach($celdas as $celda)
          $extraccion[] = $objPHPExcel->getActiveSheet()->getCell($celda)->getCalculatedValue() ;                       
        return($extraccion);              
                       
    }
    
    
}

?>