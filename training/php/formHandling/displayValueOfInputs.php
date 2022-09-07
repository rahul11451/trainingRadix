<?php
include("../../header.php");
$paths = '/php/';
$errorGender = $gender = '';
if (isset($_POST['submit'])) {
    $gender = $_POST['gender'];
    if (empty($gender)) {
        $errorGender = 'Please select gender';
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
                    Form.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="" class="text-primary mb-3 form-control">
                            Country:
                            <select name="" id="country" class="form-select">
                                <option value="country">Select Coutry</option>
                                <option value="india">India</option>
                                <option value="au">Australia</option>
                            </select>
                            <br>
                            State:
                            <select name="state" id="state" class="form-select">
                                <option value="state" class='state'>state</option>
                                <option value="gujarat" class=' d-none india1'>Gujarat</option>
                                <option value="maharastra" class=' d-none india1'>Maharastra</option>
                                <option value="up" class=' d-none india1'>Up</option>
                                <option value="tasmania" class=' d-none au'>Tasmania</option>
                                <option value="newSouthWales" class=' d-none au'>New South Wales</option>
                                <option value="westernAu" class=' d-none au'>Western Australia</option>
                            </select>
                            <br>
                            City:
                            <select name="city" id="city" class="form-select">
                                <option value="city" class='city'>City</option>
                                <option value="ahmdebad" class=' d-none gujarat'>Ahmdebad</option>
                                <option value="patan" class=' d-none gujarat'>Patan</option>
                                <option value="mumbai" class=' d-none maharastra'>Mumbai</option>
                                <option value="pune" class=' d-none maharastra'>Pune</option>
                                <option value="kanpur" class=' d-none up'>Kanpur</option>
                                <option value="lacknow" class=' d-none up'>Lacknow</option>
                                <option value="hobart" class=' d-none tasmania'>Hobart</option>
                                <option value="devonport" class=' d-none tasmania'>Devonport</option>
                                <option value="sydney" class=' d-none newSouth'>Sydney</option>
                                <option value="newcastle" class=' d-none newSouth'>Newcastle</option>
                                <option value="perth" class=' d-none westernAu'>Perth</option>
                                <option value="bunbury" class=' d-none westernAu'>Bunbury</option>
                            </select>
                            <br>
                            <label for="" class="text-primary">
                                Gender: 
                                <span class="text-danger"><?php echo $errorGender; ?></span>
                            </label><br>
                            <label for="" class="text-black">
                                Male: <input type="radio" name="gender" value="male" class="me-3 border border-primary form-check-input gender" <?php if($gender=='male') {echo 'checked';} ?> required>
                            </label>
                            <label for="" class="text-black">
                                Female: <input type="radio" name="gender" value="female" class="me-3 border border-primary form-check-input gender" <?php if($gender=='female') {echo 'checked';} ?> >
                            </label>
                            <label for="" class="text-black">
                                Other: <input type="radio" name="gender" value="other" class="me-3 border border-primary form-check-input gender" <?php if($gender=='other') {echo 'checked';} ?> >
                            </label>
                        </label>
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>formHandling/fileUpload.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/retriveDataFromFile.php" class="text-white">
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

<script>
    $(document).ready(function() {
        // dropdown country
        $("#country").change(function() {
            $("#country option:selected").each(function() {
                if ($("#country").val() == 'india') {
                    $(".india1").removeClass("d-none");
                    $(".au").addClass("d-none");
                } else if ($("#country").val() == 'au') {
                    $(".india1").addClass("d-none");
                    $(".au").removeClass("d-none");
                } else {
                    $(".india1").addClass("d-none");
                    $(".au").addClass("d-none");
                }
            });
        });

        // dropdown state
        $("#state").change(function() {
            if ($("#state").val() == 'gujarat') {
                $(".gujarat").removeClass("d-none");
                $(".maharastra").addClass("d-none");
                $(".up").addClass("d-none");
                $(".tasmania").addClass("d-none");
                $(".newSouth").addClass("d-none");
                $(".westrnAu").addClass("d-none");
            } else if ($("#state").val() == 'maharastra') {
                $(".gujarat").addClass("d-none");
                $(".maharastra").removeClass("d-none");
                $(".up").addClass("d-none");
                $(".tasmania").addClass("d-none");
                $(".newSouth").addClass("d-none");
                $(".westrnAu").addClass("d-none");
            } else if ($("#state").val() == 'up') {
                $(".gujarat").addClass("d-none");
                $(".maharastra").addClass("d-none");
                $(".up").removeClass("d-none");
                $(".tasmania").addClass("d-none");
                $(".newSouth").addClass("d-none");
                $(".westrnAu").addClass("d-none");
            } else if ($("#state").val() == 'tasmania') {
                $(".gujarat").addClass("d-none");
                $(".maharastra").addClass("d-none");
                $(".up").addClass("d-none");
                $(".tasmania").removeClass("d-none");
                $(".newSouth").addClass("d-none");
                $(".westrnAu").addClass("d-none");
            } else if ($("#state").val() == 'newSouthWales') {
                $(".gujarat").addClass("d-none");
                $(".maharastra").addClass("d-none");
                $(".up").addClass("d-none");
                $(".tasmania").addClass("d-none");
                $(".newSouth").removeClass("d-none");
                $(".westrnAu").addClass("d-none");
            } else if ($("#state").val() == 'westernAu') {
                $(".gujarat").addClass("d-none");
                $(".maharastra").addClass("d-none");
                $(".up").addClass("d-none");
                $(".tasmania").addClass("d-none");
                $(".newSouth").addClass("d-none");
                $(".westernAu").removeClass("d-none");
            } else {
                $(".gujarat").addClass("d-none");
                $(".maharastra").addClass("d-none");
                $(".up").addClass("d-none");
                $(".tasmania").addClass("d-none");
                $(".newSouth").addClass("d-none");
                $(".westrnAu").addClass("d-none");
            }
        });

        // gender validation
        $(".gender").change(function() {
            if($(".gender")!=$(".gender:checked")){
                alert('nen');
            } else{
            alert('nensi');
            }
        });
    });
</script>