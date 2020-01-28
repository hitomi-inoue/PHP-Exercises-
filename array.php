<?php 
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$foods = ["Sushi", 
    "Pizza", 
    "Mont Blanc",
    "Potato Salad"];
echo $foods[0];
echo "<br>";
echo $foods[1];
echo "<br>";
echo $foods[2];
echo "<br>";
echo $foods[3];




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
echo "<ul>
<li> $foods[0]</li>
<li> $foods[1]</li>
<li> $foods[2]</li>
<li> $foods[3]</li>
</ul>";



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
$food_assoc = [
    "Sushi" => "main course", 
    "Pizza" => "main course", 
    "Mont Blanc" => "dessert",
    "Potato Salad" => "salad"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $foods[0]." | " .$food_assoc["Sushi"];
echo "<br>";
echo $foods[1]." | " .$food_assoc["Pizza"];    
echo "<br>";
echo $foods[2]." | " .$food_assoc["Mont Blanc"];    
echo "<br>";
echo $foods[3]." | " .$food_assoc["Potato Salad"]; 



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
    


$food_assoc["cheescake"]["type"]
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
// Define nested array
$food_assoc = [
    "Sushi" => [
        "type" => "Main course",
        "origin" => "Japan"
    ],
    "Pizza" => [
        "type" => "Main course",
        "origin" => "Italy"
    ],
    "Mont Blanc" => [
        "type" => "Sessert",
        "origin" => "France"
    ],
    "Potato Salad" => [
        "type" => "Salad",
        "origin" => "US"
    ]
];
echo $foods[0]." | " .$food_assoc["Sushi"]["type"]." | " .$food_assoc["Sushi"]["origin"];
echo "<br>";
echo $foods[1]." | " .$food_assoc["Pizza"]["type"]." | " .$food_assoc["Pizza"]["origin"];
echo "<br>";
echo $foods[2]." | " .$food_assoc["Mont Blanc"]["type"]." | " .$food_assoc["Mont Blanc"]["origin"];
echo "<br>";
echo $foods[3]." | " .$food_assoc["Potato Salad"]["type"]." | " .$food_assoc["Potato Salad"]["origin"];
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


echo "<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>{$foods[0]}</td>
    <td>{$food_assoc["Sushi"]["type"]}</td>
    <td>{$food_assoc["Sushi"]["origin"]}</td>
  </tr>
  <tr>
    <td>{$foods[1]}</td>
    <td>{$food_assoc["Pizza"]["type"]}</td>
    <td>{$food_assoc["Pizza"]["origin"]}</td>
  </tr>
  <tr>
    <td>{$foods[2]}</td>
    <td>{$food_assoc["Mont Blanc"]["type"]}</td>
    <td>{$food_assoc["Mont Blanc"]["origin"]}</td>
  </tr>
  <tr>
    <td>{$foods[3]}</td>
    <td>{$food_assoc["Potato Salad"]["type"]}</td>
    <td>{$food_assoc["Potato Salad"]["origin"]}</td>
  </tr>
</table>";
?>
