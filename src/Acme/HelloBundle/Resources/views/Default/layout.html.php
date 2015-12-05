<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Hello Application') ?></title>
    </head>
    <body>
        <?php //$view['slots']->output('_content') ?>


<?php

/*
echo'<pre>';
print_r($pagination);
echo'</pre>';
*/


// Retrieves an item by its path in the main menu
$item = $view['knp_menu']->get('AcmeHelloBundle:Builder:mainMenu');

// Render an item
echo $view['knp_menu']->render($item, array(), 'list');

foreach ($pagination as $faction)
{
    echo '<table width ="100%">';
    echo '<th>name</th><th>Bank</th><th>Xp</th><th>totalMembers</th><th>totalMoney</th>';
    foreach ($faction as $group)
    {
        echo '<tr>';
        if (!isset ($group['fid']))
        {
            //   var_dump(isset($group['title'])); 
            echo '<td>';
            echo $group['title']. '<br/>';
            echo '</td>'; 
            echo '<td>';
            echo $group['gid']['totalBank'] . '<br/>';
            echo '</td>'; 
            echo '<td>';
            echo $group['gid']['totalXp'] . '<br/>';
            echo '</td>';
            echo '<td>';
            echo $group['gid']['totalMembers']. '<br/>';
            echo '</td>';
            echo '<td>';
            echo $group['gid']['totalMoney']. '<br/>';
            echo '</td>';
            echo '</tr>';
        }
    }
    echo '<tr>';
    echo '<td>';
    echo ( $faction['fid']);
    echo '</td>';
    echo '<td>';
    echo ( $faction['factiontotalBank']);
    echo'<br/>'; 
    echo '</td>';
    echo '</tr>';
    echo '</table><br/><br/><br/>';  
}
?>
    </body>
</html>
