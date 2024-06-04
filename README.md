# Laravel 11 REST APi
This API is created using Laravel 11 API Resource. It has Documents and DocumentConfiguration.

#### Following are the Models
* Documents
* DocumentConfiguration

#### Usage
Clone the project via git clone or download the zip file.

##### .env
Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.
##### Composer Install
cd into the project directory via terminal and run the following  command to install composer packages.
###### `composer install`
##### Generate Key
then run the following command to generate fresh key.
###### `php artisan key:generate`
##### Run Migration
then run the following command to create migrations in the databbase.
###### `php artisan migrate`

##### Database Seeding
finally run the following command to seed the database with dummy content.
###### `php artisan db:seed`

### API EndPoints
##### Document
* Get a list of documents GET `http://localhost:8000/api/v1/documents`
##### Post
* Get a specific document GET Single `http://localhost:8000/api/v1/document/{id}`
* Creating a document POST Create `http://localhost:8000/api/v1/documents/create`