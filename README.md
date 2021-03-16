# HATFIELD MEDIA SKILL CHALLENGE
This project is a meant to test your skills and ability to adapt quickly.  You have as long as you need to complete this challenge.  Not only will I be looking at the quality of the code, but I will be looking at how well you can interpret the design into code.

This project is scaffolded in Laravel.  The documentation for Laravel can be fround at https://laravel.com/docs/8.x.

Certain parts of the design have been omitted from the mobile mockups, as I want to see how you would interpret that into a responsive design given the desktop mockup.

This site uses Roboto Bold for the healines and nav links and Lato for the body copy.  Both fonts can be found at https://fonts.google.com/.

The colors for this site already have values set in the `/resources/sass/_variables.scss` file.  The blue color is `#0c023f` and the gold is `#f1ba00`.

The body text content is not that important, it's a standard lorem ipsum text that you can copy from https://loremipsum.io/.  The exact length isn't important, just having content there to fill out the space is important.

All images that you will need will be in the `public/images` folder.

Utilize SASS as much as needed, it is a CSS processeor and you can find documentation https://sass-lang.com/.  You can write straight CSS inside the SASS files.

Refrain from using jQuery and rely on good ol' Vanilla JavaScript.

## GIT FLOW
<ol>
    <li>Fork the Repo</li>
    <li>Maintain a seperate branch for every block/feature that you build.  For example, create a nav branch when you build the nav and merge it to your master upon completion. Create a single-column branch as you work through the single column block and merge it to your master upon completion.</li>
</ol>

## SETUP
Before you can run this project you will need to make sure you have several packages/dependencies installed.
<ul>
    <li>Make sure NPM is installed (https://www.npmjs.com/get-npm)</li>
    <li>Make sure PHP is installed (https://www.php.net/downloads)</li>
    <li>Make sure Composer is installed (https://getcomposer.org/doc/00-intro.md)</li>
</ul>

## RUNNING THE PROJECT
Once you have forked the repo run:
<ol>
    <li>composer install</li>
    <li>npm install</li>
    <li>npm run dev</li>
    <li>`npm run watch` (this will watch your JS and SASS files)</li>
    <li>In a seperate terminal run `php artisan serve --port=8080`</li>
    <li>See the live site at localhost:8080</li>
</ol>
