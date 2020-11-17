<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>DCI Shows Voting Site</title>
    <meta charset="utf-8">
    <meta name="author" content="Jake Ten Eyck">
    <meta name="description" content="A site for fans of DCI to vote on which shows of the past 10 years are their favorite.">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/custom.css?version=<?php print time();?>" type="text/css">

    <?php
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    //
    // Include all libraries
    //
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    print '<!-- begin including libraries -->';

    include 'lib/constants.php';

    include LIB_PATH . '/Connect-With-Database.php';

    print '<!-- libraries complete-->';
    ?>
</head>

<?php
include "header.php";
include "nav.php";
?>