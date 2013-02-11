<?php

/**
 * Carga la configuración del TCPDFPlugin para tener una configuración generica
 * para todos los PDF que se generen en el sistema.
 *
 * Todos los documentos que se generen en PDF deden de heredar de esta clase.
 *
 * Los parametros de configuración se encuentran en
 *      apps/ci/config/pdf_config.yml
 *
 * bajo la llave 'dgtyv'.
 *
 * @package    dgtyv-ci
 * @subpackage lib
 * @author     Manuel Alejandro Gómez Nicasio <alejandro.gomez@alejandrogomez.org>
 * @copyright  Copyright (c) 2010, Instituto Tecnológico de Celaya, Departamento de Gestion Tecnológica y Vinculacion.
 * @license    Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
 */
class CI_TCPDF {

    protected $pdf;
    protected $config;

    public function __construct() {
        $this->config = sfTCPDFPluginConfigHandler::loadConfig('ipe');

        $this->pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//var_dump($this->pdf); die(); 
        $this->pdf->SetCreator(PDF_CREATOR);
        $this->pdf->SetAuthor(PDF_AUTHOR);

        $this->pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        $this->pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $this->pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $this->pdf->SetFont(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN, '', true);
        $this->pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $this->pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $this->pdf->AliasNbPages();
        $this->pdf->AddPage();
    }

}