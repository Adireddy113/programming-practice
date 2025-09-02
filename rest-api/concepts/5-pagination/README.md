# 🌐 REST API Practice – Day 5

## 📘 What I Learned


- **Pagination in REST API** - Rest api dont send all data at once. instead data is divided into pages
  - **pagination parameters** - page and per_page
  - page - which page results should fetch(default = 1)
  - per_page - how many results per page(default = 10 and max = 100)
  - Example - /wp-json/wp/v2/posts?page=3&per_page=5
  
---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- Own Wordpress site for working with data

---

## ✅ Practiced Requests

1. Page
GET https://zenvita.in/wp-json/wp/v2/posts?page=1

2. Per Page
POST https://zenvita.in/wp-json/wp/v2/posts?per_page=10

3. Pagination
POST https://zenvita.in/wp-json/wp/v2/posts?page=1&per_page=10




❓ Day - 5 Tricky Interview Questions & Answers (Pagination)

## 1. What are the two main query parameters used for pagination in WordPress REST API?

 per_page (items per page, default 10, max 100) and page (page number to fetch).


## 2. If I call /wp-json/wp/v2/posts?per_page=5&page=2, what will I get?

 It will return the second page of posts, with 5 posts per page.


## 3. How do you know the total number of available pages?

 By checking the response header X-WP-TotalPages.


## 4. What is the purpose of the X-WP-Total header?

 It tells the total number of items (posts) available in the collection.


## 5. What happens if you request a page number larger than X-WP-TotalPages?

 The API returns a 400 Bad Request with error: rest_post_invalid_page_number.


## 6. If you want to get all posts without pagination in one call, can you set per_page=500?

 No ❌, WordPress limits per_page to a maximum of 100. If you need all, you must loop through pages.


## 7. Why does WordPress enforce a limit of 100 for per_page?

 To prevent performance issues and server overload from fetching too many records in one request.


## 8. How can you fetch the last page directly without calculating?

 First fetch headers, read X-WP-TotalPages, then call ?page={that number}.


## 9. Suppose you need the latest 250 posts. How would you fetch them efficiently?

 Call multiple requests:

Page 1 → ?per_page=100&page=1
Page 2 → ?per_page=100&page=2
Page 3 → ?per_page=50&page=3


## 10. Is pagination only available for posts in WordPress REST API?

 No, ❌ pagination works for all collections (posts, pages, users, comments, etc.).