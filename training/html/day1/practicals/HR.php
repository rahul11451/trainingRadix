<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3
    ">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <h2>Practical2 </h2>
            <h2>Unorder list</h2>
            <ul>
                <li>PHP</li>
                <li>Android</li>
                <li>.net</li>
                <li>QA</li>
            </ul>

            <h2>Order list</h2>
            <ol>
                <li>PHP </li>
                <ul>
                    <li>Nensi darji</li>
                    <li>Dhara prajapati</li>
                    <li>Hiren Kuriya</li>
                </ul>

                <li>Android</li>
                <ul>
                    <li>Parva Dave</li>
                    <li>Disha shah</li>
                    <li>Rahee Gandhi</li>
                </ul>
                <li>.net</li>
                <ul>
                    <li>Smit patel</li>
                    <li>Rohan chavda </li>
                    <li>Ajay patel</li>
                </ul>
                <li>QA</li>
                <ul>
                    <li>Stuti shah</li>
                    <li>Aditi Panchal</li>
                    <li>Chaitanya Rao</li>
                </ul>
            </ol>
        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>