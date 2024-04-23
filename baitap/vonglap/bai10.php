<?php
// Ve chu A
for ($row=0; $row <= 7; $row++) { 
    for ($col=0; $col <= 7; $col++) { 
        if ((($col == 1 or $col == 5) and $row != 0) or (($row == 0 or $row == 3) and ($col > 1 and $col < 5))) {
           echo "*";
        } else {
           echo " ";
        }
    }
    echo '<br>';
}