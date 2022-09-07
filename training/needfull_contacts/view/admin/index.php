<?php
session_start();
include '../layout/header.php';
include '../../model/Query.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: '.SITE_URL.'/view/login.php');
}

$data = new Query();

$service = $data -> select('service_details');
$serviceCount = count($service);

$provider = $data -> select('service_provider');
$providerCount = count($provider);

$aProvider = $data -> select('service_provider', 'nId', array('bStatus' => array('1', '=')));
$aProviderCount = count($aProvider);
?>

<section class=" pt-3 admin-dashboard">
    <!-- content -->
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-lg-10">
            <div class="container my-5">
                <div class="row p-5">

                    <div class="col-4 ">

                        <div class="card text-dark rounded shadow my-5 py-5">

                            <div class="card-body">

                                <h4 class="display-3 fw-bold text-center"><?php echo $serviceCount; ?></h4>

                                <h5 class="text-center">Total Services</h5>

                            </div>

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="card text-dark rounded shadow my-5 py-5">

                            <div class="card-body">

                                <h4 class="display-3 fw-bold text-center"><?php echo $providerCount; ?></h4>

                                <h5 class="text-center">Total Service Provider</h5>

                            </div>

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="card text-dark rounded shadow my-5 py-5">

                            <div class="card-body">

                                <h4 class="display-3 fw-bold text-center"><?php echo $aProviderCount; ?></h4>

                                <h5 class="text-center">Active Service Provider</h5>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../layout/footer.php';
?>