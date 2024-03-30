<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استعادة كلمة المرور</title>
</head>
<body>
    <div class="container">
        <h2>استعادة كلمة المرور</h2>
        <form action="forgot-password.php" method="post">
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" required>
            </div>
            <!-- Honeypot Technique -->
            <div class="form-group hp">
                <label for="hp">يرجى ترك هذا الحقل فارغاً</label>
                <input type="text" id="hp" name="hp">
            </div>
            <div class="form-group">
                <input type="submit" value="إرسال">
            </div>
        </form>
        <p>لديك حساب؟ <a href="login.html">تسجيل الدخول</a></p>
        <p>ليس لديك حساب؟ <a href="sign_up.html">التسجيل</a></p>
    </div>
</body>
</html>
