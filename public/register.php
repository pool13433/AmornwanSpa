<?php include '../database/database.php'; ?>
<style>
    label.require{
        color:red;
    }
</style>
<form class="form-horizontal">
    <fieldset>
        <legend>สมัครสมาชิก</legend>
        <div class="row">  
            <h4> ข้อมูลการเข้าใช้ระบบ</h4>
        </div>
        <div class="row">  

            <div class="form-group">
                <label for="" class="col-sm-2 control-label" >คำนำหน้า</label>
                <div class="col-sm-3">
                    <select class="form-control">
                        <option value="" >
                            เลือกคำนำหน้าชื่อ
                        </option>
                   
                    </select>
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">ชื่อผู้ใช้</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="username" placeholder="" name="username">
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">รหัสผ่าน</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="password" placeholder="" name="password">
                </div>
                <label class="require">*</label>
            </div>

        </div>
        <div class="row">  
            <h4> ข้อมูลส่วนตัว</h4>
        </div>
        <div class="row">  
            <div class="form-group">
                <label for="fname" class="col-sm-2 control-label">ชื่อ</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="fname" placeholder="" name="fname">
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <label for="lname" class="col-sm-2 control-label">นามสกุล</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="lname" placeholder="" name="lname">
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">ที่อยู่</label>
                <div class="col-sm-5">
                    <textarea class="form-control" rows="3" name="address"></textarea>
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">เบอร์โทร</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="phone" placeholder="" name="phone">
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">อีเมล์</label>
                <div class="col-sm-3">
                    <input type="email" class="form-control" id="email" placeholder="" name="email">
                </div>
                <label class="require">*</label>
            </div>
            <div class="form-group">
                <div class="col-sm-3 col-lg-offset-2">
                    <button type="submit" class="btn btn-success">ยืนยัน</button>
                    <button type="submit" class="btn btn-danger">ยกเลิก</button>
                </div>
            </div>
        </div>

    </fieldset>
</form>
