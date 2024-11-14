<?=$this->extend("layout")?>

<?=$this->section("content")?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="text-center">
        <div class="card p-4 shadow-lg border-0 rounded-3" style="background-color: rgba(255, 255, 255, 0.95); width: 100%; max-width: 400px;">
            <div class="card-body p-4">
                
                <!-- Logo Section -->
                <img src="<?= base_url('images/warehouse-logo.png') ?>" alt="Warehouse Logo" style="width: 80px; height: auto; margin-bottom: 20px;">
                
                <!-- Title -->
                <h3 class="card-title text-center mb-4 fw-bold text-dark">Warehouse Management</h3>
                
                <!-- Registration Form -->
                <form action="<?= base_url('/register'); ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary">Email address</label>
                        <input type="email" class="form-control shadow-sm" id="email" name="email" value="<?= set_value('email') ?>" required>
                        <?php if(isset($validation)):?>
                            <small class="text-danger"><?= $validation->getError('email') ?></small>
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary">Password</label>
                        <input type="password" class="form-control shadow-sm" id="password" name="password" required>
                        <?php if(isset($validation)):?>
                            <small class="text-danger"><?= $validation->getError('password') ?></small>
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label text-secondary">Confirm Password</label>
                        <input type="password" class="form-control shadow-sm" id="confirm_password" name="confirm_password" required>
                        <?php if(isset($validation)):?>
                            <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                        <?php endif;?>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block shadow">Register Now</button>
                    </div>
                </form>

                <!-- Link to Login -->
                <p class="text-center mt-4 text-secondary">Already have an account? 
                    <a href="<?= base_url('/login'); ?>" class="text-primary fw-bold">Login here</a>
                </p>
                
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
        background: url("<?= base_url('images/bg.png') ?>") no-repeat center center fixed;
        background-size: cover;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    /* Card Styles */
    .card {
        background-color: rgba(255, 255, 255, 0.95);
        width: 100%;
        max-width: 400px;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .card-subtitle {
        color: #555;
        font-size: 1.25rem;
    }

    /* Form Control Styles */
    .form-control {
        padding: 0.75rem;
        font-size: 1rem;
        background-color: rgba(255, 255, 255, 0.85);
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
    }

    .form-control.shadow-sm {
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
    }

    /* Button Styles */
    .btn-primary {
        background-color: #007bff;
        border: none;
        font-weight: bold;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        padding: 0.6rem;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-primary:focus {
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }

    /* Text and Link Styles */
    .text-primary {
        color: #007bff !important;
    }

    .text-secondary {
        color: #666 !important;
    }

    /* Footer Text */
    .text-muted {
        font-size: 0.85rem;
        color: #888;
    }

    a {
        text-decoration: none;
    }
</style>

<?=$this->endSection()?>
