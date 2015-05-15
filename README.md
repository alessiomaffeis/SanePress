# SanePress
## WordPress development made (almost) reasonable

You are going to make a WordPress site, deal with it. 
As a web developer, it will come that sad moment in your professional life when you are forced to build a WordPress site by some obtuse client or a sadistic project manager.

The news is that YOU ARE NOT ALONE. Just clone the *SanePress* repository in your site folder and enter a world of sane(r) WordPress development.

### What is SanePress?

Basically, it is just a standard WordPress installation complete with some essential plugins pre-installed and pre-activated for your convenience.

### Which plugins are bundled with SanePress?

#### Timber
This is the most important one. Never build a WordPress site without Timber, never ever. Why?

+ MVC
+ Twig template engine
+ Object Oriented Posts, Terms, Users, etc.
+ Routing
+ Caching
+ And so much more…

What does it mean? A lot of things, but let me give you a quick and enlightening example (straight from Timber docs):

> Say you’ve created a page called “About Us” and WordPress has given it the slug *about-us*. (…) You can simply create a file called *page-about-us.twig* inside your *views* folder and go crazy.

Then you can think of your theme’s *pages.php* file as a controller for your page templates. And that’s only the tip of the iceberg. For more info: https://github.com/jarednova/timber/wiki

#### Advanced Custom Fields
Define as many groups of custom fields as you like and assign them to pages, posts, custom post types, etc. through a handy settings page. Plus: it is perfectly integrated with Timber.

#### WP-SCSS
A SCSS compiler. You put your .scss files into the *scss*/ folder of your theme, you get your .css files into the *css*/ folder. Dead simple.
(Deactivated by default)

#### Rocket Galleries
This is the gallery management feature missing in WordPress. For some reason somebody decided you can’t just create a gallery whenever you like. Now you can.
(Deactivated by default)

#### Custom Post Types
There are a few different ways to define custom post types, and each comes with its own pros and cons. SanePress encourages to do it inside a site-specific (thus not linked to any theme), “Must Use” plugin (i.e. one that is loaded automatically and it’s not listed in the Plugins section of WordPress’ control panel).
You find a stub of a custom post type definition in:
    
    wp-content/mu-plugins/custom-post-types.php

Just edit the plugin and create as many types as you like.


### Which themes are bundled with SanePress?

Just the *sanepress* theme, which is essentially a slightly modified version of the *timber-starter-theme*, to include WP-SCSS folders plus some handy comments (i.e. useful shortcuts to CDN versions of Bootstrap and Foundation frameworks, etc.).
The starter theme provides an über-clean foundation and structure to build your site on.

### How does it work?

All the auto-activating, auto-configuring stuff is carried out after the installation process by a custom Must Use plugin:

    wp-content/mu-plugins/_sanepress.php

### Does it break any standard WordPress feature?

Hopefully not.

### How do I install SanePress?

Just clone this repository in the (new or empty) folder you want to install Word… ehm SanePress to:

    git clone https://github.com/alessiomaffeis/SanePress.git <path>

Then go through the standard WordPress installation steps. That’s it.
