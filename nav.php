<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
            print '<ul>';
            print '<li class="';
            if ($path_parts['filename'] == "home") {
                print ' activePage ';
            }
            print '">';
            print '<a href="home.php">Home</a>';
            print '</li>';
                
            
            
            
            
            
            print '<li class="';
            if ($path_parts['filename'] == "aftercare") {
                print ' activePage ';
            }
            print '">';
            print '<a href="aftercare.php">Aftercare</a>';
            print '</li>';
                
            
            
            
            /*
            
            
            
                
            print '<li class="';
            if ($path_parts['filename'] == "art") {
                print ' activePage ';
            }
            print '">';
                
            print '<a href="art.php">Art</a>';
            print '</li>';
                
            print '<li class="';
            if ($path_parts['filename'] == "contest") {
                print ' activePage ';
            }
            print '">';
            print '<a href="contest.php">Contest</a>';
            print '</li>';
            
            print '<li class="';
            if ($path_parts['filename'] == "form") {
                print ' activePage ';
            }
            print '">';
            print '<a href="form.php">Join</a>';
            print '</li>';
            
            print '<li class="';
            if ($path_parts['filename'] == "weather") {
                print ' activePage ';
            }
            print '">';
            print '<a href="weather.php">Weather</a>';
            print '</li>';
          */
            print '<ul>';
        ?>
    </ol>
</nav>



