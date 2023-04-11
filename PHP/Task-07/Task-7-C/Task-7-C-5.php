<?php
function check_status($a, $b, $c) {
    $data = func_get_args();
    $name = "";
    $age = 0;
    $state = false;
    foreach ($data as $value) {
        if(gettype($value) == "boolean") $state = $value;
        elseif(gettype($value) == "integer") $age = $value;
        else $name = $value;
    }
    return "Hello $name, Your Age Is $age, You Are ".($state?"Available":"Not Available")." For Hire<br>";
}
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
?>