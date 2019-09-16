<?php
        echo ' <!DOCTYPE html> <html
    lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;

    };
    start_page('Test');

    function end_page ($title)
    {
        echo ' <!DOCTYPE html> <html
lang="fr"><hr><br><strong>' . PHP_EOL . $title . '</br></hr></strong><body>' . PHP_EOL
        ;
    };
    end_page ('Calculator');
    start_page("Calculator");
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

