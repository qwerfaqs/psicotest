<?php

class BasederechosAuthComponents extends sfComponents
{
  public function executeSignin_form()
  {
    $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'derechosFormSignin');
    $this->form = new $class();
  }
}