</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include "password.php"; ?>
  <script>
        function showPasswordModal() {
            var passwordModal = new bootstrap.Modal(document.getElementById('passwordModal'));
        passwordModal.show();
        }
    </script>

<?php include "login.php"; ?>
<script>
    function showLoginModal() {
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    }
</script>


</body>
</html>
