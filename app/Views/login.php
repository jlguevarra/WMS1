<?=$this->extend("layout")?>

<?=$this->section("content")?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="text-center">
        <div class="card p-4 shadow-lg border-0 rounded-3" style="background-color: rgba(255, 255, 255, 0.9); width: 100%; max-width: 400px;">
            <div class="card-body">
                
                <!-- Logo Section -->
                <img src="<?= base_url('images/warehouse-logo.png') ?>" alt="Warehouse Logo" style="width: 80px; height: auto; margin-bottom: 20px;">
                
                <!-- Title -->
                <h4 class="card-title mb-4 fw-bold">Warehouse Management  </h4>

                <!-- Flash Message for Errors -->
                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <!-- Login Form -->
                <form action="<?= base_url('/login'); ?>" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                    <p class="text-center mt-4">Don't have an account? 
                        <a href="<?= base_url('/register'); ?>" class="text-primary fw-bold">Register here</a>
                    </p>
                </form>

                <!-- Footer Text -->
                <p class="mt-4 text-muted" style="font-size: 0.85rem;">Developed by Group # © 2024</p>
            </div>
        </div>
    </div>
</div>

<!-- Background Image and Custom Styles -->
<style>
    /* Global Styles */
    body {
        background:  url("<?= base_url('images/bg.png') ?>") no-repeat center center fixed;
        background-size: cover;
        font-family: Arial, sans-serif;
    }

    /* Card Styles */
    .card {
        background-color: rgba(255, 255, 255, 0.9);
        width: 100%;
        max-width: 400px;
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    /* Form Control Styles */
    .form-control {
        padding: 0.75rem;
        font-size: 1rem;
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    /* Button Styles */
    .btn-success {
        background-color: #28a745;
        border: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    /* Text and Link Styles */
    .text-primary {
        color: #007bff !important;
    }
    
    /* Footer Text */
    .text-muted {
        font-size: 0.85rem;
        color: #666;
    }

    a {
      text-decoration: none;
    }
</style>

<?=$this->endSection()?>
