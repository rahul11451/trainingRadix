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
                    Write a PHP script to sort the following associative array
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                    $data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
                    // asort
                    asort($data);
                    echo '<div class="row">
                    <div class="col">
                    <h6 class="text-primary">Ascending order using value:</h6>
                    <table class="table">
                    <tr>
                        <th>
                            Key
                        </th>
                        <th>
                            Value
                        </th>
                    </tr>';
                    foreach ($data as $key => $value) {
                        echo '
                            <tr>
                                <td>
                                    ' . $key . '
                                </td>
                                <td>
                                    ' . $value . '
                                </td>
                            </tr>';
                    }
                    echo '</table></div>';
                    
                    // ksort
                    ksort($data);
                    echo '<div class="col">
                    <h6 class="text-primary">Ascending using key:</h6>
                    <table class="table">
                    <tr>
                        <th>
                            key
                        </th>
                        <th>
                            value
                        </th>
                    </tr>';
                    foreach ($data as $key => $value) {
                        echo '
                            <tr>
                                <td>
                                    ' . $key . '
                                </td>
                                <td>
                                    ' . $value . '
                                </td>
                            </tr>';
                    }
                    echo '</table></div>';
                    
                    // arsort
                    arsort($data);
                    echo '<div class="col">
                    <h6 class="text-primary">Descending using value:</h6>
                    <table class="table">
                    <tr>
                        <th>
                            key
                        </th>
                        <th>
                            value
                        </th>
                    </tr>';
                    foreach ($data as $key => $value) {
                        echo '
                            <tr>
                                <td>
                                    ' . $key . '
                                </td>
                                <td>
                                    ' . $value . '
                                </td>
                            </tr>';
                    }
                    echo '</table></div>';


                    // krsort
                    krsort($data);
                    echo '<div class="col">
                    <h6 class="text-primary">Descending using key:</h6>
                    <table class="table">
                    <tr>
                        <th>
                            key
                        </th>
                        <th>
                            value
                        </th>
                    </tr>';
                    foreach ($data as $key => $value) {
                        echo '
                            <tr>
                                <td>
                                    ' . $key . '
                                </td>
                                <td>
                                    ' . $value . '
                                </td>
                            </tr>';
                    }
                    echo '</table></div></div>';
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/printValue.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/removeComma.php" class="text-white">
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