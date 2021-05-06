-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2020 lúc 02:32 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3-ass`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Prof. Baby Keebler', 14, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(4, 'Rodrigo Dooley DVM', 16, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(5, 'Mrs. Bettie Pollich III', 7, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(6, 'Dr. Trey D\'Amore IV', 18, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(7, 'Bulah Stark DDS', 32, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(8, 'Jewell Cummerata', 5, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(9, 'Lizeth Volkman', 9, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(10, 'Prof. Jameson Lowe DVM', 17, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(11, 'Bernhard Kerluke', 13, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(12, 'Marcelle Grady PhD', 44, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(13, 'Johnnie Schmeler DVM', 46, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(14, 'Simone Bartoletti', 28, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(15, 'Andrew Mosciski', 48, '2020-06-07 19:34:29', '2020-06-07 19:34:29'),
(16, 'Giovanni Shields', 43, '2020-06-07 19:34:30', '2020-06-07 19:34:30'),
(17, 'Cecilia Schmeler', 39, '2020-06-07 19:34:30', '2020-06-07 19:34:30'),
(18, 'Betty Fahey II', 37, '2020-06-07 19:34:30', '2020-06-07 19:34:30'),
(19, 'Prof. Ida Runte V', 40, '2020-06-07 19:34:30', '2020-06-07 19:34:30'),
(20, 'Savanna Vandervort', 36, '2020-06-07 19:34:30', '2020-06-07 19:34:30'),
(21, 'Dr. Adah Murray Sr.', 5, '2020-06-07 19:35:19', '2020-06-07 19:35:19'),
(22, 'Marlee Reichert', 5, '2020-06-07 19:35:19', '2020-06-07 19:35:19'),
(23, 'Alanna Batz PhD', 14, '2020-06-07 19:35:19', '2020-06-07 19:35:19'),
(24, 'Josh Weimann', 17, '2020-06-07 19:35:19', '2020-06-07 19:35:19'),
(25, 'Leta Kuhn', 9, '2020-06-07 19:35:19', '2020-06-07 19:35:19'),
(26, 'Julie Franecki', 16, '2020-06-07 19:35:19', '2020-06-07 19:35:19'),
(27, 'Miss Meta Upton', 12, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(28, 'Luis Parisian', 19, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(29, 'Halie Goyette DVM', 8, '2020-06-07 19:35:20', '2020-06-17 04:46:08'),
(30, 'Kyla Gaylord', 17, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(31, 'Susie Jacobi', 20, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(32, 'Dr. Palma Altenwerth Jr.', 11, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(33, 'Heaven Hirthe', 19, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(34, 'Miss Bernita Schimmel', 18, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(35, 'Dr. Julie Kirlin', 13, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(37, 'Alta Dickens Sr.', 19, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(38, 'Shyanne Walsh', 3, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(39, 'Dr. Emery Beer', 11, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(40, 'Chelsea Willms', 19, '2020-06-07 19:35:20', '2020-06-07 19:35:20'),
(42, 'admin', 3, '2020-06-24 03:15:02', '2020-06-24 03:15:02'),
(43, 'hihi', 3, '2020-06-24 03:15:28', '2020-06-24 03:15:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `user_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'He trusts to you never had fits, my dear, and that he had a door leading right into it. \'That\'s very curious.\' \'It\'s all his fancy, that: he hasn\'t got no business of MINE.\' The Queen smiled and.', 2, 4, 1, '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(2, 'huhu', 2, 67, 0, '2020-06-07 19:28:52', '2020-06-20 00:56:07'),
(4, 'King, \'that only makes the matter with it. There was certainly too much frightened to say it any longer than that,\' said the Caterpillar. \'Well, I\'ve tried hedges,\' the Pigeon went on, very much.', 2, 16, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(5, 'Rabbit say, \'A barrowful will do, to begin with; and being so many tea-things are put out here?\' she asked. \'Yes, that\'s it,\' said Alice, \'we learned French and music.\' \'And washing?\' said the March.', 5, 19, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(6, 'Dormouse shook its head to hide a smile: some of them with one foot. \'Get up!\' said the King. \'Nearly two miles high,\' added the Hatter, \'or you\'ll be asleep again before it\'s done.\' \'Once upon a.', 10, 12, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(7, 'Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice, very earnestly. \'I\'ve had nothing yet,\' Alice replied very politely, feeling quite pleased to have finished,\' said the King.', 13, 13, 0, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(8, 'Mouse, who was trembling down to look down and began an account of the same size: to be seen--everything seemed to her head, and she set off at once in a large pigeon had flown into her face, and.', 18, 14, 0, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(9, 'Mock Turtle would be of any that do,\' Alice said to herself \'Now I can kick a little!\' She drew her foot as far as they all cheered. Alice thought over all she could do to come out among the party.', 17, 10, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(10, 'I\'m Mabel, I\'ll stay down here with me! There are no mice in the sun. (IF you don\'t explain it as to go near the King replied. Here the Dormouse fell asleep instantly, and neither of the jurymen.', 8, 12, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(11, 'After a while, finding that nothing more happened, she decided on going into the garden with one finger for the end of every line: \'Speak roughly to your little boy, And beat him when he sneezes: He.', 5, 18, 0, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(12, 'But do cats eat bats, I wonder?\' As she said to the little crocodile Improve his shining tail, And pour the waters of the officers: but the Hatter replied. \'Of course not,\' said the Dormouse.', 9, 10, 0, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(13, 'Alice, \'and if it thought that SOMEBODY ought to be executed for having missed their turns, and she put one arm out of THIS!\' (Sounds of more broken glass.) \'Now tell me, please, which way I ought.', 13, 19, 0, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(14, 'Either the well was very hot, she kept tossing the baby was howling so much frightened that she was surprised to see what was the BEST butter, you know.\' Alice had been to the three gardeners.', 18, 7, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(15, 'How brave they\'ll all think me at home! Why, I haven\'t had a VERY turn-up nose, much more like a snout than a rat-hole: she knelt down and looked at them with one elbow against the door, staring.', 2, 11, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(16, 'The Antipathies, I think--\' (she was so much frightened to say it any longer than that,\' said the King, going up to her chin in salt water. Her first idea was that it led into the Dormouse\'s place.', 15, 18, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(17, 'Queen, the royal children, and make THEIR eyes bright and eager with many a strange tale, perhaps even with the words all coming different, and then dipped suddenly down, so suddenly that Alice had.', 3, 18, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(18, 'ME,\' said the Lory, as soon as there was nothing on it except a little shriek and a scroll of parchment in the schoolroom, and though this was the White Rabbit: it was YOUR table,\' said Alice.', 18, 18, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(19, 'Dormouse,\' thought Alice; \'only, as it\'s asleep, I suppose I ought to have got altered.\' \'It is a long way. So she set the little magic bottle had now had its full effect, and she thought there was.', 13, 11, 0, '2020-06-07 19:28:53', '2020-06-07 19:28:53'),
(20, 'I got up in her life; it was done. They had a head could be no use in crying like that!\' said Alice very humbly: \'you had got so much at this, but at last she spread out her hand, and made believe.', 16, 14, 1, '2020-06-07 19:28:53', '2020-06-07 19:28:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_06_08_014105_create_users_table', 2),
(3, '2020_06_08_014323_create_posts_table', 3),
(4, '2020_06_08_014512_create_comments', 4),
(5, '2020_06_08_014634_create_categories_table', 5),
(6, '2020_06_08_022606_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `user_id`, `category_id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Iure sit non voluptatem soluta nisi omnis commodi pariatur.', 3, 20, 'value=\"value=\"value=\"THAT like?\' said Alice. \'Why not?\' said the King. The White Rabbit interrupted: \'UNimportant, your Majesty means, of course,\' said the Queen, who had been wandering, when a cry of \'The trial\'s.', 'https://lorempixel.com/640/480/?70533', '2020-06-07 19:05:33', '2020-06-24 03:09:36'),
(3, 'Incidunt voluptas laborum molestiae facilis impedit voluptas et.', 67, 18, 'value=\"value=\"value=\"value=\"Majesty must cross-examine the next moment a shower of saucepans, plates, and dishes. The Duchess took her choice, and was just saying to her usual height. It was high time to see you again, you.', 'https://lorempixel.com/640/480/?97315', '2020-06-07 19:05:33', '2020-06-24 03:50:51'),
(4, 'Enim perferendis quam saepe qui ut et.', 8, 20, 'Lastly, she pictured to herself that perhaps it was over at last, and managed to put the Dormouse crossed the court, by the English, who wanted leaders, and had just begun \'Well, of all her life.', 'https://lorempixel.com/640/480/?33267', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(5, 'Voluptatum excepturi quidem exercitationem at quaerat vel excepturi.', 4, 6, 'Alice took up the other, looking uneasily at the thought that she was ever to get into the sea, though you mayn\'t believe it--\' \'I never could abide figures!\' And with that she was now about two.', 'https://lorempixel.com/640/480/?52600', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(7, 'Ratione non dolores quis sint pariatur.', 12, 19, 'I shall have to beat them off, and found that her neck kept getting entangled among the distant green leaves. As there seemed to be sure! However, everything is queer to-day.\' Just then she looked.', 'https://lorempixel.com/640/480/?41546', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(8, 'Quo molestias excepturi suscipit commodi laborum provident nostrum illum.', 12, 3, 'value=\"Heads below!\' (a loud crash)--\'Now, who did that?--It was Bill, I fancy--Who\'s to go on. \'And so these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said Alice, as the question was evidently.', 'https://lorempixel.com/640/480/?88673', '2020-06-07 19:05:33', '2020-06-17 21:22:21'),
(9, 'Eos ratione exercitationem aliquid quidem.', 17, 10, 'Alice asked. The Hatter was out of court! Suppress him! Pinch him! Off with his head!\' or \'Off with his whiskers!\' For some minutes the whole place around her became alive with the edge of her.', 'https://lorempixel.com/640/480/?43355', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(10, 'Fuga aliquid quia saepe a qui.', 3, 5, 'There was a child,\' said the one who got any advantage from the sky! Ugh, Serpent!\' \'But I\'m not Ada,\' she said, as politely as she could. \'The Dormouse is asleep again,\' said the Cat. \'I don\'t.', 'https://lorempixel.com/640/480/?66653', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(11, 'Voluptas non ea repellendus.', 9, 14, 'While she was saying, and the Panther were sharing a pie--\' [later editions continued as follows When the Mouse only shook its head down, and felt quite relieved to see that she never knew so much.', 'https://lorempixel.com/640/480/?79091', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(12, 'Minima cupiditate sint necessitatibus numquam voluptatem quaerat tempore.', 3, 14, 'value=\"The Hatter looked at it again: but he would not open any of them. However, on the whole court was in March.\' As she said to Alice; and Alice was more hopeless than ever: she sat still just as if she.', 'https://lorempixel.com/640/480/?24654', '2020-06-07 19:05:33', '2020-06-17 21:22:43'),
(13, 'Cupiditate veniam dolores sint.', 18, 3, 'value=\"Alice, as she could, for her to wink with one finger for the moment he was obliged to write with one finger for the hot day made her draw back in their mouths; and the choking of the shepherd.', 'https://lorempixel.com/640/480/?97616', '2020-06-07 19:05:33', '2020-06-17 21:22:32'),
(14, 'Omnis cupiditate cupiditate veniam explicabo quasi magnam alias.', 8, 14, 'Dormouse again, so that her shoulders were nowhere to be afraid of interrupting him,) \'I\'ll give him sixpence. _I_ don\'t believe there\'s an atom of meaning in it,\' said the King: \'however, it may.', 'https://lorempixel.com/640/480/?57510', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(15, 'Recusandae quidem eius accusantium voluptatem.', 20, 16, 'Father William,\' the young man said, \'And your hair has become very white; And yet I don\'t want to be?\' it asked. \'Oh, I\'m not the smallest idea how confusing it is all the time he was speaking, so.', 'https://lorempixel.com/640/480/?38004', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(16, 'Deserunt eos aut nemo repellendus et et.', 4, 5, 'If I or she should meet the real Mary Ann, what ARE you doing out here? Run home this moment, I tell you, you coward!\' and at last came a little before she made out that it was the only one who got.', 'https://lorempixel.com/640/480/?13876', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(17, 'Totam earum ut explicabo quis at.', 7, 6, 'I know all the way of escape, and wondering whether she ought to tell me the list of the house till she too began dreaming after a few minutes she heard a little bit, and said \'That\'s very curious!\'.', 'https://lorempixel.com/640/480/?23947', '2020-06-07 19:05:33', '2020-06-07 19:05:33'),
(18, 'Cum fugit perspiciatis earum aliquam magni.', 9, 15, 'Hatter instead!\' CHAPTER VII. A Mad Tea-Party There was nothing else to do, and in despair she put her hand again, and she tried her best to climb up one of the trees under which she found it.', 'https://lorempixel.com/640/480/?49811', '2020-06-07 19:05:34', '2020-06-07 19:05:34'),
(19, 'Placeat nobis maiores mollitia perspiciatis.', 17, 19, 'ARE OLD, FATHER WILLIAM,\"\' said the King. (The jury all looked so good, that it might appear to others that what you like,\' said the King. The White Rabbit cried out, \'Silence in the air: it puzzled.', 'https://lorempixel.com/640/480/?92541', '2020-06-07 19:05:34', '2020-06-07 19:05:34'),
(20, 'Eligendi vitae facilis numquam suscipit esse.', 6, 12, 'I to get through was more hopeless than ever: she sat down and cried. \'Come, there\'s half my plan done now! How puzzling all these changes are! I\'m never sure what I\'m going to give the prizes?\'.', 'https://lorempixel.com/640/480/?21410', '2020-06-07 19:05:34', '2020-06-07 19:05:34'),
(21, 'Saepe sunt minima aut et.', 3, 20, 'The Gryphon lifted up both its paws in surprise. \'What! Never heard of such a tiny golden key, and unlocking the door began sneezing all at once. \'Give your evidence,\' the King in a furious passion.', 'https://lorempixel.com/640/480/?66182', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(22, 'A cum necessitatibus facilis molestiae reprehenderit facilis sit ipsam.', 2, 8, 'King, the Queen, who was passing at the mouth with strings: into this they slipped the guinea-pig, head first, and then, if I know I do!\' said Alice sharply, for she was not otherwise than what it.', 'https://lorempixel.com/640/480/?63591', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(23, 'Enim nulla voluptatem eius aut consectetur.', 10, 20, 'Hatter: \'it\'s very rude.\' The Hatter shook his grey locks, \'I kept all my limbs very supple By the use of a procession,\' thought she, \'if people had all to lie down on their throne when they had.', 'https://lorempixel.com/640/480/?43467', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(24, 'Sint aperiam tempora dicta corporis qui.', 15, 4, 'Caterpillar. Alice folded her hands, and was immediately suppressed by the officers of the sort. Next came the royal children; there were TWO little shrieks, and more puzzled, but she was now more.', 'https://lorempixel.com/640/480/?75964', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(25, 'Doloribus quasi officiis fuga perferendis est et in rerum.', 3, 11, 'HATED cats: nasty, low, vulgar things! Don\'t let me help to undo it!\' \'I shall do nothing of tumbling down stairs! How brave they\'ll all think me at all.\' \'In that case,\' said the Hatter. \'You MUST.', 'https://lorempixel.com/640/480/?17106', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(27, 'Magni possimus fuga rerum hic.', 9, 16, 'Dormouse fell asleep instantly, and Alice was not a regular rule: you invented it just at present--at least I mean what I could not stand, and she at once without waiting for the end of your nose.', 'https://lorempixel.com/640/480/?68628', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(28, 'Qui soluta officia voluptas earum nisi.', 1, 18, 'I? Ah, THAT\'S the great concert given by the way YOU manage?\' Alice asked. \'We called him Tortoise because he taught us,\' said the Gryphon, \'she wants for to know when the race was over. Alice was.', 'https://lorempixel.com/640/480/?89560', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(29, 'Incidunt labore labore temporibus.', 13, 6, 'March Hare, who had followed him into the sea, some children digging in the other. In the very middle of the evening, beautiful Soup! \'Beautiful Soup! Who cares for fish, Game, or any other dish?.', 'https://lorempixel.com/640/480/?24886', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(30, 'Et aut eius vero.', 7, 17, 'And will talk in contemptuous tones of her ever getting out of the well, and noticed that one of the court. (As that is rather a hard word, I will tell you what year it is?\' \'Of course you know why.', 'https://lorempixel.com/640/480/?83541', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(31, 'Voluptas neque ad in incidunt dolores.', 18, 9, 'Duchess. An invitation from the sky! Ugh, Serpent!\' \'But I\'m not the smallest notice of her sharp little chin. \'I\'ve a right to think,\' said Alice aloud, addressing nobody in particular. \'She\'d soon.', 'https://lorempixel.com/640/480/?34806', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(32, 'Voluptate est nemo vel harum tempora quia.', 12, 4, 'I wonder what you\'re doing!\' cried Alice, quite forgetting her promise. \'Treacle,\' said a whiting to a mouse, you know. Come on!\' So they went on again:-- \'I didn\'t know that Cheshire cats always.', 'https://lorempixel.com/640/480/?56776', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(33, 'Unde voluptatem ipsam qui voluptas et.', 19, 4, 'Dormouse\'s place, and Alice guessed in a furious passion, and went on muttering over the list, feeling very glad to do with you. Mind now!\' The poor little thing sat down in a tone of great dismay.', 'https://lorempixel.com/640/480/?45092', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(34, 'Enim soluta sed dolorem nesciunt.', 16, 1, 'Why, I do hope it\'ll make me larger, it must be getting somewhere near the right house, because the Duchess sang the second thing is to find herself talking familiarly with them, as if she was about.', 'https://lorempixel.com/640/480/?96459', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(35, 'Qui vel ut dicta eveniet et.', 20, 9, 'An obstacle that came between Him, and ourselves, and it. Don\'t let him know she liked them best, For this must ever be A secret, kept from all the time it vanished quite slowly, beginning with the.', 'https://lorempixel.com/640/480/?77288', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(36, 'Et accusantium sunt odio.', 11, 19, 'Quick, now!\' And Alice was too slippery; and when she first saw the Mock Turtle is.\' \'It\'s the stupidest tea-party I ever saw in another moment, when she turned away. \'Come back!\' the Caterpillar.', 'https://lorempixel.com/640/480/?52246', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(37, 'Sed similique temporibus optio sunt voluptates adipisci eligendi.', 13, 8, 'King was the same size: to be no chance of her sister, as well to say than his first remark, \'It was much pleasanter at home,\' thought poor Alice, who was gently brushing away some dead leaves that.', 'https://lorempixel.com/640/480/?93662', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(38, 'Occaecati explicabo non consequuntur vel hic sit.', 11, 11, 'value=\"Hatter, and here the Mock Turtle replied, counting off the cake. * * * * * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice hastily, afraid.', 'https://lorempixel.com/640/480/?74695', '2020-06-07 19:28:52', '2020-06-17 21:23:03'),
(39, 'Exercitationem adipisci quae dolor.', 3, 19, 'Some of the bill, \"French, music, AND WASHING--extra.\"\' \'You couldn\'t have wanted it much,\' said Alice, who felt very curious to see its meaning. \'And just as she stood still where she was, and.', 'https://lorempixel.com/640/480/?93166', '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(40, 'Tempore dolores laborum illum fugiat harum dolor.', 3, 15, 'value=\"Presently the Rabbit in a sorrowful tone; \'at least there\'s no meaning in it,\' said Alice in a very truthful child; \'but little girls in my time, but never ONE with such a nice little histories.', 'https://lorempixel.com/640/480/?68386', '2020-06-07 19:28:52', '2020-06-17 21:23:14'),
(41, 'Kênh thông tin mua bán bất động sản - Mua bán nhà đất số 1 Việt Nam', 63, 5, 'dgggggggggggggg', 'https://s3.amazonaws.com/uifaces/faces/twitter/drewbyreese/128.jpg', '2020-06-15 02:09:43', '2020-06-15 02:09:43'),
(42, 'Kênh thông tin mua bán bất động sản - Mua bán nhà đất số 1 Việt Nam', 67, 41, '▶▶Nhận phát hành và làm video các bản nhạc qua\r\nFacebook: https://www.facebook.com/daosychienn\r\nMail: chien@orinn.net \r\nMình sẽ duyệt track và liên hệ lại với bạn trong 24h.\r\n\r\n\r\n▶ MP3 Link:https://zingmp3.vn/album/Mai-Chang-Th...\r\n▶Liên hệ qua Fanpage: https://www.facebook.com/lyricssc\r\n▶Liên hệ qua gmail: chien@orinn.net \r\n▶Ảnh được cập nhật tại Fanpage: https://www.facebook.com/lyricssc', 'https://s3.amazonaws.com/uifaces/faces/twitter/drewbyreese/128.jpg', '2020-06-19 20:48:53', '2020-06-19 20:48:53'),
(43, 'Kênh thông tin mua bán bất động sản - Mua bán nhà đất số 1 Việt Nam', 3, 3, '111111111111111111', 'https://staticproxy.mytourcdn.com/1000x600,q90/resources/pictures/hotels/11/xog1459415181_khach_san_heritage_hue.jpg', '2020-06-24 03:05:05', '2020-06-24 03:05:05'),
(44, 'Kênh thông tin mua bán bất động sản - Mua bán nhà đất số 1 Việt Nam', 3, 3, 'hyrhntjghn gn', 'https://s3.amazonaws.com/uifaces/faces/twitter/carlfairclough/128.jpg', '2020-06-24 03:05:45', '2020-06-24 03:05:45'),
(45, 'Nhà đầu tư có thực sự “ngồi yên” trong đại dịch COVID-19?', 67, 3, 'value=\"nghnghngn', 'https://s3.amazonaws.com/uifaces/faces/twitter/teylorfeliz/128.jpg', '2020-06-24 03:47:26', '2020-06-24 03:53:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `birth_date`, `phone_number`, `email`, `password`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Lorenza Larkin', '2009-04-19', '+1.232.261.6730', 'hmedhurst@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 18:55:29', '2020-06-24 02:15:01'),
(4, 'Lou Bode111', '2017-03-14', '651-646-3979', 'albina.nienow@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 18:55:29', '2020-06-25 19:36:04'),
(5, 'Mrs. Josianne Kuhlman Jr.', '2018-02-14', '(856) 517-4358 x61776', 'damaris04@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 18:55:29', '2020-06-07 18:55:29'),
(6, 'Emery Gutkowski', '2015-04-25', '559.324.8799 x404', 'aubrey29@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 18:55:29', '2020-06-07 18:55:29'),
(7, 'Ethelyn Reinger', '1991-11-14', '+1.914.678.8510', 'stanton18@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 18:55:29', '2020-06-07 18:55:29'),
(8, 'Adelbert Block', '1995-10-31', '438.760.6701 x9871', 'aletha47@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:29', '2020-06-07 18:55:29'),
(9, 'Fae Ziemann', '1983-08-23', '(749) 802-7880 x548', 'efrain.walter@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(10, 'Shakira Haag', '2015-08-03', '+14912337435', 'ashlynn39@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(11, 'Jennyfer Becker', '1984-06-02', '+1.502.523.5551', 'rozella.bednar@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(12, 'Kelley Emmerich', '2008-08-09', '+1.724.231.8693', 'ksimonis@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(13, 'Marianne Von', '2004-01-25', '1-597-497-4091 x84847', 'hudson.vonrueden@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(14, 'Brown Cummings DDS', '2007-06-08', '247.816.1275 x91217', 'mohr.dominique@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(15, 'Dr. Gonzalo Breitenberg', '2005-08-30', '1-654-527-9591 x417', 'etha85@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(16, 'Mr. Aron Stracke IV', '2014-11-27', '(948) 288-4650', 'leannon.geoffrey@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(17, 'Prof. Nathanael Kuhlman', '1977-12-03', '1-703-960-2794 x4201', 'osvaldo78@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(18, 'Marcelle Luettgen', '1980-04-29', '+1-997-294-7703', 'kutch.andreane@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(19, 'Gerhard Bradtke', '2004-07-09', '+1-210-420-2776', 'fwintheiser@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(20, 'Magdalen Bergnaum', '2017-06-25', '732-870-6806', 'reichel.novella@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 18:55:30', '2020-06-07 18:55:30'),
(21, 'Kiara Deckow', '2001-06-04', '+1-254-547-5519', 'triston.beer@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(22, 'Kameron Jacobson', '2001-05-04', '676-649-3656 x657', 'arturo.carter@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(23, 'Allen Leuschke', '1999-09-05', '+17358812737', 'barrows.uriah@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(24, 'Ms. Syble Schuster V', '1996-04-24', '1-852-891-0074', 'von.pierre@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(25, 'Giovani Schulist', '1991-09-21', '+1-998-913-2206', 'vmoore@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(26, 'Jessyca Rohan', '2009-06-04', '884-491-7909', 'jakubowski.lourdes@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(27, 'Mrs. Kiara Sauer', '1978-08-27', '+1.432.598.9313', 'tshields@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(28, 'Mr. Sam Dietrich', '1979-03-13', '+1-308-217-4363', 'onie69@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(29, 'Kacie Spencer', '1996-10-21', '1-971-695-2459', 'paxton.sauer@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(30, 'Kieran Daniel', '1994-07-29', '+1.663.655.8233', 'rashad97@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(31, 'Leif Davis I', '2005-06-07', '664.351.7753 x1115', 'sbergnaum@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(32, 'Gayle Watsica', '2010-10-25', '1-738-412-7029 x903', 'leffler.rafael@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(33, 'Korbin Bauch', '2013-12-22', '(917) 920-1249 x7922', 'gilbert.prohaska@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(34, 'Everardo Casper DVM', '1970-10-22', '(718) 507-2268', 'berry17@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:01:55', '2020-06-07 19:01:55'),
(35, 'Geraldine Boyer PhD', '1998-03-09', '747.706.1707', 'katharina.dickinson@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:01:56', '2020-06-07 19:01:56'),
(36, 'Aida Douglas', '2019-06-29', '+1-354-621-9675', 'xrau@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:56', '2020-06-07 19:01:56'),
(37, 'Miss Caroline Spencer', '1978-04-22', '430.955.6897', 'johnson.angel@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:01:56', '2020-06-07 19:01:56'),
(38, 'Dr. Lauriane Cremin', '1988-04-29', '(363) 625-7172 x10539', 'kale82@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:01:56', '2020-06-07 19:01:56'),
(39, 'Ms. Lavina Pacocha PhD', '1980-09-14', '(593) 423-7987 x3778', 'melany.runolfsson@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:01:56', '2020-06-07 19:01:56'),
(40, 'Prof. Raphaelle Jones DDS', '1991-10-23', '378-536-7517 x8817', 'chasity.wisoky@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:01:56', '2020-06-07 19:01:56'),
(41, 'Noemie Wolf', '2009-06-10', '1-402-679-5161 x3798', 'gino72@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:28:50', '2020-06-07 19:28:50'),
(42, 'Mollie Dooley', '2009-08-06', '240-606-1301 x42007', 'bernier.cassandra@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(43, 'Sanford Durgan', '2015-03-14', '+1.652.874.7266', 'mcglynn.mose@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(44, 'Hilma Hoeger', '2004-06-11', '(476) 293-2139 x4598', 'green.bettye@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(45, 'Dr. Trystan Heidenreich DVM', '2016-07-12', '1-471-249-5814 x827', 'kaci67@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(46, 'Benedict Kozey', '2006-08-06', '362.605.6577', 'xraynor@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(47, 'Adan Rippin', '1975-02-11', '421.959.4754', 'wfahey@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(48, 'Ms. Ruthie Hills MD', '1991-11-04', '616-710-1207', 'allan.hermiston@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(49, 'Lottie Kuhn', '1981-07-22', '+1-785-809-5982', 'xhansen@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(50, 'Idell Okuneva', '1974-11-16', '925.675.4248 x2307', 'leffler.amya@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(51, 'Lennie Kessler', '1989-10-03', '+19403073010', 'haylie60@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(52, 'Ms. Kaitlyn Smitham', '1973-04-07', '+1-650-377-5372', 'helga.marquardt@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(53, 'Edmund Harris', '1983-04-19', '1-465-595-1592 x757', 'kelvin.gaylord@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(54, 'Dr. Daniella Green', '1986-03-26', '1-306-946-7636', 'laurel.gerhold@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(55, 'Desiree Kris PhD', '1994-11-10', '+1.824.986.7738', 'carol28@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(56, 'Kyleigh Gusikowski', '1996-09-26', '1-295-434-9943 x74547', 'kobe.mcglynn@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 0, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(57, 'Mr. Cordelia Tremblay', '1986-12-15', '(530) 586-7990', 'lonie64@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:28:51', '2020-06-07 19:28:51'),
(58, 'Noelia Weber', '1980-06-11', '396-385-5692', 'giovanny.denesik@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 0, '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(59, 'Asa Stanton V', '1988-05-21', '263-422-5192 x26135', 'fthompson@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 1, '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(60, 'Molly Sporer', '2018-01-31', '303-263-7622', 'reed.morar@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 1, '2020-06-07 19:28:52', '2020-06-07 19:28:52'),
(63, 'hihi', '2020-06-02', '+1-786-878-71', 'admin4343333334@gmail.com', '$2y$10$BFQodYryFMJ33j6NLfbjp..nZB6w1TCLIdiZbhrDmjkVsBCKrRBae', 1, NULL, '2020-06-09 06:42:40', '2020-06-09 06:44:23'),
(65, 'adminẻwerwer', '2020-06-07', 'ewrwerw34234234', 'kunkpy13434@gmail.com', '$2y$10$LvUPae/Ig8oQiaoDbicQy.G9u4eZ46X17vcyyGwaIuGbijXhTYOKW', 1, 1, '2020-06-15 01:03:11', '2020-06-15 01:03:11'),
(66, 'thaotb2', '2020-06-05', '434346', 'thaotb2@gmail.com', '$2y$10$xeWfOzmFHAXUb7cKREkLVemVUHqhgK5zUL8m.YRppL8hcdz7Wxv2G', 1, 1, '2020-06-15 21:04:31', '2020-06-15 21:04:31'),
(67, 'thaotb02', '2020-06-06', '436346346346', 'thaotb02@gmail.com', '$2y$10$/h0du9ivudFfkYJSxLrQ5.Uv2zEncg1uGsLYvcPjLMHiBHQfZFBnO', 2, 1, '2020-06-15 21:14:14', '2020-06-26 00:45:18'),
(68, 'minhgrgrsadsad', '2020-06-06', '436346346346', 'thaotbqwerew@gmail.com', '$2y$10$90cpLuAscf041Nq7IIgQ7OxXExtS70pz5DTtF7Af0iZ3XOn6.JWiy', 1, 1, '2020-06-20 19:54:48', '2020-06-20 20:34:13'),
(71, 'Helloa1112', '2020-06-04', '+1-786-878-7122', 'kunkpy@gmail.com', '$2y$10$s6/lS/dSaPz85oejUZJ3yedotnVL4Z7kuMgtNpBzvClPZMS.cEHxS', 1, 1, '2020-06-24 01:06:23', '2020-06-24 02:06:46'),
(74, 'ABCD', '2020-06-07', '32423423423', 'kunkpy111111@gmail.com', '$2y$10$.TEPU/fNovW9eT9EZrLiheOvLhyjcmhU6wzkQnPFGgAQEoXPN3K76', 1, 1, '2020-06-25 19:31:50', '2020-06-25 19:31:50'),
(75, 'DEFG', '2020-06-28', '436346346346', 'yq2ewrdwef@gmail.com', '$2y$10$4lz5MmVWhwcaQCir7Y9RFuudOqLYV03FlDjDLrLXML.ciQ0S7HzLC', 2, 1, '2020-06-25 19:32:31', '2020-06-25 19:32:31'),
(76, 'Thaotb03', '2020-06-30', '436346346346', 'thaotb03@gmail.com', '$2y$10$weFn0nnTkeUonH00MedQa.N/PLyV1cN5cEB0s5RJu3gA5j9mQp7FG', 1, 1, '2020-06-26 00:44:34', '2020-06-26 00:44:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
