<?php
include_once 'config/config.php';


class Database{
    public $host=HOST;
    public $user=USER;
    public $password=PASSWORD;
    public $database=DATABASE;

 public $link;
 public $error;
 public function __construct(){
    $this->Dbconnect();

 }


 public  function Dbconnect(){
  
    $this->link=mysqli_connect($this->host,$this->user, $this->password, $this->database);


    if(!$this->link){

         $this->error="Database connection failed";
         return false;



    }


 }

//insert data 
 public function insert_data($query){


$result=mysqli_query($this->link,$query) or die($this->link->error. __LINE__);



if($result){
   return $result;



}
else{

   return false;
}


 }

 //SELECT data for show data
 public function select_data($query){


   $result=mysqli_query($this->link,$query) or die($this->link->error. __LINE__);
   
   
   
   if( mysqli_num_rows($result)>0) {
      return $result;
   
   
   
   }
   else{
   
      return false;
   }
   
   
    }

    //update data
 public function update_Emply($query)
 {


   $result=mysqli_query($this->link,$query) or die($this->link->error. __LINE__);
   
   
   
   if($result){
      return $result;
   
   
   
   }
   else{
   
      return false;
   }
   
   
    }


    //Delete data
 public function delete_Emply($query)
 {


   $result=mysqli_query($this->link,$query) or die($this->link->error. __LINE__);
   
   
   
   if($result){
      return $result;
   
   
   
   }
   else{
   
      return false;
   }
   
   
    }


}



?>