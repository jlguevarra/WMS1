<?=$this->extend("layout")?>

<?=$this->section("content")?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-lg-2 px-0 bg-dark" id="sidebar">
            <div class="d-flex flex-column align-items-start text-white min-vh-100" id="sidebar-content">
                <a href="#" class="fs-4 py-3 ps-3 text-white text-decoration-none">WMS-Dashboard</a>
                <ul class="nav flex-column w-100">
                    <li class="nav-item"><a href="<?= base_url('/dashboard'); ?>" class="nav-link text-white px-3">Dashboard</a></li>
                    <li><a href="<?= base_url('/inventory'); ?>" class="nav-link text-white px-3">Inventory</a></li>
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
                <h4 class="m-0">Welcome, Admin Admin</h4>
                <div>
                    <img src="<?= base_url('images/profile.png'); ?>" alt="Profile" class="rounded-circle" width="35" height="35">
                </div>
            </div>

            <!-- Quick Stats Cards -->
            <div class="row text-white">
                <div class="col-md-3 mb-3">
                    <div class="card bg-success text-center p-3 shadow">
                    <h5 class="card-title"><?= $incomingGoodsCount ?></h5>
                        <p class="card-text">Incoming Goods</p>
                        <a href="<?= base_url('/incoming_goods'); ?>" class="text-white">Details</a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-danger text-center p-3 shadow">
                    <h5 class="card-title"><?= $outgoingGoodsCount ?></h5>
                        <p class="card-text">Outgoing Goods</p>
                        <a href="<?= base_url('/outgoing_goods'); ?>" class="text-white">Details</a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-center p-3 shadow">
                        <!-- Display dynamic supplier count here -->
                        <h5 class="card-title"><?= $supplierCount; ?></h5>
                        <p class="card-text">Suppliers</p>
                        <a href="<?= base_url('/dashboard/suppliers'); ?>" class="text-white">Details</a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-info text-center p-3 shadow">
                        <h5 class="card-title"><?= $customerCount; ?></h5> <!-- Display the customer count -->
                        <p class="card-text">Customers</p>
                        <a href="<?= base_url('/dashboard/customers'); ?>" class="text-white">Details</a>
                    </div>
                </div>

            </div>

            <!-- Recent Activity -->
            <!-- <div class="card mb-3">
                <div class="card-header">Recent Activity</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">New incoming goods added by Supplier X</li>
                    <li class="list-group-item">Outgoing goods sent to Customer Y</li>
                    <li class="list-group-item">Stock level alert for Product Z</li>
                </ul>
            </div> -->
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

<!-- JavaScript for Toggle Button -->
<script>
    document.getElementById("toggle-sidebar").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("collapsed");
    });
</script>

<?=$this->endSection()?>
