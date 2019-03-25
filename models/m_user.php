<?php 
function validateLogin() {
    include 'connection.php';
    if(isset($_POST['but_submit'])){

        $uname = mysqli_real_escape_string($connection,$_POST['txt_uname']);
        $password = mysqli_real_escape_string($connection,$_POST['txt_pwd']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($connection,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('location:index.php?action=view');
            }else{
                header('location:index.php?action=login');
            }
        }
    }
}


function m_get_users() {
    $query = "SELECT * FROM user";
    include 'connection.php';
    $result = mysqli_query($connection, $query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0) {
        while($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $get_result_to_array;
        }
    }
    return $rows;
}