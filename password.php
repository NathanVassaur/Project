<div class="modal" tabindex="-1" id="passwordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="passwordForm">
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="checkPassword()">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    function checkPassword() {
        var enteredPassword = document.getElementById('passwordInput').value;
        var correctPassword = "admin";

        if (enteredPassword === correctPassword) {
            window.location.href = 'allcigars.php';
        } else {
            alert('Incorrect password. Please try again.');
        }
    }
</script>
