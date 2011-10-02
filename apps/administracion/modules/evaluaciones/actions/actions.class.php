<?php

/**
 * evaluaciones actions.
 *
 * @package    psicotest
 * @subpackage evaluaciones
 * @author     Psicotest
 */
class evaluacionesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Evaluaciones = EvaluacionesPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Evaluacion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EvaluacionesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EvaluacionesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new EvaluacionesForm($Evaluacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new EvaluacionesForm($Evaluacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
    $Evaluacion->delete();

    $this->redirect('evaluaciones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Evaluacion = $form->save();

      $this->redirect('evaluaciones/edit?id='.$Evaluacion->getId());
    }
  }
}
