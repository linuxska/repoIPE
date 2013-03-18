<?php
$alumno = AlumnoPeer::retrieveByPK($lista->getIdAlumno());
$curso = CursoPeer::retrieveByPK($lista->getIdCurso());
$profesor = ProfesorPeer::retrieveByPK($curso->getIdProfesor());
//$salon = SalonPeer::retrieveByPK($curso->getSalonLunes());
$periodo = PeriodoPeer::retrieveByPK($curso->getIdPeriodo());
$nivel = NivelPeer::retrieveByPK($curso->getIdNivel());
$idioma = IdiomaPeer::retrieveByPK($nivel->getIdIdioma());
?>

<?php use_stylesheet('print/print_ticket.css', '', array('media' => 'screen, print')) ?>
<?php use_javascript('print/print_ticket.js') ?>

<table class="layout">
    <tbody>
        <tr>
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <td>
                    <div class="ticket">
                        <table>
                            <thead>
                                <tr><th colspan="2" class="header image"><img alt="CI" src="/images/print/ci.png"></th></tr>
                                <tr><th colspan="2" class="header">centro de idiomas<br />instituto tecnológico de celaya<br />comprobante/maestro</th></tr>
                            </thead>
                            <tbody>
                                <tr><th>Nombre</th><td><?php echo sprintf("[ %s ]<br /> %s", $alumno->getNoControl(), $alumno) ?></td></tr>
                                <tr><th>Nivel</th><td><?php echo sprintf("%s - %s", $idioma->getIdioma(), $nivel->getNivel()) ?></td></tr>
                                <tr><th>Maestro</th><td><?php echo $profesor ?></td></tr>
                                <tr><th>Modalidad</th><td><?php echo $periodo ?></td></tr>
                                <tr><th>Fecha (inscripción)</th><td><?php echo $lista->getFechaInscripcion() ?></td></tr>
                                <tr><th>Curso Anterior</th><td><?php echo $lista->getCursoAnterior() ?></td></tr>
                                <tr><th>Motivo del cambio</th><td><?php echo $lista->getMotivoCambio() ?></td></tr>
                                <tr><td colspan="2" class="header">
                                        Nota: En caso de cambio de horario o grupo, favor de asistir a la
                                        Oficina del Centro de Idiomas de este Instituto para llenar el formato
                                        correspondiente, de lo contrario el alumno aparecerá como alumno
                                        asistente al grupo al que en u inicio se inscribio. No existen
                                        cambios depués de la segunda semana del inicio de Cursos.
                                    </td></tr>
                                <tr>
                                    <td class="header sign">Sello y firma CI. (Resp.)</td>
                                    <td class="header sign">Firma Alumno</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            <?php endfor ?>
        </tr>
    </tbody>
    <tfoot>
        <tr><td colspan="2" class="header"><input id="print_ticket" type="button" value="Imprimir"></td></tr>
    </tfoot>
</table>