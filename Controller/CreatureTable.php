<?php

echo"<table>
    <tr>
        <th>Monster Name</th>
        <th>Level</th>
        <th>Armour Rating</th>
        <th>Attack Rating</th>
        <th>Movment Rating</th>
        <th>Attacks</th>
    </tr>";
    for($index = 0; $index < count($creatureList); $index++)
    {
        echo"<tr>
            <td>{$creatureList[$index][0]}</td>
            <td>{$creatureList[$index][1]}</td>
            <td>{$creatureList[$index][2]}</td>
            <td>{$creatureList[$index][3]}</td>
            <td>{$creatureList[$index][4]}</td>
            <td>{$creatureList[$index][5]}</td>
        </tr>";
    }
    echo"</table>";



?>