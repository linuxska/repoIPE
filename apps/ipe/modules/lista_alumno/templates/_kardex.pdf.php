<br/><br/><br/>
<table  cellpadding="20" border="0">
    <tr>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: left;font-weight: bold;" colspan="8">HISTORIAL ACADÉMICO DEL ALUMNO <?php echo $alumno->getSexo()=='masculino' ? 'VARON INTERNO':"MUJER INTERNA"?></th>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: rigth;font-weight: bold;" colspan="4" > Fecha: <?php  setlocale(LC_ALL,"es_ES"); echo strftime("%d de %B del %Y", strtotime(date('d-m-Y'))); ?></th>
    </tr>
    <tr>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: left;font-weight: bold;" colspan="6">Alumno: <?php  echo sprintf("%s %s %s", $alumno->getNombre(), $alumno->getAPaterno(), $alumno->getAMaterno()) ?></th>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: rigth;font-weight: bold;" colspan="6">Numero de Control: <?php  echo sprintf("%s", $alumno->getNumeroControl())?></th>
    </tr>
</table>

<table cellpadding="2" border="1">
    <tr>
        <td style="text-align:center;font-weight:bold" colspan="2">Clave</td>
        <td style="text-align:center;font-weight:bold" colspan="6">Asignatura</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Examen Bimestral</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Nota Bimestral</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Examen Final</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Nota Final</td>
        <td style="text-align:center;font-weight:bold" colspan="1">Cred.</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Estado</td>
        <td style="text-align:center;font-weight:bold" colspan="3">Fecha Curso</td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 1o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 2o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 3o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 4o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
</table>
<br/><br/><br/><br/><br/><br/><br/><br/>
<table cellpadding="2" border="1">
    <tr>
        <td style="text-align:center;font-weight:bold" colspan="2">Clave</td>
        <td style="text-align:center;font-weight:bold" colspan="6">Asignatura</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Examen Bimestral</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Nota Bimestral</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Examen Final</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Nota Final</td>
        <td style="text-align:center;font-weight:bold" colspan="1">Cred.</td>
        <td style="text-align:center;font-weight:bold" colspan="2">Estado</td>
        <td style="text-align:center;font-weight:bold" colspan="3">Fecha Curso</td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 5o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 6o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 7o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left;font-weight:bold" colspan="22">    Semestre 8o.</td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
    <tr>
        <td style="text-align:left" colspan="2"> TP102</td>
        <td style="text-align:left" colspan="6"> Nombre de la materia</td>
        <td style="text-align:center" colspan="2">79</td>
        <td style="text-align:center" colspan="2">80</td>
        <td style="text-align:center" colspan="2">95</td>
        <td style="text-align:center" colspan="2">90</td>
        <td style="text-align:center" colspan="1">2</td>
        <td style="text-align:left" colspan="2"> Aprobado</td>
        <td style="text-align:left" colspan="3"> <?php echo date('d-m-Y')?></td>
    </tr>
</table>
