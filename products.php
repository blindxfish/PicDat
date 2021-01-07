
<?php 

function getStringBetween($str,$from,$to)
{
    $sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
    return substr($sub,0,strpos($sub,$to));
}

$dir_name = "./datages/";
$images = glob($dir_name."*.*");

?>

<div class="container-fluid">
 
<div style="height:100px">
    </div>
    
    <div class="row justify-content-md-center">
        <div class="container">
            <div class="col md-auto">
                    <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Go to Upload</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="height:10px">
    </div>
    
    <div class="row justify-content-md-center">
    <div class="container">
        <div class="col md-auto">
        
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Listing</div>
                    <div class="panel-body">
                    <div class="card-columns">
                    <?php
                    foreach($images as $image) { 

                        $price = getStringBetween($image, "---p-", "---l-");
                        $productname =  getStringBetween($image, "S-p-n-", "---t-");   //productname from S-p-n-   to  ---t-
                        $description =  getStringBetween($image, "---d-", "---p-"); 
                        $user = getStringBetween($image, "---u-", "."); 
                        $date = getStringBetween($image, "---t-", "---n-"); 
                        ?>
                        <div class="card">
                        <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $productname." for - $".$price; ?></h4>
                            <p class="card-text"><?php echo $description; ?></p>  
                            <p class="card-text"><small class="text-muted">uploaded by <?php echo $user." on date ".$date; ?></small></p>
                        </div>
                        </div>
                        
                        <?php
                        //var_dump($image);
                        //echo '<img src="'.$image.'" /><br />';
                    }
                    
                 ?></div>
                </div>
            </div>
        </div>
    </div>
    </div></div>
    
    