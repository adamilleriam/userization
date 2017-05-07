# About Authorization Package

### In Composer.json
 
    "require": {
        ****************
        "adamilleriam/authorization" : "0.1.*"
    },
    "repositories":[
        {
            "type": "git",
            "url": "https://github.com/adamilleriam/authorization.git"
        }
    ],
    
    and add this line in config/app.php providers array
    ----------------------------------------------------------------
    adamilleriam\authorization\authorizationServiceProvider::class,
    ----------------------------------------------------------------
    Now Run composer update
#### Vendor Publish
    After complete composer update please Run "php artisan vendor:publish"
    and 
    Run "composer dump-autoload"
#### Config
 Package has a config file in config folder. The name of this file is  authorization.php
  First have to add master_template and content_area with master template location and content area name.
  Then add per_page field for pagination.

----------------------------------------------------------------------
'authorization'=>\App\Http\Middleware\AuthorizationMiddleware::class,
----------------------------------------------------------------------
register this line in app/Http/kernel.php "routeMiddleware" section

### Migration
Before run "php artisan migrate" please add a user id in authorization config file.
Provided user will get all privilege in authorization.
 Then run "php artisan migrate"

#### Rules
    add role button on user list page 
    - Route = role_user.index (send with user id)
    - URL   = role_user/{user_id} 

#### Routes
    - role
    - permission
    
    
#### Extra
    ##### canViewButton() 
    Add this file to composer autoload
    "autoload": {
        "files": ["app/Http/AuthorizationHelper.php"]
    },
    It's a global function. it take to parameter. first one is required and second one is optional.
     - First Parameter => send uri or route 
        Ex. canViewButton('permission/create');
     - Second Parameter => type is it URI or Route. default is URI. if you send route then you have to mention it. 
        EX. canViewButtton('permission.create','route')
    
