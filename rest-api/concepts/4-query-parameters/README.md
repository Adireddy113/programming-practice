# 🌐 REST API Practice – Day 4

## 📘 What I Learned


- **Query Parameters** - Helps to retrive the required / essential data
  - **Common QP**
  - orderby - sort results - date,title,id....
  - order - sorting order - asc / desc
  - serach - search keywords in title / content
  - status - Filter by post status
  - In order Date Desc (Newest to Oldest) and Asc(Oldest to Newest)
  - Combined Multiple Parameters


---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- Own Wordpress site for working with data - https://zenvita.in

---

## ✅ Practiced Requests

1. orderby
GET https://zenvita.in/wp-json/wp/v2/posts?orderby=date

2. order
GET https://zenvita.in/wp-json/wp/v2/posts??orderby=date&order=asc

3. search
GET https://zenvita.in/wp-json/wp/v2/posts?search=wordpress

4. status
GET https://zenvita.in/wp-json/wp/v2/posts?status=publish




🎯 Day 4 – Tricky Interview Questions

## 1. What does per_page parameter do in WordPress REST API?

It limits the number of results returned per request.
/wp-json/wp/v2/posts?per_page=5 → returns only 5 posts instead of default (10).


## 2. What is the default value of per_page if not specified?

The default is 10 posts per page.


## 3. How do you fetch the 2nd page of results if you’re already using per_page=5?

Use the page parameter.
/wp-json/wp/v2/posts?per_page=5&page=2
Pagination is controlled by both per_page and page.


## 4. What’s the difference between orderby=date&order=asc and orderby=date&order=desc?

asc → Oldest to newest.
desc → Newest to oldest.
By default, WP returns results in descending order (latest first).


## 5. Can you search posts by keyword using REST API?

Yes, with the search parameter.
/wp-json/wp/v2/posts?search=plugin → returns posts with “plugin” in title/content.


## 6. How do you fetch only published posts?

Add status=publish.
/wp-json/wp/v2/posts?status=publish


## 7. How do you fetch posts ordered by title instead of date?

/wp-json/wp/v2/posts?orderby=title&order=asc
You can sort by different fields: date, title, id, slug, etc.


## 8. What happens if you set per_page=200 in a request?

You get an error → 400 Bad Request.
WordPress has a max limit of 100 per_page to protect performance.


## 9. How do you reduce the size of the response if you only need IDs and titles?

Use the _fields parameter.
/wp-json/wp/v2/posts?per_page=5&_fields=id,title
This removes extra data like content, author, metadata → faster response.


## 10. If you want the last 5 published posts sorted by date, what query should you use?

/wp-json/wp/v2/posts?per_page=5&orderby=date&order=desc&status=publish
This combines per_page, orderby, order, and status.

