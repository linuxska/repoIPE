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
        <?php $materiaslunes = array(); $cursolunes = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonLunes() as $cursolunes) : ?>
        <?php $obj = $cursolunes->getMateria() ?>
        <?php $obj->__setCurso($cursomartes); ?>
        <?php $materiaslunes[] =  $obj;?>
        <?php endforeach; ?>

        <?php $materiasmartes = array(); $cursomartes = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonMartes() as $cursomartes) : ?>
        <?php $obj = $cursomartes->getMateria() ?>
        <?php $obj->__setCurso($cursomartes); ?>
        <?php $materiasmartes[] =  $obj;?>
        <?php endforeach;  ?>

        <?php $materiasmiercoles = array(); $cursomiercoles = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonMiercoles() as $cursomiercoles) : ?>
        <?php $obj = $cursomiercoles->getMateria() ?>
        <?php $obj->__setCurso($cursomiercoles); ?>
        <?php $materiasmiercoles[] =  $obj;?>
        <?php endforeach;?>

        <?php $materiasjueves = array(); $cursojueves = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonJueves() as $cursojueves) : ?>
        <?php $obj = $cursojueves->getMateria() ?>
        <?php $obj->__setCurso($cursojueves); ?>
        <?php $materiasjueves[] =  $obj;?>
        <?php endforeach; ?>

        <?php $materiasviernes = array(); $cursoviernes = null; ?>
        <?php foreach ($salon->getCursosRelatedByIdSalonViernes() as $cursoviernes) : ?>
        <?php $obj = $cursoviernes->getMateria()  ?>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ; else if(($cursomartes->getMartesHoraInicio()=="08:00:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="08:00:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ; else if(($cursojueves->getJuevesHoraInicio()=="08:00:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ; else if(($cursoviernes->getViernesHoraInicio()=="08:00:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">8:55-9:40 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ; else if(($cursolunes->getLunesHoraInicio()=="08:55:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ; else if(($cursomartes->getMartesHoraInicio()=="08:55:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="08:55:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ; else if(($cursojueves->getJuevesHoraInicio()=="08:55:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ; else if(($cursoviernes->getViernesHoraInicio()=="08:55:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">9:50-10:35 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ; else if(($cursolunes->getLunesHoraInicio()=="09:50:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ; else if(($cursomartes->getMartesHoraInicio()=="09:50:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="09:50:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ; else if(($cursojueves->getJuevesHoraInicio()=="09:50:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ; else if(($cursoviernes->getViernesHoraInicio()=="09:50:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">10:35-11:55 AM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ; else if(($cursolunes->getLunesHoraInicio()=="10:35:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ; else if(($cursomartes->getMartesHoraInicio()=="10:35:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="10:35:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ; else if(($cursojueves->getJuevesHoraInicio()=="10:35:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ; else if(($cursoviernes->getViernesHoraInicio()=="10:35:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ;     else if(($cursolunes->getLunesHoraInicio()=="11:40:00")         && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ;    else if(($cursomartes->getMartesHoraInicio()=="11:40:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="11:40:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ;    else if(($cursojueves->getJuevesHoraInicio()=="11:40:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ;   else if(($cursoviernes->getViernesHoraInicio()=="11:40:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">12:35-1:20 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ;     else if(($cursolunes->getLunesHoraInicio()=="12:35:00")         && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ;    else if(($cursomartes->getMartesHoraInicio()=="12:35:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="12:35:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ;    else if(($cursojueves->getJuevesHoraInicio()=="12:35:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ;   else if(($cursoviernes->getViernesHoraInicio()=="12:35:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ;     else if(($cursolunes->getLunesHoraInicio()=="14:30:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ;    else if(($cursomartes->getMartesHoraInicio()=="14:30:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="14:30:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ;    else if(($cursojueves->getJuevesHoraInicio()=="14:30:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ;   else if(($cursoviernes->getViernesHoraInicio()=="14:30:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">4:05-4:50 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ;     else if(($cursolunes->getLunesHoraInicio()=="16:05:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ;    else if(($cursomartes->getMartesHoraInicio()=="16:05:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="16:05:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ;    else if(($cursojueves->getJuevesHoraInicio()=="16:05:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ;   else if(($cursoviernes->getViernesHoraInicio()=="16:05:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
    <tr>
        <td style="text-align:center;font-weight:normal">5:00-5:45 PM</td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ;     else if(($cursolunes->getLunesHoraInicio()=="17:00:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ;    else if(($cursomartes->getMartesHoraInicio()=="17:00:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles)) ; else if(($cursomiercoles->getMiercolesHoraInicio()=="17:00:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ;    else if(($cursojueves->getJuevesHoraInicio()=="17:00:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ;   else if(($cursoviernes->getViernesHoraInicio()=="17:00:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
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
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursolunes)) ;     else if(($cursolunes->getLunesHoraInicio()=="19:00:00")       && ($cursolunes->getEstado()==true))    echo $cursolunes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomartes)) ;    else if(($cursomartes->getMartesHoraInicio()=="19:00:00")       && ($cursomartes->getEstado()==true))    echo $cursomartes->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursomiercoles));  else if(($cursomiercoles->getMiercolesHoraInicio()=="19:00:00") && ($cursomiercoles->getEstado()==true)) echo $cursomiercoles->getMateria()->getNombre(); else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursojueves)) ;    else if(($cursojueves->getJuevesHoraInicio()=="19:00:00")       && ($cursojueves->getEstado()==true))    echo $cursojueves->getMateria()->getNombre();    else { }?></td>
        <td style="text-align:center;font-weight:normal"><?php if(empty($cursoviernes)) ;   else if(($cursoviernes->getViernesHoraInicio()=="19:00:00")     && ($cursoviernes->getEstado()==true))   echo $cursoviernes->getMateria()->getNombre();   else { }?></td>
    </tr>
</table>
