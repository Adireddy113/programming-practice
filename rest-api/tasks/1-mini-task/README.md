# Day 7 – WordPress REST API (CRUD Operations)

## Topics Covered
1. **CRUD in REST API**
   - **C**reate → `POST /wp-json/wp/v2/posts`
   - **R**ead → `GET /wp-json/wp/v2/posts`
   - **U**pdate → `PUT|POST /wp-json/wp/v2/posts/{id}`
   - **D**elete → `DELETE /wp-json/wp/v2/posts/{id}`

2. **Authentication**
   - Basic Auth / Application Passwords required for Create, Update, Delete.
   - Public endpoints (GET) do not need authentication.

3. **Postman Mini Project**
   - **List posts**
   - **Create a post (authenticated)**
   - **Update a post**
   - **Delete a post**


---

## 🛠️ Mini Project Workflow in Postman

1. **List Posts**  
2. **Create Post**
3. **Update Post**
4. **Delete Post**

---


 Day 7 - Tricky Interview Questions & Answers

## 1. What’s the difference between PUT and POST when updating a post?
Both work. PUT is more semantically correct, but WordPress accepts POST for both creating and updating.


## 2. What happens if you try to create a post without authentication?
The API returns 401 Unauthorized (or 403 Forbidden if you lack permissions).


## 3. How does WordPress handle deleting posts via REST API?
DELETE /posts/{id} moves the post to trash. To permanently delete, add ?force=true.


## 4. Can you update a post’s author via REST API?
Yes, if the authenticated user has permission (edit_others_posts). You send author in the request body.


## 5. How do you create a draft post instead of publishing?
Send "status": "draft" in the POST request body.


## 6. Difference between retrieving posts via REST API vs WP_Query?
REST API → JSON over HTTP (stateless, external apps).
WP_Query → PHP code inside WordPress (internal).


## 7. How to update only one field (e.g., title)?
Send a request with just "title" in the body. Other fields remain unchanged.


## 8. What happens if you try to delete a non-existent post?
You get 404 Not Found with "rest_post_invalid_id" error.


## 9. How does the API know when to create vs update?
POST /posts → creates new post
POST /posts/{id} or PUT /posts/{id} → updates existing post


## 10. Can you bulk delete posts in one request?
No. WordPress REST API is resource-based — you must delete posts individually in multiple requests.