<div class="body">

    <br />

    <div class ="center">
        <h2> League </h2>

        <form action="/league" method="post">
            <select name="displayBy">
                <option value="-1">Display by:</option>
                <option value="league">League</option>
                <option value="conference">Conference</option>
            </select>
            <input type="submit" value="Submit"/>
        </form>
        
        <div class="overflowTable">
            <?php
            $projects = new SimpleXMLElement
                            ('data/comp4711-cis-teams.xml', null, true);

            
            if ($displayType == null || $displayType == '')
                $displayType = "league";

            $table = <<<TABLE
                    <table border="1" class="table">
                        <tr>
                            <th>Institute</th>
                            <th>Team</th>
                            <th>Member 1</th>
                            <th>Member 2</th>
                        </tr>
TABLE;

            if ($displayType == "league")
            {
                echo $table;
                foreach ($projects->teams->group as $group)
                {
                    echo <<<LEAGUE
                        <tr>
                            <td>
                                {$group->institute}
                            </td>
                            <td>
                                <a href="{$group->website}" target=_new>
                                    {$group->team}
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{$group->members->member['email']}">
                                    {$group->members->member[0]}
                                </a>
                            </td>
                            <td>
                                {$group->members->member[1]}
                            </td>
                        </tr>
LEAGUE;
                }
                echo '</table>';
            } elseif ($displayType == "conference")
            {
                echo '<h3>Atlantic University</h3>';
                echo $table;
                foreach ($projects->teams->group as $group)
                {
                    if ($group->team['conf'] == "AUS")
                    {
                        echo <<<CONF
                        <tr></tr>
                        <tr>
                            <td>
                                {$group->institute}
                            </td>
                            <td>
                                <a href="{$group->website}" target=_new>
                                    {$group->team}
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{$group->members->member['email']}">
                                    {$group->members->member[0]}
                                </a>
                            </td>
                            <td>
                                {$group->members->member[1]}
                            </td>
                        </tr>
CONF;
                    }
                }
                echo '</table>';
                echo '<h3>Quebec University</h3>';
                echo $table;
                foreach ($projects->teams->group as $group)
                {
                    if ($group->team['conf'] == "RSEQ")
                    {
                        echo <<<CONF
                        <tr>
                            <td>
                                {$group->institute}
                            </td>
                            <td>
                                <a href="{$group->website}" target=_new>
                                    {$group->team}
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{$group->members->member['email']}">
                                    {$group->members->member[0]}
                                </a>
                            </td>
                            <td>
                                {$group->members->member[1]}
                            </td>
                        </tr>
CONF;
                    }
                }
                echo '</table>';
                echo '<h3>Ontario University</h3>';
                echo $table;
                foreach ($projects->teams->group as $group)
                {
                    if ($group->team['conf'] == "OUA")
                    {
                        echo <<<CONF
                        <tr>
                            <td>
                                {$group->institute}
                            </td>
                            <td>
                                <a href="{$group->website}" target=_new>
                                    {$group->team}
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{$group->members->member['email']}">
                                    {$group->members->member[0]}
                                </a>
                            </td>
                            <td>
                                {$group->members->member[1]}
                            </td>
                        </tr>
CONF;
                    }
                }
                echo '</table>';
                echo '<h3>Canada West</h3>';
                echo $table;
                foreach ($projects->teams->group as $group)
                {
                    if ($group->team['conf'] == "WEST")
                    {
                        echo <<<CONF
                        <tr>
                            <td>
                                {$group->institute}
                            </td>
                            <td>
                                <a href="{$group->website}" target=_new>
                                    {$group->team}
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{$group->members->member['email']}">
                                    {$group->members->member[0]}
                                </a>
                            </td>
                            <td>
                                {$group->members->member[1]}
                            </td>
                        </tr>
CONF;
                    }
                }
                echo '</table>';
            }
            ?>

        </div>
    </div>


</div>