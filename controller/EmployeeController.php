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
        header('location:' . URL . 'employee/index');
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
        header('location:' . URL . 'employee/index');
    }else{
        $employee = getEmployee($id);
        render('employee/update', ['employee'=>$employee, 'errors'=>$error]);
    }
}

function update(){
}

function delete($id){
    $employee = getEmployee($id);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        deleteEmployee($id);

        header('location:' . URL . 'employee/index');
    }
    render('employee/delete', ['employee'=>$employee]);
}

function destroy($id){
    
}
?>