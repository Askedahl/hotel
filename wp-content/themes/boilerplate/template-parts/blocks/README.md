[< Go back to Root README](../../../../../README.md)

# Blocks

## What is blocks?

Blocks are ACF created Gutenberg blocks.
It has the same functionality as classic Gutenberg block. But with ACF, we have more flexibility and can develop at a lot faster speed. 

A block should always directly reflect a Gutenberg block that can be used in the page editor interface.

If you find yourself building a block that does not reflect as stated above, you are probably looking to build a `component`, and should direct yourself to the [`README.md`](../components/README.md) file in the components folder for further information about creating a component.
___

## Structure
Each subfolder in the `/template-parts/blocks/` folder represent individual gutenberg blocks. 
A block folder should at least contain the block markup, and the specific styles contained to the block.

The folder structure of a block is as following

```
blocks/
    myblock/
        myblock.php
        _myblock.scss
```

`block-name.php` contains the block markup and logic

`_block-name.scss` contains the styling restricted to the block scope.


*When you have created the block folder structure. Don't forget to add the `_myblock.scss` file path to the [`sass/blocks/_blocks.scss`](../../sass/blocks/_blocks.scss) file. (grunt task restart required)*
___

## The default block markup

The default block markup looks as so. Example for `featured-cases` block.

```
<?php 
/*------------------------------------------------
# FEATURED CASES
------------------------------------------------*/

// Main logic goes here

?>

<div class="block block--featured-cases">
    <!-- Blog markup goes here -->
</div>
```
___

## Make the block usable - Hook up to ACF

Now that the boilerplate for your new block is created. It is time to actually hook it up to Advanced Custom Fields.

To hook up a block, you need to go through the following steps.

#### Part 1 - Code

1. Go into the [`functions/functions_acf.php`](../../functions/functions_acf.php) file.
2. Search for `Block hook setup - Step 1` and complete the task stated in the function.
3. Search for `Block hook setup - Step 2` and complete the task stated in the function.

#### Part 2 - Wordpress dashboard
1. Log into Wordpress dashboard interface. *(Administrator role required)*
2. Go to `Custom Fields`
3. Add new Field Group
4. Name it `Block :: Your Block name`
5. Under the `Location` section, set `Show this field group if` to `Block` is equal to `Your Block Name`.
6. Insert the fields that the user should be able to enter.
7. Done! Your block can now be used.