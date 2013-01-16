<?php
    $alumno = AlumnoPeer::retrieveByPK($sf_user->getAttribute('id'));
    $alumno_interno = AlumnoInternoPeer::doSelectOne(AlumnoInternoPeer::getAlumnoInternoForAlumnoCriteria($alumno));
    $alumno_trabajador = AlumnoTrabajadorItcPeer::doSelectOne(AlumnoTrabajadorItcPeer::getAlumnoTrabajadorITCForAlumnoCriteria($alumno));
?>

<div class="cedula" style="float:right;width: 100%;margin-left:auto;margin-right:auto;font-size:1em;">
    <table>
        <tr>
            <td colspan="3"><h1 style="text-transform:uppercase;text-align:center;font-size:1.3em;">INSTITUTO TECNOLÓGICO DE CELAYA <br /> CENTRO DE IDIOMAS<br />CEDULA DE INSCRIPCIÓN</h1></td>
            <td><div class="logo"><img width="1600" height="255" alt="logo" src="/images/print/header.jpg"></div></td>
        </tr>
    </table>
    <table style="width:100%;font-size:1em;">
        <tbody>
            <tr>
                <td style="padding-top:20px;font-size:1em;" colspan="2" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Nombre</span> <?php echo $alumno ?></td>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Teléfono</span> <?php echo $alumno->getTelefono() ?></td>
            </tr>            
            <tr>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Dirección</span> <?php echo $alumno->getFullDireccion() ?></td>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Correo electrónico</span> <?php echo $alumno->getEMail() ?></td>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Sexo</span> <?php echo $alumno->getSexo() ?></td>
            </tr>
            <tr>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Fecha de Nacimiento</span> <?php echo $alumno->getFechaNacimiento('d-m-Y')?></td>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Instituto/Empresa</span> <?php echo $alumno->getInstitutoEmpresa() ?></td>
                <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Total</span></td>
            </tr>
        </tbody>
    </table>
    <div class="inner" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;border-color:black;border-width:1px;border-style:solid;margin: 1px 1px 0 1px;padding: 1px 1px 0 1px;">
        <table style="width:100%;font-size:1em;">
            <tbody>
                <tr>
                    <td><em>Tipo de inscripción</em></td>
                    <td><strong> X </strong> Nuevo Ingreso</td>
                    <td> Reinscripción</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="inner" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;border-color: black;border-width: 1px;border-style: solid;margin: 1px 1px 0 1px;padding: 1px 1px 0 1px;">
        <em>Tipo de alumno</em>
        <table style="width:100%;font-size:1em;">
            <tbody>
                <tr>
                    <td><?php echo !is_object($alumno_interno) && !is_object($alumno_trabajador) ? '<strong> X </strong>':''?> Externo</td>
                    <td><?php echo is_object($alumno_interno) && $alumno_interno->getSemestre() == '16' ? '<strong> X </strong>' : ''?> Egresado ITC</td>
                    <td colspan="2"><?php echo is_object($alumno_trabajador) ? '<strong> X </strong>' : ''?> Hijo/Esposa/Trabajador de trabajador ITC</td>
                </tr>
                <tr>
                    <td><?php echo is_object($alumno_interno) && $alumno_interno->getSemestre() != '16' ? '<strong> X </strong>' : ''?> Estudiante ITC</td>
                    <?php if (is_object($alumno_interno)) : ?>
                        <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">No. Control</span> <?php echo $alumno_interno->getNoControl() ?></td>
                        <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Semestre</span> <?php echo $alumno_interno->getSemestre() == '16' ? 'Egresado' : $alumno_interno->getSemestre() ?></td>
                        <td style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Carrera</span> <?php echo $alumno_interno->getCarrera() ?></td>
                    <?php elseif (is_object($alumno_trabajador)) : ?>
                        <td colspan="3" style="padding-top:20px;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Nombre</span> <?php echo $alumno_trabajador ?></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="inner" style="border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;border-color: black;border-width: 1px;border-style: solid;margin: 1px 1px 0 1px;padding: 1px 1px 0 1px;">
        <table style="width:100%;font-size:1em;">
            <tbody>
                <tr>
                    <td rowspan="3" style="padding-top:20px;border-bottom-color:black;border-bottom-width:1px;border-bottom-style:dotted;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Curso</span></td>
                    <td rowspan="3" style="padding-top:20px;border-bottom-color:black;border-bottom-width:1px;border-bottom-style:dotted;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Horario</span></td>
                    <td rowspan="3" style="padding-top:20px;border-bottom-color:black;border-bottom-width:1px;border-bottom-style:dotted;font-size:1em;" class="text"><span style="text-transform:uppercase;font-weight:bold;" class="label">Maestro</span></td>
                </tr>
                <tr><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td></tr>
            </tbody>
        </table>
    </div>
    <div class="inner">
        <table>
            <tr><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td></tr>
            <tr>
                <td></td>
                <td style="border-top:1px solid black;text-align:center;font-weight:bold;">Firma del solicitante</td>
                <td></td>
                <td style="border-top:1px solid black;text-align:center;font-weight:bold;">Firma del centro de idiomas</td>
                <td></td>
            </tr>
        </table>
    </div>
</div>