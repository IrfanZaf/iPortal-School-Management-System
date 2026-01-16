# iPortal

# iPortal – School Management System

## Project Overview

**Group Name**: Patchi
**Section**: 5

**Group Members** :
- MUHAMMAD IRFAN ZAFRI BIN MUHAMAD 222645
- TUAN AMNI BINTI TUAN ISMAIL 2316232
- ALYA AZRA BINTI ROSLAN 2317944

**Introduction**:
iPortal is a web-based School Management System designed to simplify and automate academic and administrative processes in schools. The system replaces traditional paper-based record keeping with a centralized digital platform that improves efficiency, accuracy, and accessibility of school data.

iPortal enables teachers to manage student information, attendance records, academic results, through a secure, user-friendly interface. By integrating multiple modules into a single system, iPortal reduces administrative workload and supports better decision-making in educational institutions.

## Project Objectives

- **Primary Goal**: Provide an organized platform for teachers to manage student data
- **Reporting Goal**: Generate structured academic performance reports for students
- **Data Integrity**: Enhance data integrity and accessibility using a centralized database
- **Efficiency**: Reduce manual errors in academic record keeping and efficiently manage students, attendance, examinations, and results
- **Security**: Implement role-based access for administrators, teachers, and students

## Target Users

- **Administrators**: Manage users, classes, and system setup
- **Teachers**: Record attendance, enter marks, and view student performance
- **Students**: View academic results and attendance records (read-only access)

## Features and Functionalities

**Student Management**
- Add, view, edit, and delete student profiles (CRUD)
- Upload student profile photos
- Search and filter students by class or name

**Performance & Results Tracking**
- Record marks for each student by subject
- Edit and update examination results
- View overall student academic performance

**Attendance Tracking**
- Daily attendance marking
- View attendance history for individual students
- Generate attendance summary reports

**Reports**
- Student performance reports (marks, grades, remarks)
- Attendance reports for classes and individuals

**User Management**
- Secure teacher login system
- Role-based access control (Admin, Teacher, Student)

**Dashboard**
- Total number of students
- Total classes
- Subjects overview
- Quick access to core modules

## User Interface Mockups

The system includes:
- Login page with authentication
- Admin dashboard overview
- Teacher workflow for entering marks
- Clean, modern UI design optimized for usability

## Technical Implementation

**Technology Stack**

- Backend Framework: Laravel 10.x
- Frontend: Blade Templates with Bootstrap 5
- Database: MySQL 8.0
- Architecture: MVC (Model-View-Controller)
- Authentication: Laravel Breeze
- Image Storage: Laravel File Storage
- Development Environment: XAMPP

**Database Design**

### Entity Relationship Diagram (ERD)

https://docs.google.com/document/d/1dE3hMWrttRePGsLxlCPp2Ep47jzCLpxW1FVJskHwlZw/edit?usp=sharing

**Main Entities:**
- Administrator
- Teacher
- Student
- Class
- Exam
- Attendance

**Key Relationships:**
- Administrator manages Classes
- Students enroll in Classes
- Teachers teach Classes
- Exams belong to Classes
- Attendance records link Students and Classes

**System Diagrams**

*Sequence Diagram (Teacher Workflow)*
1. Teacher logs into the system
2. System validates credentials via database
3. Teacher selects a class
4. System fetches class data
5. Teacher enters student marks
6. Data is saved into the database
7. Confirmation is returned to the teacher

## Installation and Setup Instructions

### Prerequisites
- PHP ≥ 8.0
- Composer
- MySQL
- XAMPP or similar local server
- Git

### Step-by-Step Installation

xx

xx

xx

## Testing and Quality Assurance

### Functional Testing
- Login and authentication validation
- Student CRUD operations (Create, Read, Update, Delete)
- Attendance marking system
- Examination marks entry and updates
- Automated report generation

### Browser Compatibility
- Google Chrome (Latest)
- Mozilla Firefox (Latest)
- Microsoft Edge (Latest)
- Safari (Latest)

### Performance Testing

- Page load times under 3 seconds
- Database queries optimized
- Image compression implemented
- Responsive design tested on multiple screen sizes


## Challenges Faced and Solutions

### Challenge 1: Data Consistency
- Problem: Managing multiple academic records without duplication.
- Solution: Implemented structured database relationships using Eloquent ORM to ensure data integrity.

### Challenge 2: Role-Based Access Control
- Problem: Ensuring users (Admins, Teachers, Students) only access permitted data.
- Solution: Used Laravel middleware for strict authentication and authorization checks.

### Challenge 3: User-Friendly Interface
- Problem: Making the system simple enough for non-technical users to navigate.
- Solution: Designed a clean, minimalist dashboard with intuitive navigation and clear call-to-action buttons.

## Future Enhancements

### Phase 2 Features (Potential Improvements)
- **Student & Parent Portals**: Dedicated login areas for parents to view records.
- **PDF Exports**: Ability to download report cards and attendance sheets as PDFs.
- **Notification System**: Automated email or SMS alerts for absenteeism and exam results.
- **Mobile Responsiveness**: Further optimization for mobile devices and tablets.


## Learning Outcomes

### Technical Skills Gained

- Laravel MVC Architecture: Mastering the Model-View-Controller design pattern.
- Database Design: Creating efficient ERD models and managing SQL relationships.
- CRUD Operations: Implementing robust create, read, update, and delete functionalities.
- Authentication: setting up secure login systems and role-based permissions.
- Web Deployment: Understanding the basics of deploying web applications.

### Soft Skills Developed
- **System Analysis**: Analyzing requirements and planning system architecture.
- **Team Collaboration** : Working effectively in a group environment
- **Project Management** : Planning and executing a complex web application
- **Documentation**: Writing clear technical documentation and user guides.
- **Problem Solving**: Debugging code errors and resolving logic conflicts.
- **Presentation**: Preparing and delivering an academic project proposal.

## References

1. Laravel Documentation. (n.d.). Retrieved from https://laravel.com/docs
2. Laravel Blade Template Guide. (n.d.). Retrieved from https://laravel.com/docs/blade
3. Laravel Eloquent ORM Guide. (n.d.). Retrieved from https://laravel.com/docs/eloquent
4. W3Schools. (n.d.). MVC Architecture. Retrieved from https://www.w3schools.in/mvc-architecture

## Proposal Video

https://youtu.be/TTraUtCFPUQ

## Conclusion

iPortal demonstrates the effective implementation of a web-based school management system using modern web development practices. The project highlights a strong understanding of Laravel, database management, and system design, while successfully addressing real-world challenges in educational administration.

This system provides a scalable foundation for future enhancements and practical deployment in academic institutions.

### Key Achievements

- Successfully implemented all required Laravel components (Routes, Controllers, Views, Models)
- Created a functional school management system with secure role-based access control
- Developed a responsive, user-friendly dashboard for administrators and teachers
- Demonstrated strong understanding of complex database relationships and CRUD operations
- Applied security best practices to protect sensitive student and academic data

### Project Impact
This project provides practical experience in building real-world administrative web applications and demonstrates the ability to digitize manual record-keeping processes. The technical and analytical skills gained through this project are directly applicable to professional software development scenarios, particularly in information management.

- Project Completion Date: 16/1/2026
- Course: INFO 3305 Web Application Development
