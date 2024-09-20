<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مملكة السرد</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <div class="location">
            <a href="الموقع.html">
                <img src="Website.jpg" alt="صورة الموقع" height="50" width="50">
                <h1>مملكة السرد</h1>
            </a>
        </div>
    </header>
    <aside class="aside-page">
        <form action="" method="post" onsubmit="return validatePassword()">
            <label for="username">اسم المستخدم:</label>
            <input type="text" id="username" name="username" required placeholder="أدخل اسم المستخدم"><br>
            <label for="account_name">اسم الحساب:</label>
            <input type="text" id="account_name" name="account_name" required placeholder="أدخل اسم الحساب"><br>
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required placeholder="أدخل البريد الإلكتروني"><br>
            <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required placeholder="أدخل كلمة المرور"><br>
            <label for="confirm_password">تأكيد كلمة المرور:</label>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="تأكيد كلمة المرور"><br>
            <label for="birth_date">تاريخ الميلاد:</label>
            <input type="text" id="birth_date" name="birth_date" placeholder="اختر تاريخ الميلاد" required><br>
            <div class="form-group">
                <label for="center_country">البلد:</label>
                <select id="center_country" name="center_country" required>
                    <option value="">اختر البلد</option>
                    <option value="Afghanistan">أفغانستان</option>
                    <option value="Albania">ألبانيا</option>
                    <option value="Algeria">الجزائر</option>
                    <option value="Andorra">أندورا</option>
                    <option value="Angola">أنغولا</option>
                    <option value="Argentina">الأرجنتين</option>
                    <option value="Armenia">أرمينيا</option>
                    <option value="Australia">أستراليا</option>
                    <option value="Austria">النمسا</option>
                    <option value="Azerbaijan">أذربيجان</option>
                    <option value="Bahamas">جزر البهاما</option>
                    <option value="Bahrain">البحرين</option>
                    <option value="Bangladesh">بنغلاديش</option>
                    <option value="Barbados">باربادوس</option>
                    <option value="Belarus">بيلاروسيا</option>
                    <option value="Belgium">بلجيكا</option>
                    <option value="Belize">بليز</option>
                    <option value="Benin">بنين</option>
                    <option value="Bhutan">بوتان</option>
                    <option value="Bolivia">بوليفيا</option>
                    <option value="Bosnia and Herzegovina">البوسنة والهرسك</option>
                    <option value="Botswana">بوتسوانا</option>
                    <option value="Brazil">البرازيل</option>
                    <option value="Brunei">بروناي</option>
                    <option value="Bulgaria">بلغاريا</option>
                    <option value="Burkina Faso">بوركينا فاسو</option>
                    <option value="Burundi">بوروندي</option>
                    <option value="Cabo Verde">الرأس الأخضر</option>
                    <option value="Cambodia">كمبوديا</option>
                    <option value="Cameroon">الكاميرون</option>
                    <option value="Canada">كندا</option>
                    <option value="Central African Republic">جمهورية أفريقيا الوسطى</option>
                    <option value="Chad">تشاد</option>
                    <option value="Chile">تشيلي</option>
                    <option value="China">الصين</option>
                    <option value="Colombia">كولومبيا</option>
                    <option value="Comoros">جزر القمر</option>
                    <option value="Congo, Democratic Republic of the">جمهورية الكونغو الديمقراطية</option>
                    <option value="Congo, Republic of the">جمهورية الكونغو</option>
                    <option value="Costa Rica">كوستاريكا</option>
                    <option value="Croatia">كرواتيا</option>
                    <option value="Cuba">كوبا</option>
                    <option value="Cyprus">قبرص</option>
                    <option value="Czech Republic">جمهورية التشيك</option>
                    <option value="Denmark">الدنمارك</option>
                    <option value="Djibouti">جيبوتي</option>
                    <option value="Dominica">دومينيكا</option>
                    <option value="Dominican Republic">جمهورية الدومينيكان</option>
                    <option value="Ecuador">الإكوادور</option>
                    <option value="Egypt">مصر</option>
                    <option value="El Salvador">السلفادور</option>
                    <option value="Equatorial Guinea">غينيا الاستوائية</option>
                    <option value="Eritrea">إريتريا</option>
                    <option value="Estonia">إستونيا</option>
                    <option value="Eswatini">إسواتيني</option>
                    <option value="Ethiopia">إثيوبيا</option>
                    <option value="Fiji">فيجي</option>
                    <option value="Finland">فنلندا</option>
                    <option value="France">فرنسا</option>
                    <option value="Gabon">الغابون</option>
                    <option value="Gambia">غامبيا</option>
                    <option value="Georgia">جورجيا</option>
                    <option value="Germany">ألمانيا</option>
                    <option value="Ghana">غانا</option>
                    <option value="Greece">اليونان</option>
                    <option value="Grenada">غرينادا</option>
                    <option value="Guatemala">غواتيمالا</option>
                    <option value="Guinea">غينيا</option>
                    <option value="Guinea-Bissau">غينيا بيساو</option>
                    <option value="Guyana">غيانا</option>
                    <option value="Haiti">هايتي</option>
                    <option value="Honduras">هندوراس</option>
                    <option value="Hungary">المجر</option>
                    <option value="Iceland">آيسلندا</option>
                    <option value="India">الهند</option>
                    <option value="Indonesia">إندونيسيا</option>
                    <option value="Iran">إيران</option>
                    <option value="Iraq">العراق</option>
                    <option value="Ireland">أيرلندا</option>
                    <option value="Israel">إسرائيل</option>
                    <option value="Italy">إيطاليا</option>
                    <option value="Jamaica">جامايكا</option>
                    <option value="Japan">اليابان</option>
                    <option value="Jordan">الأردن</option>
                    <option value="Kazakhstan">كازاخستان</option>
                    <option value="Kenya">كينيا</option>
                    <option value="Kiribati">كيريباتي</option>
                    <option value="Kuwait">الكويت</option>
                    <option value="Kyrgyzstan">قيرغيزستان</option>
                    <option value="Laos">لاوس</option>
                    <option value="Latvia">لاتفيا</option>
                    <option value="Lebanon">لبنان</option>
                    <option value="Lesotho">ليسوتو</option>
                    <option value="Liberia">ليبيريا</option>
                    <option value="Libya">ليبيا</option>
                    <option value="Liechtenstein">ليختنشتاين</option>
                    <option value="Lithuania">ليتوانيا</option>
                    <option value="Luxembourg">لوكسمبورغ</option>
                    <option value="Madagascar">مدغشقر</option>
                    <option value="Malawi">مالاوي</option>
                    <option value="Malaysia">ماليزيا</option>
                    <option value="Maldives">المالديف</option>
                    <option value="Mali">مالي</option>
                    <option value="Malta">مالطا</option>
                    <option value="Marshall Islands">جزر مارشال</option>
                    <option value="Mauritania">موريتانيا</option>
                    <option value="Mauritius">موريشيوس</option>
                    <option value="Mexico">المكسيك</option>
                    <option value="Micronesia">ميكرونيزيا</option>
                    <option value="Moldova">مولدوفا</option>
                    <option value="Monaco">موناكو</option>
                    <option value="Mongolia">منغوليا</option>
                    <option value="Montenegro">الجبل الأسود</option>
                    <option value="Morocco">المغرب</option>
                    <option value="Mozambique">موزمبيق</option>
                    <option value="Myanmar (formerly Burma)">ميانمار (بورما سابقًا)</option>
                    <option value="Namibia">ناميبيا</option>
                    <option value="Nauru">ناورو</option>
                    <option value="Nepal">نيبال</option>
                    <option value="Netherlands">هولندا</option>
                    <option value="New Zealand">نيوزيلندا</option>
                    <option value="Nicaragua">نيكاراغوا</option>
                    <option value="Niger">النيجر</option>
                    <option value="Nigeria">نيجيريا</option>
                    <option value="North Korea">كوريا الشمالية</option>
                    <option value="North Macedonia (formerly Macedonia)">مقدونيا الشمالية (مقدونيا سابقًا)</option>
                    <option value="Norway">النرويج</option>
                    <option value="Oman">عمان</option>
                    <option value="Pakistan">باكستان</option>
                    <option value="Palau">بالاو</option>
                    <option value="Palestine">فلسطين</option>
                    <option value="Panama">بنما</option>
                    <option value="Papua New Guinea">بابوا غينيا الجديدة</option>
                    <option value="Paraguay">باراغواي</option>
                    <option value="Peru">بيرو</option>
                    <option value="Philippines">الفلبين</option>
                    <option value="Poland">بولندا</option>
                    <option value="Portugal">البرتغال</option>
                    <option value="Qatar">قطر</option>
                    <option value="Romania">رومانيا</option>
                    <option value="Russia">روسيا</option>
                    <option value="Rwanda">رواندا</option>
                    <option value="Saint Kitts and Nevis">سانت كيتس ونيفيس</option>
                    <option value="Saint Lucia">سانت لوسيا</option>
                    <option value="Saint Vincent and the Grenadines">سانت فنسنت والغرينادين</option>
                    <option value="Samoa">ساموا</option>
                    <option value="San Marino">سان مارينو</option>
                    <option value="Sao Tome and Principe">ساو تومي وبرينسيب</option>
                    <option value="Saudi Arabia">المملكة العربية السعودية</option>
                    <option value="Senegal">السنغال</option>
                    <option value="Serbia">صربيا</option>
                    <option value="Seychelles">سيشل</option>
                    <option value="Sierra Leone">سيراليون</option>
                    <option value="Singapore">سنغافورة</option>
                    <option value="Slovakia">سلوفاكيا</option>
                    <option value="Slovenia">سلوفينيا</option>
                    <option value="Solomon Islands">جزر سليمان</option>
                    <option value="Somalia">الصومال</option>
                    <option value="South Africa">جنوب أفريقيا</option>
                    <option value="South Korea">كوريا الجنوبية</option>
                    <option value="South Sudan">جنوب السودان</option>
                    <option value="Spain">إسبانيا</option>
                    <option value="Sri Lanka">سريلانكا</option>
                    <option value="Sudan">السودان</option>
                    <option value="Suriname">سورينام</option>
                    <option value="Sweden">السويد</option>
                    <option value="Switzerland">سويسرا</option>
                    <option value="Syria">سوريا</option>
                    <option value="Taiwan">تايوان</option>
                    <option value="Tajikistan">طاجيكستان</option>
                    <option value="Tanzania">تنزانيا</option>
                    <option value="Thailand">تايلاند</option>
                    <option value="Timor-Leste">تيمور الشرقية</option>
                    <option value="Togo">توجو</option>
                    <option value="Tonga">تونغا</option>
                    <option value="Trinidad and Tobago">ترينيداد وتوباغو</option>
                    <option value="Tunisia">تونس</option>
                    <option value="Turkey">تركيا</option>
                    <option value="Turkmenistan">تركمانستان</option>
                    <option value="Tuvalu">توفالو</option>
                    <option value="Uganda">أوغندا</option>
                    <option value="Ukraine">أوكرانيا</option>
                    <option value="United Arab Emirates">الإمارات العربية المتحدة</option>
                    <option value="United Kingdom">المملكة المتحدة</option>
                    <option value="United States">الولايات المتحدة</option>
                    <option value="Uruguay">أوروغواي</option>
                    <option value="Uzbekistan">أوزبكستان</option>
                    <option value="Vanuatu">فانواتو</option>
                    <option value="Vatican City">مدينة الفاتيكان</option>
                    <option value="Venezuela">فنزويلا</option>
                    <option value="Vietnam">فيتنام</option>
                    <option value="Yemen">اليمن</option>
                    <option value="Zambia">زامبيا</option>
                    <option value="Zimbabwe">زيمبابوي</option>
                </select>
            </div>
        </form>
    </aside>
    <footer>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <button onclick="window.location.href='انشاء حساب لمركز تعليمي.html';">انشاء حساب شخصي</button>
            <button type="submit">إرسال</button>
        <p>&copy; 2024 مملكة السرد. جميع الحقوق محفوظة.</p>
    </footer>
    
</body>
</html>
