<!-- login -->
<h2>Login</h2>
<form action="index.php?page=login" method="post">
    <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="input-group">
        <button type="submit" name="login">Login</button>
    </div>
</form>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validasi login
    if ($username == 'aznawi' && $password == 'aznawi13') {
        echo "Login berhasil! Selamat datang, $username.";
        // Redirect ke halaman home setelah login berhasil
        header("Location: admin.php");
        exit();
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}