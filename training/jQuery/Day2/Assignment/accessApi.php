<script src="../../jquery.js"></script>
<script>
    $(document).ready(function() {
        $.getJSON("https://gorest.co.in/public/v2/users", function(data) {
            $.each(data, function(index, value) {
                var {
                    id,
                    name,
                    email,
                    gender,
                    status
                } = value;
                $("#datas").append(`<tr><td> ${id} </td>
                        <td> ${name} </td>
                        <td> ${email} </td>
                        <td> ${gender} </td> 
                        <td> ${status} </td></tr>`);
            })

            console.log(data);
        });
    });
</script>
<style>
    body {
        overflow-x: hidden;
    }

    .main {
        margin-top: 80px;
        padding-bottom: 500px !important;
    }

    .main #data h5 {
        font-size: 20px;
    }

    .main #data h6 {
        font-size: 20px;
    }

    .nav-item:hover {
        font-weight: bolder;
    }

    .margin_nen2 {
        margin-left: 15% !important;
        /* margin-top: 10% !important; */
    }

    @media (max-width: 850px) {
        .table{
            font-size: 10px;
        }
    }
    @media (max-width: 625px) {
        .main .d-sm-flex {
            display: flex;
        }
        .table{
            font-size: 5px;
        }
    }
</style>
<?php
include("../../../header.php");
?>

<div class="container-fluid">
    <div class="row vh-lg-100 mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-10 lg:ps-5 pt-4 column10">
            <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                Assignment-1 jQuery module2
            </h5>
            <h6 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                Use getJSON method access this web api https://gorest.co.in/public-api/users
                and display the result in one table.
            </h6>
            <table class="table table-responsive">
                <caption></caption>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="datas">

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include ("../../footer.php")
?>