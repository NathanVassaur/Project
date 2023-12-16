</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include "password.php"; ?>
  <script>
        function showPasswordModal() {
            var passwordModal = new bootstrap.Modal(document.getElementById('passwordModal'));
        passwordModal.show();
        }
    </script>

<script>
    function authenticateUser() {
        var enteredEmail = document.getElementById('emailInput').value;
        var enteredPassword = document.getElementById('passwordInput').value;

        fetch('login-validation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                'email': enteredEmail,
                'password': enteredPassword,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Success');
                // Redirect to a protected page or perform other actions upon successful login
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    function showLoginModal() {
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    }
</script>


</body>
</html>
