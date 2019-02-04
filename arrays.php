<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array('salmon', 'pad thai', 'sushi', 'pizza');


/*
Print every array element in a new line.
*/

$length = count($food);

for($x = 0; $x < $length; $x++) {
    echo $food[$x];
    echo "<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo '<ul>';
echo '<li>' . implode( '</li><li>', $food) . '</li>';
echo '</ul>';


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = array("Salmon" => "seafood", "Pad Thai" => "Thai", "Sushi" => "Japanese", "Pizza" => "Italian");


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $x => $x_value) {
    echo "|" . $x . "|" . $x_value;
    echo "<br>";

}
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
  "Salmon" => ["type" => "main course", "origin" => "Seafood"],
  "Pad Thai" =>["type" =>"main course", "origin" => "Thai"],
  "Sushi" => ["type" =>"appetizer", "origin" =>"Japan"],
  "Pizza" => ["type" => "main course", "origin" => "Italy"]
];
foreach($food_assoc as $keys => $item){
    echo "{$keys}";
        foreach ($item as $itemkey => $value) {
        echo " | {$value} ";};
    echo "<br>";
}




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

?>

<style> 
table, th, td {
  border: 3px solid;
  padding: 0.4em;
  border-collapse: collapse;
}
</style>

<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>Salmon</td>
    <td>main course</td>
    <td>seafood</td>
  </tr>
  <tr>
    <td>Pad Thai</td>
    <td>main course</td>
    <td>Thai</td>
  </tr>
  <tr>
    <td>Sushi</td>
    <td>appetizer</td>
    <td>Japan</td>
  </tr>
  <tr>
    <td>Pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  </table>
