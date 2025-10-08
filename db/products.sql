-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2025 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadvarzan_newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'اولویت نمایش',
  `title` varchar(255) DEFAULT NULL COMMENT 'عنوان',
  `en_title` varchar(255) DEFAULT NULL COMMENT 'عنوان انگلیسی',
  `sub_title` varchar(255) DEFAULT NULL COMMENT 'زیرمجموعه',
  `slug` varchar(255) DEFAULT NULL COMMENT 'عنوان',
  `item1` varchar(255) DEFAULT NULL COMMENT '1 موردی',
  `item2` varchar(255) DEFAULT NULL COMMENT '2 موردی',
  `item3` bigint(20) UNSIGNED DEFAULT NULL COMMENT '3 موردی',
  `item4` varchar(255) DEFAULT NULL COMMENT '4 موردی',
  `item5` varchar(255) DEFAULT NULL COMMENT '5 موردی',
  `price` varchar(255) DEFAULT NULL COMMENT 'هزینه خدمات',
  `cover` varchar(255) DEFAULT NULL COMMENT 'تصویر نمایش',
  `file_path` varchar(255) DEFAULT NULL COMMENT 'فایل خدمات',
  `product_id` varchar(255) DEFAULT NULL COMMENT 'سریال خدمات',
  `product_type` varchar(255) DEFAULT NULL COMMENT 'نوع خدمات',
  `product_use` varchar(255) DEFAULT NULL COMMENT 'نوع استفاده خدمات',
  `product_time` varchar(255) DEFAULT NULL COMMENT 'زمان خدمات',
  `level` varchar(255) DEFAULT NULL COMMENT 'سطح نمایش برای کاربران',
  `description` text DEFAULT NULL COMMENT 'توضیحات خدمات',
  `full_description` text DEFAULT NULL COMMENT 'توضیحات کامل خدمات',
  `start_date` varchar(255) DEFAULT NULL COMMENT 'تاریخ شروع',
  `end_date` varchar(255) DEFAULT NULL COMMENT 'تاریخ پایان',
  `exp_date` varchar(255) DEFAULT NULL COMMENT 'تاریخ انقضا',
  `certificate` tinyint(1) DEFAULT NULL COMMENT 'دارای گواهینامه',
  `cover_certificate` varchar(255) DEFAULT NULL COMMENT 'تصویر گواهینامه',
  `type_certificate` varchar(255) DEFAULT NULL COMMENT 'نوع گواهینامه',
  `price_certificate` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'هزینه گواهینامه',
  `state` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'استان',
  `city` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'شهرستان',
  `count_view` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'شمارنده بازدید',
  `count_click` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'شمارنده کلیک',
  `count_download` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'شمارنده دانلود',
  `status` tinyint(4) NOT NULL COMMENT 'وضعیت',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'کاربر ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `priority`, `title`, `en_title`, `sub_title`, `slug`, `item1`, `item2`, `item3`, `item4`, `item5`, `price`, `cover`, `file_path`, `product_id`, `product_type`, `product_use`, `product_time`, `level`, `description`, `full_description`, `start_date`, `end_date`, `exp_date`, `certificate`, `cover_certificate`, `type_certificate`, `price_certificate`, `state`, `city`, `count_view`, `count_click`, `count_download`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'قانون جدید شورای حل اختلاف', NULL, NULL, 'قانون-جدید-شورای-حل-اختلاف', NULL, NULL, NULL, NULL, NULL, '50000', 'workshops/FZmeKdAPDUhZgrhSSV884s7cAZqdbq.jpg', NULL, '1', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc,\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '5', NULL, '<p>این کارگاه با موضوع : قانون جدید شورای حل اختلاف برای حقوق دانان و وکلا طراحی شده که با برنامه ریزی انجام شده در یک روز از صبح تا عصر فاگرفته خواهد شد</p>', NULL, '1403/05/11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(2, NULL, 'دوره ضربتی قانون اساسی', NULL, NULL, 'دوره-ضربتی-قانون-اساسی', NULL, NULL, NULL, NULL, NULL, '300000', 'workshops/nREoFTrJrRJvzuViDHZpg2uemMXJt8.jpg', NULL, '2', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc,\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '16', NULL, '<p>دوره ضربتی حقوق اساسی طی دو روز متوالی در روزهای 3 و 4 آبان ماه 1403 برگزار خواهد شد که جمعاً 16 ساعت کلاس خواهد بود. مدرس این دوره جناب آقای دکتر محمد مهدی سیفی از مدرسان دانشگاه در دروس حقوق اساسی هستند که رزومه ایشان در ادامه در خدمت شما دانشپذیران گرامی قرار گرفته است. با شرکت در این دوره بر تمام موضوعات سوال خیز آزمون وکالت (کانون وکلا و مرکز قوه قضاییه) مسلط خواهد شد و در کمترین زمان مطالعه این درس را به اتمام خواهید رساند. لازم به ذکر است که ظرفیت شرکت در این دوره به صورت حضوری محدود است و دوره بصورت آنلاین در پلتفرم قابل تعامل با استاد برگزار خواهد شد . البته تمامی دوره به صورت ویدئو در دسترس دانشپذیران محترم قرار خواهد گرفت.</p>', '<p>1- تسلط بر مباحث سوال خیز حقوق اساسی</p>\r\n\r\n<p>2- مرور سریع مباحث تخصصی حقوق اساسی</p>\r\n\r\n<p>3- رفع اشکال مسائلی که اکثر داوطلبان دچار اشتباه می&zwnj;شوند.</p>\r\n\r\n<p>4- افزایش بهینه سرعت در پاسخگویی به تست&zwnj;های آزمون&zwnj;های قبل</p>', '1403/08/03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(3, NULL, 'کارگاه اصول قراردادنویسی', NULL, NULL, 'کارگاه-اصول-قراردادنویسی', NULL, NULL, NULL, NULL, NULL, '88000', 'workshops/Ppom3UyqmytggkMmiWLWO0bcbWMM36.jpg', NULL, '3', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc,\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '4', NULL, '<p>ایجاد بهداشت حقوقی و جلوگیری از بروز اختلافات با تنظیم اصولی قراردادهای فیما بین افراد حقیقی و حقوقی تحقق پذیر خواهد شد.در همین راستا کارگاه أصول قراردادنویسی به بیان مطالب بسیار مهم و کاربردی متناسب با نیازها و مسائل روز می پردازد. مخاطبین این دوره می بایست از حداقل دانش حقوقی و قراردادی بهره مند بوده تا بتوانند حداکثر استفاده از مطالب بیان شده را بنمایند. اولین گام در تنظیم یک قرارداد اصولی آگاهی از قوانین مرتبط است.در این کارگاه کوتاه مدت تلاش می شود با تدریس عناوین و مطالب دارای اهمیت بالا شما را به سطح قابل قبولی در تنظیم قراردادنویسی برسانیم.لازم به ذکر است مطالب این دوره صرفا در حوزه قوانین داخلی بوده و در صورت استقبال گسترده قواعد تنظیم قراردادهای بین المللی نیز برگزار خواهد شد.</p>', '<p>１.آشنایی با مبانی و اصول قراردادنویسی</p>\r\n\r\n<p>２.مرور مواد کاربردی قوانین مورد نیاز در تنظیم اولیه قرارداد</p>\r\n\r\n<p>３.ارائه چک لیست اصول کلی تنظیم قرارداد</p>\r\n\r\n<p>４.نکات روانشناسی در تنظیم قرارداد</p>', '1403/09/02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(4, NULL, 'کارگاه اصول قراردادنویسی (همراه دورهمی یلدایی)', NULL, NULL, 'کارگاه-اصول-قراردادنویسی-همراه-دورهمی-یلدایی', NULL, NULL, NULL, NULL, NULL, '88000', 'workshops/CSC7i6YCTk8Y6S6NROdXTpt12N1HeP.jpg', NULL, '7', 'workshop', '[\"\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '4', NULL, '<blockquote>\r\n<h3>ایجاد بهداشت حقوقی و جلوگیری از بروز اختلافات با تنظیم اصولی قراردادهای فیما بین افراد حقیقی و حقوقی تحقق پذیر خواهد شد.در همین راستا کارگاه أصول قراردادنویسی به بیان مطالب بسیار مهم و کاربردی متناسب با نیازها و مسائل روز می پردازد. مخاطبین این دوره می بایست از حداقل دانش حقوقی و قراردادی بهره مند بوده تا بتوانند حداکثر استفاده از مطالب بیان شده را بنمایند. اولین گام در تنظیم یک قرارداد اصولی آگاهی از قوانین مرتبط است.در این کارگاه کوتاه مدت تلاش می شود با تدریس عناوین و مطالب دارای اهمیت بالا شما را به سطح قابل قبولی در تنظیم قراردادنویسی برسانیم.لازم به ذکر است مطالب این دوره صرفا در حوزه قوانین داخلی بوده و در صورت استقبال گسترده قواعد تنظیم قراردادهای بین المللی نیز برگزار خواهد شد.</h3>\r\n</blockquote>', '<p>１.آشنایی با مبانی و اصول قراردادنویسی</p>\r\n\r\n<p>２.مرور مواد کاربردی قوانین مورد نیاز در تنظیم اولیه قرارداد</p>\r\n\r\n<p>３.ارائه چک لیست اصول کلی تنظیم قرارداد</p>\r\n\r\n<p>４.نکات روانشناسی در تنظیم قرارداد</p>', '1403/09/30', NULL, NULL, NULL, NULL, NULL, 30000, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(5, NULL, 'کارگاه پیشرفته اصول قراردادنویسی', NULL, NULL, 'کارگاه-پیشرفته-اصول-قراردادنویسی', NULL, NULL, NULL, NULL, NULL, '288000', 'workshops/jeU5ZnJv2FpaTQgPOFPh5yfRRxvjnH.jpg', NULL, '9', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc,\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '4', NULL, '<p>ایجاد بهداشت حقوقی و جلوگیری از بروز اختلافات با تنظیم اصولی قراردادهای فیما بین افراد حقیقی و حقوقی تحقق پذیر خواهد شد. در همین راستا کارگاه پیشرفته&nbsp; أصول قراردادنویسی به بیان مطالب بسیار مهم و کاربردی متناسب با نیازها و مسائل روز می پردازد. مخاطبین این کارگاه می بایست از حداقل دانش حقوقی و قراردادی بهره مند بوده تا بتوانند حداکثر استفاده از مطالب بیان شده را بنمایند.</p>\r\n\r\n<p>اولین گام در تنظیم یک قرارداد اصولی آگاهی از قوانین مرتبط است.در این کارگاه کوتاه مدت تلاش می شود با تدریس عناوین و مطالب دارای اهمیت بالا شما را به سطح قابل قبولی در تنظیم قراردادنویسی برسانیم.</p>\r\n\r\n<p>لازم به ذکر است مطالب این دوره صرفا در حوزه قوانین داخلی بوده و در صورت استقبال گسترده قواعد تنظیم قراردادهای بین المللی نیز برگزار خواهد شد.</p>', '<p>1- آشنایی با اصول و مبانی قراردادنویسی</p>\r\n\r\n<p>2-&nbsp;مرور مواد کاربردی قوانین مورد نیاز در تنظیم اولیه قرارداد</p>\r\n\r\n<p>3-&nbsp;ارائه چک لیست اصول کلی تنظیم قرارداد</p>\r\n\r\n<p>4-&nbsp;نکات روانشناسی در تنظیم قرارداد</p>', '1403/11/19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(6, NULL, 'کارگاه بایسته های کاربردی دعاوی دیوان عدالت اداری', NULL, NULL, 'کارگاه-بایسته-های-کاربردی-دعاوی-دیوان-عدالت-اداری', NULL, NULL, NULL, NULL, NULL, '288000', 'workshops/V8sNrlPq9inLqoyTkCFgTOnFeH9Wm6.jpg', NULL, '11', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc,\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '4', NULL, '<p>درباره دوره</p>', '<p>اهداف دوره</p>', '1403/12/02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(7, NULL, 'کارگاه بررسی قراردادهای بیع و دعاوی مرتبط', NULL, NULL, 'کارگاه-بررسی-قراردادهای-بیع-و-دعاوی-مرتبط', NULL, NULL, NULL, NULL, NULL, '2600000', 'workshops/lXTbhw9yxFZBjrcXPJ7cXp4A5MuvpY.jpg', NULL, '16', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc\"]', '16', NULL, '<p>در این دوره آموزشی که در فضایی متفاوت و در دل طبیعت برگزار می&zwnj;شود، به بررسی دقیق قراردادهای بیع و دعاوی ناشی از آن خواهیم پرداخت. از اصول نگارش قرارداد بیع، شرایط صحت، آثار حقوقی، تعهدات طرفین تا موارد فسخ، انحلال و نکات اختلاف&zwnj;برانگیز، به&zwnj;زبان ساده و کاربردی برای وکلا، دانشجویان و علاقه&zwnj;مندان به حقوق مدنی تشریح خواهد شد.</p>\r\n\r\n<p>ویژگی متمایز این کارگاه، تحلیل یک پرونده واقعی از اختلافات قراردادی بیع است که با رویکردی مسئله&zwnj;محور، مخاطبان را درگیر حل مسئله، تبادل نظر و درک عمیق&zwnj;تر مفاهیم خواهد کرد. این روش نه&zwnj;تنها موجب تثبیت یادگیری می&zwnj;شود، بلکه ابزارهای عملی برای تحلیل و دفاع در دعاوی مشابه را در اختیار شرکت&zwnj;کنندگان قرار می&zwnj;دهد.</p>\r\n\r\n<p>در کنار این آموزش تخصصی، تجربه&zwnj;ی یادگیری در فضای طبیعی و جمعی صمیمی فراهم شده تا شرکت&zwnj;کنندگان علاوه بر ارتقاء علمی، ارتباطات حرفه&zwnj;ای جدیدی شکل دهند و از مزایای گردشگری آموزشی بهره&zwnj;مند شوند. این کارگاه فرصتی متفاوت برای رشد علمی، تعمیق تجربیات حقوقی و استراحت ذهنی در دل طبیعت است.</p>', '<p>تثبیت مطالب آموزشی تا پایان عمر</p>\r\n\r\n<p>تسلط بر اصول و ساختار قرارداد بیع</p>\r\n\r\n<p>شناسایی و تحلیل دعاوی مرتبط با قرارداد بیع</p>\r\n\r\n<p>تحلیل یک پرونده واقعی حقوقی</p>\r\n\r\n<p>افزایش مهارت&zwnj;های عملی در نگارش و تفسیر قراردادها</p>\r\n\r\n<p>تجربه یادگیری در محیطی متفاوت و الهام&zwnj;بخش</p>', '1404/03/08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(8, NULL, 'کارگاه جامع قراردادنویسی', NULL, NULL, 'کارگاه-جامع-قراردادنویسی', NULL, NULL, NULL, NULL, NULL, '1299000', 'workshops/w54wU3oi2pQ4f1rCmZABlCucLAtFHM.jpg', NULL, '17', 'workshop', '[\"\\u062d\\u0636\\u0648\\u0631\\u06cc,\\u0622\\u0646\\u0644\\u0627\\u06cc\\u0646\"]', '7', NULL, '<p>ایجاد بهداشت حقوقی و جلوگیری از بروز اختلافات با تنظیم اصولی قراردادهای فیما بین افراد حقیقی و حقوقی تحقق پذیر خواهد شد.در همین راستا کارگاه أصول قراردادنویسی به بیان مطالب بسیار مهم و کاربردی متناسب با نیازها و مسائل روز می پردازد. مخاطبین این دوره می بایست از حداقل دانش حقوقی و قراردادی بهره مند بوده تا بتوانند حداکثر استفاده از مطالب بیان شده را بنمایند. اولین گام در تنظیم یک قرارداد اصولی آگاهی از قوانین مرتبط است.در این کارگاه کوتاه مدت تلاش می شود با تدریس عناوین و مطالب دارای اهمیت بالا شما را به سطح قابل قبولی در تنظیم قراردادنویسی برسانیم.لازم به ذکر است مطالب این دوره صرفا در حوزه قوانین داخلی بوده و در صورت استقبال گسترده قواعد تنظیم قراردادهای بین المللی نیز برگزار خواهد شد.</p>', '<p>１.آشنایی با مبانی و اصول قراردادنویسی</p>\r\n\r\n<p>２.مرور مواد کاربردی قوانین مورد نیاز در تنظیم اولیه قرارداد</p>\r\n\r\n<p>３.ارائه چک لیست اصول کلی تنظیم قرارداد</p>\r\n\r\n<p>４.نکات روانشناسی در تنظیم قرارداد</p>', '1404/08/01', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
