# 🌐 REST API Practice – Day 6

## 📘 What I Learned


- **Authentication** - For some requests we need Authentication
  - **Types of Authentication** - Cookie, Basic and Application Passwords
  - Cookie Authentication - Mainly used for AJAX calls inside WP Admin and not practical for external apps
  - Basic Auth - user name and password but not secure over HTTPS
  - APP Passwords - Generate credentials per user and dont require cookies or sessions making safe for external integrations
  - Users -> Profiles -> APP Passwords (In Wordpress)
  
---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- Own Wordpress site for working with data - https://zenvita.in

---

## ✅ Practiced Requests

1. POST with Authentication and Body
POST https://zenvita.in/wp-json/wp/v2/posts




🔑 Tricky Interview Questions & Answers on Day 6

1. What is the difference between Cookie Authentication and Application Passwords?

Cookie Authentication requires a valid login session and is mainly used for AJAX calls inside the WordPress admin. It’s not practical for external apps.

Application Passwords are dedicated credentials you generate per user. They don’t require cookies or sessions, making them safer for external integrations.


2. Why is Basic Auth not recommended in production?

Basic Auth sends the username and password in every request (base64 encoded, but not encrypted). If you don’t use HTTPS, credentials can be easily intercepted. That’s why it’s mostly used for local testing.


3. How does WordPress validate Application Passwords internally?

When you send Authorization: Basic base64(username:application-password), WP decodes the credentials and checks them against the hashed application passwords stored in the user’s meta table (wp_usermeta). If it matches, the user is authenticated.


4. Can you revoke a compromised Application Password without affecting the user’s login?

Yes ✅. That’s one of the main benefits of Application Passwords. You can delete or regenerate the password for an app without forcing the user to reset their main account password.


5. If you need a mobile app to interact with a WP site, which authentication method would you choose? Why?

I’d use Application Passwords because:
It’s built-in since WP 5.6.
Safer than Basic Auth.
Doesn’t require cookies or login sessions like Cookie Auth.
Easy to revoke without impacting the main user.


6. What happens if you try Application Password authentication over HTTP instead of HTTPS?

WordPress blocks Application Passwords over plain HTTP by default for security reasons. You must use HTTPS, or explicitly allow HTTP with a filter (not recommended).


7. How does WordPress prevent brute force attacks on Application Passwords?

Passwords are long (24 characters), making them harder to guess.
They’re hashed in the database, not stored in plain text.
Each password is tied to a specific user + application, so even if leaked, impact is limited.


8. Can you use Application Passwords for programmatic user creation (sign-up)?

No 🚫. Application Passwords are for authentication, not registration. A user account must already exist before you can generate an application password.