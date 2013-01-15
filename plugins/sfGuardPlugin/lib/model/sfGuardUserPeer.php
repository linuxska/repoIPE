<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserPeer.php 7634 2008-02-27 18:01:40Z fabien $
 */
class sfGuardUserPeer extends PluginsfGuardUserPeer
{
	const PASSWORD_LENGHT = 8;
    
    /**
     * Genera una contraseña de longitud <code>self::PASSWORD_LENGHT</code>.
     *
     * Toma como base el username del usuario a quien se le proporcionara
     * la contraseña.
     *
     * Con el hash sha1 del username se elige el caracter i-esimo aleatoriamente
     * para formar la contraseña.
     *
     * @param string $username Nombre de usuario de la persona a quien se le proporcionara
     * una contraseña
     * @return string Contraseña de longitud <code>self::PASSWORD_LENGHT</code>.
     */
    static public function doMakePassword($username) {
        $username = sha1($username);

        $password = '';

        for($i = 0; $i < self::PASSWORD_LENGHT; $i++) :
            $pos = mt_rand(0, strlen($username)-1);
            $password .= $username[$pos];
        endfor;

        return $password;
    }
    
    static public function existProfesorCriteria($data) {
    	$c = new Criteria;
	$cton1 = $c->getNewCriterion(ProfesorPeer::RFC, strtoupper($data), Criteria::EQUAL);
	$cton2 = $c->getNewCriterion(ProfesorPeer::E_MAIL, strtoupper($data), Criteria::EQUAL);
	$cton1->addOr($cton2);
	$c->add($cton1);
	
	return $c;
    }
    
    static public function existAlumnoCriteria($data) {
    	$c = new Criteria;
	$c->add(AlumnoPeer::NO_CONTROL, $data, Criteria::EQUAL);
	
	return $c;
    }
}
