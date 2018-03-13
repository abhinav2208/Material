<?php
    include 'excel_reader.php';       // include the class
    $excel = new PhpExcelReader;      // creates object instance of the class
    $excel->read('correct.xls');   // reads and stores the excel file data

    // Test to see the excel data stored in $sheets property
    echo '<pre>';
    //var_export($excel->sheets);
    echo '<table border = "1">';
    echo '<th>'; echo "Q.Id."; echo '</th>';
    echo '<th>'; echo "Questions"; echo '</th>';
    echo '<th>'; echo "Answers"; echo '</th>';
    for($i=1;$i<=183;$i++)
    {
        echo '<tr>';
        echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][1]));
        echo '</td>';
        echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][2]));
        echo '</td>';
        echo '<td>';
        if(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][1])==TRUE)
            echo "TRUE";
        else if(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][1])==FALSE)
            echo "FALSE";
        else
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][3]));
        echo '</td>';
        echo '</tr>';
    }
   echo '</table>';
   echo '</pre>';
?>
