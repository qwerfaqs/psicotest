<?php

/**
 * Aspirantes form.
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
class AspirantesForm extends BaseAspirantesForm
{
     protected static $subjects = array('M'=>'Masculino', 'F'=>'Femenino');
     
     

  
  public function configure()
  {
        unset(
      $this['created_at']
    );
        
   $this->validatorSchema['cedula'] = new ValidatorCedula(array('required' => true));
   
   $years = range(1978, 2011 );
        $this->widgetSchema['fechanacimiento'] = new sfWidgetFormDate(array(       
        'format'=>'%day%%month%%year%',
        'years'=>array_combine($years, $years),
        'default' => $this->getObject()->getFechanacimiento(),        
      ));
                
    $this->widgetSchema['sexo']= new sfWidgetFormSelect(array('choices' => self::$subjects)); 
    $this->widgetSchema['password']= new sfWidgetFormInputPassword();
    $this->widgetSchema['password_check']= new sfWidgetFormInputPassword();     
    $this->validatorSchema['password'] = new sfValidatorString(array('required' => true, 'min_length' => 4, 'max_length' => 20));
    $this->validatorSchema['password_check'] = new sfValidatorString(array('required' => true, 'min_length' => 4, 'max_length' => 20));
    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
    new sfValidatorSchemaCompare('password', '==', 'password_check', array('throw_global_error' => true), array('invalid' => 'La contraseña es Invalida')),
)));
   
   
  }
  
  
}
