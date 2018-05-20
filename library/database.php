<?php 
class Database
{
    public $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost","root","","adp") or die ();
        mysqli_set_charset($this->link,"utf8");
    }
    public function fetchsql( $sql )
    {
        $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn sql " .mysqli_error($this->link));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }
        return $data;
    } 
    public function fetchID($table , $id )
    {
        $sql = "SELECT * FROM {$table} WHERE id = $id ";
        $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn fetchID " .mysqli_error($this->link));
        return mysqli_fetch_assoc($result);
    }
    public function fetchOne($table , $query)
    {
        $sql  = "SELECT * FROM {$table} WHERE ";
        $sql .= $query;
        $sql .= "LIMIT 1";
        $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn fetchOne " .mysqli_error($this->link));
        return mysqli_fetch_assoc($result);
    }
    public function fetchAll($table)
    {
        $sql = "SELECT * FROM {$table} WHERE 1" ;
        $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }
        return $data;
    }
    
    

}   
?>