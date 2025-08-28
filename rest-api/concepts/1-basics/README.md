# 🌐 REST API Practice – Day 1

## 📘 What I Learned

- **REST (Representational State Transfer)** is a set of rules for designing APIs.

- **Key REST principles**: 
  - Stateless
  - Client-Server Separation
  - Cacheable
  - Layered System

- **HTTP Methods (Verbs)**:
  - **GET** → Retrieve data
  - **POST** → Create new data
  - **PUT** → Update/replace data
  - **PATCH** → Partially update data
  - **DELETE** → Remove data

---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- API: [JSONPlaceholder](https://jsonplaceholder.typicode.com/) (fake online REST API for practice)

---

## ✅ Practiced Requests

1. Get All Posts
GET https://jsonplaceholder.typicode.com/posts

2. Get a Single Post
GET https://jsonplaceholder.typicode.com/posts/1

3. Create a New Post
POST https://jsonplaceholder.typicode.com/posts

4. Update a Post
PUT https://jsonplaceholder.typicode.com/posts/1


5. Delete a Post
DELETE https://jsonplaceholder.typicode.com/posts/1


🎯 Day 1 – REST Basics Interview Questions


Q1. What makes an API "RESTful"?
An API is RESTful if it follows REST principles:

Statelessness
Client-server separation
Uniform interface (resources identified by URIs, manipulated via HTTP verbs)
Cacheable responses
Layered system

Just using HTTP doesn’t make an API RESTful. REST has strict constraints; if these aren’t followed, it’s just an HTTP API.


Q2. Is REST a protocol or an architecture?
REST is an architectural style, not a protocol.

It provides guidelines on how APIs should be designed. The protocol used is usually HTTP, but REST itself is not a protocol like SOAP.


Q3. Difference between PUT and PATCH?
PUT → Replaces the entire resource.
PATCH → Updates only the provided fields (partial update).

Example: Updating a blog post:

PUT /posts/1 with {title: "New"} → replaces the post, missing fields might be lost.
PATCH /posts/1 with {title: "New"} → updates just the title.


Q4. Can a REST API use methods other than GET, POST, PUT, DELETE?
Yes. REST is not limited to these four. For example, HTTP has methods like OPTIONS, HEAD, etc., and they can be used in REST.

These verbs are just the most common in CRUD operations, but REST doesn’t restrict you.


Q5. Is REST always stateless? Why or why not?
Yes, REST must be stateless.
Each request from client → server must contain all necessary info.

Server shouldn’t rely on remembering client session. If it does, it breaks REST rules. Authentication tokens (like JWTs) are passed with each request to maintain this.


Q6. In REST, what is a "resource" and how is it represented?
A resource = any piece of data that can be identified by a URI.

Example: /posts/1 = a single blog post.
Represented typically in JSON (can also be XML, HTML, etc.).

Resources are nouns (things), not verbs (actions). That’s why we use /posts, not /getPosts.


Q7. Why do we prefer using nouns in REST endpoints (e.g., /posts) instead of verbs (e.g., /getPosts)?
Because HTTP verbs already describe the action.

GET /posts → fetch posts.
POST /posts → create post.

Mixing verbs in endpoints (/getPosts) makes it redundant and breaks uniformity.


Q8. What is idempotency in REST? Which HTTP methods are idempotent?
Idempotency = multiple identical requests have the same effect as one request.

Idempotent: GET, PUT, DELETE.
Not idempotent: POST.

DELETE /posts/1 → deleting again has no extra effect.
POST /posts → creates new resource each time, so not idempotent.


Q9. If REST is stateless, how does authentication work?
Authentication tokens (like JWT, OAuth tokens, or API keys) are sent with every request (usually in headers).
Since server doesn’t remember session, the client must provide proof of identity each time. Example: Authorization: Bearer <token>.


10. What’s the difference between REST and SOAP APIs?
REST is faster and commonly used in web/mobile apps. SOAP is used in enterprise apps where strict standards are needed.