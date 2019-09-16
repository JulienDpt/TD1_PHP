<?php
include 'TD1.php';
include 'TD1Q2.php';
start_page("calculatrice");
$operateurs = '*+-/';
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
    echo'type="submit" name="action" value="'.$operateurs[$cpt].'"/>'.$operateurs[$cpt].'<br/>
        '."\n";}
echo '</form>';
end_page();
?>

