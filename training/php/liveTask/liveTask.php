<?php

$serverName = '192.168.101.86';
$userName = 'root';
$password = 'deep70';
$dbName = 'nensi_darji';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);
// connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['nId']) && $_GET['nId'] != '') {
    $nId = $_GET['nId'];
    $select = 'SELECT * from products where nId = ' . $nId . ' AND bStatus = 1';
    $result = mysqli_query($connection, $select);
    while ($row = mysqli_fetch_assoc($result)) {
        $category = $row['sCategory'];
        $desc = $row['sDescription'];
        $status = $row['bStatus'];
    }
}

if (isset($_POST['edit'])) {
    $category = $_POST['category'];
    $desc = $_POST['desc'];
    $status = $_POST['switch'];
    if ($status == 'on') {
        $status = '1';
    } else {
        $status = '0';
    }
    if (empty($category)) {
        $erCatName = 'Category Name is required';
    }

    if (empty($desc)) {
        $erDesc = 'Description is required';
    }

    if (!empty($category) && !empty($desc)) {
        $update = "UPDATE products SET sCategory='$category', sDescription='$desc', bStatus = '$status' WHERE nId = " . $_GET['nId'];
        if (mysqli_query($connection, $update)) {
            $ins = 1;
        } else {
            $ins = 01;
            echo "Error: " . $update . "<br>" . mysqli_error($connection);
        }
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $nId = $_POST['nId'];

    $delete = "DELETE FROM products WHERE nId=" . $nId;

    if (mysqli_query($connection, $delete)) {
        $del = 1;
    } else {
        $del = 0;
    }
    echo $del;
    exit;
}

if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $desc = $_POST['desc'];
    $status = $_POST['switch'];
    if ($status == 'on') {
        $status = '1';
    } else {
        $status = '0';
    }
    if (empty($category)) {
        $erCatName = 'Category Name is required';
    }

    if (empty($desc)) {
        $erDesc = 'Description is required';
    }
    if (!empty($category) && !empty($desc)) {
        $insert = "INSERT INTO products (sCategory, sDescription, bStatus)
        VALUES ('$category', '$desc', '$status')";
        if (mysqli_multi_query($connection, $insert)) {
            $ins = 1;
            $last_id = mysqli_insert_id($connection);
        } else {
            $ins = 01;
            echo "Error: " . $insert . "<br>" . mysqli_error($connection);
        }
    }
}
$select = 'SELECT * from products where bStatus = 1';
$result = mysqli_query($connection, $select);

if (mysqli_num_rows($result) > 0) {
    $srNo = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $table .= "<tr>
                <td>" . $srNo++ . "</td>
                <td>" . $row['sCategory'] . "</td>
                <td>" . $row['sDescription'] . "</td>
                <td><div class='ms-5 form-check form-switch '><input class='form-check-input h2' name='switch' type='checkbox' id='flexSwitchCheckChecked' checked></div></td>
                <td><div class='d-flex justify-center'><i class='fa-solid fa-pen-to-square edit' id='" . $row['nId'] . "'></i><i class='fa-solid fa-trash-can ms-3 delete' id='" . $row['nId'] . "'></i></div></td>
            </tr>";
    }
} else {
    $table =  "0 results";
}

mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/super-build/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script> -->
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="d-flex justify-content-center ">
        <div class="m-5">
            <h1>Product Category form</h1>
            <form method="POST" enctype="multipart/form-data" id="addProviderForm">
                <div class="row mb-4 mt-4">
                    <div class="col-6 form-group">
                        <label for="titl" class='h4'>Category Name: <span class="text-danger">*</span></label>
                        <input type="text" name="category" id="" placeholder="Category" class="form-control border border-dark border-1" value="<?php echo $category; ?>">
                        <span class="text-danger"><?php echo $erCatName; ?></span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6 form-group">
                        <label for="titl" class='h4'>Description<span class="text-danger">*</span></label>
                        <div class="border border-dark rounded">
                            <textarea name="desc" placeholder="" id="editor1" class="form-control border border-dark border-1" cols="30" rows="10"><?php echo $desc; ?></textarea>
                        </div>
                        <span class="text-danger"><?php echo $erDesc; ?></span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6 form-group">
                        <label class="h4">Status: </label>
                        <div class="ms-5 form-check form-switch ">
                            <input class="form-check-input h2" name="switch" type="checkbox" id="flexSwitchCheckChecked" <?php if (isset($status)) {
                                                                                                                                if ($status == 1) {
                                                                                                                                    echo 'checked';
                                                                                                                                }
                                                                                                                            } else {
                                                                                                                                echo 'checked';
                                                                                                                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-1 form-group">
                        <?php
                        if (isset($_GET['nId']) && $_GET['nId'] != '') { ?>
                            <input type="submit" value="Update" class="btn btn-success px-4 py-2 " name="edit">
                        <?php
                        } else { ?>
                            <input type="submit" value="Save" class="btn btn-success px-5 py-2" name="submit">
                        <?php
                        } ?>
                    </div>
                    <div class="col-11 form-group">
                        <!-- Button trigger modal-->
                        <button type="button" class="btn btn-warning p-2" data-toggle="modal" data-target="#modalCart">Show Data</button>

                        <!-- Modal: modalCart -->
                        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Your cart</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">

                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product name</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                echo $table; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal: modalCart -->
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('figure img').width(300);

            $('.delete').click(function(e) {

                if (confirm('Are you Sure to delete this details?')) {
                    var nId = $(this).attr('id');

                    $.ajax({
                        type: "post",
                        data: {
                            'action': 'delete',
                            'nId': nId
                        },
                        success: function(response) {
                            if (response == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data Deleted successfully',
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                window.location.href = "http://nensi.localhost///php/liveTask/liveTask.php";
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Data is not delete',
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                            }
                        }
                    });
                }
            });

            $('.edit').click(function(e) {
                var nId = $(this).attr('id');
                window.location.href = "http://nensi.localhost///php/liveTask/liveTask.php?nId=" + nId;
            });
        });


        <?php
        if ($ins == 1) { ?>
            Swal.fire({
                icon: 'success',
                title: <?php
                        if (isset($_GET['nId']) && $_GET['nId'] != '') { ?> 'Data Updated Successfully'
            <?php
                        } else { ?> 'New records created successfully'
            <?php
                        } ?>,
            showConfirmButton: false,
            timer: 3000
            });
        <?php
        } elseif ($ins == 01) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Data is not recorded',
                showConfirmButton: false,
                timer: 3000
            });
        <?php
        } ?>

        CKEDITOR.ClassicEditor.create(document.getElementById("editor1"), {
            toolbar: {
                items: [
                    'CKFinder', 'CKBox', 'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                removeItems: ['fontColor', 'fontBackgroundColor', 'bold'],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                // 'ExportPdf',
                // 'ExportWord',
                // 'CKBox',
                // 'CKFinder',
                'EasyImage',
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType'
            ]
        });
    </script>

</body>

</html>