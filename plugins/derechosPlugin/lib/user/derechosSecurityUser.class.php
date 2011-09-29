<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of derechosSecurityUserclass
 *
 * @author gaggiand
 */
class derechosSecurityUser extends sfBasicSecurityUser {

    protected $user = null;

    /**
    * Initializes the sfGuardSecurityUser object.
    *
    * @param sfEventDispatcher $dispatcher The event dispatcher object
    * @param sfStorage $storage The session storage object
    * @param array $options An array of options
    */
    public function initialize(sfEventDispatcher $dispatcher, sfStorage $storage, $options = array())
    {
        parent::initialize($dispatcher, $storage, $options);

        if (!$this->isAuthenticated())
        {
            $this->user = null;
        }
    }

    public function signIn($user, $con = null)
    {
        // signin
        $this->setAttribute('usuarioId', $user['user']->getId());
        //$this->setAttribute('usuarioPassword', $user['passDB']);

        $this->setAuthenticated(true);
        $this->clearCredentials();
        $this->addCredential($user['credencial']);
    }

    /**
    * Signs out the user.
    *
    */
    public function signOut()
    {
        $this->user = null;
        $this->clearCredentials();
        $this->setAuthenticated(false);
        sfContext::getInstance()->getResponse()->setCookie($remember_cookie, '', time() - $expiration_age);
    }

    /**
    * Returns the referer uri.
    *
    * @param string $default The default uri to return
    * @return string $referer The referer
    */
    public function getReferer($default)
    {
        $referer = $this->getAttribute('referer', $default);
        $this->getAttributeHolder()->remove('referer');

        return $referer;
    }

    /**
    * Sets the referer.
    *
    * @param string $referer
    */
    public function setReferer($referer)
    {
        if (!$this->hasAttribute('referer'))
        {
            $this->setAttribute('referer', $referer);
        }
    }
}
?>
