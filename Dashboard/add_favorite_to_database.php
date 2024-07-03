<?php 
include_once "../assets/Common/connection.inc.php";
if($conn){
    // Write the SQL query
    $Project_ID = $_GET['id'];
    //$Project_Name = $_SESSION['Project_Name'];
    $User_ID = $_SESSION['User_ID'];
    $sqlCheckProjectsFavorite = "SELECT * FROM projects_favorite
                                INNER JOIN 
                                projects ON projects.Project_ID = projects_favorite.Project_ID 
                                WHERE projects_favorite.User_ID = $User_ID AND projects_favorite.Project_ID = $Project_ID";
    $Check_Projects_Favorite_Query = mysqli_query($conn, $sqlCheckProjectsFavorite); 
    if(mysqli_num_rows($Check_Projects_Favorite_Query) > 0){
        while($row = mysqli_fetch_array($Check_Projects_Favorite_Query)) {
            $Project_Name = $row['Project_Name'];
        }
        echo "Project '.$Project_Name.'. Already Favorite!";
    }else{
        while($row = mysqli_fetch_array($Check_Projects_Favorite_Query)) {
            $_SESSION['Project_Name'] = $row['Project_Name'];
        }
        $Project_Name = $_SESSION['Project_Name'];
        $sql = "INSERT INTO projects_favorite (Project_Favorite_Status, Project_ID , User_ID)
        VALUES ('Favorite', '" . $Project_ID . "', '" . $_SESSION['User_ID']. "')";
    
        $result = mysqli_query($conn, $sql);
        // Check query execution
        if ($result) {
            echo "Project '.$Project_Name.'. Data inserted successfully!";
            $_SESSION['success'] =  "Project '.$Project_Name.'. Data inserted successfully!"; 

            /*echo '<script>
            alert("Project #'.$Project_ID.'. Data inserted successfully!");
            </script>';*/
            //echo "Data inserted successfully!";
        } else {
            //echo "Error inserting data: " . mysqli_error($conn);
            echo "Error inserting Project '.$Project_Name.'. data: '.mysqli_error($conn).'";
            $_SESSION['error'] =  "Error inserting Project '.$Project_Name.'. data: '.mysqli_error($conn).'"; 

            /*echo '<script>
            alert("Error inserting Project #'.$Project_ID.'. data: '.mysqli_error($conn).'");
            </script>';*/
        }
    }

}else{
    //echo '<script>alert("Connection Error.");</script>'; 
    $_SESSION['error'] =  'Connection Error.'; 
}
// Close connection
mysqli_close($conn);
?>