# 🌐 REST API Practice – Day 8

## 📘 What I Learned


- **Custom Rest API Routes** - For controlling the exposing of data, what to expose, how to expose and who can access
  - By using `register_rest_route` we will register a route
  - `rest_api_init` is a built in hook to trigger function when Rest API Initializes

  - 'custom/v1' - Namespace (custom)(plugin name), version (v1).
  - '/first' → The endpoint path(route)
  - 'methods' => 'GET' → Only responds to GET requests.
  - 'callback' => 'custom_msg' - When the route is called, run the function custom_msg()
  - 'permission_callback' => '__return_true' → No restrictions 
  
---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- Own Wordpress site for working with data - https://basic.local

---

## ✅ Practiced Requests

1. GET custom data in this Route
GET https://basic.local/wp-json/custom/v1/first




❓Day - 8 Tricky Interview Questions & Answers


1. What’s the difference between $namespace and $route in register_rest_route()?

$namespace is the grouping for your API (e.g., myplugin/v1).
$route is the specific endpoint path (e.g., /hello).
Final URL = /wp-json/{namespace}/{route}.


2. Why do we usually use a version number (like v1) in the namespace?

Versioning ensures backward compatibility. If your API changes in the future, you can introduce /v2/ without breaking old clients.


3. What does the permission_callback argument do in register_rest_route()?

It decides who is allowed to access the endpoint. If it returns true, anyone can access. If it returns false, access is denied.


4. Why is using __return_true in permission_callback sometimes risky?

Because it makes the endpoint publicly accessible, which could leak sensitive data if not handled carefully.


5. Can register_rest_route() support multiple HTTP methods for the same route?

Yes. You can pass an array of methods:
'methods' => ['GET', 'POST']


6. Where should you register custom REST routes in WordPress?

Inside a callback hooked to rest_api_init. If you register routes too early (like on init), they won’t load properly.


7. What type of data does the callback function in register_rest_route() return?

It should return either:
An array/object (WordPress will auto-convert to JSON), or
A WP_REST_Response object for advanced handling.


8. What happens if your callback function throws an error?

You can return a WP_Error object. WordPress REST API will convert it into a structured JSON error response.


9. Can two plugins register the same route? What happens?

Yes, but the last registered route overrides the previous one. This can cause conflicts. Always use unique namespaces.


10. How do you add query parameters to a custom endpoint (e.g., /hello?name=John)?

The callback function receives a $request object, from which you can fetch params:
$name = $request->get_param('name');
if($name) {
    return "Hello, $name";
}