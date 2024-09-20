-- تعيين قيم مؤقتة لإعدادات التحقق من الفريدة والمفاتيح الخارجية
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- إنشاء نطاق قاعدة البيانات إذا لم يكن موجودًا بالفعل واستخدامه كنطاق حالي
CREATE SCHEMA IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8mb4;
USE `database`;

-- إنشاء جدول "reader" إذا لم يكن موجودًا بالفعل لتخزين بيانات القراء
CREATE TABLE IF NOT EXISTS `database`.`reader` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT, -- معرف فريد للقراء
  `followers` INT(11) NOT NULL, -- عدد المتابعين
  `stories read` INT(11) NOT NULL, -- عدد القصص المقروءة
  `Comments and Likes` INT(11) NOT NULL, -- عدد التعليقات والإعجابات
  PRIMARY KEY (`id`) -- تعيين العمود 'id' كمفتاح أساسي
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

-- إنشاء جدول "writer" إذا لم يكن موجودًا بالفعل لتخزين بيانات الكُتّاب
CREATE TABLE IF NOT EXISTS `database`.`writer` (
  `id` INT(11) NOT NULL AUTO_INCREMENT, -- معرف فريد للكتّاب
  `Follower` INT(11) NOT NULL, -- عدد المتابعين
  `Stories` INT(11) NOT NULL, -- عدد القصص
  `support` INT(11) NOT NULL, -- الدعم
  `language` INT(11) NOT NULL, -- اللغة
  PRIMARY KEY (`id`) -- تعيين العمود 'id' كمفتاح أساسي
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

-- إنشاء جدول "stories" إذا لم يكن موجودًا بالفعل لتخزين بيانات القصص
CREATE TABLE IF NOT EXISTS `database`.`stories` (
  `id Writer` TINYINT(4) NOT NULL, -- معرف الكاتب
  `Stories` INT(11) NOT NULL, -- عدد القصص
  `Rating` DECIMAL(10,0) NOT NULL, -- التقييم
  `Number of Readers` BIGINT(20) NOT NULL, -- عدد القراء
  `Language Story` VARCHAR(5) NOT NULL, -- لغة القصة
  `id Story` INT(11) NOT NULL AUTO_INCREMENT, -- معرف فريد للقصة
  `storiescol` VARCHAR(45) NULL DEFAULT '', -- عمود إضافي اختياري
  `writer_id` INT(11) NOT NULL, -- معرف الكاتب للإشارة الخارجية
  INDEX `fk_stories_writer_idx` (`writer_id` ASC) VISIBLE, -- فهرس للربط مع جدول الكتّاب
  CONSTRAINT `fk_stories_writer`
    FOREIGN KEY (`writer_id`)
    REFERENCES `database`.`writer` (`id`) -- الإشارة الخارجية إلى جدول الكتّاب
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

-- إنشاء جدول "users" إذا لم يكن موجودًا بالفعل لتخزين بيانات المستخدمين
CREATE TABLE IF NOT EXISTS `database`.`users` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT, -- معرف فريد للمستخدم
  `username` VARCHAR(50) NOT NULL, -- اسم المستخدم
  `real name` VARCHAR(50) NOT NULL, -- الاسم الحقيقي
  `last name` VARCHAR(50) NOT NULL, -- الاسم الأخير
  `email` VARCHAR(50) NOT NULL, -- البريد الإلكتروني
  `Password` VARCHAR(50) NOT NULL, -- كلمة المرور
  `Book or reader` INT(11) NOT NULL, -- نوع المستخدم (كاتب أو قارئ)
  `ip` TINYINT(4) NOT NULL, -- عنوان IP
  `language` VARCHAR(5) NOT NULL, -- اللغة
  `Device type` INT(11) NOT NULL, -- نوع الجهاز
  `reader_id` BIGINT(20) NOT NULL, -- معرف القارئ للإشارة الخارجية
  `writer_id` INT(11) NOT NULL, -- معرف الكاتب للإشارة الخارجية
  PRIMARY KEY (`id`), -- تعيين العمود 'id' كمفتاح أساسي
  INDEX `fk_users_reader1_idx` (`reader_id` ASC) VISIBLE, -- فهرس للربط مع جدول القراء
  INDEX `fk_users_writer1_idx` (`writer_id` ASC) VISIBLE, -- فهرس للربط مع جدول الكتّاب
  CONSTRAINT `fk_users_reader1`
    FOREIGN KEY (`reader_id`)
    REFERENCES `database`.`reader` (`id`) -- الإشارة الخارجية إلى جدول القراء
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_writer1`
    FOREIGN KEY (`writer_id`)
    REFERENCES `database`.`writer` (`id`) -- الإشارة الخارجية إلى جدول الكتّاب
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

-- استعادة إعدادات SQL Mode السابقة وقيم التحقق من المفاتيح الخارجية والقيم الفريدة
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
