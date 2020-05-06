-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2020 lúc 06:19 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parentid` int(11) UNSIGNED NOT NULL,
  `orders` int(11) UNSIGNED NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_contact`
--

CREATE TABLE `db_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_menu`
--

CREATE TABLE `db_menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tableid` int(11) DEFAULT NULL,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `orders` int(11) NOT NULL DEFAULT '0',
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_order`
--

CREATE TABLE `db_order` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `exportdate` date NOT NULL,
  `deliveryname` varchar(100) NOT NULL,
  `deliveryphone` varchar(255) NOT NULL,
  `deliveryemail` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT '0',
  `created_at` date NOT NULL,
  `total_order` float(12,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_orderdetail`
--

CREATE TABLE `db_orderdetail` (
  `id` int(11) UNSIGNED NOT NULL,
  `orderid` int(11) UNSIGNED NOT NULL,
  `productid` int(11) UNSIGNED NOT NULL,
  `price` float(12,0) NOT NULL,
  `quantity` int(11) UNSIGNED NOT NULL,
  `amount` float(12,0) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_post`
--

CREATE TABLE `db_post` (
  `id` int(11) UNSIGNED NOT NULL,
  `topid` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT 'post',
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_product`
--

CREATE TABLE `db_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `catid` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  `number` int(11) UNSIGNED NOT NULL,
  `price` float(12,0) NOT NULL,
  `pricesale` float(12,0) NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_slider`
--

CREATE TABLE `db_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_topic`
--

CREATE TABLE `db_topic` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parentid` int(11) UNSIGNED NOT NULL,
  `order` int(11) UNSIGNED NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `access` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_contact`
--
ALTER TABLE `db_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_menu`
--
ALTER TABLE `db_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_order`
--
ALTER TABLE `db_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `code` (`code`);

--
-- Chỉ mục cho bảng `db_orderdetail`
--
ALTER TABLE `db_orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `orderid` (`orderid`);

--
-- Chỉ mục cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topid` (`topid`);

--
-- Chỉ mục cho bảng `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catid` (`catid`);

--
-- Chỉ mục cho bảng `db_slider`
--
ALTER TABLE `db_slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_topic`
--
ALTER TABLE `db_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_contact`
--
ALTER TABLE `db_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_menu`
--
ALTER TABLE `db_menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_order`
--
ALTER TABLE `db_order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_orderdetail`
--
ALTER TABLE `db_orderdetail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_product`
--
ALTER TABLE `db_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_slider`
--
ALTER TABLE `db_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_topic`
--
ALTER TABLE `db_topic`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_order`
--
ALTER TABLE `db_order`
  ADD CONSTRAINT `db_order_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `db_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `db_orderdetail`
--
ALTER TABLE `db_orderdetail`
  ADD CONSTRAINT `db_orderdetail_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `db_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_orderdetail_ibfk_3` FOREIGN KEY (`orderid`) REFERENCES `db_order` (`code`);

--
-- Các ràng buộc cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD CONSTRAINT `db_post_ibfk_1` FOREIGN KEY (`topid`) REFERENCES `db_topic` (`id`);

--
-- Các ràng buộc cho bảng `db_product`
--
ALTER TABLE `db_product`
  ADD CONSTRAINT `db_product_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `db_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
