<?php

/**
 * Description of test
 *
 * @author potich
 */
class Excel {

    public function writeCells($celdas, $srcOrigen, $sheet) { // escribe las celdas especificas de un archivo de excel existente
        if (is_string($srcOrigen)) {
            $objReader = new PHPExcel_Reader_Excel5();
            $objPHPExcel = $objReader->load($srcOrigen);
        }else{
            $objPHPExcel = $srcOrigen;
        }
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); //objeto de PHPExcel, para escribir en el excel                 
        $objPHPExcel->setActiveSheetIndex($sheet);

        foreach ($celdas as $campo => $celda)
            $objPHPExcel->getActiveSheet()->setCellValue($campo, $celda);

        return($objPHPExcel);
    }

    public function readCells($objPHPExcel, $celdas, $sheet) { // lee las celdas especificas de un archivo de excel existente
        $extraccion = array();
        $objPHPExcel->setActiveSheetIndex($sheet);
        foreach ($celdas as $escala => $celda)
            $extraccion[$escala] = $objPHPExcel->getActiveSheet()->getCell($celda)->getCalculatedValue();
        return($extraccion);
    }

}

?>