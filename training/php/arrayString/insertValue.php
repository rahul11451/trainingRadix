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
                Write a PHP script that inserts an input item in an array in a given input position 
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        $array = array(1,2,3,4,5);
                        echo '<span class="h4">simple array: ';
                        foreach ($array as $value)
                        {
                            echo $value." ";
                        }
                        echo "</span><br><span class='h4'>";
                        array_splice($array, 3, 0, '$');
                        echo 'Array after adding value: ';
                        foreach($array as $value)
                        {
                            echo $value." ";
                        }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/serializedToUnserialized.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/uppercaseAndLowercase.php" class="text-white">
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