
<br />
<table>
    <tr>
        <th class="header" style="background-color:#8989bb;color:#ffffff;text-align: center;font-weight: bold;" colspan="4">Instituto Practico EbenEzer <br />Departamento de Biblioteca</th>
    </tr>
    <tr>
        <th colspan="4">
            <table>
                <tr>
                    <td style="text-align:left;font-weight:normal">  <?php echo ($Book->getPicture()=="" ) ?  image_tag("/uploads/fotos/img.gif", array('alt' => 'Imagen del Book', 'size' => '480x320')):  image_tag("/uploads/fotos/".$Book->getPicture(), array('alt' => 'Imagen del Book', 'size' => '480x320')) ; ?></td>
                    Preview:
                </tr>
            </table>
        </th>
    </tr>
    <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Dewey Number <br />Before/New </th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Title of the Book</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Name of the author</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Volume</th>
    </tr>
    <tr>
    <th><?php echo $Book->getDeweyNumber()."<br/>". $Book->getDeweyen() ?></th>
        <th><?php echo $Book->getTitle()?></th>
            <th> <?php echo $Book->getName()?></th>
                <th> <?php echo $Book->getVolume()?></th>
    </tr>
    <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Publishing Year</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Publishing House</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">ISBN</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Numero of books</th>
    </tr>
    <tr>
    <th><?php echo $Book->getYear()?></th>
        <th><?php echo $Book->getPublishingHouse()?></th>
            <th> <?php echo $Book->getIsbn()?></th>
                <th> <?php echo $Book->getQuantity()?></th>
    </tr>
     <tr>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Primary Subject</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Secondary Subject</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Tertiary Subject</th>
        <th style="text-align:center;font-weight:bold;background-color:#8989bb;color:#ffffff;width:25%;">Heresy</th>
    </tr>
    <tr>
    <th><?php echo $Book->getPrimarySubject()?></th>
        <th><?php echo $Book->getSecondarySubject()?></th>
            <th> <?php echo $Book->getTertiarySubject()?></th>
                <th> <?php echo $Book->getHeresy()?></th>
    </tr>
</table>