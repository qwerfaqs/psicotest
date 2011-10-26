<?php

/**
 * auditorias actions.
 *
 * @package    psicotest
 * @subpackage auditorias
 * @author     Psicotest
 */
class auditoriasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Auditoriass = AuditoriasPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Auditorias = AuditoriasPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Auditorias);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AuditoriasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AuditoriasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Auditorias = AuditoriasPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Auditorias does not exist (%s).', $request->getParameter('id')));
    $this->form = new AuditoriasForm($Auditorias);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Auditorias = AuditoriasPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Auditorias does not exist (%s).', $request->getParameter('id')));
    $this->form = new AuditoriasForm($Auditorias);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Auditorias = AuditoriasPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Auditorias does not exist (%s).', $request->getParameter('id')));
    $Auditorias->delete();

    $this->redirect('auditorias/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Auditorias = $form->save();

      $this->redirect('auditorias/edit?id='.$Auditorias->getId());
    }
  }
}
