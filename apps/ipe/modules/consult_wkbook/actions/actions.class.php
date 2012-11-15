<?php

require_once dirname(__FILE__).'/../lib/consult_wkbookGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/consult_wkbookGeneratorHelper.class.php';

/**
 * consult_wkbook actions.
 *
 * @package    ipe
 * @subpackage consult_wkbook
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class consult_wkbookActions extends autoConsult_wkbookActions
{
	public function executeNew(sfWebRequest $request) {
            throw new sfError404Exception('');
    }

    public function executeEdit(sfWebRequest $request) {
     	    throw new sfError404Exception('');
    }

    public function executeCreate(sfWebRequest $request) {
            throw new sfError404Exception('');
    }

    public function executeDelete(sfWebRequest $request) {
            throw new sfError404Exception('');
    }
}
