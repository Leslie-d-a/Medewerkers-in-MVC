<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', ['employees'=>$employees]);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker

}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database

    //2. Bouw een url op en redirect hierheen

}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $employee = getEmployee($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('employee/update', ['employee'=>$employee]);
}

function update(){
    $employees = getAllEmployees();
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        updateEmployee(['id'=>$_POST['id'],'age'=>$_POST['age'],'name'=>$_POST['name']]);
    }
    $employees = getAllEmployees();
    //2. Bouw een url en redirect hierheen
    render('employee/index', ['employees'=>$employees]);
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    //1. Delete een medewerker uit de database

	//2. Bouw een url en redirect hierheen
    
}
?>