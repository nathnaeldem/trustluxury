-- Hostinger DB: u624686682_trus_nath (already created in panel)
-- User: u624686682_trust
USE u624686682_trus_nath;

CREATE TABLE IF NOT EXISTS admins (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(80) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS site_images (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  image_key VARCHAR(100) NOT NULL UNIQUE,
  label VARCHAR(160) NOT NULL,
  page_group VARCHAR(80) NOT NULL,
  file_path VARCHAR(500) NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Default admin: username `admin` / password `admin123`
INSERT INTO admins (username, password_hash)
VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi')
ON DUPLICATE KEY UPDATE username = username;

-- Note: password hash above is Laravel's "password" demo hash.
-- We will set the real admin123 hash via setup script.
