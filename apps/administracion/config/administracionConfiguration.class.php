<?php

class administracionConfiguration extends sfApplicationConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfPropelPlugin');  
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
