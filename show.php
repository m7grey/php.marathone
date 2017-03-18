<?php
    $apps = file('apps.txt');
    echo '<table>';

    foreach ($apps as $line){
//        2017-03-18 10:51:42-|-zgadfga-|-12345678234
        $arr = explode('-|-', $line);

        echo '<tr>';
        echo '<td>' . $arr . '</td>';
        echo '</tr>';
    };
    echo '</table>';
    ?>
//<table>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
