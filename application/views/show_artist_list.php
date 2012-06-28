<html>
    <body>
        <p>List of <?php echo $search; ?>s</p>
        <?php 
        if($list==FALSE){
            echo "$search not found";
        }
        else{
            foreach ($list as $row) {
                echo $row->artist_name."<br/>";
                
            }
        }
        ?>
        
    </body>
</html>
