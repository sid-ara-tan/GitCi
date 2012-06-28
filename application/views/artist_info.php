<html>
    <body>
        <?php
        if($infotype=='artist'){
            foreach($info as $row){
                echo "Name: ".$row->track_name;
                echo "<br/>Info: ".$row->track_info;
                echo "<br/>Price: ".$row->track_price;
                echo "<hr/>";
            }
        }
        ?>
    </body>
</html>

