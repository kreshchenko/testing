<?php
class Model_Main extends Model
{
    public function get_data()
    {
        $mysqli = new mysqli('localhost', 'dbuser', '123', 'first_sg');
        $mysqli->set_charset('utf8');
        $data = $mysqli->query('SELECT * FROM main');

        return $data;
    }
}


?>