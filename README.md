# First Coding Project: Secure Login and Session Management

This project is my first coding project as a student, developed using PHP and MySQL. It reimplements session management and login functionality with enhanced security practices, including hashed passwords, salting, and IP-based session validation. This project was part of my journey to understand how logins and sessions work. As such, I reimplemented these concepts from scratch to gain a deeper understanding of their mechanics and security considerations.

## Features

- **Secure Login System**:

  - User authentication with hashed passwords (using `password_hash` and `password_verify`).
  - Salting to prevent brute force and rainbow table attacks.

- **Session Management**:

  - Secure session handling using PHP sessions.
  - Session binding to IP address to prevent session hijacking.

- **Database Integration**:
  - User data stored securely in a MySQL database.
  - Login attempts logged for monitoring and potential lockout mechanism.
