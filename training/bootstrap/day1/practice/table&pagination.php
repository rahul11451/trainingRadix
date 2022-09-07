<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row vh-lg-100">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4">
            <div>
                <h4>table overview</h4>
                <table class="table">
                    <caption> table overview </caption>
                    <thead>
                        <tr>
                            <th scope="col">number1</th>
                            <th scope="col">number2</th>
                            <th scope="col">number3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div>
                <h4>table variants</h4>
                <table class="table">
                    <caption> table variants </caption>
                    <thead>
                        <tr>
                            <th class="table-primary">number1</th>
                            <th class="table-primary">number2</th>
                            <th class="table-primary">number3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-success">1</td>
                            <td class="table-success">2</td>
                            <td class="table-success">3</td>
                        </tr>
                        <tr>
                            <td class="table-danger">4</td>
                            <td class="table-dark">5</td>
                            <td class="table-info">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div>
                <h4>table hover, active and stripe</h4>
                <table class="table table-hover table-striped table-dark">
                    <caption> table hover, active and stripe </caption>
                    <thead>
                        <tr>
                            <th class=""> number1</th>
                            <th class="">number2</th>
                            <th class="">number3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">1</td>
                            <td class="">2</td>
                            <td class="">3</td>
                        </tr>
                        <tr>
                            <td class="table-active">4 active</td>
                            <td class="">5</td>
                            <td class="">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div>
                <h4>small table</h4>
                <table class="table table-sm table-dark">
                    <caption> small table </caption>
                    <thead>
                        <tr>
                            <th class=""> number1</th>
                            <th class="">number2</th>
                            <th class="">number3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">1</td>
                            <td class="">2</td>
                            <td class="">3</td>
                        </tr>
                        <tr>
                            <td class="table-active">4 active</td>
                            <td class="">5</td>
                            <td class="">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <h4>responsive table</h4>
                <table class="table table-responsive table-sm table-dark">
                    <caption> responsive table </caption>
                    <thead>
                        <tr>
                            <th class=""> number1</th>
                            <th class="">number2</th>
                            <th class="">number3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">1</td>
                            <td class="">2</td>
                            <td class="">3</td>
                        </tr>
                        <tr>
                            <td class="table-active">4 active</td>
                            <td class="">5</td>
                            <td class="">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <h1>Pagination</h1>
            <div>
                <h4>pagination overview</h4>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Nensi</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <br>
            <div>
                <h4>Working with icon</h4>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">
                                <span aria-hidden="true">&laquo;</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">
                                <span aria-hidden="true">&raquo;</span>
                            </a></li>
                    </ul>
                </nav>
            </div>
            <br>
            <div>
                <h4>Disable and active</h4>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled"><a class="page-link" href="#">Nensi</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <br>
            <div>
                <h4>Sizing</h4>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Nensi</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>