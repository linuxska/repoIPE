<br /><br /><br />
<table> 
    <tr>
        <th class="header" style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="3">Instituto Práctico Ebenezer<br />Departamento Academico<br /></th>
    </tr>
    <tr>
        <th colspan="3">
            <table>
                <tr>
                    <td style="text-align:left;font-weight:normal">Curso: <?php echo sprintf("%s", $curso->getMateria() ) ?></td>
                    <td style="text-align:left;font-weight:normal">Periodo: <?php echo sprintf("%s / %s", $curso->getAnno(), $curso->getPeriodo()) ?></td>
                </tr>
                <tr>                
                    <td style="text-align:left;font-weight:normal">Salón: <?php echo sprintf("%s ", $curso->getSalon())?></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align:left;font-weight:normal">Profesor(a): <?php echo $curso->getProfesor() ?></td>
                    <td></td>
                </tr>
                
            </table>
        </th>
    </tr>
    <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:10%;">No. Control</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:30%;">Nombre</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:9%;">Faltas</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:13%;">Examen Bimestral</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:13%;">Promedio Bimestral</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:13%;">Examen Parcial</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:15%;">Promedio</th>
    </tr>
    <?php $alumnos = array(); ?>
    <?php foreach ($curso->getListas() as $lista) : ?>
        <?php $obj = $lista->getAlumno() ?>
        <?php $obj->__setLista($lista); ?>
        <?php $alumnos[] =  $obj;?>
    <?php endforeach; ?>
    <?php usort($alumnos, array("Alumno", "sortAlumnos")); ?>
    <?php $counter = 0; ?>
    <?php foreach($alumnos as $alumno) :?>
        <tr>
            <td style="width:10%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->getNumeroControl() ?></td>
            <td style="width:30%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->__alumnoName() ?></td>
            <td style="text-align:right;width:8%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->__getLista()->getInasistencia() ?></td>
            <td style="text-align:right;width:13%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->__getLista()->getPrimeraCalificacionExamen() ?></td>
            <td style="text-align:right;width:13%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->__getLista()->getCalificacionParcial() ?></td>
            <td style="text-align:right;width:13%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->__getLista()->getSegundaCalificacionExamen() ?></td>
            <td style="text-align:right;width:15%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->__getLista()->getCalificacionFinal() ?></td>
        </tr>
        <?php $counter++?>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <table>
                <tr>
                    <td></td>
                    <td style="width:100%;text-align:center;border-top-color:black;border-top-style:solid;border-top-width:1px"><?php echo $curso->getProfesor() ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="width:100%;text-align:left;font-weight:normal">Numero de alumnos: <?php echo $counter ?></td>
                    <td></td>
                </tr>
            </table>
            <p style="font-style:italic">Firme esta hoja una vez escritas las calificaciones finales.</p>
        </td>
    </tr>
</table>