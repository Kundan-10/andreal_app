# Image Crud Application

*The Image Crud Application is a simple yet powerful solution for organizing images efficiently. With features such as task creation, editing, deletion, and detailed viewing, users can manage their images with title and description  seamlessly. Built with Laravel, it offers a user-friendly interface for effective Images management.

## Features

- **Images Listing:** Users can view a list of all details of images.
- **Create image:** Users can add new image with a title and description.
- **View imgage:** Users can view details of a specific images.
- **Edit images:** Users can edit the content and description of a image.
- **Delete imgae:** Users can delete a image with content and description.

## Endpoints

- **GET /posts:** Retrieve a list of all images/posts.
- **POST /posts:** Upload a new image/post.
- **GET /posts/id:** Retrieve details of a specific image/post.
- **PUT /posts/id:** Update an image/post.
- **DELETE /posts/id:** Delete an image/post.

## Setup

To set up and run this application, follow these steps:

1. **Clone Repository:** Clone this repository to your local machine.

   ```bash
   git clone <repository_url>

   **1.Install Dependencies:** Navigate into the project directory and install the necessary dependencies using Composer.
  
     cd appname
     composer install
   ```

* Environment Configuration: Create a copy of the .env.example file and rename it to .env. Update the configuration values such as database connection details.

* Database Migration: Run the database migrations to set up the required tables in the database.

 ```
 php artisan migrate
 ```
* Serve Application: Serve the application locally using the php artisan serve command.

  php artisan serve
 ```
* Access Application: Access the application in your web browser at [http://localhost:8000].

## Usage

- **Register/Login:** Users need to register or login to manage their posts. This application uses Laravel's built-in authentication system.
  
- **Post Management:** Once logged in, users can perform CRUD operations on posts using the provided interface.
  
- **Create Post:** Users can create new posts.
  
- **Post Listing:** Users are able to view a list of all posts.
  
- **Edit and Delete Posts:** Users can edit and delete their own posts from the post listing page.


