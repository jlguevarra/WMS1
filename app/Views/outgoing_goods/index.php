// app/Views/outgoing_goods/index.php
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-lg-2 px-0 bg-dark" id="sidebar">
            <div class="d-flex flex-column align-items-start text-white min-vh-100" id="sidebar-content">
                <a href="#" class="fs-4 py-3 ps-3 text-white text-decoration-none">WMS - Outgoing Goods</a>
                <ul class="nav flex-column w-100">
                    <li class="nav-item"><a href="<?= base_url('/dashboard'); ?>" class="nav-link text-white px-3">Dashboard</a></li>
                    <li><a href="<?= base_url('/dashboard/inventory'); ?>" class="nav-link text-white px-3">Inventory</a></li>
                    <li><a href="<?= base_url('/dashboard/tracking'); ?>" class="nav-link text-white px-3">Tracking</a></li>
                    <li><a href="<?= base_url('/dashboard/suppliers'); ?>" class="nav-link text-white px-3">Suppliers</a></li>
                    <li><a href="<?= base_url('/dashboard/customers'); ?>" class="nav-link text-white px-3">Customers</a></li>
                    <li><a href="<?= base_url('/incoming_goods'); ?>" class="nav-link text-white px-3">Incoming</a></li>
                    <li><a href="<?= base_url('/outgoing_goods'); ?>" class="nav-link text-white px-3 active">Outgoing</a></li>
                </ul>
                <a href="<?= base_url('/logout'); ?>" class="text-white mt-auto px-3 py-3">Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col py-3" id="main-content">
            <!-- Top Header with Profile -->
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-3 shadow-sm">
                <button class="btn btn-primary" id="toggle-sidebar">☰</button>
                <h4 class="m-0">Outgoing Goods</h4>
                <div>
                    <img src="<?= base_url('images/profile.png'); ?>" alt="Profile" class="rounded-circle" width="35" height="35">
                </div>
            </div>

            <!-- Outgoing Goods Table -->
            <div class="container mt-4">
                <a href="<?= base_url('/outgoing_goods/create'); ?>" class="btn btn-primary mb-3">Add New</a>
                <table class="table table-bordered table-hover mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Date</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($outgoingGoods as $item): ?>
                        <tr>
                            <td><?= esc($item['date']) ?></td>
                            <td><?= esc($item['item_name']) ?></td>
                            <td><?= esc($item['quantity']) ?></td>
                            <td>
                                <a href="<?= base_url('/outgoing_goods/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('/outgoing_goods/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Additional CSS Styling -->
<style>
    /* Sidebar Styling */
    #sidebar {
        width: 200px;
        transition: width 0.3s;
        position: fixed;
    }
    #sidebar-content {
        transition: opacity 0.3s;
    }
    #sidebar.collapsed {
        width: 70px;
    }
    #sidebar.collapsed #sidebar-content {
        opacity: 0;
    }

    /* Main Content Adjustments */
    #main-content {
        margin-left: 200px;
        transition: margin-left 0.3s;
    }
    #sidebar.collapsed ~ #main-content {
        margin-left: 70px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        #sidebar {
            position: relative;
            width: 100%;
        }
        #main-content {
            margin-left: 0;
        }
    }

    a {
        text-decoration: none;
    }
</style>

<!-- JavaScript for Sidebar Toggle -->
<script>
    document.getElementById("toggle-sidebar").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("collapsed");
    });
</script>

<?= $this->endSection() ?>
