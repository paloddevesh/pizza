<ul>
    <?php
        foreach($navItems as $items){
            echo"<li><a href=\"$items[slug]\">$items[title]</a></li>";
        }
    ?>
</ul>