<?php
    define("TITLE","Team | Pizza Paradise");
    include('header.php');

?>

    <div id="team-members" class="cf">
    
        <h1>Our team at Pizza paradise</h1>
        <p>Pizza is probably the most perfect food there is But to make it perfect is where the art lies. At Pizza Pardise, we believe that the best slice is the one that captures all your senses and takes you through a gastronomical journey like no other.</p>
        
        <hr>
        
        <?php
        
            foreach ($teamMembers as $member){
        ?>
            
            <div class="member">
            
                <img src="<?php echo $member["img"];?>.jpg" alt="<?php echo $member["name"];?>">
                <h2><?php echo $member["name"];?></h2> 
                <p><?php echo $member["bio"];?></p>
            </div>
        <?php
            }
        ?>
        
    </div>

