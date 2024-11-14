<?=$this->extend("layout")?>

<?=$this->section("content")?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-lg-2 px-0 bg-dark" id="sidebar">
            <div class="d-flex flex-column align-items-start text-white min-vh-100" id="sidebar-content">
                <a href="#" class="fs-4 py-3 ps-3 text-white text-decoration-none">WMS-Inventory</a>
                <ul class="nav flex-column w-100">
                    <li class="nav-item"><a href="<?= base_url('/dashboard'); ?>" class="nav-link text-white px-3">Dashboard</a></li>
                    <li><a href="<?= base_url('/dashboard/inventory'); ?>" class="nav-link text-white px-3">Inventory</a></li>
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
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-3 shadow-sm">
                <button class="btn btn-primary" id="toggle-sidebar">☰</button>
                <div>
                    <img src="<?= base_url('images/profile.png'); ?>" alt="Profile" class="rounded-circle" width="35" height="35">
                </div>
            </div>

            <div class="container mt-4">
                <h2 class="text-center mb-4">Inventory Summary</h2>
                
                <!-- Search Bar -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search by item name or SKU" aria-label="Search">
                </div>

                <!-- Table -->
                <table class="table table-bordered table-hover mt-3 shadow" id="inventoryTable">
                    <thead class="table-dark">
                        <tr>
                            <th>Item Name</th>
                            <th>SKU</th>
                            <th>Description</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($items as $item): ?>
                            <tr>
                                <td><?= esc($item['name']) ?></td>
                                <td><?= esc($item['sku']) ?></td>
                                <td><?= esc($item['description']) ?></td>
                                <td><?= esc($item['quantity']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- CSS Styling -->
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
    table {
        width: 100%;
        text-align: center;
    }
    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
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
</style>

<!-- JavaScript for Toggle Sidebar and Search Filter -->
<script>
    document.getElementById("toggle-sidebar").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("collapsed");
    });

    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let rows = document.querySelectorAll('#inventoryTable tbody tr');
        
        rows.forEach(row => {
            let itemName = row.cells[0].textContent.toUpperCase();
            let sku = row.cells[1].textContent.toUpperCase();
            row.style.display = (itemName.includes(filter) || sku.includes(filter)) ? '' : 'none';
        });
    });
</script>

<?=$this->endSection()?>
