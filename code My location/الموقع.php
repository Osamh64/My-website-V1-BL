<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مملكة السرد</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="اكتشف عوالمًا لا حدود لها من الخيال والإبداع على موقعنا، حيث يلتقي الكتّاب والقرّاء ليشاركوا قصصهم ورواياتهم في مساحة آمنة وملهمة.">
    <meta name="keywords" content="قصص, روايات, قصص عالمية, روايات عالمية, كتب, أدب, كتّاب, قرّاء, إبداع, خيال, مغامرة, غموض, علمي, حب, مسابقات كتابية, منصة كتابية, تبادل القصص, تحديات كتابية, منصة روايات, كتابة, كتابة قصص, كتابة روايات, تأليف, مشاركة قصص, مشاركة روايات, موقع أدبي, موقع قصص, موقع روايات, منصة أدبية, منصة قصص, منصة روايات, مجتمع أدبي, مجتمع كتابي, مجتمع قراءة, تفاعل أدبي, تفاعل كتابي, تفاعل قراءة, إلهام كتابي, إلهام قصص, إلهام روايات, تنمية مهارات كتابية, تنمية مهارات قصصية, تنمية مهارات روائية">
</head>
<body>
    <header>
        <h1>
            <div class="location">
                <a href="الموقع.html">
                    <img src="Website.jpg" alt="صورة الموقع" height="50" width="50">
                    <sup style="text-decoration: none;">مملكة السرد</sup>
                </a>
            </div>
            <div class="User">
                <a href="تسجيل دخول.html">تسجيل دخول</a> /
                <a href="انشاء حساب.html">انشاء حساب</a>
            </div>
        </h1>
        <div class="Search">
            <form action="مسار_ملف_البحث" method="GET">
                البحث عن قصة: <input type="text" name="q" id="searchInput">
                <input type="submit" value="ابحث" onclick="search(); return false;">
            </form>
        </div>
    <div class="category-box">
        <ul>
            <li><a href="الكوميديا.html" class="category-title">كوميديا</a></li>
            <li><a href="الخيال العلمي.html" class="category-title">خيال علمي</a></li>
            <li><a href="الخيال.html" class="category-title">خيال</a></li>
            <li><a href="الرومانسية.html" class="category-title">رومانسي</a></li>
            <li><a href="الجريمة والتحقيق.html" class="category-title">جريمة وتحقيق</a></li>
            <li><a href="الرعب.html" class="category-title">رعب</a></li>
            <li><a href="المغامرة.html" class="category-title">مغامرة</a></li>
            <li><a href="دراما.html" class="category-title">دراما</a></li>
            <li><a href="التاريخية.html" class="category-title">تاريخي</a></li>
            <li><a href="سرقة.html" class="category-title">سرقة</a></li>
            <li><a href="حرب.html" class="category-title">حرب</a></li>
        </ul>
    </div>
    <section id="story-list">
        <h2>أحدث القصص</h2>
        <ul>
            <li>
                <a href="قراءة القصة.html?story=1">
                    <h1 style="color: black;">قلب العنقاء</h1>
                </a>
                <dd style="color: black;">أمير يحارب في صحراء لا نهائية للحصول على قلب العنقاء للملك</dd>
            </li>
            <li>
                <a href="قراءة القصة.html?story=2">
                    <h1 style="color: black;">كين و سيد التنانين</h1>
                </a>
                <dd style="color: black;">طفل يكشف كهف سيد التنانين و سره الأخطر</dd>
            </li>
            <li>
                <a href="قراءة القصة.html?story=3">
                    <h1 style="color: black;">ذكرياتي</h1>
                </a>
                <dd style="color: black;">أحدث قصة تعرف على ذكرياتي بعالم متطور و مستقبلي</dd>
            </li>
        </ul>
    </section>
    <footer>
        جميع الحقوق محفوظة &copy; 2024
    </footer>
    <script src="script.js"></script>
</body>
</html>
