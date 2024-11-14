<?= $this->extend("layout") ?>

<?= $this->section("content") ?>

<div class="container">
    <h3 class="my-4 text-center">Edit Item</h3>

    <form action="<?= base_url('/inventory/update/'.$item['id']); ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= esc($item['name']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" value="<?= esc($item['sku']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?= esc($item['description']); ?></textarea>
        </div>
        
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?= esc($item['quantity']); ?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('/inventory'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?= $this->endSection() ?>
