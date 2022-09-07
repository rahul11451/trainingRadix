<style>
    @media (max-width:571px) {
        .column10{
            font-size: 10px;
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
        <div class="col-lg-10 lg:ps-5 pt-4 column10">

            <h1>Assignment | Employee Details</h1>

            <form>
                <label>
                    Name: <input type="text" placeholder="Name" required value="Nensi darji" style="margin-bottom: 20px;">
                </label><br>
                <label>
                    Age: <input type="number" placeholder="age" required value="21" style="margin-bottom: 20px;">
                </label><br>
                <label>
                    Gender: <input type="radio" value="Male" style="margin-bottom: 20px;">Male
                    <input type="radio" value="Female" checked style="margin-bottom: 20px;">Female
                    <input type="radio" value="Other"style="margin-bottom: 20px;">Other
                </label><br>
                <label>
                    Designation: <select name="Designation" style="margin-bottom: 20px;">
                        <option value="Trainee Software Engineer">Trainee Software Engineer</option>
                        <option value="Junior Software Engineer">Junior Software Engineer</option>
                        <option value="Senior Software Engineer">Senior Software Engineer</option>
                        <option value="HR Manager">HR Manager</option>
                    </select>
                </label><br>
                <label>
                    Salary: <input type="text" placeholder="salary" value="30000" style="margin-bottom: 20px;">
                </label><br>
                <label>
                    Location: <select name="Location" style="margin-bottom: 20px;">
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Patan">Patan</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                    </select>
                </label><br>
                <label>
                    Email: <input type="email" value="ndnensidarji@gmail.com" required style="margin-bottom: 20px;">
                </label><br>
                <label>
                    Date of Joining: <input type="date" value="31-01-2022" required style="margin-bottom: 20px;">
                </label><br>
                <label>
                    Contact Number: <input type="tel" value="7046379223" placeholder="contact number" required style="margin-bottom: 20px;">
                </label><br>
                <button style="margin-bottom: 20px;" class="btn border-2 btn-secondary">submit</button>
            </form>

        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>