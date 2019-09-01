-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 01:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_of_news`
--

CREATE TABLE `category_of_news` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_of_news`
--

INSERT INTO `category_of_news` (`category_id`, `category_name`) VALUES
(1, 'SOSİAL'),
(2, 'İQTİSADİYYAT'),
(3, 'MƏDƏNİYYƏT'),
(4, 'ŞOU-BİZNES'),
(5, 'KRİMİNAL'),
(6, 'SİYASƏT'),
(7, 'İDMAN'),
(8, 'TURİZM');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) UNSIGNED NOT NULL,
  `news_title` text COLLATE utf8_unicode_ci,
  `news_content` text COLLATE utf8_unicode_ci NOT NULL,
  `news_category` int(11) NOT NULL,
  `news_photo_one` text COLLATE utf8_unicode_ci,
  `news_photo_two` text COLLATE utf8_unicode_ci,
  `news_photo_third` text COLLATE utf8_unicode_ci,
  `news_video` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_category`, `news_photo_one`, `news_photo_two`, `news_photo_third`, `news_video`, `created_at`, `updated_at`) VALUES
(1, 'Boşandığı Arvadının Evini Yandırdı, 2 Yaşlı Uşağı öldü - Azərbaycanda Dəhşət', '<p>Şəmkirdə yaşayış evində yanğın baş verib.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;bildirir ki, &quot;Qafqazinfo&quot;nun verdiyi məlumata g&ouml;rə, hadisə rayonun Sarıtəpə kəndində qeydə alınıb.</p>\r\n\r\n<p>&Uuml;mumi sahəsi 30 kv. metr olan bir otaqlı evdə baş verən yanğını s&ouml;nd&uuml;rmək &uuml;&ccedil;&uuml;n əraziyə Şəmkir Yanğından M&uuml;hafizə Hissəsinin 2 avtomobili və canlı q&uuml;vvəsi cəlb olunub. Alov s&ouml;nd&uuml;r&uuml;lsə də, evin b&uuml;t&uuml;n yanar konstruksiyaları yanaraq yararsız hala d&uuml;ş&uuml;b.</p>\r\n\r\n<p>Yanğın zamanı evdə olan 2017-ci il təvəll&uuml;dl&uuml; Məmmədov Nicat Elmar oğlu &ouml;l&uuml;b. Onun anası 1995-ci il təvəll&uuml;dl&uuml; Məsimova Mətanət İlqar qızı və nənəsi 1964-c&uuml; il təvəll&uuml;dl&uuml; Məmmədova Səltənət Allahverdi qızı xəsarət alaraq xəstəxanaya yerləşdiriliblər.</p>\r\n\r\n<p>Məlumata g&ouml;rə, M. Məsimova həyat yoldaşından boşanaraq 2 yaşlı &ouml;vladı ilə atası evində qalırmış. Elə yanğını da Mətanətin boşandığı şəxs t&ouml;rədib. Belə ki, gecə saat 3 radələrində Dəllər Cəyir kənd sakini Elmar adlı şəxs benzinlə ke&ccedil;miş arvadının yatdığı otağa daxil olub və evi yandırıb. Bu barədə Mətanətin &ouml;z&uuml; ifadəsində bildirib. Hadisə zamanı qadının atası və qardaşı da evdə olub. Lakin onlar yanğından xəsarət almadan xilas ola biliblər. Hadisəni t&ouml;rədən şəxs isə oradan uzaqlaşıb. Hazırda onun axtarışlarına başlanılıb.</p>\r\n\r\n<p>Faktla bağlı araşdırma aparılır.</p>', 1, 'images/5157779073.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-18 07:17:02', '2019-08-18 07:17:02'),
(2, 'Vilayət Eyvazovun Etdiyi Islahatlar - Kim Hara Təyin Edilib? (SİYAHI)', '<p>Vilayət Eyvazov 20 iyun 2019-cu ildə Prezident İlham Əliyev tərəfindən daxili işlər naziri təyin edildikdən sonra h&uuml;quq-m&uuml;hafizə orqanlarında bir sıra islahatlara imza atıb.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;general-polkovnik Vilayət Eyvazovun geridə qalan 2 ay ərzində həyata ke&ccedil;irdiyi təyinatları və islahatların siyahısını hazırlayıb:&nbsp;</p>', 1, 'images/25121566205009_vilayet-eyvaz.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:22:29', '2019-08-19 06:22:29'),
(3, 'Sürücülərin NƏZƏRİNƏ: Bu Yollar 1 Həftə Bağlı Olacaq', '<p>Avqustun 20-dən etibarən Bakının Mirzağa Əliyev k&uuml;&ccedil;əsindən başlayaraq Nizami k&uuml;&ccedil;əsinin kəsişməsinə qədər və Murtuza Muxtarov k&uuml;&ccedil;ələrində yol tikinti işləri ilə əlaqədar hərəkət məhdudlaşdırılacaq.</p>\r\n\r\n<p>Bu barədə&nbsp;<strong>Sonxeber.az</strong>-a Azərbaycan Avtomobil Yolları D&ouml;vlət Agentliyindən (AAYDA) məlumat verilib.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tikinti işləri bir həftə m&uuml;ddətinə qədər davam edəcək.</p>\r\n\r\n<p>S&uuml;r&uuml;c&uuml;lərdən aparılan işlərə anlayışla yanaşmaları xahiş olunur və alternativ yollardan istifadə etmələri t&ouml;vsiyə edilir.</p>', 1, 'images/11811566204935_yol_znak_bagli_yollar-azeuro-1.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:24:18', '2019-08-19 06:24:18'),
(4, 'Bakı Metrosunda Qatarların Intervalında Fasilə Yaranıb', '<p>Bakı metrosunda qatarların intervalında fasilə yaranıb.</p>\r\n\r\n<p>Bu barədə Trend-ə a&ccedil;ıqlamasında &quot;Bakı Metropoliteni&quot; Qapalı Səhmdar Cəmiyyətinin mətbuat xidmətinin rəhbəri Bəxtiyar Məmmədov deyib.</p>\r\n\r\n<p>Onun s&ouml;zlərinə g&ouml;rə, fasilə &quot;İ&ccedil;ərişəhər&quot; stansiyasında qeydə alınıb: &quot;Səhər saatlarında &quot;İ&ccedil;ərişəhər&quot; stansiyasında texniki səbəblərdən qatarın depoya yola salınması və yerinə qatar verilməsi nəzərdə tutulsa da, qatara baxış ke&ccedil;irən təlimat&ccedil;ı-maşinist hər hansısa nasazlıq olmadığını m&uuml;əyyən edib. Onun qərarına əsasən qatar xətdə saxlanılıb. Bu səbəbdən b&uuml;t&uuml;n xətt boyu 10 dəqiqəlik gecikmə qeydə alınıb&quot;.</p>\r\n\r\n<p>B.Məmmədov bildirib ki, hazırda hər iki xətt &uuml;zrə interval bərpa olunub və qatarlar normal hərəkətini davam etdirir.</p>', 1, 'images/3991779316.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:26:01', '2019-08-19 06:26:01'),
(5, 'Prezident Təqaüdü Alanların SAYI ARTIB', '<p>Azərbaycan Prezidentinin təqa&uuml;d&uuml; təyin olunan m&uuml;xtəlif kateqoriyadan olan şəxslərin sayı 2018-ci ilin m&uuml;vafiq d&ouml;vr&uuml; ilə m&uuml;qayisədə 3,8 dəfə artaraq 239,8 min nəfər olub.</p>\r\n\r\n<p>Bu barədə&nbsp;<strong>Sonxeber.az</strong>-a D&ouml;vlət Statistika Komitəsinə istinadən məlumat verir.</p>\r\n\r\n<p>Bundan başqa, 2019-cu ilin altı ayı ərzində Əmək və Əhalinin Sosial M&uuml;dafiəsi Nazirliyi tərəfindən 32 102 ailəyə 34 241 uşağın anadan olmasına g&ouml;rə, 4126 nəfər radiasiya qəzası nəticəsində zərər &ccedil;əkən şəxsə m&uuml;alicə &uuml;&ccedil;&uuml;n və 3355 nəfər penitensiar m&uuml;əssisələrdə cəza &ccedil;əkməkdən azad edilən şəxsə birdəfəlik m&uuml;avinətlər verilib.</p>\r\n\r\n<p>Cari il iyulun 1-nə əmək xəsarəti və ya peşə xəstəliyi nəticəsində 380 nəfər zərər&ccedil;əkən kompensasiya alıb.</p>', 1, 'images/698teqaud.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:28:32', '2019-08-19 06:28:32'),
(6, 'Sentyabrın 1-dən Kimlərin əmək Haqqı Və Pensiyası Nə Qədər Artacaq?', '<p>Son aylarda d&ouml;vlət baş&ccedil;ısı tərəfindən əmək pensiyaları ilə bağlı qanunvericilikdə dəyişikliklər edilib, əmək haqqı və pensiyaların minimum məbləğində artımla bağlı qərarlar qəbul olunub. Bu qərarlar n&ouml;vbəti aylardan q&uuml;vvəyə minəcək və onların iqtisadiyyatın m&uuml;xtəlif sahələrinə, o c&uuml;mlədən əhalinin gəlirlərinə təsirləri g&uuml;ndəmin əsas m&uuml;zakirə m&ouml;vzusudur.</p>\r\n\r\n<p>Bundan başqa, Azərbaycan iqtisadiyyatında problemli kreditlərin &uuml;mumi kredit portfelində həcminin nəzərdə tutulduğu qədər azalmaması, bank faizlərinin hələ də y&uuml;ksək olması başlıca problem olaraq qalmaqdadır.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;musavat.com-a istinadən iqtisad&ccedil;ı alim, İqtisadi və Sosial İnkişaf Mərkəzinin rəhbəri V&uuml;qar Bayramovun b&uuml;t&uuml;n bu məsələləri, o c&uuml;mlədən d&uuml;nya iqtisadiyyatında, beynəlxalq birjalarda baş verənləri şərh edəcək m&uuml;sahibəsini təqdim edir:</p>', 2, 'No Photo', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:31:30', '2019-08-19 06:31:30'),
(7, '\"Moody\'s\": Azərbaycanda Islam Bankçılığının Inkişaf Potensialı...', '<p>&quot;Moody&#39;s&quot; beynəlxalq reytinq agentliyi Azərbaycanda islam bank&ccedil;ılığının inkişaf potensialının aşağı olduğunu qeyd edir.</p>\r\n\r\n<p>&quot;İnterfaks-Azərbaycan&quot;ın verdiyi məlumata g&ouml;rə, &quot;Moody&#39;s&quot; m&uuml;təxəssisləri MDB &ouml;lkələrində İslam bank&ccedil;ılığının inkişaf perspektivləri barədə hesabatda bildirirlər ki, m&uuml;səlman əhalisinin &ccedil;oxluğuna baxmayaraq, Azərbaycanda islam bank&ccedil;ılığının inkişaf perspektivləri zəifdir.</p>\r\n\r\n<p>Agentliyin analitiklərinin fikrincə, Azərbaycan h&ouml;kuməti hazırda islam bank&ccedil;ılığının inkişafını planlaşdırmır, &ccedil;&uuml;nki onun diqqəti d&uuml;nyəvi d&ouml;vlətin və iqtisadiyyatın yaradılmasına k&ouml;klənib.</p>\r\n\r\n<p>&quot;H&ouml;kumətə aid olan Azərbaycan Beynəlxalq Bankı &quot;islam pəncərəsini&quot; bağlayıb və &ouml;lkədə ixtisaslaşdırılmış islam bankı artıq yoxdur. 2018-ci ildə &ouml;lkə islam maliyyələşdirməsi &uuml;zrə qanunvericiliyin hazırlanmasında texniki k&ouml;məyə dair İslam İnkişaf Bankı ilə razılaşma imzalayıb, lakin sektorun inkişafına qətiyyətli d&ouml;vlət m&uuml;daxiləsi olmadan onun artması məhdud olacaq&quot;, - deyə agentliyin m&uuml;təxəssisləri bildirirlər.</p>\r\n\r\n<p>İslam İnkişaf Bankı 1991-2018-ci illərdə Azərbaycana 1,387 milyard dollarlıq kredit ayırıb.</p>', 2, 'images/2336mood.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:31:59', '2019-08-19 06:31:59'),
(8, 'Nəzarət Palatası Bu şirkəti CƏRİMƏLƏDİ', '<p>Maliyyə Bazarlarına Nəzarət Palatası &quot;SMT İnşaat&quot; Məhdud Məsuliyyətli Cəmiyyətinin cərimələnməsi &uuml;&ccedil;&uuml;n protokol tərtib edib.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;report-a istinadən xəbər verir ki, &quot;SMT İnşaat&quot; barədə İnzibati Xətalar Məcəlləsinin 430.4-c&uuml; (avans yolu ilə &ouml;dənilmiş valyuta vəsaitinin m&uuml;qabilində m&uuml;əyyən edilmiş m&uuml;ddətlərdə m&uuml;vafiq mallar idxal edilmədikdə, işlər g&ouml;r&uuml;lmədikdə və ya xidmətlər g&ouml;stərilmədikdə &ouml;dənilmiş valyuta vəsaitinin xaricdən geri qaytarılmamasına g&ouml;rə) maddəsi ilə protokol tərtib olunub.</p>\r\n\r\n<p>Bu inzibati xətaya g&ouml;rə, h&uuml;quqi şəxslər inzibati xətanın bilavasitə obyekti olmuş valyuta vəsaitinin iyirmi faizindən otuz faizinədək məbləğdə cərimə edilir.</p>\r\n\r\n<p>Şirkətin 1096 ABŞ dolları (5480 ABŞ dollarının iyirmi faizi miqdarında) cərimə edilməsi barədə Nəsimi Rayon Məhkəməsinin 18 iyun 2019-cu il tarixli verdiyi şikayətə Bakı Apelyasiya Məhkəməsində baxılır.</p>\r\n\r\n<p>Qeyd edək ki, &quot;SMT İnşaat&quot; tikinti fəaliyyəti ilə məşğul olan şirkətdir.</p>', 2, 'images/28651565875752cer.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:32:36', '2019-08-19 06:32:36'),
(9, 'Əməkdar Artist ATV-dən Getdi - SƏBƏB', '<p>Əməkdar artist Məlahət Abbasova bu m&ouml;vs&uuml;m də aparıcılıq fəaliyyətini davam etdirəcək.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;axşam.az-a istinadən xəbər verir ki, &quot;Məlahətli s&ouml;hbətlər&quot; adlı proqramla ATV-də tamaşa&ccedil;ıların qarşısına &ccedil;ıxan aktrisa kanal dəyişdirib.</p>\r\n\r\n<p>O, bundan sonra &quot;Məlahətli dəqiqələr&quot; adlı proqramı ilə &quot;Mədəniyyət&quot; kanalında tamaşa&ccedil;ıların qarşısına ke&ccedil;əcək. Abbasova artıq yeni m&ouml;vs&uuml;m &uuml;&ccedil;&uuml;n verilişlərin &ccedil;əkilişlərinə başlayıb.</p>\r\n\r\n<p>Qeyd edək ki, T&uuml;rkiyədə yaşayan aktrisanın verilişində yerli şou-biznes n&uuml;mayəndələri ilə yanaşı, t&uuml;rk ulduzları da qonaq olurdu.&nbsp;</p>', 3, 'images/1468atv_loqo_az.jpg', 'images/914e1e0696a03f4a06982b21ce5038a1fcd.jpg', 'No Photo', 'No Video', '2019-08-19 06:34:31', '2019-08-19 06:34:31'),
(10, 'Bəzi Muzeylər Nazirliyin Tabeliyindən çıxarılıb Turizm Agentliyinə Verildi - SİYAHI', '<p>Nazirlər Kabineti &quot;Mədəniyyət və Turizm Nazirliyinin strukturuna daxil olmayan tabeliyindəki qurumların Siyahısı&quot;na dəyişiklik edib.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;xəbər verir ki, bununla bağlı m&uuml;vafiq qərarı Baş nazir Novruz Məmmədov imzalayıb.</p>\r\n\r\n<p>Qərara əsasən, aşağıdakı qurumlar nazirliyin tabeliyindən &ccedil;ıxarılaraq &quot;D&ouml;vlət Turizm Agentliyinin strukturuna daxil olmayan tabeliyindəki qurumların Siyahısı&quot;na daxil edilir:</p>\r\n\r\n<p>- Lahıc Tarix-Diyarş&uuml;naslıq Muzeyi;</p>\r\n\r\n<p>- Şəki Tarix-Diyarş&uuml;naslıq Muzeyi;</p>\r\n\r\n<p>- Şəki Xalq Tətbiqi Sənəti Muzeyi;</p>\r\n\r\n<p>- Şəki D&ouml;vlət Rəsm Qalereyası;</p>\r\n\r\n<p>- Basqal qəsəbə Mədəniyyət Evi;</p>\r\n\r\n<p>- Xınalıq kənd Mədəniyyət Evi.</p>', 3, 'images/88991565937909muzey.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:35:35', '2019-08-19 06:35:35'),
(11, 'Emin Qızları Əminə Və Afina Ilə - FOTOLAR', '<p>Tanınmış m&uuml;ğənni Emin Ağalarovun qızları ilə yeni fotoları yayılıb.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;xəbər verir ki, Xalq artisti İnstaqram hesabında b&ouml;y&uuml;k qızı Əminə və 7 aylıq Afina ilə şəklllərini paylaşıb.</p>\r\n\r\n<p>O, izləyiciləri ilə fotoları b&ouml;l&uuml;şərək &quot;Əminə və Afina&quot; şərhini əlavə edib.</p>\r\n\r\n<p>Leyla</p>', 3, 'images/3058677777.jpg', 'images/7687a_31565867248.png', 'images/3713eee_11565867248.png', 'No Video', '2019-08-19 06:41:12', '2019-08-19 06:41:12'),
(12, '\"Yaraşığımı Dükandan Almamışam Ki...\" - Rasim Balayev', '<p>&quot;Səhərdən rəsmi şəxslərdən, dostlardan, həmkarlardan təbriklər alıram. Hamıya təşəkk&uuml;r&uuml;m&uuml; bildirirəm&quot;.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;&ouml;lkə.az-a istinadən bildirir ki, bu fikirləri &quot;&ouml;lkə.az&quot;-a a&ccedil;ıqlamasında d&uuml;nən 71 yaşını qeyd edən xalq artisti, məşhur kinoaktyor Rasim Balayev səsləndirib. Sənətkar &quot;yaraşıqlı insanlar yaşlandıqca g&ouml;r&uuml;n&uuml;şlərini itirməkdən qorxurlar, sizin belə qorxunuz varmı&quot; sualını zarafatla cavablayıb:</p>\r\n\r\n<p>&quot;Yaraşığımı d&uuml;kandan almamışam ki. Allah verib, indi də yavaş-yavaş geri alır. Bircə arzum odur ki,&ouml;lən g&uuml;nə qədər he&ccedil; kimə, hətta &ouml;z doğmalarıma da m&ouml;htac olmayım&quot;.</p>\r\n\r\n<p>Qeyd edək ki, R.Balayev 1948-ci ilin 8 avqust tarixində Ağsu rayonunda anadan olub. 1976-cı ildə Əməkdar artist, 1982-ci ildə Xalq artisti fəxri adlarına layiq g&ouml;r&uuml;l&uuml;b. 1998-ci ildə &quot;Ş&ouml;hrət&quot;, 2018-ci ildə &quot;Şərəf&quot; ordenləri ilə təltif edilib.</p>', 3, 'images/4908776901.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-19 06:42:37', '2019-08-23 07:28:56'),
(13, 'Abutalıbovun Bakıdakı Milyonluq Mülkləri - Bazar, çayxana, Restoran... (SİYAHI)', '<p>Baş nazirin m&uuml;avini Hacıbala Abutalıbov Bakı şəhər İcra hakimiyyətinin rəhbəri olarkən d&ouml;vlət əhəmiyyətli binaları və iaşə obyektlərini &ouml;z qohumlarının və yaxın adamlarının adına rəsmiləşdirib.</p>\r\n\r\n<p><strong>Sonxeber.az</strong>&nbsp;bildirir ki, Unikal.org-un əldə etdiyi məlumata g&ouml;rə, aşağıda adları qeyd olunan obyektlər Baş nazirin m&uuml;avini Hacıbala Abutalıbova məxsusdur:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.F&uuml;zuli k&uuml;&ccedil;əsi 39, 1-ci mərtəbə (Klassik-Şəms) s&uuml;r&uuml;şd&uuml;r&uuml;lən bina 11,&nbsp;<br />\r\n2.Qış parkında yerləşən &quot;Zambaq&quot;, &quot;İnnab&quot;, &quot;Palıd&quot; kafeləri,</p>\r\n\r\n<p>3.Yasamal rayonu, Mətbuat prospekti, k&ouml;hnə &quot;Ov&ccedil;ular&quot; evinin yerində salınmış parkda &quot;&Ouml;zs&uuml;t&quot; restoranı,</p>\r\n\r\n<p>4.Səməd Vurğun k&uuml;&ccedil;əsi ilə Bakıxanov k&uuml;&ccedil;əsinin kəsişməsində yerləşən &quot;S&uuml;tiş&quot; restoranlar şəbəkəsi,</p>\r\n\r\n<p>5.Nəsimi rayonu, 647-ci məhəllə, akademik Mirəli Qaşqay k&uuml;&ccedil;əsi 61-də MİS-in yeri.103 kvadrat metr (Abdullayeva Səmayə Qulam qızının adına rəsmiləşdirib)&nbsp;<br />\r\n6.Nərimanov rayonu, Yusif Vəzir &Ccedil;əmənzəminli k&uuml;&ccedil;əsi, İqtisadiyyat Komitəsinin yeri 113.7 kv metr (Abdullayeva Səmayə Qulam qızının adına rəsmiləşdirib)</p>\r\n\r\n<p>7.Nizami rayonu, Mehdi Abbasov k&uuml;&ccedil;əsi, Bakı şəhər işığının anbarı və qarajlarının yeri, (Hazırda anbar kimi icarəyə verilib)</p>\r\n\r\n<p>8.Avtovağzal Kompleksinin dayanacağının həyətində inşa olunan 3 mərtəbəli restoran,</p>\r\n\r\n<p>9.Rəşid Behbudov k&uuml;&ccedil;əsi, Azərbaycan Dillər Universitetinin yaxınlığında yerləşən 7 mərtəbəli iş mərkəzi,</p>\r\n\r\n<p>10.H&uuml;seyn Cavid parkında yerləşən &quot;Yaşıl&quot; &ccedil;ay evi,</p>\r\n\r\n<p>11.Nərimanov rayonunda yerləşən &quot;Yaşıl&quot; bazar,</p>\r\n\r\n<p>12.Nərimanov rayonu, Ticarət Departamentinin inzibati binası,</p>\r\n\r\n<p>13.Heydər Əliyev məscidinin yanındakı Mərasim evi, (həmin yerin k&ouml;&ccedil;&uuml;r&uuml;lməsi d&ouml;vlət hesabına olmuşdur)</p>\r\n\r\n<p>14.Balaxanıda yerləşən &quot;Qara metalların sinklənməsi 2 zavodu(Qalzansiya)</p>\r\n\r\n<p>15.Yasamal rayonu, Qurban Xəlilov k&uuml;&ccedil;əsi, Vergilər Nazirliyinin arxasında yeni salınmış parkda yerin altında 2 b&uuml;n&ouml;vrə qazılıb, betonlama işləri tamamlanıb, kafelər &uuml;&ccedil;&uuml;n hazırlanıb, &uuml;st&uuml; bağlanılıb.&nbsp;</p>', 5, 'images/24771566573388_hac.jpg', 'No Photo', 'No Photo', 'No Video', '2019-08-25 07:47:04', '2019-08-25 07:47:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_of_news`
--
ALTER TABLE `category_of_news`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_category` (`news_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_of_news`
--
ALTER TABLE `category_of_news`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_category`) REFERENCES `category_of_news` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
