<html>
    <body>
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
    </body>
</html>

