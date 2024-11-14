<?=$this->extend("layout")?>

<?=$this->section("content")?>

<div class="container">
    <h3 class="my-4">Edit Supplier</h3>

    <form action="<?= base_url('/dashboard/suppliers/update/' . $supplier['id']); ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $supplier['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" value="<?= $supplier['contact']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?= $supplier['address']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('/dashboard/suppliers'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?=$this->endSection()?>
