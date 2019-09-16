<?php
    include 'TD1Q2.php';
    end_page ('Calculator');
    start_page("Calculator");
    $operator = '*+-/';
echo '
    <form action = "calcul.php" method = "get">
    <input type = "text" name = "op1" ><br>
    <input type = "text" name = "op2" ><br>';
for($cpt=0;$cpt<=3;++$cpt)
{
    echo '<input ';
    if($cpt==0)
    {
        echo'checked = "checked"';
    }
    echo'type="radio" name="action" value="'.$operator[$cpt].'"/>'.$operator[$cpt].'<br/>
        '."\n";}
echo '</form>';
    echo '<input type="submit" name="submit">'
?>

