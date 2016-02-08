##Basics
Change the boilerplate_theme folder name to the name of the site you're working on:  

* boilerplate_theme  
to 
* my_theme_name  

* rename the .info file to 'your site name'
* change the name and description values

Open up template.php and rename the function name as follows:  

* boilerplate_theme_preprocess_page
would be changed to   
* my_theme_name_preprocess_page

##LESS usage
The file structure at my_theme_name/less is as follows:  

* bootstrap-less folder
* theme-variables.less
* bootstrap.less
* theme.less
The file structure is inspired by the [Bootstrap][bootstrap on github] project on Github   

All we need to edit are:  
* theme.less
* theme-variables.less.
theme.less will be compiled to the folder css/theme.css. We dont need to compile theme-variables.less we just need to edit and save it. As mentioned below we can override other files using Bootstrap theme customiser tools.

All the files in the bootstrap-less folder are directly copied from [Bootstrap][bootstrap on github]

##Compiling LESS using a GUI application
You will need a LESS compiler such as [Koala][koala less app] or [WinLESS][winless less app]  

Drag and drop the entire my_theme_name folder into the dropzone of the application.

In Koala you will want to remove the Auto compile option on:

* bootstrap.less
* theme-variables.less

This is because:  
###We dont need to edit bootstrap.less:  
We can override it with Bootstrap theme customiser tools available online if we want/need to.  
###We will need to edit theme-variables.less and save this file in our text editors:  
But we dont need to compile it as its being included in our theme.less file. If you accidently compile theme-variables.less its not a problem, you simply get a blank css file with the same name which can be deleted with out any negative impact.
###Compiling a less file  
* If you compile a less file a css file with the same name will be created.

##Using LESS.
To begin with, you will most likely find using Variables, Mixins and Nesting and possibly Operations easiest to work with. See this [beginners guide][less beginners guide]. A comprehensive listing can be found [here][less comprehensive listing].

##Working with the Boilerplate theme
It is designed to be minimal so that it gives the developer more freedom to choose what they want/need to do. It has a copied version of the Drupal cores' page.tpl.php (with minor modifications) and node.tpl.php.

It also has the Bootstrap parent themes' template files for common Landscape Content types.

##For responsive migrations
One strategy would be to use the same regions that was used in the previous theme and assign the same blocks to those regions.

Then apply boostrap classes such col-xs-12 (see [getbootstrap.com][bootstrap css home page]) to page.tpl and any necessary Drupal blocks.

You could also use live broser editors such [bootstrap-live-customizer.com][bootstrap live customizer]. Make changes in the right sidebar, as well as donwload complete customised variables.less, theme.less and bootstrap.css.

##Troubleshooting
If you get into a mess, you can remove all the css files from the css folder.

Compile the boostrap.less file at less/bootstrap.less. This file contains all the Bootstrap classes you need for working with the Bootstrap framework.

Compile the theme.less file at less/theme.less. This file contains all the custom theme work you have done for a site.

It is also helpful to remove the Auto compile option from youre LESS GUI application as this can be confusing especially if youve just started and want to find out whats going on.

[bootstrap on github]: www.github.com/twbs/bootstrap/tree/master/less
[koala less app]: www.koala-app.com
[winless less app]: www.winless.org
[less beginners guide]: www.ostraining.com/blog/coding/less
[less comprehensive listing]: www.cssauthor.com/less-tutorials/
[bootstrap css home page]: www.getbootstrap.com
[bootstrap live customizer]: www.bootstrap-live-customizer.com