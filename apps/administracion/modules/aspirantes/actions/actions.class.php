<?php

/**
 * aspirantes actions.
 *
 * @package    psicotest
 * @subpackage aspirantes
 * @author     Psicotest
 */
class aspirantesActions extends sfActions
{
    

  
  public function executeIndex(sfWebRequest $request)
  {
    $this->Aspirantess = AspirantesPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Aspirantes = AspirantesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Aspirantes);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AspirantesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AspirantesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Aspirantes = AspirantesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Aspirantes does not exist (%s).', $request->getParameter('id')));
    $this->form = new AspirantesForm($Aspirantes);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Aspirantes = AspirantesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Aspirantes does not exist (%s).', $request->getParameter('id')));
    $this->form = new AspirantesForm($Aspirantes);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Aspirantes = AspirantesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Aspirantes does not exist (%s).', $request->getParameter('id')));
    $Aspirantes->delete();

    $this->redirect('aspirantes/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Aspirantes = $form->save();

      $this->redirect('aspirantes/edit?id='.$Aspirantes->getId());
    }
  }
}
