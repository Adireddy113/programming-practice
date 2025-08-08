A simple WordPress plugin to demonstrate the concept of Inheritance in PHP OOP using shortcode.


**Inheritance** is a beginner-friendly educational plugin that demonstrates how object-oriented programming (OOP) concepts like *Inheritance* and *Method Overriding* work in PHP.

This plugin creates a `Person` class and a `Student` class that inherits from it. A shortcode `[inheritance]` is provided to show the output.

Great for learning PHP inside WordPress!

== How It Works ==

- `Person` class contains name and age.
- `Student` class extends `Person` and adds roll number.
- `Student` class overrides the `introduce()` method.
- When you use `[inheritance]`, the plugin displays both the student's introduction and roll number.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the shortcode `[inheritance]` in any post or page.

