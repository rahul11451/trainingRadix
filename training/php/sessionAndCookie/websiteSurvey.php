<?php
session_start();
// echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($_SESSION);echo '</pre>'; die();
$paths = '/php/';
$key = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $answer = $_POST['answer'];
    $_SESSION['answer'] = $answer;
    $_SESSION['name'] = $name;
}

$queSet = array(
    'qSet1' => array('que1' => 'How did you hear about us?', 'ans1' => array('Instagram', 'Facebook', 'word of mouth', 'Podcast', 'other')),
    'qSet2' => array('que2' => 'How likely are you to recommend our website to a friend?', 'ans2' => array(1, 2, 3, 4, 5)),
    'qSet3' => array('que3' => 'Whay are you leaving?', 'ans3' => array('I need time to think', 'No worries, i will br back', 'I need more information', 'The item is too expensive', 'I just browsing')),
    'qSet4' => array('que4' => 'Need Help?', 'ans4' => array('Yes', 'No', 'sorry', 'Ofcourse', 'May be')),
    'qSet5' => array('que5' => 'Your Opinion means the world to us?', 'lmmkl' => array('Very satisfied', 'Satisfied', 'Neutral', 'Dissatisfied', 'Very Dissatisfied'))
);
$question_input = '';
foreach ($queSet as $set => $setArray) {
    foreach ($setArray as $key => $value) {
        if (is_string($value)) {
            $question_input .= '<br><li>
                    <p>' . $value . '</p>';
        } else {
            foreach ($value as $keys => $option) {
                $question_input .= '<input type="checkbox" ' ?> <?php 
                    if(in_array($option,$_SESSION['answer'][$key])){
                        $question_input .= 'checked';
                    } ?> <?php $question_input .= ' name="answer[' . $key . '][]" id="nen'.$option.'" class="form-check-input border-primary" value = "' . $option . '"  >
                
                <label for="nen'.$option.'" class="form-check-label"> ' . $option . '</label><br>';
            }
        }
        $question_input .= '</li>';
    }
}


if(isset($_SESSION['answer'])){
    $html_outupt = "";
    $html_outupt .= "<br><h4>Your Name is: ".$_SESSION['name']."</h4>";

    $html_outupt .= "<ol class='text-primary h4 m-3'>";
    foreach ($queSet as $qSet => $setArray) {
        foreach ($setArray as $que => $ans1) {
            if (is_string($ans1)) {
                $html_outupt .= '<li class="p-2">' . $ans1 . '</li>';
            } else {
                foreach ($_SESSION['answer'] as $keys => $option) {
                    if ($que == $keys) {
                        $html_outupt .= '<ul class="h5 text-danger p-2">';
                        foreach ($option as $value) {
                            $html_outupt .= "<li>" .$value . "</li>";
                        }
                        $html_outupt .= "</ul>";
                    } else {
                        continue;
                    }
                }
            } 
        }
    }
    $html_outupt .=  "</li></ol>";
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
                    Create an application for online web survey. Create a form with a single question with multiple answer. Once user submit answer and come again on same page then display selected answers to that customer.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="post">
                        <label for="" class="form-control">
                            <h4>Website Survey</h4>
                            <br>
                            <input type="text" placeholder="Name" name="name" id="name" class="form-control border-primary">
                            <ol>
                            <?php
                                echo $question_input;        
                            ?>
                            </ol>
                        </label>
                        <br><br>
                        <input type="submit" class="btn-outline-primary btn form-control" name="submit" value="Submit" id="submit">
                    </form>
                    <?php
                        echo $html_outupt;
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>sessionAndCookie/loginCookie.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>ajaxPractice/registrationForm.php" class="text-white">
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