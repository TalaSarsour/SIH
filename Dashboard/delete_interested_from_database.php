<?php 
include_once "../assets/Common/connection.inc.php";
if($conn){
    // Write the SQL query
    $Project_ID = $_GET['id'];
    $User_ID = $_SESSION['User_ID'];
    $Project_Name = $_SESSION['Project_Name'];

    $sql = "DELETE FROM projects_interested WHERE Project_ID =  $Project_ID AND User_ID = $User_ID";

    $result = mysqli_query($conn, $sql);
    // Check query execution
    if ($result) {
        echo "Project '.$Project_Name.'. Data Deleted successfully!";
        $_SESSION['success'] =  'Project '.$Project_Name.'. Data Deleted successfully!'; 
        /*echo '<script>
        alert("Project #'.$Project_ID.'. Data inserted successfully!");
        </script>';*/
        //echo "Data inserted successfully!";
    } else {
        //echo "Error inserting data: " . mysqli_error($conn);
        echo "Error Delete Project '.$Project_Name.'. data: '.mysqli_error($conn).'";
        $_SESSION['error'] =  "Error Delete Project '.$Project_Name.'. data: '.mysqli_error($conn)'"; 
        /*echo '<script>
        alert("Error inserting Project #'.$Project_ID.'. data: '.mysqli_error($conn).'");
        </script>';*/
    }
}else{
    //echo '<script>alert("Connection Error.");</script>'; 
    $_SESSION['error'] =  'Connection Error.'; 
}
// Close connection
mysqli_close($conn);
?>