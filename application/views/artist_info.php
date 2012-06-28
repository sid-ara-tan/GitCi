<html>
        <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>
        <div align="center">
        <p><?php  echo anchor('clientarea/home','Home'); ?></p>
        <?php
        if($infotype=='artist'){
            if($info==FALSE){
                echo "No track found";
            }else{
                foreach($info as $row){
                    echo "Name: ".$row->track_name;
                    echo "<br/>Info: ".$row->track_info;
                    echo "<br/>Price: ".$row->track_price;
                    echo "<hr/>";
                }
            }
        }else if($infotype=='track'){
            foreach($info as $row){
                echo "Name: ".$row->track_name;
                echo "<br/>Info: ".$row->track_info;
                echo "<br/>Price: ".$row->track_price;
                echo "<hr/>";
            }
        }else if($infotype=='album'){
            echo "page not created";
        }
        ?>
        </div>
    </body>
</html>

