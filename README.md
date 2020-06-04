# De Brede Planker

## Git / deployment info

#### 🌱  Branches
- Master - Production ready code.
- Stage - Test phase for completed functionality

#### ❗️Git standards
- use prefixed branches for your work. Ex: "feature/name-of-the-task" or "bugfix/the-bug-to-fix" 
- use kebab-case for branch-naming (i-am-kebab-case)
- keep commit-messages in english and try to write descriptions that explains your work (a bad example: "added styling" vs. a good example: "added styling in the top-menu" )
- To clear your git folder to bare minimum files, - run `git clean -xdf` 

#### 🚀 Deploy to stage.

1. Make sure that your local stage branch is up to date with origin/stage (do a fresh `fetch` and `pull`)
2. Merge your working branch into the stage branch
3. Push the stage branch to origin (BitBucket) 
4. ... TODO: Update when staging server is ready

___

## Wordpress Boilerplate Setup

*Jakob Plenge @ Oak Digital*

#### Required CLI's managers: ####

* NPM - https://docs.npmjs.com/cli/install
* WP CLI - https://make.wordpress.org/cli/handbook/installing/

#### Required packages: ####

* grunt-cli - ``` npm install -g grunt-cli ```

#### Installation ####

1. Run ```bash install.sh``` in the terminal

#### Setup local WP ####

1. Setup virtual host on your apache install
    * Preferably with something like "local.siteurl.dk" as local env domain
    * Guide to virtual host: https://medium.com/@jason.amador/setting-up-virtual-hosts-with-apache-on-macos-sierra-7d7d7a1f551a

4. Done!

___

### Development ###

#### Editor ####
* 4 spaces in all files

#### HTML and CSS (SCSS) ####

###### Grunt ######
We are using Grunt to package our files.
A watch function has been set up in `Gruntfile.js`.
While developing, type `grunt` into the terminal for live compiling.

###### Syntax ######

We are using BEM class naming syntax, read more at: http://getbem.com/introduction/

#### PHP ####

Some minor rules for PHP is required to follow.

When using PHP the syntax is used as so:

```
function my_function() {
    /* functionality */
}
```

When using PHP in HTML markup. The following syntax is used

```
<div class="cases">
    <?php foreach($cases as $case ) : ?>
        <div class="cases__case></div>
    <?php endforeach; ?>
</div>
```

So the difference is that when using PHP by itself, we use curly braces `{}` to surround the function space. But in HTML we use `:` and `endif;` / `endforeach;` - etc.

The reason behind this is the make the code more readable in scale.


___

### Blocks and Components

The theme is build with blocks and components to make the website scalable and take advantage of the new Gutenberg editor. You can read more about the technical functionality in the following Read Me's

[> Read about Blocks](wp-content/themes/boilerplate/template-parts/blocks/README.md)

[> Read about Components](wp-content/themes/boilerplate/template-parts/components/README.md)