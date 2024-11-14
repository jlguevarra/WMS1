<?=$this->extend("layout")?>

<?=$this->section("content")?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-lg-2 px-0 bg-dark" id="sidebar">
            <div class="d-flex flex-column align-items-start text-white min-vh-100" id="sidebar-content">
                <a href="#" class="fs-4 py-3 ps-3 text-white text-decoration-none">WMS-Suppliers</a>
                <ul class="nav flex-column w-100">
                    <li class="nav-item"><a href="<?= base_url('/dashboard'); ?>" class="nav-link text-white px-3">Dashboard</a></li>
                    <li><a href="<?= base_url('/dashboard/inventory'); ?>" class="nav-link text-white px-3">Inventory</a></li>
                    <li><a href="<?= base_url('/dashboard/tracking'); ?>" class="nav-link text-white px-3">Tracking</a></li>
                    <!-- <li><a href="<?= base_url('/dashboard/reports'); ?>" class="nav-link text-white px-3">Reports</a></li> -->
                    <li><a href="<?= base_url('/dashboard/suppliers'); ?>" class="nav-link text-white px-3">Suppliers</a></li>
                    <li><a href="<?= base_url('/dashboard/customers'); ?>" class="nav-link text-white px-3">Customers</a></li>
                    <li>
                    <a href="<?= base_url('/incoming_goods'); ?>" class="nav-link text-white">Incoming </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/outgoing_goods'); ?>" class="nav-link text-white">Outgoing </a>
                    </li>
                </ul>
                <a href="<?= base_url('/logout'); ?>" class="text-white mt-auto px-3 py-3">Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col py-3" id="main-content">
            <!-- Top Header -->
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-3 shadow-sm">
                <button class="btn btn-primary" id="toggle-sidebar">☰</button>
                <h4 class="m-0">Suppliers</h4>
                <div>
                    <img src="<?= base_url('images/profile.png'); ?>" alt="Profile" class="rounded-circle" width="35" height="35">
                </div>
            </div>

            <!-- Supplier Table -->
            <div class="container">
                <div class="d-flex justify-content-end mb-3">
                    <a href="<?= base_url('/dashboard/suppliers/create'); ?>" class="btn btn-primary">Add Supplier</a>
                </div>

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($suppliers as $supplier): ?>
                            <tr>
                                <td><?= $supplier['id']; ?></td>
                                <td><?= $supplier['name']; ?></td>
                                <td><?= $supplier['contact']; ?></td>
                                <td><?= $supplier['address']; ?></td>
                                <td>
                                    <a href="<?= base_url('/dashboard/suppliers/edit/' . $supplier['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('/dashboard/suppliers/delete/' . $supplier['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
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

    /* Table styling */
    .table th, .table td {
        vertical-align: middle;
    }
    .table-dark th {
        background-color: #343a40;
        color: #fff;
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

<!-- JavaScript for Toggle Button -->
<script>
    document.getElementById("toggle-sidebar").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("collapsed");
    });
</script>

<?=$this->endSection()?>
