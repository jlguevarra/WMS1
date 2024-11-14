<?= $this->extend("layout") ?>

<?= $this->section("content") ?>

<div class="container mt-5">
    <h3>Edit Customer</h3>
    <form action="<?= base_url('/dashboard/customers/update/' . $customer['id']); ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= esc($customer['name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" value="<?= esc($customer['contact']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?= esc($customer['address']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="<?= base_url('/dashboard/customers'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?= $this->endSection() ?>
