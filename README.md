# Event Ticketing Platform

A comprehensive web-based ticket management system for handling event ticketing efficiently.

## 📺 Project Demo
Check out our detailed video walkthrough of the platform: [Watch Demo](https://www.youtube.com/watch?v=UHHf_7TrLDs&ab_channel=MuskaanSandhu)

## 🚀 Installation Guide

### Prerequisites

1. **XAMPP**
   - Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html)
   - This includes PHP, Apache, and MySQL

2. **Composer**
   - Download and install from [getcomposer.org](https://getcomposer.org/download)
   - Required for managing PHP dependencies

### Setup Steps

1. **Project Setup**
   ```bash
   # Create project directory in XAMPP
   cd C:\xampp\htdocs
   mkdir EventTicketing
   
   # Clone the repository
   git clone https://github.com/Muskaan906/EventTicketingPlatform.git .
   
   # Install dependencies
   composer install
   ```

2. **Database Setup**
   - Navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Login with:
     - Username: `root`
     - Password: ` ` (blank by default)
   
   > ⚠️ **Security Note**: It's recommended to change default passwords and restrict phpMyAdmin access in production environments.

3. **Testing Environment**
   - Configure `phpunit.xml` with appropriate database credentials
   - Run tests using:
     ```bash
     ./vendor/bin/phpunit
     ```

## 📦 Dependencies

- **PHP**: Included with XAMPP
- **Apache Web Server**: Included with XAMPP
- **MySQL**: Included with XAMPP
- **Composer**: Package manager for PHP
- Additional dependencies are managed through Composer

## 🛠 Maintenance Guide

### Regular Maintenance Tasks

1. **XAMPP Services**
   - Ensure Apache and MySQL services are running
   - Monitor through XAMPP Control Panel

2. **Dependencies**
   ```bash
   # Update dependencies regularly
   composer update
   ```

3. **Database Maintenance**
   - Regular optimization of database tables
   - Clean up old/unused data
   - Monitor database performance
   - Implement regular backup strategy

4. **Testing**
   - Run unit tests regularly
   - Implement automated testing
   - Monitor for regressions

5. **Monitoring**
   - Check Apache logs: `C:\xampp\apache\logs`
   - Check MySQL logs: `C:\xampp\mysql\data\mysql_error.log`
   - Monitor system performance
   - Track error reports

### Configuration Management

1. **Database Credentials**
   - Update configuration files when credentials change
   - Maintain secure credential storage
   - Regular security audits

2. **Backup Strategy**
   - Regular database backups
   - Code repository backups
   - Configuration file backups

## 🔒 Security Recommendations

1. Change default XAMPP passwords
2. Restrict access to phpMyAdmin
3. Keep all dependencies updated
4. Regular security audits
5. Implement proper access controls

## 🎯 Features
- Event ticket management
- User authentication
- Ticket tracking
- Event creation and management
- Detailed reporting
- User-friendly interface

## 🎥 Video Walkthrough
For a comprehensive understanding of the platform's features and functionality, watch our detailed walkthrough video:
[![Event Ticketing Platform Demo](https://img.youtube.com/vi/UHHf_7TrLDs/0.jpg)](https://www.youtube.com/watch?v=UHHf_7TrLDs&ab_channel=MuskaanSandhu)

## 📧 Contact

For support or queries, please reach out through:
- GitHub Issues






