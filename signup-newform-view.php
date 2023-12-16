<form method="post" action="" onsubmit="return validateForm()">
    <div class="mb-3">
        <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <div class="form-floating">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
            <label for="firstName">First Name</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
            <label for="lastName">Last Name</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="password" class="form-control" id="reenterPassword" name="reenterPassword" placeholder="Reenter Password" required>
            <label for="reenterPassword">Reenter Password</label>
        </div>
    </div>
    <input type="hidden" name="actionType" value="Add">
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>

<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var reenterPassword = document.getElementById("reenterPassword").value;

        if (password !== reenterPassword) {
            alert("Passwords do not match. Please reenter your password.");
            return false;
        }

        return true;
    }
</script>
