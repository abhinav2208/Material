<?php
    include 'excel_reader.php';       // include the class
    $excel = new PhpExcelReader;      // creates object instance of the class
    $excel->read('quiz.xls');   // reads and stores the excel file data

    // Test to see the excel data stored in $sheets property
    echo '<pre>';
    var_export($excel->sheets);
    /*echo '<table border = "1">';
    echo '<th>'; echo "S.No."; echo '</th>';
    echo '<th>'; echo "Question"; echo '</th>';
    echo '<th>'; echo "Answers"; echo '</th>';
    for($i=2;$i<=697;$i++)
    {
        echo '<tr>';
        echo '<td>';
            echo($i);
        echo '</td>';
        echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][6]));
        echo '</td>';
        if((float)$excel->sheets[0]['cells'][$i][13]>0)
        {
            echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][8]));
            echo '</td>';
        }
        if((float)$excel->sheets[0]['cells'][$i][14]>0)
        {
            echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][9]));
            echo '</td>';
        }
        if((float)$excel->sheets[0]['cells'][$i][15]>0)
        {
            echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][10]));
            echo '</td>';
        }
        if((float)$excel->sheets[0]['cells'][$i][16]>0)
        {
            echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][11]));
            echo '</td>';
        }
        if((float)$excel->sheets[0]['cells'][$i][17]>0)
        {
            echo '<td>';
            echo(str_replace("<", "&lt;", $excel->sheets[0]['cells'][$i][12]));
            echo '</td>';
        }
        echo '</tr>';
    }
   echo '</table>';*/
   echo '</pre>';
?>
