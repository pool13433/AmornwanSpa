<?php if (!empty($_SESSION['member'])) { ?>
    <fieldset>
        <h3>เข้าสู่ระบบ</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td>username</td>
                    <td><input type="text" class="form-control input-sm" name="username" id="username"/></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" class="form-control input-sm" name="password" id="password"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="button" class="btn btn-success btn-sm">เข้าสู่ระบบ</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="button" class="btn btn-warning btn-sm">ล้างข้อมูล</button></td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <table class="table">
            <tbody>
                <tr>
                    <td><a href="./index.php?page=home">หน้าหลัก</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=register">สมัครสมาชิก</a></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
<?php } else { ?>
    <fieldset>
        <h3>ข้อมูลผู้ใช้งาน</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td>ชื่อผู้ใช้งาน</td>
                    <td> TEST</td>
                </tr>
                <tr>
                    <td>สถานะ</td>
                    <td> admin</td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="button" class="btn btn-danger btn-sm">ออกจากระบบ</button></td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <h4>เมนู</h4>
        <table class="table">
            <tbody>
                <tr>
                    <td><a href="./index.php?page=show_prefix">จัดการคำนำหน้าชื่อ</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=index">จัดการข้อมูลสมาชิก</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=index">จัดการสปาหน้า</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=index">จัดการสปาตัว</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=index">จัดการเตียง</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=index">ตรวจสอบและอนุมัติการจอง</a></td>
                </tr>
                <tr>
                    <td><a href="./index.php?page=index">เรียกดูรายงาน</a></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
<?php } ?>
