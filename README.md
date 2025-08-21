---

# Employee Management System

A **professional full-stack application** built with **Java (Spring Boot)** as the backend and **PHP** as the frontend.
This project demonstrates how to integrate two different technologies into one system using REST APIs.
<img width="1536" height="1024" alt="Employee Management Interface Design" src="https://github.com/user-attachments/assets/23576313-5d20-46ee-9317-bc3b2e073e1c" />

---

## 📌 Features

* ✅ Add new employees
* ✅ View employee list
* ✅ RESTful API with Spring Boot
* ✅ PHP frontend that consumes Java API
* ✅ MySQL/PostgreSQL database integration

---

## 🏗️ Architecture

```
employee-management/
│
├── java-backend/                # Java Spring Boot Backend
│   ├── src/main/java/com/app
│   │   ├── Employee.java
│   │   ├── EmployeeController.java
│   │   ├── EmployeeService.java
│   │   └── EmployeeRepository.java
│   └── pom.xml
│
├── php-frontend/                # PHP Frontend
│   ├── index.php
│   ├── add_employee.php
│   ├── list_employees.php
│   └── config.php
│
└── README.md
```

---

## ⚙️ Tech Stack

### Backend (Java)

* Java 21
* Spring Boot 3.5
* Spring Data JPA
* MySQL / PostgreSQL

### Frontend (PHP)

* PHP 8+
* Simple PHP Pages (can be extended with Laravel)

---

## 🚀 Getting Started

### 1. Clone Repository

```bash
git clone https://github.com/your-username/employee-management.git
cd employee-management
```

---

### 2. Setup Backend (Java Spring Boot)

#### Configure Database

Update `application.properties` in `java-backend/src/main/resources/`

```properties
spring.datasource.url=jdbc:mysql://localhost:3306/employees
spring.datasource.username=root
spring.datasource.password=yourpassword
spring.jpa.hibernate.ddl-auto=update
```

#### Run Backend

```bash
cd java-backend
mvn spring-boot:run
```

Backend will run at 👉 `http://localhost:8080/api/employees`

---

### 3. Setup Frontend (PHP)

#### Configure API URL

Update `php-frontend/config.php`

```php
<?php
$api_url = "http://localhost:8080/api/employees";
?>
```

#### Run PHP Server

```bash
cd php-frontend
php -S localhost:8000
```

Frontend will run at 👉 `http://localhost:8000`

---

## 📖 API Endpoints

| Method | Endpoint         | Description       |
| ------ | ---------------- | ----------------- |
| GET    | `/api/employees` | Get all employees |
| POST   | `/api/employees` | Add new employee  |

---

## 📸 Screenshots

### Home Page

```
Employee Management System
- View Employees
- Add Employee
```

### Employee List Page

```
1. John Doe - Developer
2. Jane Smith - Manager
```

---

## 🔮 Future Improvements

* Add authentication (JWT / OAuth2)
* Enhance UI with Bootstrap or Laravel
* Add update/delete employee feature
* Dockerize backend & frontend

---

## 👨‍💻 Author

**Your Name**

* GitHub: [@your-username](https://github.com/your-username)
* LinkedIn: [Your LinkedIn](https://linkedin.com/in/your-profile)

---

## 📜 License

This project is licensed under the **MIT License** – feel free to use and modify it.

---

👉 Would you like me to also **generate the actual `application.properties` file** and **SQL schema for the employee table** so that your backend runs immediately without errors?
