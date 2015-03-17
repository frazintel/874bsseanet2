<?php
if (file_exists('__config/config.xml')) {
$config = simplexml_load_file('__config/config.xml');}
include_once("inc/head.php");
include_once("inc/menu.php");
?>

<div class="row">
    <?php
   include("inc/left.php");

    ?>
    <div class="col-lg-12 col-md-12">
        <?php
         if ($config->showsplayer == '1') {
            include("__live/live.php.html");
        }
        ?>
    </div>


        <div id="content" class="col-lg-12 col-md-12">
<?php

if ($config->showslider == '1') {
    include("inc/topslider.php");
}
?>

        </div>
    <?php if($config->album == '1') {?>
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Albums</h3>
            </div>
            <div class="panel-body" >


                <div class="col-lg-12 ">
                    <?php
                    if (file_exists('__data/album.xml')) {
                        $xml = simplexml_load_file('__data/album.xml');

                        foreach($xml as $x)
                        {

                            echo "<div class='col-lg-2 col-md-3 col-sm-4 col-xs-6  ' style='margin-bottom: 10px;'>


    <center id='shadow' ><img  class=' img-responsive' src='{$x->image}' alt=''/>
    <div class='row text-center '>{$x->title}</div></center>
</div>";
                        }
                    } else {
                        exit('Failed to open test.xml.');
                    }


                    ?>



                </div>


            </div>
        </div>




    </div><?php }?>

        <div class="col-lg-12 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequuntur est quidem quod ratione! Assumenda eveniet facere iusto magni, officiis quibusdam reiciendis voluptas. Ad dolorem dolorum eum ex quia, sunt!
</div>
    <?php

     include_once("inc/right.php");
    include_once("inc/foot.php");

    ?>
    <!--Live Telecast 3 Jamad Us Sani, 24 March 2015 From Talagang-->