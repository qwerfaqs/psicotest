<?php

/**
 * pruebas actions.
 *
 * @package    psicotest
 * @subpackage pruebas
 * @author     Psicotest
 */
class pruebasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {      
    $evaluacion = $request->getParameter('id');
    $this->Pruebas = PruebasPeer::getPruebasPaged($evaluacion, 1,5);            
  }
  
  public function executeAspirantes(sfWebRequest $request)
  {      
    $prueba = $request->getParameter('id');
    $this->resultados = ResultadosPeer::getResultados($prueba);    
  }
  
  public function executeParciales(sfWebRequest $request)
  {      
    $aspirante = $request->getParameter('id');
    $prueba = $request->getParameter('prueba');        
    $this->resultados = ResultadosparcialesPeer::getResultadosParciales($prueba, $aspirante);    
    $pru = PruebasPeer::retrieveByPK($prueba);
  
    switch ($pru->getTests()->getTitulo()) 
    {
        case 'EAE1 - ESCALA  G':
            $this->resultados = IntensidadesPeer::getIntensidades($prueba, $aspirante);          
            $this->setTemplate('eae1');
        break;
        case 'Bady G Escalas  Principales':
            $resultado = $request->getParameter('resultado');
            $this->resultados = ResultadosescalasPeer::getResultados($resultado);         
            $this->setTemplate('escalas');
        break;
    
        case '16. P. F':
            $resultado = $request->getParameter('resultado');
            $this->resultados = ResultadosescalasPeer::getResultados($resultado);         
            $this->setTemplate('escalas');
        break;
    
        case 'Inventario Multiaxial Clinico de Millon. MCMI-II':
            $resultado = $request->getParameter('resultado');
            $this->resultados = ResultadosescalasPeer::getResultados($resultado);        
            $this->setTemplate('escalas');
        break;

        default:
            $this->setTemplate('parciales');
        break;
    }
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Prueba = PruebasPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Prueba);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PruebasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PruebasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Prueba = PruebasPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Prueba does not exist (%s).', $request->getParameter('id')));
    $this->form = new PruebasForm($Prueba);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Prueba = PruebasPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Prueba does not exist (%s).', $request->getParameter('id')));
    $this->form = new PruebasForm($Prueba);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Prueba = PruebasPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Prueba does not exist (%s).', $request->getParameter('id')));
    $Prueba->delete();

    $this->redirect('pruebas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Prueba = $form->save();

      $this->redirect('pruebas/edit?id='.$Prueba->getId());
    }
  }
}
