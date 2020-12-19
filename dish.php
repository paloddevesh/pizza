<?php
    
    define("TITLE", "Menu Item");
    
    include('header.php');
    
    function strip_bad_chars($input){
        $output = preg_replace("/[^a-zA-Z0-9_-]/","",$input);
        return $output;
    }
    if(isset($_GET['item'])) {
        $menuItem = strip_bad_chars($_GET['item']);
        
        $dish =$menuItems[$menuItem];
    }
    
    //calculate suggested tip
    function suggestedTip($price,$tip){
        
        $totalTip =$price *$tip;
        echo money_format('%2n',$totalTip);
    }
?>

<hr>
    
    <div id="dish">
    
        <h1><?php echo $dish["title"];?><span class="price"><sup>Rs.</sup><?php echo $dish["price"];?></span></h1>
        <p><?php echo $dish["blurb"];?></p>
        
        <br>
        
        <p><strong>Suggested beverage: <?php echo $dish["drink"];?></strong></p>
        
    </div>
    
   <hr>
   
   
   
   <?php include('footer.php'); ?>