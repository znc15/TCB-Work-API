<?php
include($_SERVER['DOCUMENT_ROOT']."/.config/datebase.php");

function GetServiceName($conn,$id) {
  $sql ="SELECT * from api_name where id='$id';";
  if ($conn->query($sql) != true) {
  //若不可靠则返回False
    return array ("success"=>false,"message"=>"Can not connect to the database $conn->error");
  }

  $SqlResult=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($SqlResult);
  return array ("success"=>true,"data"=>["name"=>$row['name'],"uri"=>$row['uri'],"id"=>$row['id']]);
}

function GetSqlData($conn) {
    $sql ="SELECT * from api_name";
    if ($conn->query($sql) != true) {
    //若不可靠则返回False
      return array ("success"=>false,"message"=>"Can not connect to the database $conn->error");
    }
  
    $SqlResult=mysqli_query($conn,$sql);
    return $SqlResult;
  }