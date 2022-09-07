<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <h1>Nensi</h1>
            <video autoplay width="800" height="500" class="img-fluid">
                <source src="project.mp4">
                <track src="project_no.vtt" kind="subtitles" srclang="no" label="English">
            </video>
            <video controls width="500" height="500" src="project.mp4" class="img-fluid">
                <track src="project_no.vtt" kind="subtitles" srclang="no" label="English" default>
            </video>
            <video controls width="500" height="500" src="project.mp4" poster="<?php echo SITE_URL; ?>/Images/html/wallpaper.jpg" class="img-fluid">
                <track src="project_no.vtt" kind="subtitles" srclang="no" label="English">
            </video>
        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>