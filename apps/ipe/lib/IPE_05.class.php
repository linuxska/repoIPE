<?php

class IPE_05 extends CI_TCPDF {

    private $content;

    public function __construct($content) {
        parent::__construct();

        $this->pdf->SetTitle("IPE");
        $this->pdf->SetSubject("Horario de salon");
        $this->pdf->SetKeywords("ipe horario salon");

        $this->content = $content;
    }

    public function doPDF() {
        $this->pdf->writeHTML($this->content, true, false, true, false, '');

        $this->pdf->lastPage();

        $this->pdf->Output("ipe_horario.pdf", 'I');
        
        throw new sfStopException();
    }

}