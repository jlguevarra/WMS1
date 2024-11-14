<?= $this->extend("layout") ?>
<?= $this->section("content") ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-lg-2 px-0 bg-dark" id="sidebar">
            <div class="d-flex flex-column align-items-start text-white min-vh-100" id="sidebar-content">
                <a href="#" class="fs-4 py-3 ps-3 text-white text-decoration-none">WMS - Inventory</a>
                <ul class="nav flex-column w-100">
                    <li class="nav-item"><a href="<?= base_url('/dashboard'); ?>" class="nav-link text-white px-3">Dashboard</a></li>
                    <li><a href="<?= base_url('/inventory'); ?>" class="nav-link text-white px-3 active">Inventory</a></li>
                    <li><a href="<?= base_url('/dashboard/tracking'); ?>" class="nav-link text-white px-3">Tracking</a></li>
                    <li><a href="<?= base_url('/dashboard/suppliers'); ?>" class="nav-link text-white px-3">Suppliers</a></li>
                    <li><a href="<?= base_url('/dashboard/customers'); ?>" class="nav-link text-white px-3">Customers</a></li>
                    <li><a href="<?= base_url('/incoming_goods'); ?>" class="nav-link text-white px-3">Incoming</a></li>
                    <li><a href="<?= base_url('/outgoing_goods'); ?>" class="nav-link text-white px-3">Outgoing</a></li>
                </ul>
                <a href="<?= base_url('/logout'); ?>" class="text-white mt-auto px-3 py-3">Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col py-3" id="main-content">
            <!-- Top Header with Profile -->
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-3 shadow-sm">
                <button class="btn btn-primary" id="toggle-sidebar">☰</button>
                <h4 class="m-0">Inventory Summary</h4>
                <div>
                    <img src="<?= base_url('images/profile.png'); ?>" alt="Profile" class="rounded-circle" width="35" height="35">
                </div>
            </div>

            <!-- Inventory Table with Search -->
            <div class="container mt-4">
                <a href="<?= base_url('/inventory/create'); ?>" class="btn btn-primary mb-3">Add New Item</a>

                <!-- Search Bar -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search by item name or SKU">
                </div>

                <table class="table table-bordered table-hover mt-3" id="inventoryTable">
                    <thead class="table-dark">
                        <tr>
                            <th>Item Name</th>
                            <th>SKU</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?= esc($item['name']) ?></td>
                            <td><?= esc($item['sku']) ?></td>
                            <td><?= esc($item['description']) ?></td>
                            <td><?= esc($item['quantity']) ?></td>
                            <td>
                                <a href="<?= base_url('/inventory/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('/inventory/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
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

    /* Table Styling */
    .table {
        width: 100%;
        text-align: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #333;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
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

<!-- JavaScript for Sidebar Toggle and Search Functionality -->
<script>
    // Sidebar Toggle
    document.getElementById("toggle-sidebar").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("collapsed");
    });

    // Search Functionality
    document.getElementById("searchInput").addEventListener("keyup", function() {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll("#inventoryTable tbody tr");

        rows.forEach(row => {
            const itemName = row.cells[0].textContent.toLowerCase();
            const sku = row.cells[1].textContent.toLowerCase();
            row.style.display = (itemName.includes(filter) || sku.includes(filter)) ? "" : "none";
        });
    });
</script>

<?= $this->endSection() ?>
