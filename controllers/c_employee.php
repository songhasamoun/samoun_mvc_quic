<?php 
$data = array();
flexible_function($data);

function flexible_function(&$data) {
    $function = 'login';
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

function login(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'employee/view';
        $data['employee_data'] = m_get_data();
    }
}

function view(&$data){
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['employee_data'] = m_get_data();
        $data['page'] = 'employee/view';
    }
}
function add(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'employee/add';
    }
}

function update(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'employee/update';
        $data['employee_data'] = m_getupdate_data();
    }
}

function viewdetail(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'employee/viewdetail';
    }
}

function insert_data(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data = m_insert_data();
        if($data > 0) {
            header('location:index.php?action=view');
        }
    }
}

function delete_data(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data_delete = m_delete_data();
        if( $data_delete) {
            $action = 'view';
        }else {
            echo "Can't delete";
        }
        header('location:index.php?action='.$action);
    }
}

function update_data(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $id = $_GET['id'];
        $data = m_edit_data();
        if($data) {
            $action = "view";
        }else {
            $action = "update&$id";
        }
        header('location:index.php?action='.$action);
    }
}   

function loginValidation(&$data) {
    validateLogin();
}

function logout(&$data) {
    session_destroy();
    header('location:index.php?action=login');
}
function createUser(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'users/addUser';
    }
    
}

function viewUser(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'users/viewUser';
        $data['users'] = m_get_users();
    }
    
}
function insert_user(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data = m_insert_user();
        if($data) {
            header('location:index.php?action=login');
        }
    }
    
}
function getUpdate(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data['page'] = 'users/updateUser';
        $data['user'] = m_getupdate_user();
    }
}

function updateUser(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data = m_edit_user();
        if($data) {
            header('location:index.php?action=viewUser');
        }
    }
}
function deleteUser(&$data) {
    if(!isset($_SESSION['uname'])){
        $data['page'] = 'login';
    }else {
        $data = m_delete_user();
        if($data) {
            header('location:index.php?action=viewUser');
        }
    }
}