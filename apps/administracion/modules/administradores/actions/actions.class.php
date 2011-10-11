<?php

/**
 * administradores actions.
 *
 * @package    psicotest
 * @subpackage administradores
 * @author     Psicotest
 */
class administradoresActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Administradoress = AdministradoresPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Administradores = AdministradoresPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Administradores);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AdministradoresForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AdministradoresForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Administradores = AdministradoresPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Administradores does not exist (%s).', $request->getParameter('id')));
    $this->form = new AdministradoresForm($Administradores);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Administradores = AdministradoresPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Administradores does not exist (%s).', $request->getParameter('id')));
    $this->form = new AdministradoresForm($Administradores);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Administradores = AdministradoresPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Administradores does not exist (%s).', $request->getParameter('id')));
    $Administradores->delete();

    $this->redirect('administradores/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Administradores = $form->save();

      $this->redirect('administradores/edit?id='.$Administradores->getId());
    }
  }
}
