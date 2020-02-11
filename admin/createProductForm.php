<?php
include_once "header.php";
?>
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
                        <p>در این قسمت اطلاعات محصول را وارد کنید </p>

                        <form role="form">
                            <div class="form-group"><label>نام</label> <input type="text" placeholder="نام محصول"
                                                                              class="form-control"></div>
                            عکس محصول:
                            <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                آپلود عکس
                            </label>

                        </form>
                        <br/>
                        نوع محصول:
                        <select class="form-control m-b" name="account">
                            <option></option>
                            <option>کفش</option>
                            <option>کیف</option>
                        </select>

                        قیمت:
                        <input type="text" class="form-control ltr-input" data-mask="9,999,999 تومان"
                               placeholder="">

                        <br/>
                        <br/>
                        <div class="col-sm-12 col-sm-offset-4">
                            <button class="btn btn-white" type="submit">لغو</button>
                            <button class="btn btn-primary" type="submit">ذخیره</button>
                        </div>
                    </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
<?php
include_once "footer.php"
?>