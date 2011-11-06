<?php

class ValidatorCedula extends sfValidatorBase
{
  protected function configure($options = array(), $messages = array())
  {
    parent::configure( $options, $messages );
 
   // $this->addRequiredOption('cedula');  
 
    $this->addMessage('invalid_cedula', 'La cedula es invalida.');
  }
 
  protected function doClean( $value )
  {
          
    if ( ! is_numeric( $value ) ) 
    {
      throw new sfValidatorError($this, 'invalid_cedula');
    }
    
        $criteria = new Criteria();
        $criteria->add(AspirantesPeer::CEDULA, $value);
        $aspirante =  AspirantesPeer::doSelectOne($criteria);
       
        if(isset($aspirante))
        {
         throw new sfValidatorError($this, 'invalid_cedula');
              throw new sfValidatorErrorSchema($this, array($this->getOption('cedula') => new sfValidatorError($this, 'invalid')));
        }
    return $value;
  }
  
  
 
  
}
 