<?php
include("../../header.php");
$paths = '/php/';
$str = $_POST['str'];
$submit = $_POST['submit'];
if (isset($submit)) {
    if (empty($str)) {
        $error =  '<span class="text-danger">enter value </span>';
    } else {
        if (preg_match("/[a-zA-Z]/", $str) && strlen($str)==1) { 
            if($str == 'z')
            {
                $result = 'a';
            }
            elseif ($str == "Z")
            {
                $result = 'A';
            }
            else
            {
                $result = chr(ord($str)+1);
            }
            $detail =  "<br><span class='h4'>Input is: {$str} </span><br><br>";
            $output =  "<span class='h4'>Result is: {$result} </span>";
        } else {
            $error = ' <span class="text-danger">enter only one character of alphabets</span>';
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
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                Create a program to print the next character of a specific character.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="post">
                        <label for="">Enter character:
                            <input type="text" placeholder="Enter character" class="border border-primary rounded form-control" name="str" <?php echo "value = '$str'"; ?>>
                                <?php
                                    echo $error . $detail . $output;               
                                ?>
                            </span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="click me to show next character" class="btn-outline-primary btn">
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/removePartOfString.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/stringToArray.php" class="text-white">
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