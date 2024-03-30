<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link rel="icon" href="Website.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عوالمنا</title>
    <style>
        body {
            text-align: center;
        }

        .centered-text {
            display: inline-block;
            text-align: left;
        }
    </style>
    
</head>
<body>
    <div class="centered-text">
        <p>اكتب القصة</p>
        <form>
            <label for="TitleOfTheStory">عنوان القصة:</label><br>
            <input type="text" id="TitleOfTheStory">

            <br><label for="StoryText">نص القصة:</label><br>
            <input type="text" id="StoryText">

            <p>اختر تصنيف القصة</p>
            <label for="StoryGenre">اختر نوع القصة:</label>
            <select id="StoryGenre" name="StoryGenre">
                <option value="Romance">رومانسي</option>
                <option value="ScienceFiction">خيال علمي</option>
                <option value="Horror">رعب</option>
                <option value="Mystery">غموض</option>
                <option value="Drama">دراما</option>
                <option value="Adventure">مغامرة</option>
                <option value="Fantasy">خيال</option>
                <option value="Biography">سيرة ذاتية</option>
                <option value="Historical">تاريخي</option>
                <option value="Comedy">كوميديا</option>
            </select>

            <p>اختر فئة المستهدف:</p>
            <label>
                <input type="radio" name="TargetAudience" value="Children"> أطفال
            </label>
            <label>
                <input type="radio" name="TargetAudience" value="Teens"> مراهقين
            </label>
            <label>
                <input type="radio" name="TargetAudience" value="Adults"> كبار السن
            </label>

            <br>

            <input type="submit" value="ارسال القصة">
        </form>
    </div>
</body>
</html>
