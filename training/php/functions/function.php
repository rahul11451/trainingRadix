
<?php
// main logic

// exercise-1

function calculatorUsingOneFunction($num1=10, $num2=20, $op="addition"){
    switch ($op) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if($num2 == 0)
            {
                $result = '0 is not possible';
            }
            else{
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = $num1 + $num2;
            break;
    }

    return $result;
}


// swap two numbers - exercise 2
function swapNumber(&$num1=40, &$num2=30)
{
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
}

// exercise 3

function showAllOperation($num1=10, $num2=20, &$add, &$sub, &$mul, &$div, &$counter){
    $count = 0;
    
    $add = $num1 + $num2;
    $count++;

    $sub = $num1 - $num2;
    $GLOBALS['result2'] = 
    $count++;

    $mul = $num1 * $num2;
    $GLOBALS['result3'] = '';
    $count++;


    if($num2 == 0)
    {
        $div = '0 is not possible';
    }
    else{
        $div = $num1 / $num2;
    }
    $GLOBALS['result4'] = '';
    $count++;

    $counter = $count;
}

// exercise 4
function calculationUsingOp($num1=20, $num2=30, $op="addition")
{
    switch ($op) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 == 0) {
                $result = '0 is not possible';
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = $num1 + $num2;
            break;
    }

    return $result;
}

// exercise 5
function multiToSingle($array, $newArray){
    foreach($array as $key => $value)
    {
        if(is_array($value))
        {
            $newArray = array_merge($newArray, $value);
        } else{
            $newArray = array_merge($newArray, array($key => $value));
        }
    }
    return $newArray;
}

// personsInfo -exercise 6
function findAge($dateArray)
{
    $ageArray = array();
    $currentYear = date("Y");
    foreach ($dateArray as $date) {
        $year = date_format(date_create($date), "Y");
        $age = $currentYear - $year;
        array_push($ageArray, $age);
    }

    return $ageArray;
}

function nameArray($nameArray, $age)
{
    $count = 1;
    $array = array_combine($nameArray, $age);
    foreach ($array as $key => $value) {
        echo '<tr id=' . $count . '>
        <td>' . ($count++) . '</td>
        <td>' . $key . '</td>
        <td>' . $value . ' </td>
        <td><button class="btn btn-primary">delete</button></td>
        </tr>';
    }
}



// 7 input array -exercise 7

function findValues($numberArray){
    $newArray = array();
    foreach($numberArray as $value){
      if($value > 100){
          $newArray[] = $value;
        } else {
              continue;
        }
    }  

    return $newArray;
}


function sorting($newArray){
    for($i=0; $i <count($newArray); $i++){
        for($j=0; $j<count($newArray); $j++){
            if($newArray[$i] > $newArray[$j]){
                $temp = $newArray[$i];
                $newArray[$i] = $newArray[$j];
                $newArray[$j] = $temp;
            } else {
                continue;
            }
        }
    }
    return $newArray;
}


?>