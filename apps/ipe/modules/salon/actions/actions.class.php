<?php

require_once dirname(__FILE__).'/../lib/salonGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/salonGeneratorHelper.class.php';

/**
 * salon actions.
 *
 * @package    ipe
 * @subpackage salon
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class salonActions extends autoSalonActions
{

public function executeImprimirHorario(sfWebRequest $request) {
        try {
            
            $this->salon = $this->getRoute()->getObject();

        } catch (sfError404Exception $e) {
            var_dump($this); die();
            $this->getUser()->setFlash('error', "El salon solicitado no existe.");
            $this->redirect('@salon');
        }

        $content = $this->getPartial('horario');

        $lista = new IPE_05($content);

        $lista->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }}
