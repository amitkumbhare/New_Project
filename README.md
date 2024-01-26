  # WordPress Deployment and Automation

## Overview

This repository contains scripts and configurations to deploy and automate the installation of WordPress on a VPS using Nginx, PHP, and MariaDB. Additionally, GitHub Actions are set up for continuous deployment to the VPS.

## Prerequisites

Before running the automation, ensure the following requirements are met on the VPS:

- **Server Requirements:**
  - 4GB of RAM
  - Up to 50GB of Storage
  - 4GB of Swap for better performance

- **Software Requirements:**
  - Nginx
  - PHP (with FPM)
  - MariaDB (or MySQL)

## Deployment Steps

### Step 1: Install Nginx
```
sudo apt update
sudo apt install nginx
sudo systemctl start nginx
sudo systemctl enable nginx
```
### Step 2: Install MariaDB (or MySQL) and Configure Database

-# Install MariaDB

```sudo apt install mariadb-server```

-# Run the included mysql_secure_installation security script to restrict access to the server

```sudo mysql_secure_installation```

-# Access MySQL (or MariaDB) and create database and user

```sudo mysql -u root -p ```

-# Execute SQL commands

```CREATE DATABASE wordpress;
CREATE USER 'brainstorm'@'localhost' IDENTIFIED BY 'Bra!n$t0rm';
GRANT ALL PRIVILEGES ON wordpress.* TO 'brainstorm'@'localhost';
FLUSH PRIVILEGES;
exit;
```

### Step 3: Install PHP and Configure Nginx

```sudo apt install php-fpm php-mysql```

-# Update Nginx configuration to use PHP

```sudo nano /etc/nginx/sites-available/default```

-# Add PHP block in the configuration file

```sudo systemctl restart nginx```

### Step 4: Install WordPress

```
cd /var/www/html
sudo curl -O https://wordpress.org/latest.tar.gz
sudo tar xf latest.tar.gz
sudo rm latest.tar.gz
sudo mv wordpress/* .
sudo rm -r wordpress
```

-# Set Permissions

```sudo chown -R www-data:www-data /var/www/html
sudo find /var/www/html -type d -exec chmod 755 {} \;
sudo find /var/www/html -type f -exec chmod 644 {} \;
```

### Step 5: Configure Nginx for WordPress

```sudo vim /etc/nginx/sites-available/default```

-# Replace existing contents with provided configuration

```sudo systemctl restart nginx```

### Step 6: Create MySQL Database for WordPress

```sudo mysql -u root -p```

-# Execute SQL commands

```CREATE DATABASE wordpress;
CREATE USER 'brainstorm'@'localhost' IDENTIFIED BY 'Bra!n$t0rm';
GRANT ALL PRIVILEGES ON wordpress.* TO 'brainstorm'@'localhost';
FLUSH PRIVILEGES;
exit;
```

### Step 7: Complete WordPress Installation

Open your web browser and visit `http://your_domain_or_ip`.
Follow the WordPress installation prompts, providing the database information created earlier.

- GitHub Actions Workflow

The repository includes a GitHub Actions workflow (`deploy.yml`) for automated deployment to the VPS. Ensure the following secrets are added to your GitHub repository:

![Deploy_yml](https://github.com/amitkumbhare/New_Project/blob/master/Deploy_yml.png)

`SSH_PRIVATE_KEY`: Private key for SSH authentication.

`USERNAME`: SSH username for connecting to the VPS.

`HOST`: VPS hostname or IP address.

 - See below screenshot: 

 ![Add_Key_and_Value](https://github.com/amitkumbhare/New_Project/blob/master/Screenshot.png)


 --- The website will look like this ---

![DashBoard](https://github.com/amitkumbhare/New_Project/blob/master/dashboard.png)

![Index_Page](https://github.com/amitkumbhare/New_Project/blob/master/index_page.png)
