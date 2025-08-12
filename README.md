# 🏥 DAMS - Doctor Appointment Management System

A comprehensive, modern web-based healthcare management system I developed to streamline the appointment booking process between patients and doctors. This system provides an efficient solution for healthcare facilities to manage appointments, patient records, and doctor schedules.

## ✨ Key Features

### 👥 Patient Portal
- **Intuitive Appointment Booking**: Easy-to-use interface for booking appointments by selecting medical specialization and preferred doctor
- **Real-time Appointment Tracking**: Search and track appointments using appointment number, patient name, or mobile number
- **Responsive Design**: Fully responsive interface that works seamlessly on desktop, tablet, and mobile devices
- **Dynamic Doctor Selection**: Real-time AJAX-powered doctor list that updates based on selected specialization

### 👨‍⚕️ Doctor Portal
- **Secure Authentication**: Protected login system with encrypted password storage
- **Comprehensive Appointment Management**: View, approve, reject, and manage all patient appointments
- **Status Control System**: Update appointment status with custom remarks and notes
- **Patient Information Access**: Complete access to patient details and appointment history

### 🛠️ Administrative Features
- **Content Management System**: Manage about us, contact information, and clinic details
- **Specialization Management**: Add, edit, and manage medical specializations
- **System Configuration**: Configure clinic timings, contact details, and operational settings

## 🛠️ Technology Stack

**Frontend Technologies:**
- HTML5 with semantic markup
- CSS3 with modern styling and animations
- Bootstrap 5 for responsive design
- JavaScript with AJAX for dynamic functionality
- Font Awesome icons and Google Fonts

**Backend Technologies:**
- PHP 8.2+ with modern coding practices
- MySQL (MariaDB 10.4.28) database
- PDO for secure database operations
- Session management for user authentication

## 📋 System Requirements

**Server Requirements:**
- PHP 8.0 or higher
- MySQL/MariaDB database server
- Apache/Nginx web server
- PHP PDO extension enabled

**Client Requirements:**
- Modern web browser (Chrome, Firefox, Safari, Edge)
- JavaScript enabled
- Internet connection for external resources

## 🚀 Installation & Setup

### 1. **Repository Setup**
   ```bash
   git clone https://github.com/yourusername/dams.git
   cd dams
   ```

### 2. **Database Configuration**
   - Create a new MySQL database named `dams`
   - Import the database schema:
   ```bash
   mysql -u root -p dams < damsdb.sql
   ```

### 3. **Database Connection Setup**
   - Edit `db.php` with your database credentials:
   ```php
   define('DB_HOST','localhost');
   define('DB_USER','your_username');
   define('DB_PASS','your_password');
   define('DB_NAME','dams');
   ```

### 4. **Web Server Configuration**
   - Place the project in your web server's document root
   - Set proper file permissions:
     - Directories: 755
     - Files: 644
   - Ensure mod_rewrite is enabled (for Apache)

### 5. **Access the Application**
   - **Main Application**: `http://localhost/dams`
   - **Doctor Portal**: `http://localhost/dams/doctor/login.php`

## 📁 Project Architecture

```
dams/
├── css/                    # Bootstrap and custom stylesheets
├── js/                     # JavaScript libraries and custom scripts
├── images/                 # System images, icons, and assets
├── fonts/                  # Custom font files
├── includes/               # Shared PHP components
│   ├── header.php         # Navigation and header template
│   ├── footer.php         # Footer template
│   └── dbconnection.php   # Database connection handler
├── doctor/                 # Doctor portal and management
├── patient/                # Patient portal and registration
├── appointment/            # Appointment management system
├── index.php              # Main application homepage
├── check-appointment.php  # Appointment search functionality
├── get_doctors.php        # AJAX doctor listing API
├── db.php                 # Database configuration
└── damsdb.sql            # Complete database schema
```

## 🗄️ Database Design

### Core Tables
- **tblappointment**: Central appointment management with status tracking
- **tbldoctor**: Doctor profiles, credentials, and specializations
- **tblpatient**: Patient registration and personal information
- **tblspecialization**: Medical specialties and categories
- **tblpage**: System content and configuration management

### Key Features
- **Referential Integrity**: Proper foreign key relationships
- **Audit Trail**: Timestamp tracking for all records
- **Status Management**: Comprehensive appointment status workflow
- **Security**: Encrypted password storage and session management



