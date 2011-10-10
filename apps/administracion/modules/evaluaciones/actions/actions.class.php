<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('Url');
/**
 * evaluaciones actions.
 *
 * @package    psicotest
 * @subpackage evaluaciones
 * @author     Psicotest
 */
class evaluacionesActions extends sfActions {
    
    public function executeIndex(sfWebRequest $request) 
    {
        $estado = sfConfig::get('app_activo');
        $this->Evaluaciones = EvaluacionesPeer::getAll();
    }
    public function executeShow(sfWebRequest $request) {
        $this->Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id'));
        $this->forward404Unless($this->Evaluacion);
    }
    public function executeNew(sfWebRequest $request) {
        $this->form = new EvaluacionesForm();
    }
    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new EvaluacionesForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }
    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $this->form = new EvaluacionesForm($Evaluacion);
    }
    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $this->form = new EvaluacionesForm($Evaluacion);
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }
    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $Evaluacion->delete();
        $this->redirect('evaluaciones/index');
    }
    public function executeTestList(sfWebRequest $request) {
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $this->Evaluacion = $Evaluacion;
        $this->Tests = TestsPeer::doselect(new Criteria());
        $PruebasTestIncluidas = $Evaluacion->getPruebass();
        $this->testsIncluidos = array();
        foreach ($PruebasTestIncluidas as $Prueba) {
            $this->testsIncluidos[$Prueba->getTestsId()] = $Prueba->getId();
        }
        $this->cant_tests = count($this->Tests);
        $this->cant_tests_incluidos = count($this->testsIncluidos);
    }
    public function executeQuitarTest(sfWebRequest $request) {
        //Esto se podria hacer por ajax
        $this->forward404Unless($Prueba = PruebasPeer::retrieveByPk($request->getParameter('pruebas_id')), sprintf('Object Prueba does not exist (%s).', $request->getParameter('pruebas_id')));
        $Prueba->delete();
        $this->redirect(url_for('evaluaciones/testList?id=' . $request->getParameter('id')));
    }

    public function executeAgregarTest(sfWebRequest $request) {
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $this->forward404Unless($Test = TestsPeer::retrieveByPk($request->getParameter('tests_id')), sprintf('Object Test does not exist (%s).', $request->getParameter('tests_id')));
        $Prueba = new Pruebas();
        $Prueba->setEvaluaciones($Evaluacion);
        $Prueba->setTests($Test);
        $Prueba->setEstadopruebasId(1); // Estado Inicializado
        $Prueba->save();
        $this->redirect(url_for('evaluaciones/testList?id=' . $Evaluacion->getId()));
    }

    public function executeAspirantesList(sfWebRequest $request) 
    {
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $criteria = new Criteria();
        $criteria->add(AsistenciasPeer::EVALUACIONES_ID, $Evaluacion->getId());
        $this->Evaluacion = $Evaluacion;
        $this->Asistencias = AsistenciasPeer::doSelectJoinAspirantes($criteria);
        $a = new Asistencias();
        $a->getAspirantes();
    }
    public function executeAspirantesAgregando(sfWebRequest $request) 
    {
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $this->Aspirantes = AspirantesPeer::getAspirantesdisponibles($Evaluacion->getId());
       
        $this->Evaluacion = $Evaluacion;
    }
    public function executeQuitarAspirante(sfWebRequest $request) 
    {
        $this->forward404Unless($Asistencia = AsistenciasPeer::retrieveByPk($request->getParameter('asistencias_id')), sprintf('Object Asistencias does not exist (%s).', $request->getParameter('asistencias_id')));
        $Asistencia->delete();
        $this->redirect(url_for('evaluaciones/aspirantesList?id=' . $request->getParameter('id')));
    }
    public function executeAgregarAspirante(sfWebRequest $request) {
        $this->forward404Unless($Evaluacion = EvaluacionesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Evaluacion does not exist (%s).', $request->getParameter('id')));
        $this->forward404Unless($Aspirante = AspirantesPeer::retrieveByPk($request->getParameter('aspirantes_id')), sprintf('Object Aspirante does not exist (%s).', $request->getParameter('aspirantes_id')));
        $Asistencia = new Asistencias();
        $Asistencia->setEvaluaciones($Evaluacion);
        $Asistencia->setAspirantes($Aspirante);
        $Asistencia->save();
        $this->redirect(url_for('evaluaciones/aspirantesAgregando?id=' . $Evaluacion->getId()));
    }
    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $Evaluacion = $form->save();
            $this->redirect('evaluaciones/edit?id=' . $Evaluacion->getId());
        }
    }

}
