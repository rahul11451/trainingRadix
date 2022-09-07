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
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                Write a PHP program to merge (by index) the following two arrays.  
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        $array1 = array (array(77, 87), array(23, 45)); 

                        $array2 = array ("w3resource", "com");  
                       
                        echo "<span class='h5'>Merged array: ";
                        if (count($array1) == count($array2))
                        {
                            foreach($array1 as $key=>$value)
                            {

                                array_unshift($array1[$key], $array2[$key]); 
                                
                            }
                            echo "<pre>";
                            print_r($array1);
                            echo "</pre>";
                        }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/uppercaseAndLowercase.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/printValue.php" class="text-white">
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