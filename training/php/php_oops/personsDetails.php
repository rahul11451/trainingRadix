<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#dream").hide();
        $("#position").hide();
        
        $(".child").click(function(){
            $("#dream").show();
            $("#position").hide();
        });
        $(".developer").click(function(){
            $("#dream").hide();
            $("#position").show();
        });
        $(".select").click(function(){
            $("#dream").hide();
            $("#position").hide();
        });
    });
</script>


<?php
include("../../header.php");
include("Person.php");
$paths = '/php/';

if (isset($_POST['submit'])) {
    $errorName = $errorAge = '';
    $personType = $_POST['personType'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];

    if (empty($name) || !is_string($name)) {
        $errorName = 'Please enter valid name';
    }
    if (empty($age)) {
        $errorAge = 'Please enter valid age';
    } else {
        if(!is_numeric($age)){
            $errorAge = 'Number only';
        }
    }
    if (!empty($_POST['dream'])) {
        $dream = $_POST['dream'];
    }
    if(!empty($name) && !empty($age) && !empty($dream))
    {
        switch($personType){
            case 'child':
                $result = new Child($name, $age, $gender, $dream);
                $result1 =  $result->introduce();
                $result2 =  $result->greet($name);
                $result3 =  $result->sayDreams();
                break;
            case 'softwareDev':
                $result = new Developer($name, $age, $gender, $position);
                $result1 =  $result->introduce();
                $result2 =  $result->greet($name);
                $result3 =  $result->describeJob();
                break;
            default:
                $result = new Child($name, $age, $gender, $dream);
                $result1 = $result->introduce();
                $result2 = $result->greet($name);
                $result3 = $result->sayDreams();
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
                Abstract Class Usage  
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                            <label for="" class="text-primary">
                                I am a: 
                                <select name="personType" id="pe" class="border-primary form-select text-primary">
                                    <option value="select" class="select" <?php if (isset($personType) && $personType == 'select') {
                                                                            echo 'selected';
                                                                        } ?>>select</option>
                                    <option value="child" class="child" <?php if (isset($personType) && $personType == 'child') {
                                                                            echo 'selected';
                                                                        } ?>>Child</option>
                                    <option value="softwareDev" class="developer" <?php if (isset($personType) && $personType == 'software') {
                                                                                echo 'selected';
                                                                            } ?>>Software Developer</option>
                                </select>
                            </label><br><br>
                            <label for="" class="text-primary">
                                My Name: <input class="form-control border-primary" type="text" name="name" placeholder="Your Name" class="border border-primary rounded" <?php if(isset($name)){echo "value='$name'";} ?>>
                                <span class="text-danger"><?php if(isset($name)){ echo $errorName;} ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                My Age: <input class="form-control border-primary" type="text" name="age" placeholder="Your Age" class="border border-primary rounded" <?php if(isset($age)){ echo "value='$age'";} ?>>
                                <span class="text-danger"><?php if(isset($age)){ echo $errorAge;} ?></span></span>
                            </label>
                            <br><br>
                            <label for="" class="text-primary">
                                Gender: 
                                <select name="gender" id="" class="border-primary form-select text-primary">
                                    <option value="male" class="" <?php if (isset($gender) && $gender == 'male') {
                                                                            echo 'selected';
                                                                        } ?>>Male</option>
                                    <option value="female" class="" <?php if (isset($gender) && $gender == 'female') {
                                                                                echo 'selected';
                                                                            } ?>>Female</option>
                                </select>
                            </label><br><br>
                            <label for="" class="text-primary" id="dream">
                                My Dreams: 
                                <br><label for="" class=""><input class="form-check-input border-primary" type="checkbox" name="dream[]" value="doctor" <?php if(isset($dream)){ if($dream =='doctor') {echo 'checked';}} ?>> Doctor
                                </label>

                                <br><label for="" class=""><input class="form-check-input border-primary" type="checkbox" name="dream[]" value="engineer" <?php if(isset($dream)){ if($dream =='engineer') {echo 'checked';}} ?>> Engineer
                                </label>
                                
                                <br><label for="" class=""><input class="form-check-input border-primary" type="checkbox" name="dream[]" value="lawyer" <?php if(isset($dream)){ if($dream =='lawyer') {echo 'checked';}} ?>> Lawyer
                                </label>
                                
                                <br><label for="" class=""><input class="form-check-input border-primary" type="checkbox" name="dream[]" value="police" <?php if(isset($dream)){ if($dream =='police') {echo 'checked';}} ?>> Police Officer
                                </label>
                            </label>
                            <label for="" class="text-primary" id="position">
                                My Position: 
                                <select name="position" class="border-primary form-select text-primary">
                                    <option value="Frontend Developer" <?php if (isset($position) && $position == 'Frontend Developer') {
                                                                            echo 'selected';
                                                                        } ?>>Frontend Developer</option>
                                    <option value="Backend Developer" <?php if (isset($position) && $position == 'Backend Developer') {
                                                                                echo 'selected';
                                                                            } ?>>Backend Developer</option>
                                    <option value="Fullstack Developer" <?php if (isset($position) && $position == 'Fullstack Developer') {
                                                                                echo 'selected';
                                                                            } ?>>Fullstack Developer</option>
                                </select>
                            </label><br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-outline-primary btn" name="submit" value="click me to show all values">
                            </label>
                        </form>
                        <div class="w-50">
                            <?php
                                if (isset($_POST['submit'])) {
                                    if(!empty($name) && !empty($age) && !empty($dream))
                                    {
                                        echo '<h4 class="text-primary">The Result is: </h4>
                                        <p>'.$result1.'</p>
                                        <p>'.$result2.'</p>
                                        <p>'.$result3.'</p>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/bankAccountDetail.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/areaCalculator.php" class="text-white">
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