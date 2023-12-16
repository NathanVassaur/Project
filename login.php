<?php
$pageTitle = "Login";
include "view-header.php";



<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
    Login
</button>

<div class="modal fade" id="loginModal" aria-hidden="true" aria-labelledby="loginModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Login form -->
                <form method="post" action="login-action.php">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email" required>
                            <label for="loginEmail">Email</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password" required>
                            <label for="loginPassword">Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
?>
<?php include "view-footer.php"; ?>
