<div>
<h2> Pintando select con un For</h2>
    <?php
     echo"<select> fo";
    $year = 2000;
    for ($i=0; $i <20 ; $i++) {
        echo"<option>{$year}</option>"
       ."\n";
       $year++;
    }
    echo  "</select>";?>
</div>

