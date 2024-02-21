<?php 
    $title = "Register Page";
    $active = "register";
    require('includes/header.php'); 

    $country = [
        "nepal" => "Nepal",
        "india" => "India"
    ];
?>

<h1>Register New Account</h1>
    <form>
        Name : 
        <input type="text" name="name" id="name">
        <span class="error">
            <?php 
            if(isset($name_error)){
                echo $name_error;  
            }
            ?>
        </span>
        <br>
        Email: <input type="text" name="email" id="email"><br>
        Phone: <input type="text" name="phone" id="phone"><br>
        Gender: <br>
        Male: <input type="radio" name="gender" id="male" value="male" checked>
        Female: <input type="radio" name="gender" id="female" value="female"><br>
        Country: 
        <select name="country" id="country">
            <option value="">Select a Country</option>
            <?php
                foreach($country as $key => $value){
                    echo "<option value='$key'>$value</option>";
                }
            ?>

        </select><br>
        Date of Birth: <input type="date" name="dob" id="dob">

        <br>
        <input type="submit" name="register" value="Register">
    </form>
    
<?php require('includes/footer.php'); ?>