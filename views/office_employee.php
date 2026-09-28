<?php require 'views/navbar.php'; ?>

<div class="mx-auto" style="max-width: 520px;">
    <h1 class="text-center my-4" style="color: #2B3990;">Office Employees</h1>
    <table class="table table-bordered border-secondary-subtle">
        <thead>
            <tr>
                <th class="fw-normal" style="background-color: #94D3F7;">Employee</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Office</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relations as $r) { ?>
            <tr>
                <td class="py-3"><?= $r['nama_karyawan'] ?></td>
                <td class="py-3"><?= $r['nama_kantor'] ?></td>
                <td class="py-3"><a href="?page=office_employee&delete=<?= $r['id'] ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <form method="POST" class="mt-5">
        <div class="row mb-2 justify-content-center align-items-center">
            <label class="col-3 text-end">Employee</label>
            <div class="col-6">
                <select class="form-select" name="employee_id">
                    <?php foreach ($employees as $e) { ?>
                    <option value="<?= $e['id'] ?>"><?= $e['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center">
            <label class="col-3 text-end">Office</label>
            <div class="col-6">
                <select class="form-select" name="office_id">
                    <?php foreach ($offices as $o) { ?>
                    <option value="<?= $o['id'] ?>"><?= $o['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="text-center">
            <button class="btn px-5 border-dark" name="save" style="background-color: #94D3F7;">SAVE</button>
        </div>
    </form>
</div>
</div>
</body>
</html>