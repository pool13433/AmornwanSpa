<?php include '../database/database.php'; ?>
<fieldset>
    <legend>จัดการคำนำหน้าชื่อ</legend>
    <div class="row">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
        </form>
        <a href="./index.php?page=form_prefix" class="btn btn-primary">เพิ่มคำนำหน้าชื่อ</a>
    </div>
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>จัดการคำนำหน้าชื่อ</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $database = new Database();
                $conn = $database->openDb();
                $sql = 'SELECT * FROM prefix';
                $stmt = $conn->query($sql);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $index => $prefix) {
                    ?>
                    <tr>
                        <td><?=$prefix['id']?></td>
                        <td><?=$prefix['name']?></td>
                        <td><a href="index.php?page=form_prefix&id=<?=$prefix['id']?>" class="btn btn-info">แก้ไข</a></td>
                        <td><a href="javascript:void(0)" class="btn btn-danger">ลบ</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</fieldset>
