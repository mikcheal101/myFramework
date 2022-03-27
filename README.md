# Mikky Framework
This is a toy framework built using PHP for learning purposes.

## Basic Features
- Custom Routing.
- Controllers.
- Views / Layouts.
- Models.
- Migrations.
- Form Widget Classes.
- Processing of request data.
- Validations.
- User Management.
- Simple Active Records.
- Session Flash Messages.
- Middlewares.
- Application Events.


## Folder Structure
-   bundle: The bundle folder holds the business logic aka controllers, models, runtime folders.
    - models.
    - runtime: storage for all user generated files eg (*.pdf).
    - views: folder to hold the user presentation layer.
        - layouts: folder to hold template layouts such as *(main.php)*.
            - `main.php`
        - responsePages: folder to hold pages such as 404, 500 etc.
            - `_404Page.php`
    - controllers: folder to hold business logic.
- core: folder to hold the main application / framework core.
    - `Application.php`
    - `Request.php`
    - `Response.php`
    - `Router.php`
- webroot: folder holding the entry point for the framework.