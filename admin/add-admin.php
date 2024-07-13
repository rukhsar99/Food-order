<?php
include ('../config/constants.php');
 include ('partials/menu.php');
?> 

<div>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>
            <br><br>
            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                    </tr> 
                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="username" placeholder="Enter Your username"></td>
                    </tr>    
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" placeholder="Enter Your password"></td>
                    </tr>  
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                </table> 
            </form>
        </div>
    </div> 
</div>


<?php
include ('partials/footer.php');
?>


<?php
    if(isset($_POST['submit'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `tlb_admin` (`full_name`, `username`, `password`)
        VALUES ('$full_name', '$username', '$password')";
        if($conn->query($sql) === TRUE){
            echo "New record created successfully";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                }
                ?>


    

