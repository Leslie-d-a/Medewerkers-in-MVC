<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    $employees = getAllEmployees();
    render('employee/index', ['employees'=>$employees]);
}

function create(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $check = true;
        foreach($_POST['data'] as $id=>$value){
            $employee[$id] = $value;
            if(empty($value)){
                $check = false;
                $error[$id] = "* Veld mag niet leeg zijn.";
            }
        }
    }
    if($check){
        CreateEmployee($_POST['data']);
        $employees = getAllEmployees();
        render('employee/index', ['employees'=>$employees]);
    } else{
        render('employee/create', ['employee'=>$employee, 'errors'=>$error]);
    }
}

function store(){
}

function edit($id){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $check = true;
        foreach($_POST['data'] as $index=>$value){
            $employee[$index] = $value;
            if(empty($value)){
                $check = false;
                $error[$index] = "* Veld mag niet leeg zijn.";
            }
        }
    }
    if($check){
        UpdateEmployee($employee, $id);
        $employees = getAllEmployees();
        render('employee/index', ['employees'=>$employees]);
    }else{
        $employee = getEmployee($id);
        render('employee/update', ['employee'=>$employee, 'errors'=>$error]);
    }
}

function update(){
}

function delete($id){
    $employee = getEmployee($id);
    render('employee/delete', ['employee'=>$employee]);
}

function destroy($id){
    
}
?>