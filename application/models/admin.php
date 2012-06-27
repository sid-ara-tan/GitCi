<?php

class Admin extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function userpass($post) {

        // echo 12111;
        $use = $post["id"];
        $pas = $post["password"];
        $query = $this->db->query("select * from admin where id='$use' and password='$pas'");




        return $query;
    }

    function alldata($user) {

        $query = $this->db->query("select * from admin where id='$user'");
        return $query;
    }

}
?>

