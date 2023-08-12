<?php
function validateForm($name, $email, $number, $message, &$errors) {
    $errors = array();

   
    if (empty($name)) {
        $errors['name'] = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors['name'] = "Only letters and spaces allowed";
        }
    }

  
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
    }

    
    if (empty($number)) {
        $errors['number'] = "Telephone number is required";
    } else {
        if (!preg_match("/^\d{10}$/", $number)) {
            $errors['number'] = "Invalid telephone number format";
        }
    }
    return empty($errors);
}
?>
