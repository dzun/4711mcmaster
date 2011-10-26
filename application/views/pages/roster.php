<?php

// function that takes an array and prints out elements as data rows
function row_from_array($data)
{
    echo '<tr>';
    foreach ($data as $cell)
    {
        echo '<td>' . $cell . '</td>';
    }
    echo '<tr>';
}

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0)
    {
        foreach ($array as $k => $v)
        {
            if (is_array($v))
            {
                foreach ($v as $k2 => $v2)
                {
                    if ($k2 == $on)
                    {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else
            {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order)
        {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v)
        {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
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
            <?php //var_dump($result); ?>
        <table border="1" class="table">
            <tr>
                <th>Position</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Jersey</th>
            </tr>
<?php
$sorted_array = array_sort($result, 'first_name', SORT_ASC);
            foreach ($sorted_array as $player => $one_player) {
                    row_from_array($one_player);
            }
?>
        </table>
    </div>

    <br /><br /><br />


</div>