<?php

// function that takes an array and prints out elements as data rows
function row_from_array($data) {
    echo '<tr>';
    foreach ($data as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '<tr>';
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
   
    <div class="overflowTable">
        <?php var_dump($result); ?>
         <table border="1" class="table">
            <tr>
                <th>Position</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Jersey</th>
            </tr>
            <?php

            foreach ($result as $player => $one_player) {
                    row_from_array($one_player);
            }
            ?>
        </table>
    </div>

    <br /><br /><br />


</div>