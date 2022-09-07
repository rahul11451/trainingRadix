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
                    Below is serialize string, Display Department, name and salary Who has more than 10,000 salary
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        $data = 'a:3:{s:3:"PHP";a:3:{i:0;a:2:{s:4:"name";s:3:"Jay";s:6:"salary";i:8000;}i:1;a:2:{s:4:"name";s:3:"Raj";s:6:"salary";i:15000;}i:2;a:2:{s:4:"name";s:5:"Mihir";s:6:"salary";i:12000;}}s:4:"Flex";a:1:{i:0;a:2:{s:4:"name";s:5:"Vijay";s:6:"salary";i:14000;}}s:6:"System";a:1:{i:0;a:2:{s:4:"name";s:6:"Kishan";s:6:"salary";i:5000;}}}';

                        $temp = unserialize($data);
                        foreach ($temp as $key => $values) {
                            foreach ($values as $key1 => $value) {
                                if ($value['salary'] > 10000) {
                                    echo $key . ": " . $value['name'] . " has " . $value['salary'] . "<br>";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/averageMinMax.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/insertValue.php" class="text-white">
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