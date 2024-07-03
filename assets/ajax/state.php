<?php
include '../Common/connection.inc.php';
$country_id =   $_POST['country_data'];

$state = "SELECT * FROM states WHERE country_id = $country_id";

$state_qry = mysqli_query($conn, $state);
 $output="";
//$output = '<option value="">Select State</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['id'] . '">' . $state_row['name_ar'] . '</option>';

    /*
    if($state_row == 0){
        $output = '<option value="">اختر مدينة</option>';
    }else{
        $output .= '<option value="' . $state_row['id'] . '">' . $state_row['name_ar'] . '</option>';
    }*/
}
echo $output;
/*
if($output==""){
    $output = '<option value="">اختر مدينة</option>';
}else{
    echo $output;
}*/
// echo '<script>alert("option: "'.$output.');</script>';
