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

## 🔐 Default Access Credentials

### Doctor Portal Access
- **Email**: anu@gmail.com
- **Password**: 123456
- **Specialization**: Orthopedics

*Note: Change default credentials in production environment*

## 🎨 User Interface

The system features a modern, clean interface designed with:
- **Bootstrap 5** for responsive design
- **Custom CSS** for healthcare-specific styling
- **Font Awesome** icons for intuitive navigation
- **Google Fonts** for professional typography
- **Mobile-first** approach for accessibility

## 🔒 Security Features

- **Password Encryption**: MD5 hashing for user passwords
- **Session Management**: Secure PHP session handling
- **SQL Injection Prevention**: PDO prepared statements
- **Input Validation**: Server-side data validation
- **XSS Protection**: Output sanitization

## 🚀 Performance Optimizations

- **Database Indexing**: Optimized queries for fast data retrieval
- **AJAX Implementation**: Asynchronous loading for better UX
- **Minified Assets**: Compressed CSS and JavaScript files
- **Caching Strategy**: Efficient session and data caching

## 🤝 Contributing

I welcome contributions to improve this healthcare management system:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/Enhancement`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature/Enhancement`)
5. Open a Pull Request with detailed description

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support & Contact

For technical support or questions:
- **GitHub Issues**: Open an issue for bug reports or feature requests
- **Email**: info@gmail.com
- **Phone**: +977-14425469

## 🎯 Future Enhancements

Planned improvements for upcoming versions:
- **Patient Registration Portal**: Complete patient account system
- **Payment Integration**: Online payment processing
- **SMS Notifications**: Automated appointment reminders
- **Advanced Reporting**: Analytics and reporting dashboard
- **API Development**: RESTful API for mobile applications

## 🙏 Acknowledgments

Special thanks to:
- **Bootstrap Team** for the excellent responsive framework
- **Font Awesome** for the comprehensive icon library
- **Google Fonts** for beautiful typography options
- **PHP Community** for best practices and documentation

---

**Developed with dedication to improve healthcare accessibility and efficiency** 🏥 # dams
