<style>
    @media (max-width: 300px){
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
        <div class="col-lg-10 lg:ps-5 pt-4 ">
            <h1>Practical 7 | Elements:</h1>
            <form name="all elements" class="column10">
                <hr>
                <label for="date">Date</label>
                <input type="date" name="" id="">
                <br>
                <label for="time">time</label>
                <input type="time" name="" id="">
                <br>
                <label for="month">month</label>
                <input type="month" name="" id="">
                <br>
                <label for="week">week</label>
                <input type="week" name="" id="">
                <br>
                <label for="range">range</label>
                <input type="range" name="" id="">
                <br>
                <label for="search">search</label>
                <input type="search" placeholder="search">
                <br>
                <label for="telephone">telephone</label>
                <input type="tel" required>
                <br>
                <label for="email">email</label>
                <input type="email" required>
                <br>
                <label for="color">color</label>
                <input type="color" name="" id="">
                <br>
                <label for="data list">data list</label>
                <input type="text" list="datalist">
                <datalist id="datalist">
                    <option label="female" value="female"></option>
                    <option value="male" label="male"></option>
                </datalist>
                <br>
                <label for="progress">progress</label>
                <progress value="5" max="50"></progress>
                <br>
                <button>submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>