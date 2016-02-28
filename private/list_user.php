<?php include '../database/database.php'; ?>
<fieldset>
    <legend>จัดการข้อมูลสมาชิก</legend>
    <div class="row">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ชื่อผู้ใช้งาน</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="ค้นหา">
                </div>
                <button type="submit" class="btn btn-success">ค้นหา</button>
            </div>
        </form>
        <a href="./index.php?page=form_user" class="btn btn-primary">+ เพิ่มสมาชิก</a>
    </div><br>
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมล์</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" style="text-align: right">
                        <a><<ก่อนหน้า </a>
                        <a>ถัดไป>></a>
                    </td>
                </tr>
                
            </tfoot>
        </table>
    </div>
</fieldset>
