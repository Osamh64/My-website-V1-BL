-- إنشاء جدول المستخدمين
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    real_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    password VARCHAR(100) NOT NULL,
    primary_language VARCHAR(50) NOT NULL
);

-- إنشاء جدول القصص
CREATE TABLE Stories (
    story_id INT AUTO_INCREMENT PRIMARY KEY,
    story_title VARCHAR(255) NOT NULL,
    story_identifier VARCHAR(50) NOT NULL,
    publisher_account_id INT,
    reviewer_account_id INT,
    FOREIGN KEY (publisher_account_id) REFERENCES Users(user_id),
    FOREIGN KEY (reviewer_account_id) REFERENCES Users(user_id)
);

-- إنشاء جدول تسجيل الدخول
CREATE TABLE Login (
    login_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    device_code VARCHAR(20) NOT NULL,
    login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);