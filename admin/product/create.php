<!DOCTYPE html>
<?php
include_once "../header.php";
?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap.rtl.min.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="../css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet">
<link href="../css/style.rtl.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>فرم افزودن مشتری </h5>
            <div class="ibox-tools">

            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"></h3>
                    <p>در این قسمت اطلاعات مشتری را وارد کنید </p>
                    <form role="form">
                        <div class="form-group"><label>نام</label> <input type="text" placeholder="نام مشتری" class="form-control"></div>
                        <div class="form-group"><label>نام خانوادگی</label> <input type="text" placeholder="نام خانوادگی مشتری" class="form-control"></div>
                        <div class="form-group"><label>ایمیل</label> <input type="email" placeholder="ایمیل مشتری را وارد کنید" class="form-control"></div>
                        <div class="form-group"><label>رمز عبور</label> <input type="password" placeholder="رمز عبور" class="form-control">
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">جنسیت:
                            </label>
                            <div class="col-sm-10">
                                <div><label> <input type="radio" checked="" value="male" id="maleChecked" name="optionsRadios"> مرد </label></div>
                                <div><label> <input type="radio" value="female" id="femaleChecked" name="optionsRadios"> زن </label></div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit">
                                <strong>افزودن</strong></button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include_once "../footer.php"
?>