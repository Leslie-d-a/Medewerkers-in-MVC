<?php

function getAllEmployees(){
   try {
       $conn=openDatabaseConnection();
   
       $stmt = $conn->prepare("SELECT * FROM employees");

       $stmt->execute();

       $result = $stmt->fetchAll();

   }
   catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }

   $conn = null;

   return $result;
}

function getEmployee($id){
    try {
        $conn=openDatabaseConnection();
 
        $stmt = $conn->prepare("SELECT * FROM employees WHERE id = :id");
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 
    return $result;
 }

function createEmployee($data){
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("INSERT INTO employees (name,age) VALUES (:name,:age)");
        $stmt->bindParam(":name", $data[0]);
        $stmt->bindParam(":age", $data[1]);
        $stmt->execute();
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}


function updateEmployee($data, $id){
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("UPDATE employees SET name=:name, age=:age WHERE id=:id");
        $stmt->bindParam(":name", $data[0]);
        $stmt->bindParam(":age", $data[1]);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }

function deleteEmployee($id){
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("DELETE FROM employees where id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }


?>