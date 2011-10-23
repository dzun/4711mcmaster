<?php

function comp($a, $b)
{
    return $b->first_name - $a->first_name;
}
?>
<div class="body">
    
    <br />
    
    <div class ="center">
        <h2> Roster </h2>
        <form action="/roster" method="post">
            <select name="sortby">
                <option value="-1">Sort by:</option>
                <option value="name">Player name</option>
                <option value="jersey">Jersey</option>
                <option value="position">Position</option>
            </select>
            <input type="submit" value="Submit"/>
        </form>
    </div>
    
    <div class="rosterTable">
         <table border="1" class="table">
            <tr>
                <th>Position</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Jersey</th>
            </tr>

            <?php
            $players = new SimpleXMLElement('data/MaraudersRoster.xml', null, true);

            foreach ($players as $player)
            {
                echo <<<EOF
        <tr>
            <td>{$player->number} </td>
            <td>{$player->last_name}</td>
            <td>{$player->first_name}</td>
            <td>{$player->position}</td>
        </tr>
EOF;
            }
            ?>
        </table>
    </div>

    <br /><br /><br />


</div>