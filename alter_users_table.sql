-- Добавяне на нови колони към таблицата users

ALTER TABLE `users` 
ADD `users_last_login` timestamp NULL DEFAULT NULL AFTER `users_email_approved`,
ADD `users_auto_login` tinyint(1) DEFAULT 0 COMMENT '0 - Не, 1 - Да' AFTER `users_last_login`;