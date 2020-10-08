 <section class="usager"  vertical layout>
<?php
    //Transformer le résultat de Json en array 
    $arr = json_decode($data, true);?>
<div>
    <table>
        <h4>Le nombre des nv usagers par mois</h4>
        <thead>
            <tr>
                <th>Mois</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) :  ?>
                <tr>
                    <?php $month_name = date('F', mktime(0, 0, 0, $item['MONTH']));?>
                    <td data-column="Mois"><span><?php  echo $month_name.' '.$item['year']; ?></span></td>
                    <td data-column="Nombre"><span><?php echo $item['nombreUsers']; ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>   
</div>
<div>
    <table>
       <h4>Les nombres d'usager et de cellier</h4>
        <thead>
            <tr>
                <th>Nombre d'usager</th>
                <th>Nombre de cellier</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($nbUsager as $nb): ?>
             <td data-column="Nombre d'usagers"><?php echo $nb;?></td>
            <?php endforeach; ?>
             <?php foreach ($nbCellier as $nb): ?>
             <td data-column="Nombre de celliers"><?php echo $nb;?></td>
            <?php endforeach; ?>      
        </tbody>
    </table> 
</div>
<div>
    <table >
       <h4>Le nombre de cellier par usager</h4>
        <thead>
            <tr>
                <th>Usager</th>
                <th>Nombre de cellier</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($celUsager as $cU) : ?>
                <tr>
                    <td data-column="Usager"><span><?php echo $cU['usager']; ?></span></td>
                    <td data-column="Nombre de celliers"><span><?php echo $cU['nombre']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
 </div>
</section> 

    