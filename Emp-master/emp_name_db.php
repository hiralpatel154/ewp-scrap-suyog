<?php
session_start();
$user = $_SESSION['empid'];
date_default_timezone_set('Asia/Kolkata');
$cur_date = date('m/d/Y h:i:s a', time());
include '../conn.php';

// Add Contractor
if (isset($_POST['submit'])) {
    $pay_code = $_POST['pay_code'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $team = $_POST['team'];
    $contractor = $_POST['contractor'];
    $doj = $_POST['doj'];
    $dob = $_POST['dob'];
    $rate = $_POST['rate'];
    $status = $_POST['status'];
    $doe = $_POST['doe'];

    $query = "SELECT MAX(id) as id FROM emp_name";
    $connect = sqlsrv_query($con, $query);
    $crow = sqlsrv_fetch_array($connect, SQLSRV_FETCH_ASSOC);
    $id = $crow['id'] + 1;

    $sql = "INSERT INTO emp_name (id,pay_code,name,department,team,contractor,doj,dob,rate,status,doe,isDelete,createdBy) values ('$id','$pay_code','$name','$department','$team','$contractor','$doj','$dob','$rate','$status','$doe','0','$user')";
    $result = sqlsrv_query($con, $sql);

    if ($result) {
        header('Location: emp_name.php');
        $_SESSION['insert'] = "Data Inserted Successfully";
    } else {
        print_r(sqlsrv_errors());
    }
}
// Delete Contractor
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "UPDATE emp_name SET isDelete = '1' where id=$id";
    $result = sqlsrv_query($con, $sql);

    if ($result) {
        header('Location:emp_name.php');
        $_SESSION['delete'] = "Data Deleted Successfully";
    } else {
        print_r(sqlsrv_errors());
    }
}

// Edit Contractor

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pay_code = $_POST['pay_code'];
    $department = $_POST['department'];
    $team = $_POST['team'];
    $contractor = $_POST['contractor'];
    $doj = $_POST['doj'];
    $dob = $_POST['dob'];
    $rate = $_POST['rate'];
    $status = $_POST['status'];
    $doe = $_POST['doe'];

    $sql = "UPDATE emp_name SET pay_code='$pay_code',name='$name', department='$department',team='$team',contractor='$contractor',doj='$doj',dob='$dob',rate='$rate',status='$status',doe='$doe',updatedAt='$cur_date', updatedBy='$user' where id='$id'";
    $result = sqlsrv_query($con, $sql);

    if ($result) {
        header('Location:emp_name.php');
        $_SESSION['update'] = "Data Updated Successfully";
    } else {
        print_r(sqlsrv_errors());
    }
}
?>