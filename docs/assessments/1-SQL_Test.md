![Poniverse logo](../imgs/logo.png)

# Canterlot Avenue Dev Candidate Assessment

# 1. Quick SQL Quiz

This quiz does not require the PHP repo.

Suppose we have 2 tables in a SQL database containing comment data and user data. Write a SQL query to associate comments with their posting users. Use any SQL dialect, but specify it.

### Comment table
Table Name: `comments`
- `comment_id` - `int(10)` - Comment ID
- `user_id` - `int(10)` - Posting User ID
- `text` - `varchar(255)` - Comment text

### User table
Table Name: `users`
- `user_id` - `int(10)` - User ID
- `fullname` - `varchar(255)` - Full name of user
- `username` - `varchar(255)` - User name of user