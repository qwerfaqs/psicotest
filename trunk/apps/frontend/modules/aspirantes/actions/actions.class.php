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
    $this->Aspirantes = AspirantesPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Aspirante = AspirantesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Aspirante);
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
    $this->forward404Unless($Aspirante = AspirantesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Aspirante does not exist (%s).', $request->getParameter('id')));
    $this->form = new AspirantesForm($Aspirante);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Aspirante = AspirantesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Aspirante does not exist (%s).', $request->getParameter('id')));
    $this->form = new AspirantesForm($Aspirante);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Aspirante = AspirantesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Aspirante does not exist (%s).', $request->getParameter('id')));
    $Aspirante->delete();

    $this->redirect('aspirantes/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Aspirante = $form->save();

      $this->redirect('aspirantes/edit?id='.$Aspirante->getId());
    }
  }
}
