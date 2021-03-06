<?php
/**
 * Header at the top of each page
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type='text/javascript' src='<?php echo NC_JS_PATH; ?>/networkcurator-includes.min.js'></script>        
        <script type='text/javascript' src='<?php echo NC_JS_PATH; ?>/networkcurator.min.js'></script> 
<?php
$firstname = $_SESSION['firstname'];
$middlename = $_SESSION['middlename'];
$lastname = $_SESSION['lastname'];
echo "<script>
nc.userid='$uid', 
nc.firstname='$firstname', 
nc.middlename='$middlename', 
nc.lastname='$lastname',
nc.network='$network',
nc.curator=". (int) ($upermissions >= NC_PERM_CURATE) . ",
nc.editor=". (int) ($upermissions >= NC_PERM_EDIT) .", 
nc.commentator=". (int) ($upermissions >= NC_PERM_COMMENT) . ";
</script>";
?>
        
        <link rel='stylesheet' href='<?php echo NC_INCLUDES_PATH; ?>/bootstrap-3.3.7/css/bootstrap.min.css'>        
        <link rel='stylesheet' href='<?php echo NC_CSS_PATH; ?>/nc-core.min.css'>     
        <link href="https://fonts.googleapis.com/css?family=Open Sans|Roboto:300,700" rel="stylesheet">
        <link href='<?php echo NC_UI_PATH; ?>/css/nc-ui.css' rel='stylesheet' type='text/css'>        
        <title>NetworkCurator <?php if ($network) echo ": " . $network; ?></title>
    </head>

    <body>
        <div id="page">
            <div class="container">                                
