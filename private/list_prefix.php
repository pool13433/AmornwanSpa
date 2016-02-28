<?php include '../database/database.php'; ?>
<fieldset>
    <legend>จัดการคำนำหน้าชื่อ</legend>
    <div class="row">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ค้นหา</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="ค้นหา">
                </div>
                <button type="submit" class="btn btn-success">ค้นหา</button>
            </div>
        </form>
        <a href="./index.php?page=form_prefix" class="btn btn-primary">+ เพิ่มคำนำหน้าชื่อ</a>
    </div><br>
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
                $rowlimit = 10;
                $database = new Database();
                $conn = $database->openDb();
                $begin = (empty($_GET['begin']) ? 0 : $_GET['begin']);
                $sql = "SELECT * FROM prefix limit $begin,$rowlimit";
                $stmt = $conn->query($sql);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $countResult = count($result);
                foreach ($result as $index => $prefix) {
                    ?>
                    <tr>
                        <td><?= $prefix['id'] ?></td>
                        <td><?= $prefix['name'] ?></td>
                        <td><a href="index.php?page=form_prefix&id=<?= $prefix['id'] ?>" class="btn btn-info">แก้ไข</a></td>
                        <td><a href="javascript:void(0)" class="btn btn-danger">ลบ</a></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" style="text-align: right">
                        <b>
                            <?php if ($begin > 0) { ?>
                                <a href="index.php?page=list_prefix&begin=<?= ($begin - $rowlimit) ?>"><< ก่อนหน้า </a>
                            <?php } ?>
                            <?php if ($countResult >= $rowlimit) { ?>
                                <a href="index.php?page=list_prefix&begin=<?= ($begin + $rowlimit) ?>">ถัดไป >></a>
                            <?php } ?>
                        </b>
                    </td>
                </tr>

            </tfoot>
        </table>
    </div>
</fieldset>
