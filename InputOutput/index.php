<?php
require_once './UserInputOutput.php';
use App\classes\UserInputOutput;

$result=[];
/*
$result =[
    'first_number' => 0,
    'second_number'=>0,
    'third_number'=>0,
    'fourth_number'=>0,
    'fifth_number'=>0,

];*/
if(isset($_POST['btn'])){

    $useInputOutput=new UserInputOutput();
    $result=$useInputOutput->inputOutput();
}
else{
    $result =[
        'first_number' => 0,
        'second_number'=>0,
        'third_number'=>0,
        'fourth_number'=>0,
        'fifth_number'=>0,

    ];
}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number"/></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="text" name="second_number"/></td>
        </tr>
        <tr>
            <th>Third Number</th>
            <td><input type="text" name="third_number"/></td>
        </tr>
        <tr>
            <th>Fourth Number</th>
            <td><input type="text" name="fourth_number"/></td>
        </tr>
        <tr>
            <th>Fifth Number</th>
            <td><input type="text" name="fifth_number"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
    </table>
</form>

<hr/>

<table border="1" width="500">
    <tr>
        <th>First Number</th>
        <th>Second Number</th>
        <th>Third Number</th>
        <th>Fourth Number</th>
        <th>Fifth Number</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><?php echo $result['first_number']; ?></td>
        <td><?php echo $result['second_number']; ?></td>
        <td><?php echo $result['third_number']; ?></td>
        <td><?php echo $result['fourth_number']; ?></td>
        <td><?php echo $result['fifth_number']; ?></td>
        <td>
            <?php
            $sum=0;
            foreach ($result as $value){
                if($value !='Submit') {
                    $sum += $value;
                }

            }
            echo $sum;
            ?>
        </td>
    </tr>
</table>
