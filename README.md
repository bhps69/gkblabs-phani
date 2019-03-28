# gkblabs-phani
<h2>
This package is used to extract the user/customer mails given the credentials of the respective user/customer, here we also have the option of retrieve a specific mail with regards to the content/subject,to or from etc.. fields.
<h2>
This package can be installed using the command "composer require gkblabs/phani", given php 7.0 or greater is installed along with xampp 3.2.2 or greater. 
<h2>
Before that we need to install composer
<h2>
Then install xampp. you have to navigate to htdocs in command prompt and in the directory write a command <B><I>composer create-project laravel/laravel <your_project_name></B></I>
<h2>
and then navigate to the laravel project in command prompt
<h2>
finally say <B><I>composer require gkblabs/phani</B></I> which installs the package
<h2>
For the package to be run, add a line <B><I>Gkblabs\Phani\MailListProvider::class</B></I> in the "config/app.php" under the "package providers" comments.
<h2>
and in the composer.json, we have to include the line : <B><I>"Gkblabs\\Phani\\" : "vendor/gkblabs/phani/src"</B></I>
 then use <B><I>"composer update"</B></I> 
<h2>
for accessing the database, this line <B><I>php artisan migrate --path=/vendor/gkblabs/phani/src/database/migrations</B></I> has to be written in command prompt with laravel directory as the root.</h2> 
