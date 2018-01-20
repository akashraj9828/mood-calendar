<?php

// session_start();
if ( isset( $_POST[ 'update_event' ] ) ) {
    if(isset($_SESSION['u_uid'])){
    include_once 'dbh.inc.php';
    
    $username = $_SESSION['u_uid'];
    $firstname =$_SESSION[ 'u_first'] ;
    $lastname=$_SESSION[ 'u_last' ];
    $date = mysqli_real_escape_string( $conn, $_POST[ 'date-input-for-sql' ] );
    $event = mysqli_real_escape_string( $conn, $_POST[ 'event-input' ] );
    // $story = $_POST[ 'story' ];
    
     $sql="INSERT INTO $username (user_uid,user_first,user_last,event_date,event_data) VALUES ('$username','$firstname','$lastname','$date','$event')";



    if(mysqli_query($events_conn, $sql)){
        header("Location: ?event_update=success");
        exit();
     }
     else{
            //print any error if connection fails
            echo "Error: " . $sql . "<br>" . mysqli_error($events_conn). '<br>';
        }


    }else {
        echo '<h2> You are not logged in.. :( </h2>';
    }
}



if(isset($_POST['upload_image_button'])){
if(isset($_SESSION['u_uid'])){
    include_once 'dbh.inc.php';
    
    $username = $_SESSION['u_uid'];
    $firstname =$_SESSION[ 'u_first'] ;
    $lastname=$_SESSION[ 'u_last' ];
    $charlist="'";
    $imagename=$_FILES['image_input']['name'];
     
    //Get the content of the image and then add slashes to it 
    $imagetmp=mysqli_real_escape_string($conn,file_get_contents($_FILES['image_input']['tmp_name']));
    
    //actual binary data
    $image_data=file_get_contents($_FILES['image_input']['tmp_name']);
    
    //location of tmp file stored on server
    // $post_data=$_FILES['image_input']['tmp_name'];

    $sql="UPDATE users
         SET user_profile_pic='$imagetmp'
          WHERE user_uid='$username'";
    
        if(mysqli_query($conn, $sql)){
        header("Location: ?image_upload=success");
        exit();
     }
     else{
            //print any error if connection fails
            echo "Error: " . $sql . "<br>" . mysqli_error($conn). '<br>';
        }
}
}


