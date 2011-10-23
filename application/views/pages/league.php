<div class="body">

    <br /><br /><br />

    <div class ="center">
        <h2> League </h2>

        <table border="1" class="table">
            <tr>
                <th>Institute</th>
                <th>Team</th>
                <th>Member1</th>
                <th>Member2</th>
            </tr>

            <?php
            $league = new SimpleXMLElement('data/comp4711-cis-teams.xml', null, true);

            foreach ($league as $teams)
            {
                echo <<<EOF
        <tr>
            <td>{$teams->group->institute} </td>
            <td>{$teams->group->team}</td>
            <td>{$teams->group->members->member}</td>
            <td>{$teams->group->members->member}</td>
        </tr>
EOF;
            }
            ?>
        </table>
    </div>


</div>