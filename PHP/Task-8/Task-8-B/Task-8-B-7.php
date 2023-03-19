<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names); // Write Line Here 
next($names); // Write Line Here

echo current($names) . "<br>"; // "Sayed"

end($names); // Write Line Here

echo current($names) . "<br>"; // "Ali"

reset($names); // Write Line Here

echo current($names) . "<br>"; // "Osama"

end($names); // Write Line Here
prev($names); // Write Line Here

echo current($names) . "<br>"; // "Mahmoud"