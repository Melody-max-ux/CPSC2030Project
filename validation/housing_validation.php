<?php 

// global variable that keeps track of whether all field are valid or not. If any field is invalid, this should be set to false.
$valid = true;

// validate the given $field. If invalid, echo an error message and set $valid to false.
function the_error_message($field) {
    global $valid;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        switch ($field){
            case 'email':
                if(isset($_POST['email'])){
                    $email = trim($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo '<span class="server-side-error">invalid email address.</span>';
                        $valid = false;
                    }
                }else{
                    echo '<span class="server-side-error">invalid email address.</span>';
                    $valid = false;
                }
                break;
            case 'area':
                if (isset($_POST['area'])) {
                    $area = trim($_POST['area']);
                    if (!is_numeric($area) || $area <= 0) {
                        echo '<span class="server-side-error">Area must be a positive number.</span>';
                        $valid = false;
                    }
                } else {
                    echo '<span class="server-side-error">Area is required.</span>';
                    $valid = false;
                }
                break;
    
            case 'price':
                if (isset($_POST['price'])) {
                    $price = trim($_POST['price']);
                    if (!is_numeric($price) || $price <= 0) {
                        echo '<span class="server-side-error">Price must be a positive number.</span>';
                        $valid = false;
                    }
                } else {
                    echo '<span class="server-side-error">Price is required.</span>';
                    $valid = false;
                }
                break;
    
            case 'address':
                if (isset($_POST['address'])) {
                    $address = trim($_POST['address']);
                    if (empty($address)) {
                        echo '<span class="server-side-error">Address is required.</span>';
                        $valid = false;
                    }
                } else {
                    echo '<span class="server-side-error">Address is required.</span>';
                    $valid = false;
                }
                break;
        }
    }
}