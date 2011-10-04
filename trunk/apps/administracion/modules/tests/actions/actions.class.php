<?php

/**
 * tests actions.
 *
 * @package    psicotest
 * @subpackage tests
 * @author     Psicotest
 */
class testsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tests = TestsPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Test = TestsPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Test);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TestsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TestsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Test = TestsPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Test does not exist (%s).', $request->getParameter('id')));
    $this->form = new TestsForm($Test);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Test = TestsPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Test does not exist (%s).', $request->getParameter('id')));
    $this->form = new TestsForm($Test);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Test = TestsPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Test does not exist (%s).', $request->getParameter('id')));
    $Test->delete();

    $this->redirect('tests/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Test = $form->save();

      $this->redirect('tests/edit?id='.$Test->getId());
    }
  }
}
