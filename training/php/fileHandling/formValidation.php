<?php
include("../../header.php");
$paths = '/php/';



$errorFname = $errorLname = $errorGender = $errorComment =  $fName = $lName = $profession = $comment = $gender = '';

if(isset($_POST['submit'])){
    
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $profession = $_POST['profession'];
    // $gender = $_POST['genderIn'];
    $comment = $_POST['comment'];
    $result = array();

    if(empty($fName)){
        $errorFname = 'Please Enter First name';
    }
    if(empty($lName)){
        $errorLname = 'Please Enter Last name';
    }
    if(empty($_POST['genderIn'])){
        $errorGender = 'Please Select Gender';
    }
    if(empty($comment)){
        $errorComment = 'Please Must Enter Comments';
    }
  
    if($errorFname == "" && $errorLname == "" && $errorGender == "" && $errorComment == "") { 
        array_push($result,$fName."\n", $lName."\n", $profession."\n", $gender."\n", $comment."\n");
        $file = fopen("result/".$fName.rand(), 'x');
        $nen = ['hngeljken', 'kjgbe'];
        foreach($result as $value){
            fwrite($file, $value);
        }
        fclose($file);
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
                    Create a form for upload files on the server.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="POST">
                        <fieldset class="form-control">
                            <legend>Person's Info:</legend>
                            <!-- First Name -->
                            <label for="fname">First name:</label><br>
                            <input type="text" class="form-control" id="fname" name="fname">
                            <span class="errorFname text-danger"><?php echo $errorFname; ?> </span><br><br>

                            <!-- Last name -->
                            <label for="lname">Last name:</label><br>
                            <input type="text" id="lname" class="form-control" name="lname">
                            <span class="errorLname text-danger"><?php echo $errorLname; ?> </span><br><br>
                            
                            <!-- profession -->
                            <select id="profession" class="form-select" name="profession" id="profession">
                                <option value="engineer">Engineer</option>
                                <option value="doctor">Doctor</option>
                                <option value="teacher">Teacher</option>
                            </select>
                            <br><br>

                            <!-- gender -->
                            <label for="">
                            Gender:
                            <input type="radio" name="genderIn" class="form-check-input" value="male" class="gender"> Male
                            <input type="radio" name="genderIn" class="form-check-input" value="female"  class="gender"> Female
                            <input type="radio" name="genderIn" class="form-check-input" value="other" class="gender"> Other
                            <br><span class="errorGender text-danger"><?php echo $errorGender; ?> </span>
                            </label>
                            <br><br>

                            <!-- textarea -->
                            <label for="fname">Enter Your comments:</label><br>
                            <textarea name="comment" id="text" cols="19" rows="5" class="form-control"></textarea>
                            <span class="errorComment text-danger"><?php echo $errorComment; ?> </span>
                            <br>
                            <br>

                            <!-- submit -->
                            <input type="submit" value="submit" name="submit" class="btn btn-round form-control btn-primary" id="submit">
                            <br>
                            <br>
                            <input type="reset" class="btn-outline-primary btn form-control" name="reset" value="Reset">
                        </fieldset>
                    </form>
                    <?php  
                        if(isset($_POST['submit'])) {  
                            if($errorFname == "" && $errorLname == "" && $errorGender == "" && $errorComment == "") { 
                                echo '<h6>You are successfully submit data!</h6>
                                <h6>First Name: <span class="text-primary">'.$fName.'</span></h6>
                                <h6>Last Name: <span class="text-primary">'.$lName.'</span></h6>
                                <h6>Profession: <span class="text-primary">'.$profession.'</span></h6>
                                <h6>Gender: <span class="text-primary">'.$gender.'</span></h6>
                                <h6>Comment: <span class="text-primary">'.$comment.'</span></h6>';
                            }
                        } 
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/retriveDataFromFile.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/retriveFileData.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#submit").click(function(e) {
            var fName = $("#fname").val();
            var lName = $("#lname").val();
            var gender = $(".gender").val();
            var comment = $("#text").val();
            if (fName == '') {
                $(".errorFname").text('Please enter name');
                e.preventDefault();
            } 
            if (lName == ''){
                $(".errorLname").text('Please enter Last name');
                e.preventDefault();
            }
            if (comment == ''){
                $(".errorComment").text('Please Must enter comments');
                e.preventDefault();
            }
        });
    });
</script>
<?php
include("../../footer.php");
?>

