# banner-Symfony

web application used by students at university for academic petitions and appeals . Stack Used PHP 7.4 ,Symfony
5,Doctrine ORM,PHPUnit

## How to Configure Project For local Development

1. Fork this Project and pull the Codebase :
   <br/>
2. Run composer to install Dependencies : composer install
   <br/>
3. Web Pack Package Dependencies Install : yarn install
   <br/>
4. Web Pack changes lookup : yarn watch
   <br/>

## How to add static files to twig templates via web-pack-encore

https://symfony.com/doc/current/frontend/encore/copy-files.html

Restart ENCORE : Close yarn watch and Re-Run ** yarn watch **
<br/>
Run the Command Suggested in error and Re-Run ** yarn watch **
<br/>
<br/>
<br/>

COMMANDS:

RUN PHPUNIT LOCALLY: ./vendor/bin/phpunit 
<br/>
symfony serve
<br/>
symfony serve:down<br/>
symfony console debug:router<br/>
symfony console debug:router {name}<br/>
symfony console router:match /{path}
<br/>
symfony console debug:container


## UseFull Commands:
<br/>
Update Composer : 
composer self-update --preview

<br/>
Update Lock file : composer update --lock

<br/>
push changes to remote without hooks: 
git push --no-verify 





## How to Run Doctrine ORM Migrations:
When you want to change something about the database structure, you need to make the necessary changes to the doctrine entities (they implement DoctrineInterface and are at the root of the Ega\Entity namespace). Use https://www.doctrine-project.org/projects/doctrine-orm/en/2.8/reference/annotations-reference.html#annotations-reference to better understand the Doctrine annotations. @Column will be the most commonly used annotation.
Once you’re satisfied with the changes you made to your entity, you then need to generate a migration script by running composer docker:console doctrine:migrations:diff from the terminal in the project directory. This will create a PHP file under src/Migrations/2021 called Version<Timestamp> where <Timestamp> is the date/time the migration was created.
Edit the migration and add a description to the getDescription() method. Make any changes to the code if need be (i.e., add insert statements or alter the alter statements, etc).
Use the “To run” command that’s in the up() docblock to apply your migration.
If you need to create an empty migration - e.g., to seed an additional table with data, like in src/Migrations/2021/Version20210120203534.php - then run the composer docker:console doctrine:migrations:generate command.


<br/>
composer legacy:migrate -- -t wf-types
<br/>
composer legacy:migrate -- -t wf-rules
<br/>
composer legacy:migrate -- -t wf-routing
<br/>
composer legacy:migrate -- -t admin-users



## Doctrine Commands:
1. Create the new entity and Create the table in DB 
<br/>
1.1 symfony console make:entity
<br/>
1.2 symfony console make:migration
<br/>
1.3 symfony console doctrine:migrations:migrate
   
2. Update the existing entity in DB also
<br/>
   2.1 Update the Entity Class add or Delete or Modify fields
<br/>
   2.2 symfony console make:migration
<br/>
   2.2 symfony console doctrine:migration:migrate


