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
                    Display the first element of the above array
                    Display the capital and country name from the above array $ceu.
                    Sort the list by the name of the country
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

                    echo "<span class='h6 text-black'>First element of an array: " . $ceu['Italy'] . "</span><br><br>";

                    echo '<div class="row">
                    <div class="col">
                    <h6 class="text-primary">country and capital:</h6>
                    <table class="table">
                    <tr>
                        <th>
                            Country
                        </th>
                        <th>
                            Capital
                        </th>
                    </tr>';
                    foreach ($ceu as $country => $capital) {
                        echo '
                            <tr>
                                <td>
                                    ' . $country . '
                                </td>
                                <td>
                                    ' . $capital . '
                                </td>
                            </tr>';
                    }
                    echo '</table></div>';

                    ksort($ceu);
                    echo '<div class="col">
                    <h6 class="text-primary">Sorted array using key:</h6>
                    <table class="table">
                    <tr>
                        <th>
                            Country
                        </th>
                        <th>
                            Capital
                        </th>
                    </tr>';
                    foreach ($ceu as $country => $capital) {
                        echo '
                            <tr>
                                <td>
                                    ' . $country . '
                                </td>
                                <td>
                                    ' . $capital . '
                                </td>
                            </tr>';
                    }
                    echo '</table></div></div>';
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/arrayFunction.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/averageMinMax.php" class="text-white">
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