<?php 
    $errors = Array();

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// if(isset($_GET['register'])){
//     echo "Form Submitted";
// }
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "GET Request";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Form Submitted<br>";
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $dob = $_POST['dob'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Name Validation
        $name = trim($name);
        if(!strlen($name) > 0){
            $errors['name_error'] = "Name is required";
        }else{
            $pattern = "/^[a-zA-Z ]+$/";
            if(!preg_match($pattern,$name)){
                $errors['name_error'] = "Name can't contain digits and special characters";
            }
        }


   
        echo $name." ".$email." ".$phone." ".$gender." ".$country." ".$dob." ".$password." ".$confirm_password;
        
        print_r($errors);
    }

    $title = "Register Page";
    $active = "register";
    require('includes/header.php'); 

    $countries = ["Nepal","India","China","Russia","Japan"];
?>

    <h1 style="text-align:center;">Register New Account</h1>
    <form style="width: 500px; background-color: #ccc; padding: 10px; margin: auto;" method="POST">
        Name : 
        <input type="text" name="name" id="name"><br>
        Email: <input type="text" name="email" id="email"><br>
        Phone: <input type="text" name="phone" id="phone"><br>
        Gender: <br>
        Male: <input type="radio" name="gender" id="male" value="male" checked>
        Female: <input type="radio" name="gender" id="female" value="female"><br>
        Country: 
        <select name="country" id="country">
            <option value="">Select a Country</option>
            <?php
                foreach($countries as $key => $value){
                    echo "<option value='$key'>$value</option>";
                }
            ?>
            <!-- <option value="nepal">Nepal</option>
            <option value="india">India</option> -->
        </select><br>
        Date of Birth: <input type="date" name="dob" id="dob"><br>
        Password: <input type="password" name="password" id="password"><br>
        Confirm Password: <input type="password" name="confirm_password" id="confirm_password">
        <br>
        <input type="submit" name="register" value="Register">
    </form>
    
<?php require('includes/footer.php'); ?>