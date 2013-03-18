<br /><br /><br />
        
        
<table  cellpadding="20" border="1">
    <tr>
        <th  style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="6">Instituto Práctico Ebenezer<br /></th>
    </tr>

    <tr>
        <th colspan="6">
            <table>
                <tr>
                    <td style="text-align:center;font-weight:bold">Horario de clases del salon: <?php echo sprintf("%s", $salon->getSalon()) ?></td>
                </tr>
                <tr>
                    <td style="text-align:center;font-weight:bold">Semestre </td>
                </tr>
            </table>
        </th>
    </tr>
        <?php $materiaslunes = array();
        $cursolunes = $lunesprimera = $lunessegunda = $lunestercera = $lunescuarta = 
        $lunesquinta = $lunessexta = $luneseptima = $lunesoctava = $lunesnovena = $lunesdecima = null;?>
        <?php foreach ($salon->getCursosRelatedByIdSalonLunes() as $cursolunes) : ?>
        <?php $obj = $cursolunes->getMateria() ?>
        <?php
            switch ($cursolunes->getLunesHoraInicio()) {
                case "08:00:00":
                        $lunesprimera=$cursolunes->getMateria()->getNombre();
                    break;
                case "08:55:00":
                        $lunessegunda=$cursolunes->getMateria()->getNombre();
                    break;
                case "09:50:00":
                        $lunestercera=$cursolunes->getMateria()->getNombre();
                    break;
                case "10:35:00":
                        $lunescuarta=$cursolunes->getMateria()->getNombre();
                    break;
                case "11:40:00":
                        $lunesquinta=$cursolunes->getMateria()->getNombre();
                    break;
                case "12:35:00":
                        $lunessexta=$cursolunes->getMateria()->getNombre();
                    break;
                case "14:30:00":
                        $lunesseptima=$cursolunes->getMateria()->getNombre();
                    break;
                case "16:05:00":
                        $lunesoctava=$cursolunes->getMateria()->getNombre();
                    break;
                case "17:00:00":
                        $lunesnovena=$cursolunes->getMateria()->getNombre();
                    break;
                case "19:00:00":
                        $lunesdecima=$cursolunes->getMateria()->getNombre();
                    break;
            }
        ?>
        <?php $obj->__setCurso($cursomartes); ?>
        <?php $materiaslunes[] =  $obj;?>
        <?php endforeach; ?>

        <?php $materiasmartes = array();
        $cursomartes = $martesprimera = $martessegunda = $martestercera = $martescuarta = 
        $martesquinta = $martessexta = $martesseptima = $martesoctava = $martesnovena = $martesdecima = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonMartes() as $cursomartes) : ?>
        <?php $obj = $cursomartes->getMateria(); ?>
        <?php
            switch ($cursomartes->getMartesHoraInicio()) {
                case "08:00:00":
                        $martesprimera=$cursomartes->getMateria()->getNombre();
                    break;
                case "08:55:00":
                        $martessegunda=$cursomartes->getMateria()->getNombre();
                    break;
                case "09:50:00":
                        $martestercera=$cursomartes->getMateria()->getNombre();
                    break;
                case "10:35:00":
                        $martescuarta=$cursomartes->getMateria()->getNombre();
                    break;
                case "11:40:00":
                        $martesquinta=$cursomartes->getMateria()->getNombre();
                    break;
                case "12:35:00":
                        $martessexta=$cursomartes->getMateria()->getNombre();
                    break;
                case "14:30:00":
                        $martesseptima=$cursomartes->getMateria()->getNombre();
                    break;
                case "16:05:00":
                        $martesoctava=$cursomartes->getMateria()->getNombre();
                    break;
                case "17:00:00":
                        $martesnovena=$cursomartes->getMateria()->getNombre();
                    break;
                case "19:00:00":
                        $martesdecima=$cursomartes->getMateria()->getNombre();
                    break;
            }
        ?>
        <?php $obj->__setCurso($cursomartes); ?>
        <?php $materiasmartes[] =  $obj;?>
        <?php endforeach; ?>


        <?php $materiasmiercoles = array();
        $cursomiercoles = $miercolesprimera = $miercolessegunda = $miercolestercera = $miercolescuarta =
        $miercolesquinta = $miercolessexta = $miercolesseptima = $miercolesoctava = $miercolesnovena = $miercolesdecima = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonMiercoles() as $cursomiercoles) : ?>
        <?php $obj = $cursomiercoles->getMateria() ?>
        <?php
            switch ($cursomiercoles->getMiercolesHoraInicio()) {
                case "08:00:00":
                        $miercolesprimera=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "08:55:00":
                        $miercolessegunda=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "09:50:00":
                        $miercolestercera=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "10:35:00":
                        $miercolescuarta=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "11:40:00":
                        $miercolesquinta=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "12:35:00":
                        $miercolessexta=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "14:30:00":
                        $miercolesseptima=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "16:05:00":
                        $miercolesoctava=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "17:00:00":
                        $miercolesnovena=$cursomiercoles->getMateria()->getNombre();
                    break;
                case "19:00:00":
                        $miercolesdecima=$cursomiercoles->getMateria()->getNombre();
                    break;
            }
        ?>
        <?php $obj->__setCurso($cursomiercoles); ?>
        <?php $materiasmiercoles[] =  $obj;?>
        <?php endforeach;?>

        <?php $materiasjueves = array();
        $cursojueves = $juevesprimera = $juevessegunda = $juevestercera = $juevescuarta =
        $juevesquinta = $juevessexta = $juevesseptima = $juevesoctava = $juevesnovena = $juevesdecima = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonJueves() as $cursojueves) : ?>
        <?php $obj = $cursojueves->getMateria() ?>
        <?php
            switch ($cursojueves->getJuevesHoraInicio()) {
                case "08:00:00":
                        $juevesprimera=$cursojueves->getMateria()->getNombre();
                    break;
                case "08:55:00":
                        $juevessegunda=$cursojueves->getMateria()->getNombre();
                    break;
                case "09:50:00":
                        $juevestercera=$cursojueves->getMateria()->getNombre();
                    break;
                case "10:35:00":
                        $juevescuarta=$cursojueves->getMateria()->getNombre();
                    break;
                case "11:40:00":
                        $juevesquinta=$cursojueves->getMateria()->getNombre();
                    break;
                case "12:35:00":
                        $juevessexta=$cursojueves->getMateria()->getNombre();
                    break;
                case "14:30:00":
                        $juevesseptima=$cursojueves->getMateria()->getNombre();
                    break;
                case "16:05:00":
                        $juevesoctava=$cursojueves->getMateria()->getNombre();
                    break;
                case "17:00:00":
                        $juevesnovena=$cursojueves->getMateria()->getNombre();
                    break;
                case "19:00:00":
                        $juevesdecima=$cursojueves->getMateria()->getNombre();
                    break;
            }
        ?>
        <?php $obj->__setCurso($cursojueves); ?>
        <?php $materiasjueves[] =  $obj;?>
        <?php endforeach; ?>

        <?php $materiasviernes = array();
        $cursoviernes = $viernesprimera = $viernessegunda = $viernestercera = $viernescuarta =
        $viernesquinta = $viernessexta = $viernesseptima = $viernesoctava = $viernesnovena = $viernesdecima = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonViernes() as $cursoviernes) : ?>
        <?php $obj = $cursoviernes->getMateria()  ?>
        <?php
            switch ($cursoviernes->getViernesHoraInicio()) {
                case "08:00:00":
                        $viernesprimera=$cursoviernes->getMateria()->getNombre();
                    break;
                case "08:55:00":
                        $viernessegunda=$cursoviernes->getMateria()->getNombre();
                    break;
                case "09:50:00":
                        $viernestercera=$cursoviernes->getMateria()->getNombre();
                    break;
                case "10:35:00":
                        $viernescuarta=$cursoviernes->getMateria()->getNombre();
                    break;
                case "11:40:00":
                        $viernesquinta=$cursoviernes->getMateria()->getNombre();
                    break;
                case "12:35:00":
                        $viernessexta=$cursoviernes->getMateria()->getNombre();
                    break;
                case "14:30:00":
                        $viernesseptima=$cursoviernes->getMateria()->getNombre();
                    break;
                case "16:05:00":
                        $viernesoctava=$cursoviernes->getMateria()->getNombre();
                    break;
                case "17:00:00":
                        $viernesnovena=$cursoviernes->getMateria()->getNombre();
                    break;
                case "19:00:00":
                        $viernesdecima=$cursoviernes->getMateria()->getNombre();
                    break;
            }
        ?>
        <?php $obj->__setCurso($cursoviernes); ?>
        <?php $materiasviernes[] =  $obj;?>
        <?php endforeach; ?>

    <tr>
        <td style="text-align:center;font-weight:bold">Hora</td>
        <td style="text-align:center;font-weight:bold">Lunes</td>
        <td style="text-align:center;font-weight:bold">Martes</td>
        <td style="text-align:center;font-weight:bold">Miércoles</td>
        <td style="text-align:center;font-weight:bold">Jueves</td>
        <td style="text-align:center;font-weight:bold">Viernes</td>
    </tr>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martesprimera!= null)    && ($cursomartes->getEstado()==true))  echo $martesprimera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolesprimera!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolesprimera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevesprimera!= null)    && ($cursojueves->getEstado()==true))  echo $juevesprimera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernesprimera!= null)   && ($cursoviernes->getEstado()==true))  echo $viernesprimera;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">8:55-9:40 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunessegunda!= null)     && ($cursolunes->getEstado()==true))   echo $lunessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martessegunda!= null)    && ($cursomartes->getEstado()==true))  echo $martessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolessegunda!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevessegunda!= null)    && ($cursojueves->getEstado()==true))  echo $juevessegunda;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernessegunda!= null)   && ($cursoviernes->getEstado()==true)) echo $viernessegunda;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">9:50-10:35 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunestercera!= null)     && ($cursolunes->getEstado()==true))   echo $lunestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martestercera!= null)    && ($cursomartes->getEstado()==true))  echo $martestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolestercera!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevestercera!= null)    && ($cursojueves->getEstado()==true))  echo $juevestercera;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernestercera!= null)   && ($cursoviernes->getEstado()==true)) echo $viernestercera;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">10:35-11:55 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunescuarta!= null)     && ($cursolunes->getEstado()==true))   echo $lunescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martescuarta!= null)    && ($cursomartes->getEstado()==true))  echo $martescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolescuarta!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevescuarta!= null)    && ($cursojueves->getEstado()==true))  echo $juevescuarta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernescuarta!= null)   && ($cursoviernes->getEstado()==true)) echo $viernescuarta;  else { }?></td>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunesquinta!= null)     && ($cursolunes->getEstado()==true))   echo $lunesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martesquinta!= null)    && ($cursomartes->getEstado()==true))  echo $martesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolesquinta!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevesquinta!= null)    && ($cursojueves->getEstado()==true))  echo $juevesquinta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernesquinta!= null)   && ($cursoviernes->getEstado()==true)) echo $viernesquinta;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">12:35-1:20 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunessexta!= null)     && ($cursolunes->getEstado()==true))   echo $lunessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martessexta!= null)    && ($cursomartes->getEstado()==true))  echo $martessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolessexta!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevessexta!= null)    && ($cursojueves->getEstado()==true))  echo $juevessexta;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernessexta!= null)   && ($cursoviernes->getEstado()==true)) echo $viernessexta;  else { }?></td>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($luneseptima!= null)     && ($cursolunes->getEstado()==true))   echo $luneseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martesseptima!= null)    && ($cursomartes->getEstado()==true))  echo $martesseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolesseptima!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolesseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevesseptima!= null)    && ($cursojueves->getEstado()==true))  echo $juevesseptima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernesseptima!= null)   && ($cursoviernes->getEstado()==true)) echo $viernesseptima;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">4:05-4:50 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunesoctava!= null)     && ($cursolunes->getEstado()==true))   echo $lunesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martesoctava!= null)    && ($cursomartes->getEstado()==true))  echo $martesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolesoctava!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevesoctava!= null)    && ($cursojueves->getEstado()==true))  echo $juevesoctava;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernesoctava!= null)   && ($cursoviernes->getEstado()==true)) echo $viernesoctava;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">5:00-5:45 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunesnovena!= null)     && ($cursolunes->getEstado()==true))   echo $lunesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martesnovena!= null)    && ($cursomartes->getEstado()==true))  echo $martesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolesnovena!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevesnovena!= null)    && ($cursojueves->getEstado()==true))  echo $juevesnovena;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernesnovena!= null)   && ($cursoviernes->getEstado()==true)) echo $viernesnovena;  else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">6:00-6:30 PM</td>
        <td style="text-align:center;font-weight:normal"></td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Oración</td>
        <td style="text-align:center;font-weight:normal"></td>
        <td style="text-align:center;font-weight:normal;font-style:italic">Oración</td>
        <td style="text-align:center;font-weight:normal"></td>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes));     else if(($lunesdecima!= null)     && ($cursolunes->getEstado()==true))   echo $lunesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes));    else if(($martesdecima!= null)    && ($cursomartes->getEstado()==true))  echo $martesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)); else if(($miercolesdecima!= null) && ($cursomiercoles->getEstado()==true))  echo $miercolesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves));    else if(($juevesdecima!= null)    && ($cursojueves->getEstado()==true))  echo $juevesdecima;  else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes));   else if(($viernesdecima!= null)   && ($cursoviernes->getEstado()==true)) echo $viernesdecima;  else { }?></td>
    </tr>
</table>
