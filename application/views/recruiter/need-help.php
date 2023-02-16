<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Need Help ? | Hirbox</title>



    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include 'includes/header.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Need Help ?</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active">Need Help</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Add a Job</h4>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div> -->
                                <div class="card-body mt-3">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Name</label>
                                                    <input id="productname" name="title" type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="title">Phone Number</label>
                                                    <input id="productname" name="title" type="text" class="form-control" placeholder="Phone Number">
                                                </div> -->


                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Phone Number</label>
                                                    <input id="productname" name="title" type="text" class="form-control" placeholder="Phone Number">
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="productdesc">Email </label>
                                                    <input id="price" name="price" type="text" class="form-control" placeholder="Email ">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productdesc">Adding as </label>
                                                    <input id="price" name="price" type="text" class="form-control" placeholder="Adding as">
                                                </div> -->


                                            </div>

                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="productdesc">Email </label>
                                                    <input  name="price" type="email" class="form-control" placeholder="Email ">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="productdesc">Subject </label>
                                                    <input name="price" type="text" class="form-control" placeholder="Subject ">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="productdesc">Message </label>
                                                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Message "></textarea>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>

                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-5">
                                            <h5 class="mb-3">Contact Details :</h5>
    
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="width: 175px;"> <i class="fas fa-phone-alt"></i> Number</th>
                                                            <td>9090909090</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><i class="far fa-envelope"></i> Email</th>
                                                            <td>abc@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><i class="far fa-building"></i> Address</th>
                                                            <td>abc block US</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th scope="row"> <i class=" fas fa-globe"></i> Website</th>
                                                            <td>abc.com</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end Specifications -->

                   

                   

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- end main content-->





    </div>
    <!-- END layout-wrapper -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'includes/footerlink.php'; ?>

</body>

</html>