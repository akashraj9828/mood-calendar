<?php
if(isset($_POST['signup'])){        //RUN THIS CODE ONLY IF ACCESS REQUEsT COMES FROM BUTTON
    include_once 'dbh.inc.php';     

    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $about=mysqli_real_escape_string($conn,$_POST['about']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);


    //ERROR HANDLERS
    //EMPTY FIELD CHECKs
    if (empty($firstname)||empty($lastname)||empty($email)||empty($username)||empty($password)) {
        header("Location: ?signup=empty_fields");
        exit();
      
    }else {
    //DATA TYPE CHECKER
        //name check
        if (!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname)) {
           header("Location: ?signup=invalid_charachter_in_name");
           exit();
        }else{
            //email check
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           header("Location: ?signup=invalid_email");
           exit();
            }else{
                //username check (if alredy taken or not)
                $sql="SELECT * FROM @users 
                     WHERE user_uid='$username' OR user_uid='$email'";


                $result=mysqli_query($conn,$sql);       //query if username or email is alredy registered or not
                $resultCheck=mysqli_num_rows($result);  //check if query returned any row
                
                if($resultCheck>0){
                    header("Location: ?signup=username_email_taken");
                    exit();
                }else{
                    //password hashing
                    $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
                    //sql command to push user into database
                    $sql="INSERT INTO `@users` (user_first,user_last,user_email,user_uid,user_pwd,user_phone,user_about,hashed_pwd) VALUES ('$firstname','$lastname','$email','$username','$password','$phone','$about','$hashedPassword')";
                  
                  
                    //       | | | | | | | | | |   
                   //pushing vvvvvvvvvvvvvvvvvvvv into database 
                   
                        if (mysqli_query($conn, $sql)) {
                                //  header("Location: ?signup=signup_sucessful");
                            //sql querry to create a table for each user as they sign up
                             $sql2="CREATE TABLE " . $username . " (
                                    event_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE COMMENT 'event id',
                                    user_uid VARCHAR(256) NOT NULL COMMENT 'username',
                                    user_first VARCHAR(256) NOT NULL COMMENT 'first name',
                                    user_last VARCHAR(256) NOT NULL COMMENT 'last name',
                                    event_reg_date  TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                    event_date datetime,
                                    event_data MEDIUMBLOB NOT NULL COMMENT 'event details',
                                    mood VARCHAR(256) NULL DEFAULT NULL COMMENT 'mood'
                                    )";
                                        //        | | | | | | | | | |   
//creating private table for each user in stories database vvvvvvvvvvvvvvvvvvvv
                                    if(mysqli_query($events_conn, $sql2)){

                                    //     $sql3=" UPDATE users
                                    //             SET private_table = 1
                                    //             WHERE user_uid = '$username';";
                                                
                                    // // update private_table=1 if private table for user is generated
                                    //     if(mysqli_query($conn, $sql3)){
                                            header("Location: ?signup=success");
                                            exit();
                                    //     }
                                    //     else{
                                    //         //print any error if connection fails
                                    //         echo "Error: " . $sql3 . "<br>" . mysqli_error($conn). '<br>';
                                    // }
                                                
                                }else{
                                    //print any error if connection fails
                                    echo "Error: " . $sql2 . "<br>" . mysqli_error($events_conn). '<br>';
                            }      
                        } else {
                                //print any error if connection fails
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn). '<br>';
                    }

                    
                   
                }
            }
    }
}
}

