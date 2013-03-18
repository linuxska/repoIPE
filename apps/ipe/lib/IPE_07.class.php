<?php

class IPE_07 extends IPE_TCPDF {

    private $content;

    public function __construct($content) {
        parent::__construct();

        $this->pdf->SetTitle("IPE");
        $this->pdf->SetSubject("Horario de alumno");
        $this->pdf->SetKeywords("ipe horario alumno");

        $this->content = $content;
    }

    public function doPDF() {
        $this->pdf->writeHTML($this->content, true, false, true, false, '');

        $this->pdf->lastPage();

        $this->pdf->Output("ipe_kardex.pdf", 'I');

        throw new sfStopException();
    }

}