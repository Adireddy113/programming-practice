# 🌐 REST API Practice – Day 8

## 📘 What I Learned


- **Custom Endpoints** - using regex patterns inside route to capture dynamic parameters.
  - By using `register_rest_route` we will register a route
  - `rest_api_init` is a built in hook to trigger function when Rest API Initializes

  - 'custom/v1' - Namespace (custom)(plugin name), version (v1).
  - '/user' → The endpoint path(route)
  - 'methods' => 'GET' → Only responds to GET requests.
  - 'callback' => 'custom_msg' - When the route is called, run the function custom_msg()
  - 'permission_callback' => '__return_true' → No restrictions 
  
  - `$request->get_param` to store parameter value 
  - (?p<name>[a-zA-Z]) - parameter name which accepts only alphabets
  - (?P<id>\d+) - accepts only digits
---

## 🛠 Tools Used

- [Postman](https://www.postman.com/) – for testing APIs  
- Own Wordpress site for working with data - https://basic.local

---

## ✅ Practiced Requests

1. GET custom endpoint in this Route
GET https://basic.local/wp-json/custom/v1/user/adi/id/2




❓ Day - 9 Tricky Interview Q&A

1. How do you capture parameters from a custom route in register_rest_route()?
By using regex with named groups like (?P<name>[a-zA-Z]+). The captured value is available in the $request object.


2. In the route /hello/(?P<name>[a-zA-Z]+), what does (?P<name>...) mean?

(?P<name>...) defines a named capture group.
name → parameter name
[a-zA-Z]+ → only letters allowed


3. What happens if you call /hello/123 with the route (?P<name>[a-zA-Z]+)?

It will return a 404 Not Found, because the regex only allows letters, not digits.


4. How can you allow both letters and numbers in your parameter?

Change regex to:
(?P<name>[a-zA-Z0-9]+)


5. How do you access the parameter value inside the callback?

Use $request['param_name'] or $request->get_param('param_name'). Example:
$name = $request['name'];


6. Can you define multiple parameters in a single route? Example: /hello/John/25

Yes , by adding multiple regex groups:
/hello/(?P<name>[a-zA-Z]+)/(?P<age>\d+)


7. What happens if two routes overlap? (e.g., /hello/world vs /hello/(?P<name>[a-zA-Z]+))

WordPress matches the most specific route first. If both match, the last registered route overrides the earlier one.


8. Is it possible to define an optional parameter in WordPress REST routes?

Not directly with register_rest_route(). You usually define multiple routes or handle defaults in your callback. Example:
if (!$request['name']) { $name = 'Guest'; }


9. Why is it recommended to use regex constraints instead of (?P<name>.+)?

Because .+ matches everything (including slashes), which can lead to route conflicts and security issues. Regex constraints keep input clean.


10. What’s the difference between path parameters (/hello/John) and query parameters (/hello?name=John) in WordPress REST API?

Path parameters are defined in the route regex and are part of the URL structure.
Query parameters are appended after ? and can be accessed via $request->get_param().