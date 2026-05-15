-- SQL import untuk XAMPP (MySQL)
-- Jalankan file ini di phpMyAdmin pada tab Import

CREATE DATABASE IF NOT EXISTS nama_database
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE nama_database;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    email_verified_at TIMESTAMP NULL DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    active TINYINT(1) NOT NULL DEFAULT 1,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY users_email_unique (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Password untuk semua user di bawah ini adalah: password
-- Hash sudah menggunakan bcrypt Laravel
INSERT INTO users (name, email, email_verified_at, password, active, remember_token, created_at, updated_at) VALUES
('Admin MVC', 'admin@mvc.test', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lll/SsM89KQmR0', 1, NULL, NOW(), NOW()),
('Rina', 'rina@mvc.test', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lll/SsM89KQmR0', 1, NULL, NOW(), NOW()),
('Budi', 'budi@mvc.test', NULL, '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lll/SsM89KQmR0', 0, NULL, NOW(), NOW());

-- Contoh query CRUD manual di phpMyAdmin

-- READ
SELECT id, name, email, active, created_at
FROM users
ORDER BY id DESC;

-- CREATE
INSERT INTO users (name, email, password, active, created_at, updated_at)
VALUES ('User Baru', 'userbaru@mvc.test', '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lll/SsM89KQmR0', 1, NOW(), NOW());

-- UPDATE
UPDATE users
SET name = 'User Update', active = 0, updated_at = NOW()
WHERE id = 1;

-- DELETE
DELETE FROM users
WHERE id = 3;
