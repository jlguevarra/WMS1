<!-- app/Views/incoming_goods/edit.php -->
<?= $this->extend("layout") ?>

<?= $this->section("content") ?>

<div class="container">
    <h3 class="my-4">Edit Incoming Good</h3>

    <form action="<?= base_url('/incoming_goods/update/' . $incomingGood['id']); ?>" method="post">
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="<?= $incomingGood['date'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name" value="<?= $incomingGood['item_name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $incomingGood['quantity'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('/incoming_goods'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?= $this->endSection() ?>
