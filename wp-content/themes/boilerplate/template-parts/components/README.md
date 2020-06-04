[< Go back to Root README](../../../../../README.md)


# Components

## What is components?
Components are a place for smaller elements, that are used frequently in different blocks and templates, so to avoid a lot of repetitive code,
the elements have been collected in the components folder.

Each subfolder in the `/template-parts/components/` folder represent individual components. 

___

## Component Templates ##

All component markup files, needs to be included in the `templates` folder of the component name folder.
The reason behind this is to make it possible to have different templates for same components.

The way you create a component folder structure should look something like this:
```
components/
    mycomponent/
        templates/
            mycomponent.php /* default template */ 
            mycomponent--featured.php
        _mycomponent.scss         
```
When you have created the component structure. Don't forget to add the `_mycomponent.scss` file path to the [`sass/components/_components.scss`](../../sass/components/_components.scss) file.

___

## How to use a component ##
For easy use, a function has been created to simplify fetching the components correctly.

```
get_component( $name, $args, $slug(optional) );
```

`$name` = name of the component

`$args` = content that should be included into the component, eg.: `get_field('heading')`

`$slug` = If there are several versions or states of a component, the slug is used to fetch a specific template, eg.: `'mycomponent--mycomponent'`

#### Example code: ####

```
<?php get_component('heading', $heading); ?>

<!-- or -->

<div class="cases__case">
    <?php get_component('case', $case, 'case--featured'); ?>
</div>
```
