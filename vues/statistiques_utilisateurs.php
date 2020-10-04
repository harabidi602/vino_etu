<?php
    //Transformer le résultat de Json en array 
    $arr = json_decode($data, true);?>
<div class="usager"><h4>Le nombre des nv usagers par mois</h4>
    <table>
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
                    <td data-column="mois"><span><?php  echo $month_name.' '.$item['year']; ?></span></td>
                    <td data-column="nbre_nv_usagers"><span><?php echo $item['nombreUsers']; ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
 </div>

    