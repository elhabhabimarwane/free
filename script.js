document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // يمكنك إضافة التحقق من صحة البيانات هنا
    if (username === "user" && password === "pass") {
        alert("تم تسجيل الدخول بنجاح!");
    } else {
        alert("اسم المستخدم أو كلمة المرور غير صحيحة.");
    }
});