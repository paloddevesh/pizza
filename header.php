<?php
$companyName = "Pizza paradise";
include('arrays.php');
?>

<html>
<head>
    <title><?php echo TITLE;?></title>
    <link href="/assets/styles.css" rel="stylesheet">
</head>

<body id="final-example">
    
    <div class="wrapper">
    
        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="logo.png" alt="Pizza Paradise" width="800">
            </a>
        </div><!-- banner-->
        
        <div id="nav">
                   <?php include('nav.php');?>
        </div><!-- nav-->
        
        <div class="content">