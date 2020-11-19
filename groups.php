<?php
include "top.php";
?>
<!-- Group display, print each group, their name, class, when they were founded, and where they're from -->
<body>
    <main>
        <h2>List of DCI groups that have competed in finals over the last 10 years.</h2>

        <?php
        $statement = 'SELECT
            `pmkGroupName`,
            `fldYearFounded`,
            `fldLocation`,
            `fldClass`
            FROM
            `tblGroup`';

        if ($thisDatabaseReader->querySecurityOk($statement,0,0,0,0,0)) {
            $query = $thisDatabaseReader->sanitizeQuery($statement);
            $records = $thisDatabaseReader->select($statement, "");
        }

        foreach ($records as $record) {
            print '<section>';
            print '<h3>' . $record["pmkGroupName"] . '</h3>';
            print '<p>From: ' . $record['fldLocation'] . ', founded in ' . $record['fldYearFounded'] . '</p>';
            print '<p>Competing in ' . $record['fldClass'] . ' class</p>';
        }

        ?>
        
    </main>
</body>
<?php
include "footer.php";
?>
