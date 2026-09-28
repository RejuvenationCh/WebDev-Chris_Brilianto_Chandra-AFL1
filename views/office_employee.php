<?php require 'views/navbar.php'; ?>

<div class="col-md-6 mx-auto">

    <h1 class="title text-center fw-normal mt-4 mb-4">Office Employees</h1>

    <table class="table table-bordered align-middle" style="border-color: #aaa;">
        <tr>
            <th class="blue fw-normal py-3" style="width: 42%;">Employee</th>
            <th class="blue fw-normal py-3" style="width: 42%;">Office</th>
            <th class="blue fw-normal py-3">Delete</th>
        </tr>
        <?php foreach ($relations as $r) { ?>
        <tr>
            <td class="py-3"><?php echo $r['nama_karyawan']; ?></td>
            <td class="py-3"><?php echo $r['nama_kantor']; ?></td>
            <td class="py-3"><a class="btn btn-sm btn-outline-danger" href="?page=office_employee&delete=<?php echo $r['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>

    <form method="POST" class="mt-5">
        <div class="row justify-content-center align-items-center">
            <label class="col-3">Employee</label>
            <div class="col-5 position-relative">
                <select class="form-control border-2 rounded-0 py-3 pe-5" style="border-color: #aaa;" name="employee_id">
                    <?php foreach ($employees as $e) { ?>
                    <option value="<?php echo $e['id']; ?>"><?php echo $e['nama']; ?></option>
                    <?php } ?>
                </select>
                <span class="position-absolute top-50 end-0 translate-middle-y me-4 pe-none fs-3" style="color: #444;">▼</span>
            </div>
        </div>

        <div class="row justify-content-center align-items-center mb-4">
            <label class="col-3">Office</label>
            <div class="col-5 position-relative">
                <select class="form-control border-2 border-top-0 rounded-0 py-3 pe-5" style="border-color: #aaa;" name="office_id">
                    <?php foreach ($offices as $o) { ?>
                    <option value="<?php echo $o['id']; ?>"><?php echo $o['nama']; ?></option>
                    <?php } ?>
                </select>
                <span class="position-absolute top-50 end-0 translate-middle-y me-4 pe-none fs-3" style="color: #444;">▼</span>
            </div>
        </div>

        <div class="text-center">
            <button class="btn blue border-dark rounded-3 px-5 py-2 fs-4" name="save">SAVE</button>
        </div>
    </form>

</div>

</div>
</body>
</html>
