<nav>
    <?php
    // Print class name for active page

    print 'li';
    if (PATH_PARTS['filename'] == 'index') {
        print ' class=activePage';
    }
    print '><a href="index.php">Home</a>';

    print 'li';
    if (PATH_PARTS['filename'] == 'groups') {
        print ' class=activePage';
    }
    print '><a href="groups.php">DCI Groups</a>';

    print 'li';
    if (PATH_PARTS['filename'] == 'show-list') {
        print ' class=activePage';
    }
    print '><a href="show-list.php">List of Shows</a>';

    print 'li';
    if (PATH_PARTS['filename'] == 'votes') {
        print ' class=activePage';
    }
    print '><a href="votes.php">Voting Results</a>';

    print 'li';
    if (PATH_PARTS['filename'] == 'about-me') {
        print ' class=activePage';
    }
    print '><a href="about-me.php">About Me</a>';
    ?>
</nav>