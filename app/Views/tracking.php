<?= $this->extend("layout") ?>

<?= $this->section("content") ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-lg-2 px-0 bg-dark" id="sidebar">
            <div class="d-flex flex-column align-items-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">WMS-Tracking</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 w-100" id="menu">
                    <li class="nav-item">
                        <a href="<?= base_url('/dashboard'); ?>" class="nav-link text-white">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/dashboard/inventory'); ?>" class="nav-link text-white">Inventory</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/dashboard/tracking'); ?>" class="nav-link text-white">Tracking</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/dashboard/suppliers'); ?>" class="nav-link text-white">Suppliers</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/dashboard/customers'); ?>" class="nav-link text-white">Customers</a>
                    </li>
                    <li>
                    <a href="<?= base_url('/incoming_goods'); ?>" class="nav-link text-white">Incoming </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/outgoing_goods'); ?>" class="nav-link text-white">Outgoing </a>
                    </li>
                </ul>
                <div class="mt-auto w-100">
                    <a href="<?= base_url('/logout'); ?>" class="nav-link text-white">Logout</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col py-3" id="main-content">
            <div class="container mt-4">
                <h2 class="text-center">🚚 Tracking - Sta. Ana, Pampanga</h2>

                <!-- Google Maps Section -->
                <div class="map-container mt-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30894.611704015158!2d120.6823125!3d15.137898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33968b7bb37c91c5%3A0x8b8f4e70d897fc68!2sSanta%20Ana%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1699385737013!5m2!1sen!2sph"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add custom styling for layout adjustments and map responsiveness -->
<style>
    /* Sidebar Styling */
    #sidebar {
        height: 100vh;
        position: fixed;
        width: 250px;
    }
    #sidebar .nav-link {
        padding: 10px 15px;
    }

    /* Main content adjustments */
    #main-content {
        margin-left: 250px;
        width: calc(100% - 250px);
    }

    /* Map container styling */
    .map-container {
        border: 2px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        #sidebar {
            position: relative;
            height: auto;
            width: 100%;
        }
        #main-content {
            margin-left: 0;
            width: 100%;
        }
        .navbar-brand, .nav-link {
            font-size: 14px;
        }
    }
</style>

<?= $this->endSection() ?>
