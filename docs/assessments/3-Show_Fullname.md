![Poniverse logo](../imgs/logo.png)

# Canterlot Avenue Dev Candidate Assessment

# 3. Show Full Name in comments

![Plain layout](../imgs/2/1.png)

Despite its usefulness to the backend, displaying a user ID does not to much for the end user. This assessment requires you to replace the user ID in the comment views with the user's full name.

### Hints:
- Check the Comment and User apps. Comment's `Comment/Blocks/CommentBlock.php` retrieves the comments while User's `User/Services/UserResource.php` can return user information.
- When displaying the comment, edit `Comment\Views\Comment.php`