<?php
session_start();
include('../conn.php');
$user = $_SESSION['empid'];
$date = date('m/d/Y h:i:s a', time());

if (isset($_POST['submit'])) {
    $month = $_POST['month'];
    $basic = $_POST['basic'];
    $id = $_POST['id'];
    $paycode = $_POST['paycode'];
    $hra = $_POST['hra'];
    $allowance = $_POST['allowance'];
    $ot = $_POST['ot'];
    $salary = $_POST['salary'];

        foreach ($paycode as $key => $value) {
            if ($id[$key] == '') {
                $sql = "INSERT INTO attendance(month,paycode,basic,hra,allowance,ot,salary,createdBy) VALUES('$month','" . $value . "','" . $basic[$key] . "','" . $hra[$key] . "','" . $allowance[$key] . "','" . $ot[$key] . "','" . $salary[$key] . "','$user')";
                $run = sqlsrv_query($con, $sql);

                if ($run) {
                    header('Location:attendance_sheet.php');
                    $_SESSION['insert'] = "Data Inserted Successfully";
                } else {
                    print_r(sqlsrv_errors());
                }
            } else {
                $query = "UPDATE attendance SET basic='$basic[$key]',hra='$hra[$key]',allowance='$allowance[$key]',ot='$ot[$key]',salary='$salary[$key]',updatedBy='$user', updatedAt='$date' where id='$id[$key]' and paycode='$value'";
                $qrun = sqlsrv_query($con, $query);
                if ($qrun) {
                    header('Location:attendance_sheet.php');
                    $_SESSION['update'] = "Data Updated Successfully";
                } else {
                    print_r(sqlsrv_errors());
                }
            }

        }
    
}

?>