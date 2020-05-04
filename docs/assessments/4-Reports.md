![Poniverse logo](../imgs/logo.png)

# Canterlot Avenue Dev Candidate Assessment

# 4. Implement Reporting

## Introduction
Now you're ready to make a third-party app! This app is going to allow users to report inappropriate comments. It's okay that there is no database because you can mock it (this is just a test after all).

## Requirements
- Add a button next to all listed comments to report
- Implement a confirmation dialog
- Redirect to page confirming the report submission containing the comment text and the offending user

## Hints
- Check the structure of the Apps folder. The important subdirectories are `Controllers`, `Blocks`, `Views`, and `Services`. The functions `\CADev\GetBlock` and `\CADev\GetController` require such structure.
- Add your controller or block ID to `\CADev\GetBlock` and `\CADev\GetController` associating it to an array with the following keys.
  - `app` - App Directory Name 
  - `class` - Target controller or block class
  - `view` - View file name without .php
- Associate the intended endpoints with the controller or block ID in `index.php`'s `uri_map`