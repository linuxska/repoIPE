<?php use_stylesheet('preinscripcion.css') ?>

<?php slot('title', 'ITC :: DGTYV :: CI :: Preinscripción al Centro de Idiomas del ITCelaya.') ?>
<?php 
	$data = array();
	foreach($datos as $var){
	$data[]=$var;
	}
?>
<div class="navbar">
    <ul>
        <li><a href="#requisitos">Requisitos</a></li>
        <li><a href="#formatos">Formatos</a></li>
        <li><a href="#costos">Costos</a></li>
        <li><a href="#idiomas">Idiomas</a></li>
        <li><a href="#periodos">Periodos</a></li>
        <li><a href="#preinscripcion">Preinscripción</a></li>
        <li><a href="#solicitud">Solicitud de cursos</a></li>
    </ul>
</div>

<div id="text">
    <h1>Bienvenido al Centro de Idiomas <br />del Instituto Tecnológico de Celaya</h1>

    <div class="block">
        <div class="left" id="requisitos">
 	     <?php echo $data[0]->getTitle(ESC_RAW); ?>
	     <?php echo $data[0]->getContent(ESC_RAW); ?>
        </div>
        <div class="right" id="formatos">
	     <?php echo $data[1]->getTitle(ESC_RAW); ?>
	     <?php echo $data[1]->getContent(ESC_RAW); ?>
        </div>
    </div>
    <div class="block" id="costos">
       	     <?php echo $data[2]->getTitle(ESC_RAW); ?>
	     <?php echo $data[2]->getContent(ESC_RAW); ?>
        <div class="left">
        </div>
    </div>
    <div class="block">
        <div class="left" id="idiomas">
             <?php echo $data[3]->getTitle(ESC_RAW); ?>
	     <?php echo $data[3]->getContent(ESC_RAW); ?>
        </div>
        <div class="right" id="periodos">
             <?php echo $data[4]->getTitle(ESC_RAW); ?>
	     <?php echo $data[4]->getContent(ESC_RAW); ?>
 
        </div>
    </div>
    <div class="block">
             <?php echo $data[5]->getTitle(ESC_RAW); ?>
	     <?php echo $data[5]->getContent(ESC_RAW); ?>

	     <?php echo $data[6]->getTitle(ESC_RAW); ?>
	     <?php echo $data[6]->getContent(ESC_RAW); ?>
    </div>
</div>
