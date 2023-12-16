<form method="post" action="">
    <div class="mb-3">
        <div class="form-floating has-validation">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            <label for="email">Email</label>
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
    <input type="hidden" name="actionType" value="Add">
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
