# 🌐 REST API Practice – Day 3

## 📘 What I Learned


- **WP REST API** - allows external apps(mobile, react...) or tools(postman) to interact with wordpress data.
  - **Base url**
  - https://site.com/wp-json/wp/v2/resource(posts, users....)

  - **Private Data needs Authentication**
  - Go to Application Passwords in users in wp
  - To get auth tokens for basic auth
  - Explored Wp API endpoints
  - created a post using rest api endpoint with Authentication
  - `_fields` to work with particular data like titles, content, ....
 

---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- Own Wordpress site for working with data

---

## ✅ Practiced Requests

1. Fetch all posts(200)
GET https://zenvita.in/wp-json/wp/v2/posts

2. Fetch only titles(200)
POST https://zenvita.in/wp-json/wp/v2/posts?_fields=id,title

3. Fetch users(401) - Needs Authentication
POST https://zenvita.in/wp-json/wp/v2/users

4. Post Creation(201) - with minimum body and basic auth
POST https://zenvita.in/wp-json/wp/v2/posts




🎯 Day 3 – Tricky Interview Questions

## 1. What is the base URL of WordPress REST API?

/wp-json/
Every WP REST request starts with /wp-json/. 


## 2. What does /wp/v2/ represent in the API URL?

It’s the namespace and version of the WordPress REST API.


## 3. What data format does the WordPress REST API return by default?

JSON, 
All WP REST responses are JSON objects, easy to consume in JS frameworks or tools like Postman.


## 4. Can you fetch posts without authentication?

Yes.
GET /wp-json/wp/v2/posts is public by default, because posts are meant to be publicly viewable (if published).


## 5. Can you fetch users without authentication?

Yes, but with limited fields only.
Without login, you may only get public info (e.g., display name, URL). Sensitive info like email requires authentication.


## 6. What endpoint is used to get comments in WordPress REST API?
/wp-json/wp/v2/comments
Like posts, comments can be retrieved. Creating/deleting comments requires auth.


## 7. If you send POST /wp/v2/posts without authentication, what happens?

You get 401 Unauthorized.
Creating, updating, or deleting posts requires a logged-in user with proper permissions.


## 8. What is the difference between /posts and /pages endpoints?

/posts → blog posts (default WP posts).
/pages → static pages.


## 9. If you request /wp-json/ only, what do you get?

A list of all available namespaces and routes.
This is the API index – it shows wp/v2, plugin endpoints, etc.


## 10. Can plugins and themes add their own REST endpoints?

Yes.
Developers can use register_rest_route() in PHP to create custom endpoints beyond the default /wp/v2/.