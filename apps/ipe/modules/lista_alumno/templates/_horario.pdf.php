<br /><br /><br />
<table  cellpadding="20" border="0">
    <tr>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="6">Instituto Práctico Ebenezer</th>
    </tr>
    <tr>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="6">Horario Académico<br /></th>
    </tr>
</table>
    <table cellpadding="20" border="1">
    <tr>
        <th  colspan="6">
            <table>
                <tr>
                    <td style="text-align:left;font-weight:bold"><?php  echo sprintf("%s %s %s", $alumno->getNombre(), $alumno->getAPaterno(), $alumno->getAMaterno()) ?></td>
                    <td style="text-align:rigth;font-weight:bold">Año: <?php  echo date("Y"); ?></td>
                </tr>
            </table>
        </th>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:bold">Hora</td>
        <td style="text-align:center;font-weight:bold">Lunes</td>
        <td style="text-align:center;font-weight:bold">Martes</td>
        <td style="text-align:center;font-weight:bold">Miércoles</td>
        <td style="text-align:center;font-weight:bold">Jueves</td>
        <td style="text-align:center;font-weight:bold">Viernes</td>
    </tr>
        <?php $materiaslunes = array();
        $cursolunes = $lunesprimera = $lunessegunda = $lunestercera = $lunescuarta = 
        $lunesquinta = $lunessexta = $luneseptima = $lunesoctava = $lunesnovena = $lunesdecima = null;?>
        <?php $materiasmartes = array();
        $cursomartes = $martesprimera = $martessegunda = $martestercera = $martescuarta = 
        $martesquinta = $martessexta = $martesseptima = $martesoctava = $martesnovena = $martesdecima = null; ?>
        <?php $materiasmiercoles = array();
        $cursomiercoles = $miercolesprimera = $miercolessegunda = $miercolestercera = $miercolescuarta =
        $miercolesquinta = $miercolessexta = $miercolesseptima = $miercolesoctava = $miercolesnovena = $miercolesdecima = null; ?>
        <?php $materiasjueves = array();
        $cursojueves = $juevesprimera = $juevessegunda = $juevestercera = $juevescuarta =
        $juevesquinta = $juevessexta = $juevesseptima = $juevesoctava = $juevesnovena = $juevesdecima = null; ?>
        <?php $materiasviernes = array();
        $cursoviernes = $viernesprimera = $viernessegunda = $viernestercera = $viernescuarta =
        $viernesquinta = $viernessexta = $viernesseptima = $viernesoctava = $viernesnovena = $viernesdecima = null; ?>

    <?php foreach ($listasa as $cursos): ?>
    <?php $cursoactual = CursoPeer::retrieveByPk($cursos->getIdCurso())?>
    <?php $materia = MateriaPeer::retrieveByPk($cursoactual->getIdMateria())?>
        <?php
            switch ($cursoactual->getLunesHoraInicio()) {
                case "08:00:00":
                        $lunesprimera=$materia->getNombre();
                    break;
                case "08:55:00":
                        $lunessegunda=$materia->getNombre();
                    break;
                case "09:50:00":
                        $lunestercera=$materia->getNombre();
                    break;
                case "10:35:00":
                        $lunescuarta=$materia->getNombre();
                    break;
                case "11:40:00":
                        $lunesquinta=$materia->getNombre();
                    break;
                case "12:35:00":
                        $lunessexta=$materia->getNombre();
                    break;
                case "14:30:00":
                        $lunesseptima=$materia->getNombre();
                    break;
                case "16:05:00":
                        $lunesoctava=$materia->getNombre();
                    break;
                case "17:00:00":
                        $lunesnovena=$materia->getNombre();
                    break;
                case "19:00:00":
                        $lunesdecima=$materia->getNombre();
                    break;
            }
        ?>
        <?php
            switch ($cursoactual->getMartesHoraInicio()) {
                case "08:00:00":
                        $martesprimera=$materia->getNombre();
                    break;
                case "08:55:00":
                        $martessegunda=$materia->getNombre();
                    break;
                case "09:50:00":
                        $martestercera=$materia->getNombre();
                    break;
                case "10:35:00":
                        $martescuarta=$materia->getNombre();
                    break;
                case "11:40:00":
                        $martesquinta=$materia->getNombre();
                    break;
                case "12:35:00":
                        $martessexta=$materia->getNombre();
                    break;
                case "14:30:00":
                        $martesseptima=$materia->getNombre();
                    break;
                case "16:05:00":
                        $martesoctava=$materia->getNombre();
                    break;
                case "17:00:00":
                        $martesnovena=$materia->getNombre();
                    break;
                case "19:00:00":
                        $martesdecima=$materia->getNombre();
                    break;
            }
        ?>
        <?php
            switch ($cursoactual->getMiercolesHoraInicio()) {
                case "08:00:00":
                        $miercolesprimera=$materia->getNombre();
                    break;
                case "08:55:00":
                        $miercolessegunda=$materia->getNombre();
                    break;
                case "09:50:00":
                        $miercolestercera=$materia->getNombre();
                    break;
                case "10:35:00":
                        $miercolescuarta=$materia->getNombre();
                    break;
                case "11:40:00":
                        $miercolesquinta=$materia->getNombre();
                    break;
                case "12:35:00":
                        $miercolessexta=$materia->getNombre();
                    break;
                case "14:30:00":
                        $miercolesseptima=$materia->getNombre();
                    break;
                case "16:05:00":
                        $miercolesoctava=$materia->getNombre();
                    break;
                case "17:00:00":
                        $miercolesnovena=$materia->getNombre();
                    break;
                case "19:00:00":
                        $miercolesdecima=$materia->getNombre();
                    break;
            }
        ?>
        <?php
            switch ($cursoactual->getJuevesHoraInicio()) {
                case "08:00:00":
                        $juevesprimera=$materia->getNombre();
                    break;
                case "08:55:00":
                        $juevessegunda=$materia->getNombre();
                    break;
                case "09:50:00":
                        $juevestercera=$materia->getNombre();
                    break;
                case "10:35:00":
                        $juevescuarta=$$materia->getNombre();
                    break;
                case "11:40:00":
                        $juevesquinta=$materia->getNombre();
                    break;
                case "12:35:00":
                        $juevessexta=$materia->getNombre();
                    break;
                case "14:30:00":
                        $juevesseptima=$materia->getNombre();
                    break;
                case "16:05:00":
                        $juevesoctava=$materia->getNombre();
                    break;
                case "17:00:00":
                        $juevesnovena=$materia->getNombre();
                    break;
                case "19:00:00":
                        $juevesdecima=$materia->getNombre();
                    break;
            }
        ?>
        <?php
            switch ($cursoactual->getViernesHoraInicio()) {
                case "08:00:00":
                        $viernesprimera=$materia->getNombre();
                    break;
                case "08:55:00":
                        $viernessegunda=$materia->getNombre();
                    break;
                case "09:50:00":
                        $viernestercera=$materia->getNombre();
                    break;
                case "10:35:00":
                        $viernescuarta=$materia->getNombre();
                    break;
                case "11:40:00":
                        $viernesquinta=$materia->getNombre();
                    break;
                case "12:35:00":
                        $viernessexta=$materia->getNombre();
                    break;
                case "14:30:00":
                        $viernesseptima=$materia->getNombre();
                    break;
                case "16:05:00":
                        $viernesoctava=$materia->getNombre();
                    break;
                case "17:00:00":
                        $viernesnovena=$materia->getNombre();
                    break;
                case "19:00:00":
                        $viernesdecima=$materia->getNombre();
                    break;
            }
        ?>
    <?php endforeach; ?>
    <tr>
        <td style="text-align:center;font-weight:normal">7:25-7:55 AM</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional Personal</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional Personal</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional Personal</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional Personal</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional Personal</td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">8:00-8:45 AM</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Concilio Estudiantil</td>
        <td style="text-align:center;font-weight:normal"><?php if(($martesprimera!= null)    && ($cursoactual->getEstado()==true))  echo $martesprimera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolesprimera!= null) && ($cursoactual->getEstado()==true))  echo $miercolesprimera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevesprimera!= null)    && ($cursoactual->getEstado()==true))  echo $juevesprimera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernesprimera!= null)   && ($cursoactual->getEstado()==true))  echo $viernesprimera;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">8:55-9:40 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunessegunda!= null)     && ($cursoactual->getEstado()==true))   echo $lunessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martessegunda!= null)    && ($cursoactual->getEstado()==true))  echo $martessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolessegunda!= null) && ($cursoactual->getEstado()==true))  echo $miercolessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevessegunda!= null)    && ($cursoactual->getEstado()==true))  echo $juevessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernessegunda!= null)   && ($cursoactual->getEstado()==true)) echo $viernessegunda;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">9:50-10:35 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunestercera!= null)     && ($cursoactual->getEstado()==true))   echo $lunestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martestercera!= null)    && ($cursoactual->getEstado()==true))  echo $martestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolestercera!= null) && ($cursoactual->getEstado()==true))  echo $miercolestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevestercera!= null)    && ($cursoactual->getEstado()==true))  echo $juevestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernestercera!= null)   && ($cursoactual->getEstado()==true)) echo $viernestercera;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">10:35-11:55 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunescuarta!= null)     && ($cursoactual->getEstado()==true))   echo $lunescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martescuarta!= null)    && ($cursoactual->getEstado()==true))  echo $martescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolescuarta!= null) && ($cursoactual->getEstado()==true))  echo $miercolescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevescuarta!= null)    && ($cursoactual->getEstado()==true))  echo $juevescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernescuarta!= null)   && ($cursoactual->getEstado()==true)) echo $viernescuarta;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">10:55-11:30 AM</td>
        <td style="text-align:center;font-weight:normal;font-style:italic"></td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Devocional</td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">11:40-12:25 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunesquinta!= null)     && ($cursoactual->getEstado()==true))   echo $lunesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martesquinta!= null)    && ($cursoactual->getEstado()==true))  echo $martesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolesquinta!= null) && ($cursoactual->getEstado()==true))  echo $miercolesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevesquinta!= null)    && ($cursoactual->getEstado()==true))  echo $juevesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernesquinta!= null)   && ($cursoactual->getEstado()==true)) echo $viernesquinta;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">12:35-1:20 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunessexta!= null)     && ($cursoactual->getEstado()==true))   echo $lunessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martessexta!= null)    && ($cursoactual->getEstado()==true))  echo $martessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolessexta!= null) && ($cursoactual->getEstado()==true))  echo $miercolessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevessexta!= null)    && ($cursoactual->getEstado()==true))  echo $juevessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernessexta!= null)   && ($cursoactual->getEstado()==true)) echo $viernessexta;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">1:30-2:00 PM</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Comida</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Comida</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Comida</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Comida</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Comida</td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">2:30-3:15 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($luneseptima!= null)      && ($cursoactual->getEstado()==true))   echo $luneseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martesseptima!= null)    && ($cursoactual->getEstado()==true))  echo $martesseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolesseptima!= null) && ($cursoactual->getEstado()==true))  echo $miercolesseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevesseptima!= null)    && ($cursoactual->getEstado()==true))  echo $juevesseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernesseptima!= null)   && ($cursoactual->getEstado()==true)) echo $viernesseptima;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">4:05-4:50 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunesoctava!= null)    && ($cursoactual->getEstado()==true))  echo $lunesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martesoctava!= null)    && ($cursoactual->getEstado()==true))  echo $martesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolesoctava!= null) && ($cursoactual->getEstado()==true))  echo $miercolesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevesoctava!= null)    && ($cursoactual->getEstado()==true))  echo $juevesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernesoctava!= null)   && ($cursoactual->getEstado()==true)) echo $viernesoctava;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">5:00-5:45 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunesnovena!= null)     && ($cursoactual->getEstado()==true))   echo $lunesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martesnovena!= null)    && ($cursoactual->getEstado()==true))  echo $martesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolesnovena!= null) && ($cursoactual->getEstado()==true))  echo $miercolesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevesnovena!= null)    && ($cursoactual->getEstado()==true))  echo $juevesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernesnovena!= null)   && ($cursoactual->getEstado()==true)) echo $viernesnovena;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">6:00-6:30 PM</td>
        <td style="text-align:center;font-weight:normal"> </td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Oración</td>
        <td style="text-align:center;font-weight:normal"> </td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Oración</td>
        <td style="text-align:center;font-weight:normal"> </td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">6:30-7:00 PM</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Cena</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Cena</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Cena</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Cena</td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Cena</td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">7:00-9:15 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(($lunesdecima!= null)     && ($cursoactual->getEstado()==true))   echo $lunesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($martesdecima!= null)    && ($cursoactual->getEstado()==true))  echo $martesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($miercolesdecima!= null) && ($cursoactual->getEstado()==true))  echo $miercolesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($juevesdecima!= null)    && ($cursoactual->getEstado()==true))  echo $juevesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(($viernesdecima!= null)   && ($cursoactual->getEstado()==true)) echo $viernesdecima;  else { }?></td>
    </tr>
</table>
