# 🏥 DAMS - Doctor Appointment Management System

A modern, responsive web-based healthcare management system that enables patients to book appointments with doctors and allows doctors to manage their appointments efficiently.

## ✨ Features

### 👥 Patient Features
- **Easy Appointment Booking**: Book appointments by selecting specialization and doctor
- **Appointment Tracking**: Search and track appointments using appointment number, name, or mobile number
- **Responsive Design**: Mobile-friendly interface for booking on any device
- **Real-time Doctor Selection**: Dynamic doctor list based on specialization

### 👨‍⚕️ Doctor Features
- **Secure Login Portal**: Protected doctor authentication system
- **Appointment Management**: View and manage patient appointments
- **Status Control**: Approve, reject, or update appointment status with remarks
- **Patient Information**: Access complete patient details and appointment history

### 🛠️ Admin Features
- **Content Management**: Manage about us and contact information
- **Specialization Management**: Add/edit medical specializations
- **System Configuration**: Configure clinic details and timings

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, Bootstrap 5, JavaScript
- **Backend**: PHP 8.2+
- **Database**: MySQL (MariaDB 10.4.28)



## 📁 Project Structure

```
dams/
├── css/                    # Bootstrap and custom stylesheets
├── js/                     # JavaScript files
├── images/                 # System images and assets
├── fonts/                  # Custom fonts
├── includes/               # Common PHP includes
│   ├── header.php         # Navigation header
│   ├── footer.php         # Page footer
│   └── dbconnection.php   # Database connection
├── doctor/                 # Doctor portal files
├── patient/                # Patient portal files
├── appointment/            # Appointment management
├── index.php              # Main homepage
├── check-appointment.php  # Appointment search
├── get_doctors.php        # AJAX doctor listing
├── db.php                 # Database configuration
└── damsdb.sql            # Database schema
```

## 🗄️ Database Schema

### Main Tables
- **tblappointment**: Appointment details and status
- **tbldoctor**: Doctor information and credentials
- **tblpatient**: Patient registration data
- **tblspecialization**: Medical specializations
- **tblpage**: System content and configuration









**Made with ❤️ for better healthcare management**

