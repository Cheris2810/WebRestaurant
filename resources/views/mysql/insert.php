<?php  
  if(isset($_POST['add'])){
            $name_user = $_POST['name_use'];
            $email_user = $_POST['email_user'];
            $password_user = $_POST['password_user'];

         if($conn ->query(
                           "INSERT INTO userlogin (name_use, email_user, password_user) VALUES ('$name_use', '$email_user', '$password_user')"   
                         )
            )
                    {
                        echo "<script>alert('Thêm thành công');</script>";
                    } else {
                            echo "<script>alert('Thêm không thành công');</script>";
                }
            }   

              mysqli_close($conn);         

?>