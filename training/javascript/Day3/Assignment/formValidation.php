
<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 m-md-5 text-center border border-solid shadow-lg border-primary ">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Employee Details
                </h4>
                <div class="text-start">
                    <form method="get">
                        <label class="mb-2">
                            EmployeeId: <input type="text" class="mb-2 border-2 border-solid rounded border-primary" placeholder="EmployeeId" value="" id="employeeId">
                        </label><br>
                        <label class="mb-2">
                            EmployeeName: <input type="text" class="border-2 border-solid rounded border-primary" placeholder="Name" value="" id="employeeName">
                        </label><br>
                        <label class="mb-2">
                            Age: <input class="border-2 border-solid rounded border-primary" type="number" placeholder="age" value="" id="age">
                        </label><br>
                        <label class="mb-2" id="gender">
                            Gender: <input class="border-solid rounded border-primary" type="radio" value="" name="gender" id="male">Male
                            <input class="border-solid rounded border-primary" type="radio" value="" name="gender" id="female">Female
                            <input class="border-solid rounded border-primary" type="radio" value="" name="gender" id="other">Other
                        </label><br>
                        <label class="mb-2">
                            Designation: <select name="Designation" id="designation" class="mb-2 border-2 border-solid rounded border-primary">
                                <option value="Trainee Software Engineer">Trainee Software Engineer</option>
                                <option value="Junior Software Engineer">Junior Software Engineer</option>
                                <option value="Senior Software Engineer">Senior Software Engineer</option>
                                <option value="HR Manager">HR Manager</option>
                            </select>
                        </label><br>
                        <label class="mb-2">
                            Salary: <input type="text" placeholder="salary" value="" id="salary" class="mb-2 border-2 border-solid rounded border-primary">
                        </label><br>
                        <label class="mb-2">
                            Location: <select class="mb-2 border-2 border-solid rounded border-primary" name="Location" id="location">
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Patan">Patan</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                            </select>
                        </label><br>
                        <label class="mb-2">
                            Email: <input class="mb-2 border-2 border-solid rounded border-primary" type="email" value="" id="email">
                        </label><br>
                        <label class="mb-2">
                            Date of Joining: <input class="mb-2 border-2 border-solid rounded border-primary" type="text" value="" name=date1 placeholder="MM-DD-YYY" id="date1">
                        </label><br>
                        <label class="mb-2">
                            Contact Number: <input type="tel" value="" placeholder="contact number" id="number" class="mb-2 border-2 border-solid rounded border-primary">
                        </label><br>
                        <button type="button" class="px-5 py-2 rounded-pill btn-outline-primary btn-white" id="submit" onclick="validate()">submit</button>
                    </form>
                </div>
            </div>

            <script>
                function validate() {
                    var id1 = document.getElementById('employeeId').value;
                    var name1 = document.getElementById('employeeName').value;
                    var age1 = document.getElementById('age').value;
                    var salary1 = document.getElementById('salary').value;
                    var email1 = document.getElementById('email').value;
                    var enterrdDate = document.getElementById('date1').value;
                    var number1 = document.getElementById('number').value;
                    var pattern2 = /\d\d-\d\d-\d\d\d\d/;
                    var pattern1 = /\w{5,}/;
                    if (id1 === "" || age1 === "" || salary1 === "" || email1 === "" || enterrdDate === "" || number1 === "" || name1 === "") {
                        alert("please enter all values");
                    } else {
                        if (pattern1.test(id1)) {
                            console.log("okay");
                        } else {
                            alert("please enter atleast 5 character of id.");
                        }
                        if (pattern2.test(enterrdDate)) {
                            console.log("okay");
                        } else {
                            alert("please enter date in proper format.");
                        }
                    }
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>