
<br />
<table>
    <tr>
        <th class="header" style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="4">Instituto Practico EbenEzer <br />Departamento de Biblioteca</th>
    </tr>
    <tr>
        <th colspan="4">
            <table>
                <tr>

                    <td style="text-align:left;font-weight:normal">Foto:   <?php echo sprintf("%s / %s",   $Libro->getTitulo(),  $Libro->getTitulo()) ?></td>

                </tr>
            </table>
        </th>
    </tr>
    <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Dewey Number <br />Anterior/Nuevo </th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Titulo de la obra</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Autor del la obra</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Tomo</th>
    </tr>
    <tr>
	<th><?php echo $Libro->getDewey()?></th>
		<th><?php echo $Libro->getTitulo()?></th>
			<th> <?php echo $Libro->getNombreCompleto()?></th>
				<th> <?php echo $Libro->getTomo()?></th>
    </tr>
    <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Año de Publicación</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Editorial</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">ISBN</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Cantidad de libros</th>
    </tr>
    <tr>
	<th>Ab</th>
		<th>Ab</th>
			<th>Ab</th>
				<th>Ab</th>
    </tr>
     <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Tema Primario</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Tema Secundario</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Tema Terciario</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Herejia</th>
    </tr>
    <tr>
	<th>Ab</th>
		<th>Ab</th>
			<th>Ab</th>
				<th>Ab</th>
    </tr>
</table>