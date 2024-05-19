<?php
include "./head.php";

    $array = ['العربية','الإنجليزية','الفرنسية','الإيطالية','الروسية'];
    print_r($array[1]);
    print_r($array);
    for ($i = 0; $i < count($array); $i++) {
        print_r($array[$i]);
    }

    $investor_type = "investor_type";
    $Investor_Type_ID = "Investor_Type_ID";
    $Investor_Type_Name = "Investor_Type_Name";

    // Write the SQL query
    $sql = "SELECT $Investor_Type_ID, $Investor_Type_Name FROM $investor_type ORDER BY $Investor_Type_ID ASC";
    $result = mysqli_query($conn, $sql);

    // Check query execution
    if (mysqli_num_rows($result) > 0) {
     // echo "<select>";
      
      // Loop through each row in the result
      while($row = mysqli_fetch_assoc($result)) {
        $value = $row[$Investor_Type_ID];
        $text = $row[$Investor_Type_Name];
        
        //echo "<option value='$value'>$text</option>";
        echo '<div class="form-check form-check-inline ">
        <input class="form-check-input" type="checkbox" name="checkboxvar4[]" id="4thinlineCheckbox'.$value.'" value="'.$value.'" />
        <label class="form-check-label" for="4thinlineCheckbox'.$value.'">'.$text.'</label>
      </div>';
      }
                
        //echo "</select>";
    } else {
        echo "No records found";
        }
?>