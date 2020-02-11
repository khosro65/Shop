<?php
include_once "header.php";
?>

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>محصولات</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">خانه</a>
                </li>
                <li>
                    <a>محصولات</a>
                </li>
                <li class="active">
                    <strong>همه محصولات</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>محصولات</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="row">
                    <a class="btn btn-primary" href="createProductForm.php">
                        <i class="fa fa-plus">
                        </i>
                        &nbsp;محصول جدید</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th>نام</th>
                            <th>دسته بندی</th>
                            <th>عکس</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>کفش ورزشی</td>
                            <td>کفش</td>
                            <td><img class="img-circle img-for-list" src="../upload/shoe.webp"></td>
                            <td>
                                <a class="btn btn-primary dim">
                                    <i class="fa fa-edit">
                                    </i>
                                    ویرایش
                                </a>

                                <a class="btn btn-danger dim">
                                    <i class="fa fa-remove">
                                    </i>
                                    حذف
                                </a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
<?php
include_once "footer.php"
?>