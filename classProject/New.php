<?php

/*Class*/
class TableReader {
    /*private array*/
    private $hotelArray;
    
    /*Constructor*/
    function __construct()
    {
        
        /*You did not specify how to connect so I am an using mysql_connect*/
        $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }

        if (!mysql_select_db("mydbname")) {
            echo "Unable to select mydbname: " . mysql_error();
            exit;
        }
        
        $sql = "SELECT *
                FROM   oti_hotel";
        
        $result = mysql_query($sql);
        
        if (!$result) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }
        
        if (mysql_num_rows($result) == 0) {
            echo "No rows found, nothing to print so am exiting";
            exit;
        }
        
        while ($row = mysql_fetch_assoc($result)) {
            $this->$hotelArray['hotel_name'] = $row["hotel_name"];
            $this->$hotelArray['hotel_address'] = $row["hotel_address"];
            $this->$hotelArray['hotel_website'] = $row["hotel_website"];
        }
        
        mysql_free_result($result);        
        mysql_close($link);
    }     
   
}

$tableReader = new TableReader();
?>
