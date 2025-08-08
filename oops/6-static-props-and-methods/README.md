A simple plugin to demonstrate the use of static methods and properties in PHP OOP using a shortcode.

== Description ==

**Static** is a beginner-friendly WordPress plugin that illustrates how *static methods* and *static properties* work in PHP's object-oriented programming.

This plugin uses a class `WebsiteTracker` to simulate a visitor counter using a static property. A shortcode `[static]` is provided to demonstrate how the count works with object instantiation.

== How It Works ==

- `WebsiteTracker::$totalVisitors` keeps a static count of objects created.
- Each time a new object is created, the static counter is incremented.
- `getVisitorCount()` is a static method that returns the current count.
- When you use `[static]`, it creates two objects and returns the total count.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the shortcode `[static]` in any post or page.

