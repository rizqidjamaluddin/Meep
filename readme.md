

# Meep

A super-simple blogging tool. For when you just need a freaking blog.

What Meep does NOT have:
 - A sophisticated plugin API
 - All the damn bells and whistles
 - Tag clouds and all that jazz

 What Meep DOES have:
 - A clean ready-to-use, bare-metal blade frontend
 - A thought-out ready-to-use backend
 - Quick and painless install, meant to be deployed straight to your server
 - The bits you expect from a blog: search, indexes, and a contact form

 ## Install

 CLI installation:
  - git clone
  - composer install
  - php artisan meep:setup

  GUI installation:
  - git clone
  - composer install
  - visit site and set it up

  Install options:
  - Initial user account name, email and password
  - Security settings: safe/unsafe HTML filtering, enable/disable editing of blade files from backend

 ## Custom Fields

 Use custom fields to attach metadata to posts. Enter them under the post body. Custom fields are also used to search
 and organize the index page, so it's best to keep them consistent - they can also be shown directly in the frontend
 by tweaking the blade file. The custom field UI will try to hint you if you typo a field name (and a similar one
 exists).

 ## Extending Themes

 Meep just uses vanilla Blade.