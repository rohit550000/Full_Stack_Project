<h1>Run the project</h1>
<ul>
    <li>Clone repo or Download zip file and cd into it</li>
    <li><b>run</b> : cp .env.example .env</li>
    <li><b>open .env and update DB_DATABASE (database details)</b></li>
    <li><b>run</b> : composer install</li>
    <li><b>run</b> : php artisan key:generate</li>
    <li><b>run</b> : php artisan migrate:fresh --seed</li>
    <li><b>run</b> : php artisan serve</li>
</ul>
