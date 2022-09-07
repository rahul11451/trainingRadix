<?php
include("../../header.php");
$paths = '/php/';
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Write a PHP function to change the following array's all values to upper or lower case.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
                        echo "real array: ";
                        echo "<pre>"; print_r($Color); "</pre>";
                        echo "<span class='h5'>Array in uppercase: ";
                        foreach($Color as $key=>$value)
                        {
                            $value=strtoupper($value);
                            print_r('['.$key.']=>'. $value." ");
                        }
                        echo "</span><br><span class='h5'>Array in lowercase: ";
                        foreach($Color as $key=>$value)
                        {
                            $value=strtolower($value);
                            print_r('['.$key.']=>'. $value." ");
                        }
                    ?>
                </div>

            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/insertValue.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/mergeArray.php" class="text-white">
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