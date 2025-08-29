# 🌐 REST API Practice – Day 2

## 📘 What I Learned


- **HTTP status codes**
  - **Success codes**
  - 200 ok -> Request was successful
  - 201 created -> Resource successfully created

  - **Client Error codes**
  - 400 Bad Request -> Missing fields or JSON data
  - 401 Unauthorised -> No valid credentials
  - 403 Forbidden -> Accessing without permission
  - 404 Page Not Found
  - 429 Too Many Requests

  -**Server Error Codes**
  - 500 Internal Server Error -> Something broke on server side

---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- API: [JSONPlaceholder](https://jsonplaceholder.typicode.com/) (fake online REST API for practice)

---

## ✅ Practiced Requests

1. Status Code 200
GET https://jsonplaceholder.typicode.com/posts/5

2. Status Code 201
POST https://jsonplaceholder.typicode.com/posts/

3. Status Code 500
POST https://jsonplaceholder.typicode.com/posts/

4. Status Code 404
GET https://jsonplaceholder.typicode.com/us




🎯 Day 2 – Tricky Interview Questions

## 1. What’s the difference between 401 and 403?

401 Unauthorized → No valid authentication (user not logged in).
403 Forbidden → User is authenticated but lacks permission.


## 2. When would you use 201 Created instead of 200 OK?

Use 201 Created when a new resource is created successfully via POST.
200 means success, but 201 signals creation. Often APIs also return the location of new resource in the header.


## 3. Can a DELETE request return 200, 202, or 204?

200 OK → Deleted + returns body.
202 Accepted → Deletion is scheduled, not yet complete.
204 No Content → Deleted, no response body.

All are correct depending on design. Interviewers check if you know multiple valid responses.


## 4. What’s the difference between 400 Bad Request and 422 Unprocessable Entity?

400 → Request is malformed (e.g., bad JSON).
422 → Request is syntactically correct but semantically invalid (e.g., "email" not valid).

422 is often used in APIs for validation errors.


## 5. Why should GET requests not change server data?

Because GET must be idempotent and safe. It’s meant for retrieval only.
If a GET modifies data (e.g., GET /deleteUser?id=1), caching or prefetching could accidentally cause data loss.


## 6. What’s the difference between PUT and POST?

PUT → Idempotent, replaces resource completely.
POST → Not idempotent, creates new resource.

Multiple PUT requests have the same result. Multiple POST requests create duplicates.


## 7. Why would a server return 500 Internal Server Error instead of 400 Bad Request?

500 = problem on the server side (bug, DB crash).
400 = client sent invalid input.

Interviewer wants to test if you can separate client mistakes vs server mistakes.


## 8. What does 204 No Content mean and when is it used?

204 means request succeeded but no response body.
Often used for DELETE or PUT requests where server has nothing to return.


## 9. Can a successful GET request ever return 201?

GET only retrieves → always 200 (or 304 if cached).
201 is strictly for creation via POST.

This tests if you know HTTP semantics.


## 10. If you send PUT without an ID (like /posts), what should the API do?

Most APIs will reject it → 400 Bad Request.
PUT usually requires a specific resource ID (/posts/1). If no ID is given, API doesn’t know which resource to replace.