<html>
    <body>
        <?php
        $this->load->model('track');
        $info=$this->track->getTrackByArtist($artist_id);
        foreach($info as $row){
            echo "Name: ".$row->track_name;
            echo " Info: ".$row->track_info;
            echo " Price: ".$row->track_price;
            echo "<br/>";
        }
        ?>
    </body>
</html>

