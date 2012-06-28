<html>
        <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>
        <div align="center">
        <p><?php  //echo anchor('clientarea/home','Home'); ?></p>
        <p>List of <?php echo $search; ?>s</p>
        <?php 
        if($list==FALSE){
            echo "$search not found";
        }
        else{
            foreach ($list as $row) {
                
                if($search=='artist'){
                    echo $row->artist_name."->";
                    echo anchor('search/getArtist/'.$row->artist_id,'artistinfo');
                }else if($search=='album'){
                    echo $row->album_name."->";
                    echo anchor('search/getAlbum/'.$row->album_id,'albuminfo');
                }else if($search=='track'){
                    echo $row->track_name."->";
                    echo anchor('search/getTrack/'.$row->track_id,'trackinfo');
                }
                echo "<br/>";
            }
        }
        ?>
        </div>
        
    </body>
</html>
