<table>
<tr>
    <td>Header 1</td>
    <td>Header 2</td>
</tr>
<?php
    $fp = fopen ( "student.csv" , "r" );
    while (( $data = fgetcsv ( $fp , 10000 , "," )) !== FALSE ) {
        $i = 0;
        echo "<tr>";
        foreach($data as $row) {
           echo "<td>" . $row . "</td>";
           $i++ ;
        }
        echo "/<tr>";
    }
    fclose ( $fp );
    ?>
</table>