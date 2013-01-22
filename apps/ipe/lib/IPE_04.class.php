<?php

class IPE_04 extends CI_TCPDF {

    private $content;

    public function __construct($content) {
        parent::__construct();

        $this->pdf->SetTitle("IPE");
        $this->pdf->SetSubject("Lista de asistencia/calificaciones");
        $this->pdf->SetKeywords("ipe asistencia calificación");

        $this->content = $content;
    }

    public function doPDF() {
        $this->pdf->writeHTML($this->content, true, false, true, false, '');

        $this->pdf->lastPage();

        $this->pdf->Output("IPE.pdf", 'I');
        
        throw new sfStopException();
    }

}