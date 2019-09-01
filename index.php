<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. You should 
use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////
$first_name = "Ais";
$second_name = "B";
$salary_text = "Salary for Mr.";

echo "Question 1 : Write a PHP script to display names and the salaries 
amounts, within a table. You should use `echo ` to generate your table.<br/>";
echo "<h3>Kindly, find the table at the bottom of the page</h3><br/>";
echo (
"<table style='border-collapse: collapse'> 
    <tr>
        <th style='border: 1px solid darkgrey'>NAMES</th>
        <th style='border: 1px solid darkgrey'>SALARIES</th>
    </tr>

    <tr>
        <td style='border: 1px solid darkgrey'>$salary_text $first_name</td>
        <td style='border: 1px solid darkgrey'>200$</td>    
    </tr

    <tr>
        <td style='border: 1px solid darkgrey'>$salary_text $second_name</td>
        <td style='border: 1px solid darkgrey'>700$</td>
    </tr

</table><br/><br/><br/>"
);


/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. 
as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

echo 'Question 2 : Write a PHP script which displays the capital and country name from the below 
array $c. as unordered list after sorting the array list by countries names <br/>';

ksort($countries);
echo "<ul>";
foreach ($countries as $key => $value) {
    echo "<li>$key => $value</li>";
}
echo "</ul> <br/><br/><br/>";


/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

echo "Question 3 : Write a script to build the following stars pattern, using a nested for loop <br/><br/>";

$star = "*";
$str = "";
$stars_number = 10;
for ($i=0; $i < $stars_number ; $i++) { 
    $str = $str.$star;
    echo $str."<br/>";
}
for ($i=$stars_number; $i > 0 ; $i--) { 
    echo substr($str,-$i)."<br/>";
}
echo "<br/>";

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days
*/
echo "Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days <br/><br/>";

$first_date = new DateTime('1981-11-04');
$second_date = new DateTime('2013-09-04');
$result = $first_date->diff($second_date);

echo $result->format('%y years %m months %d days')."<br/><br/><br/>";



echo "Question 5 : Create a simple HTML form that accept the user name after submitting 
display the name using PHP echo statement under the form. <br/><br/>";

?>
<!-- Question 5 : Create a simple HTML form that accept the user name after submitting  -->
<!-- display the name using PHP echo statement under the form. */ -->

<form method='post'>
    <input type = 'text' name = 'text' />
    <button type = 'submit'>Submit</button>
</form>

<?php 
    echo "<br/><br/>";
    $text = $_POST['text'] ;
    if($text)
    {
        echo $text."<br/><br/><br/>";
    }
?>


