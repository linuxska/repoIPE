<br /><br /><br />
<table  cellpadding="1" border="1"> 
    <tr>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="3">Instituto Práctico Ebenezer<br />Departamento Academico<br /></th>
    </tr>
    <tr>
        <th colspan="3">
            <table>
                <tr>
                    <td style="text-align:left;font-weight:normal">Curso: <?php echo sprintf("%s", $curso->getMateria() ) ?></td>
                    <td style="text-align:left;font-weight:normal">Periodo: <?php echo sprintf("%s / %s", $curso->getAnno(), $curso->getPeriodo()) ?></td>
                </tr>
                <tr>
                    <td style="text-align:left;font-weight:normal">Salón:       Lunes: <?php echo sprintf("%s ", $curso->getSalonLunes())?>   Martes: <?php echo sprintf("%s ", $curso->getSalonMartes())?>      Miercoles: <?php echo sprintf("%s ", $curso->getSalonMiercoles())?>    </td>
                    <td style="text-align:left;font-weight:normal">Jueves: <?php echo sprintf("%s ", $curso->getSalonJueves())?>     Viernes: <?php echo sprintf("%s ", $curso->getSalonViernes())?></td>
                </tr>
                <tr>
                    <td style="text-align:left;font-weight:normal">Profesor(a): <?php echo $curso->getProfesor() ?></td>

                </tr>
            </table>
        </th>
    </tr>
    <tr>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:10%;">No. Control</th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:27%;">Nombre</th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
        <th rowspan="2"style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:2%;"></th>
     </tr>
     <tr>
        <td style="border-left:0px;solid#fff"></td>
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
            <td style="text-align:center;width:10%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo $alumno->getNumeroControl() ?></td>
            <td style="width:27%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"><?php echo " ".$alumno->__alumnoName() ?></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            <td style="text-align:right;width:2%;<?php echo $counter % 2 ? 'background-color:#d6d6ff':''?>"></td>
            
        </tr>
        <?php $counter++?>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <table>
                <tr>
                    <td></td>
                    <td style="width:40%;text-align:center;border-top-color:black;border-top-style:solid;border-top-width:1px"><?php echo $curso->getProfesor() ?></td>
                    <td></td>
                </tr>
            </table>
            <p style="font-style:italic">Firme esta hoja una vez escritas las calificaciones finales.</p>
        </td>
    </tr>
</table>