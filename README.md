# Orange - Lightweight PHP framework
Universal lightweight PHP framework - Orange

## Getting Started
Run,
```composer update```
### Suggestions
Consider adding following packages for extended functionalities,
```json
"suggest": {
    "phpmailer/phpmailer": "Allows sending mails through it",
    "guzzlehttp/guzzle": "Allows communicating to APIs via http requests",
    "catfan/medoo": "Allows to do database queries more easily"
}
```

## Controllers
Controllers will inject data in to the view before it's generated.

### Database
You can handle the database either by using Medoo methods or directly using PDO.

## Processes
Always should return a json response which includes compulsorily,
- status [ success | danger | warning | info ]
- message [string]
- anything else to be included with

## Pages
These are the pages you can view from the front-end. Having a ```.htaccess``` rewrites GET variable used for parsing views, the framework provides pretty URLs for each view.

Simply putting a php file with the same name you want to have in the URL will give you the pleasure of having the view without having to have a routing nightmare.

Example:
- ```pages/about.php``` will give you access to **[site_url]/about**

## Resources and Templates
This framework supports multiple templates. You can either have resources for each one of them in their own folders as well as common resources in the `resources` folder.

### Resources
Resources folder is where it resides the commonly used **fonts** and **images**.

### Templates
Each folder inside `templates` folder can contain a distinct template with their own resources. You can select the active template from the `config` file on the `DOCROOT`.

Files that compulsorily should contain in each template,
- header.php
- footer.php
- container.php
- menu.php [optional]

## AJAX
`ajax.php` will route the ajax requests comes via `includes/js/scripts.js`. URL must be specified as `site_url+'?process=[process_name as specified in the form name]'+'-process'`