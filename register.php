<?php

include_once 'lib/database.php';

class Register {

public $db;

public function __construct()
{


   $this->db = new Database();
 }




public function addRegister($data, $files){


$name= $data['Username'];
$email= $data['email'];
$phone= $data['phone'];
$address= $data['address'];

$imgpermit= array('jpg', 'jpeg','png', 'gif');

$file_name= $files['image']['name'];
$file_size=$files['image']['size'];
$file_temp=$files['image'] ['tmp_name'];

$div= explode('.',$file_name);
$file_ext=strtolower(end($div));
$unique_img=substr(md5(time()),0,10).'.'.$file_ext;

$upload_image="uploadimage/".$unique_img;




if(empty($name)|| empty($email) || empty($phone) || empty($address) || empty($file_name))

{
  $msg="Filds must not be empty";

  return $msg;


} 
elseif($file_size>=1048567){
  $msg="File Size Must Be Less then or equal 1MB ";

  return $msg;


}
elseif(in_array($file_ext ,$imgpermit)== false){
  $msg="you can only upload image type: ".implode(',', $imgpermit);

  return $msg;
}
else{


  move_uploaded_file($file_temp,$upload_image);
  $query= "INSERT INTO `tblemployee`( `Name`, `Email`, `Phone`, `Image`, `Address`) VALUES ('$name','$email','$phone','$upload_image','$address')";

  $result=$this->db->insert_data($query);

}
if($result){
  $msg="New Employee Add successfully";
  return $msg;
}

else{

  $msg="something worng plz try again ";
  return $msg;

}


}







public function viewAllemployees()
{

  $query= "SELECT *FROM tblemployee ";
  $result=$this->db->select_data($query);
  return $result;


}



public function getemploy($id)
{

  $query= "SELECT *FROM tblemployee where id='$id'";
  $result=$this->db->select_data($query);
  return $result;
}





public function update_Emply($data, $files ,$id)
{
            $name= $data['Username'];
            $email= $data['email'];
            $phone= $data['phone'];
            $address= $data['address'];

            $imgpermit= array('jpg', 'jpeg','png', 'gif');

            $file_name= $files['image']['name'];
            $file_size=$files['image']['size'];
            $file_temp=$files['image'] ['tmp_name'];

            $div= explode('.',$file_name);
            $file_ext=strtolower(end($div));
            $unique_img=substr(md5(time()),0,10).'.'.$file_ext;

            $upload_image="uploadimage/".$unique_img;




        if(empty($name)|| empty($email) || empty($phone) || empty($address) || empty($file_name))

        {
          $msg="Filds must not be empty";

          return $msg;


        }
          if (!empty($file_name))
          {

              if($file_size>=1048567){
                $msg="File Size Must Be Less then or equal 1MB ";
      
                return $msg;
      
      
              }
                elseif(in_array($file_ext ,$imgpermit)== false){
                  $msg="you can only upload image type: ".implode(',', $imgpermit);
      
                  return $msg;
                }
                else{
      
      
                  move_uploaded_file($file_temp,$upload_image);
                  
                      $query=" UPDATE tblemployee SET Name='$name', Email='$email', Phone='$phone' Image='$upload_image' Address='$address' WHERE id='$id'";


                  $result=$this->db->update_Emply($query);
      
                }
      
                if($result){
                  $msg="Employee Update successfully";
                  return $msg;
                }
      
                else{
      
                  $msg="something worng plz try again ";
                  return $msg;
      
                }
      
      

          }
          else{
                $query=" UPDATE tblemployee SET Name='$name', Email='$email', Phone='$phone',  Address='$address' WHERE id='$id'";


                      $result=$this->db->update_Emply($query);
          
                    
          
                    if($result){
                      $msg="Employee Update successfully";
                      return $msg;
                    }
          
                    else{
          
                      $msg="something worng plz try again ";
                      return $msg;
          
                    }
      




              }

        
  }
  // Delete Employee

  public function  del_emply($id){
    $del_query=" DELETE FROM tblemployee WHERE id='$id'";

    $del=$this->db->delete_Emply($del_query);
    
    if($del){
      $msg="Employee Delete successfully";
      return $msg;
    }

    else{

      $msg="something worng plz try again ";
      return $msg;

    }




  }




}







?>