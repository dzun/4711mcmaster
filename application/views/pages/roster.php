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
    <table border="1">
        <tr>
            <th>Position</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Jersey</th>
        </tr>
        
<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load('data/MaraudersRoster.xml');
    $player = $xmlDoc->getElementsByTagName('player');
    //$first_name = $xmlDoc->getElementsByTagName('first_name');
    //$list_last_name = array();

    foreach ($player as $elem) {
        echo '<tr><td>';
        echo $elem->getElementsByTagName('number')
                -> item(0)
                ->nodeValue;
        echo '</td><td>';
        echo $elem->getELementsByTagName('last_name')
                ->item(0)
                ->nodeValue;
        echo '</td><td>';
        echo $elem->getElementsByTagName('first_name')
                -> item(0)
                ->nodeValue;
        echo '</td><td>';
        echo $elem->getElementsByTagName('position')
                -> item(0)
                ->nodeValue;
        echo '</td></tr>';
    
    
     ?>
    </table>
    <a href="http://www.marauders.ca/sports/2011/8/31/FB-2011-roster.aspx?path=football"
           target=_new>McMaster Roster</a>
    </div>

    <br /><br /><br />


</div>