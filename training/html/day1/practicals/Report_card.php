<style>
    @media (max-width: 300px){
        .column10{
            font-size: 15px;
        }
    }
</style>
<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4">
            <h1><strong><em><u>Practical 1 | Report Card </u></em> </strong></h1>
            <div>
                <p><strong>Name: </strong> Nensi Sanjaykumar Darji</p>
                <p><strong>Roll no.: </strong> 180220131019</p>
                <p><strong>Year of Passing: </strong> 2022</p>
            </div>
            <hr>
            <hr>
            <div>
                <table style="width: 70%;" class="column10">
                    <caption style="margin: 20px;"><strong><u> Student's result </u></strong></caption>
                    <tr>
                        <th scope="col">Subject</th>
                        <th scope="col">total marks </th>
                        <th scope="col">obtain marks</th>
                    </tr>
                    <tr>
                        <td> Mathematics </td>
                        <td> 100 </td>
                        <td>084</td>

                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td>100</td>
                        <td>081</td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td>100</td>
                        <td>080</td>
                    </tr>
                    <tr>
                        <td>Computer</td>
                        <td>100</td>
                        <td>085</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>100</td>
                        <td>079</td>
                    </tr>
                    <tr>
                        <th scope="col">total</th>
                        <td>500</td>
                        <td> 409</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>