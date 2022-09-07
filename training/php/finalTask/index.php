<?php
require_once 'logic.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/super-build/ckeditor.js"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <title>ckeditor Crud</title>
</head>

<body>
    <div class="wrapper">
        <div class="text-center mt-4 name">
            Information
        </div>
        <form method="POST" enctype="multipart/form-data" id="addProviderForm" class="p-3 mt-3">
            <label for="userName">Name<span class="text-danger">*</span></label>
            <br><span class="text-danger"><?php echo $erName; ?></span>
            <div class="form-field d-flex align-items-center">
                <input type="text" name="userName" id="userName" placeholder="User_Name" value="<?php echo $userName; ?>">
            </div>
            <label for="email">Email<span class="text-danger">*</span></label>
            <br><span class="text-danger"><?php echo $erEmail; ?></span>
            <div class="form-field d-flex align-items-center">
                <input type="email" name="email" id="email" placeholder="Email_ID" value="<?php echo $email; ?>">
            </div>
            <label for="editor1">Description<span class="text-danger">*</span></label>
            <br><span class="text-danger"><?php echo $erDesc; ?></span>
            <div class=" d-flex align-items-center form-field">
                <textarea name="desc" placeholder="" id="editor1" class="border border-dark border-1" cols="300" rows="200"><?php echo $desc; ?></textarea>
            </div>
            <div class=" d-flex">
                <?php
                if (isset($_GET['nId']) && $_GET['nId'] != '') { ?>
                    <input type="submit" value="Update" class="btn btn-danger mx-2" name="edit">
                <?php
                } else { ?>
                    <input type="submit" value="Save" class="btn btn-success mx-2" name="submit">
                <?php
                } ?>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalCart">Show Data</button>
            </div>
        </form>
    </div>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Description</th>
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
    <script src="index.js"></script>
    <script>
        <?php
        if ($insert == 1) { ?>
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
        } elseif ($insert == 01) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Data is not recorded',
                showConfirmButton: false,
                timer: 3000
            });
        <?php
        } ?>
    </script>
</body>

</html>