<div class="body">

    <br />

    <div class ="center">
        <h2>Schedule</h2>

        <br /><br />

        <table border="1" class="table">
            <tr>
                <th>Date</th>
                <th>Home team</th>
                <th>Score</th>
                <th>Away team</th>
                <th>Score</th>
                <th>Status</th>
                <th>Result</th>
            </tr>

            <?php
            $schedule = new SimpleXMLElement('data/MaraudersSchedule.xml', null, true);

            foreach ($schedule as $game)
            {
                echo <<<EOF
        <tr>
            <td>{$game['gamedate']} </td>
            <td>{$game->home['team']}</td>
            <td>{$game->home['score']}</td>
            <td>{$game->away['team']}</td>
            <td>{$game->away['score']}</td>
            <td>{$game->status}</td>
            <td>{$game->result}</td>
        </tr>
EOF;
            }
            ?>
        </table>
    </div>

    <br /><br />


</div>