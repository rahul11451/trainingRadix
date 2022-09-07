<?php

$paths = '/php/';
// if(empty($_POST['userName'])){
//     $nameError = 'Please Enter Name';
// }
// if(empty($_POST['userMess1'])){
//     $MessageError = 'Please Enter Message';
// }
if(isset($_POST['action'])){
    $action = $_POST['action'];
    if($action == 'read'){
        $chatRead = fopen('chatRecord.txt', 'r');
        while(!feof($chatRead)){
            $result .= fgets($chatRead);
        }
        echo $result;
        fclose($chatRead);
        exit;
    }
    if($action == 'enter'){
        $message = $_POST['message'];
        $name = $_POST['name'];
        $op = "Name: $name \nMessage: $message\n\n";
        $chat = fopen('chatRecord.txt', 'a+');
        fwrite($chat, $op);
        fclose($chat);
        exit;
    }
}
include("../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create a chat application for 2 users
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Chatbox</h5>
                                    <form method="POST">
                                        <label for="" class="text-primary d-flex">
                                            <input class="form-control border-primary" type="text" name="userName" id="userName" placeholder="Name">
                                        </label>
                                            <span class='text-danger' id="nameError" name="nameError"></span>
                                        <br>
                                        <label for="" class="text-primary d-flex">
                                            <textarea class="form-control border-primary" type="text" name="userMess1" id="userMess1" placeholder="message"></textarea>
                                        </label>
                                            <span class='text-danger' id="messageError" name="messageError"></span>
                                        <br>
                                            <input type="button" class="form-control btn-outline-primary btn" name="checkFile" value="Enter" id="submit">
                                            <br>
                                            <br>
                                            <input type="reset" class="form-control btn-primary btn" value="Reset">
                                            <br>
                                            <br>
                                            <h4 id="success" class="text-success text-center"></h4>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Chat</h5>
                                    <pre>
                                        <h6 class="mb-5" id="messageAns">
                                        </h6>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>ajaxPractice/checkFile.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>sessionAndCookie/loginCookie.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="../ajax/chatApplication.js"></script>
<?php
include("../../footer.php");
?>
