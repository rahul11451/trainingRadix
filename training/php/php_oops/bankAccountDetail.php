<?php
include("../../header.php");
include("class.php");
$paths = '/php/';

if (isset($_POST['submit'])) {
    $errorAccBal = $errorAccNo = $errorInterest = '';
    $accNo = $_POST['accNo'];
    $accBal = $_POST['accBal'];
    $accType = $_POST['accType'];
    $interest = $_POST['interest'];

    if (empty($accNo)) {
        $errorAccNo = 'Please enter Account Number';
    } else{
        if(!is_numeric($accNo)){
            $errorAccNo = 'Please enter number only';
        }
        if(!preg_match('/[0-9]{9,18}/', $accNo)){
            $errorAccNo = 'Account number should be 9 to 18 length long';
        }
    }
    if (empty($accBal)) {
        $errorAccBal = 'Please enter Account Balance';
    } else{
        if(!is_numeric($accBal)){
            $errorAccBal = 'Please enter number only';
        }
    }
    if (empty($interest)) {
        $errorInterest = 'Please enter interest';
    } else{
        if((int)$interest > 100 || !is_numeric($interest)){
            $errorInterest = 'Please enter valid interest';
        }
    }
    if(!empty($accNo) && !empty($accBal) && is_numeric($accBal) && !empty($accType) && !empty($interest) && is_numeric($interest))
    {
        switch($accType) {
            case 'savingAcc':
                $bankDetail = new SavingAccount();
                $bankDetail->setNumber($accNo);
                $bankDetail->setAmount($accBal);
                $result1 = $bankDetail->summary($interest);
                break;
            case 'currentAcc':
                $bankDetail = new CurrentAccount();
                $bankDetail->setNumber($accNo);
                $bankDetail->setAmount($accBal);
                $result1 = $bankDetail->summary($interest);
                break;
            default:
                $bankDetail = new SavingAccount();
                $bankDetail->setNumber($accNo);
                $bankDetail->setAmount($accBal);
                $result1 = $bankDetail->summary($interest);
                break;
        }
    }
}


?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                bank account details  
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                        <label for="" class="text-primary">
                                Account Type: 
                                <select name="accType" id="" class="border-primary form-select text-primary">
                                    <option value="savingAcc" class="" <?php if (isset($accType) && $accType == 'savingAcc') {
                                                                            echo 'selected';
                                                                        } ?>>Saving Account</option>
                                    <option value="currentAcc" class="" <?php if (isset($accType) && $accType == 'currentAcc') {
                                                                                echo 'selected';
                                                                            } ?>>Current Account</option>
                                </select>
                            </label><br><br>
                            <label for="" class="text-primary">
                                Account Number: <input class="form-control border-primary" type="text" name="accNo" placeholder="Account Number" class="border border-primary rounded" <?php if(isset($accNo)){echo "value='$accNo'";} ?>>
                                <span class="text-danger"><?php if(isset($accNo)){ echo $errorAccNo;} ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Account Balance: <input class="form-control border-primary" type="text" name="accBal" placeholder="Account Balance" class="border border-primary rounded" <?php if(isset($accBal)){ echo "value='$accBal'";} ?>>
                                <span class="text-danger"><?php if(isset($accBal)){ echo $errorAccBal;} ?></span></span>
                            </label>
                            <br><br>
                            <label for="" class="text-primary">
                                Interest: <input class="form-control border-primary" type="text" name="interest" placeholder="interest" class="border border-primary rounded" <?php if(isset($interest)){ echo "value='$interest'";} ?>>
                                <span class="text-danger"><?php if(isset($interest)){ echo $errorInterest;} ?></span></span>
                            </label><br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-outline-primary btn" name="submit" value="click me to show all values">
                            </label>
                        </form>
                        <div class="">
                            <?php
                                if (isset($_POST['submit'])) {
                                    if(!empty($accNo) && !empty($accBal) && !empty($accType) && !empty($interest))
                                    {
                                        echo '<h4 class="text-primary">The Result is: </h4><table class="table">
                                        <tr>
                                            <th>Account Type</th>
                                            <th>Account Number</th>
                                            <th>Account Balance</th>
                                            <th>Interest</th>
                                            <th>Updated Balance</th>
                                        </tr>
                                        <tr>
                                        <td>'.$accType.'</td> '?>
                                        <?php foreach ($result1 as $values) {
                                            echo '<td>'. $values .' </td>';
                                        } ?>
                                        <?php 
                                            echo '<td>'.$bankDetail->addInterest($accBal,$interest).'</td>
                                        </tr> 
                                        </table>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/mobileDetails.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/personsDetails.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include("../../footer.php");
?>