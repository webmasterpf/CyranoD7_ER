Avril 2011 − Webmaster PF
−−−−−−−−−−−−−−−−−−−−−−−−−
STARTER THEME DRUPAL 7
−−−−−−−−−−−−−−−−−−−−−−−−−

Thème basé sur Basic pour Drupal 7.
Permet le develeoppement des sites de PF avec Drupal 7.


****************************** THEMING  **********************************************
--------------------- INCLURE UNE REGION DANS UN TPL ----------------------------------------
EXEMPLE:
<?php if ($page['footer_icons']): ?>
  <div class="footer-icons">
    <?php print render($page['footer_icons']); ?>
  </div> <!-- /.footer icons -->
<?php endif; ?>
---------------------- INCLURE CONTENU D4UN CHAMP CCK -----------------------------------------
<?php
/* inclure des champs CCK dans le node selon http://robotlikehuman.com/web/printing-cck-content-field-values-drupal-7
 * Ce qui donne pour D7
 */
print render($content['field_EXAMPLE']);
?>

-----------------------
Template suggestions:
-----------------------
29/07/11
Plus besoin de créer un page-TDC.tpl , la surcharge du node.tpl suffit, si mise en page proche, sinon à tester

What's a template suggestion? It's an alternate template (.tpl.php) file that you have created to override the base or original template file. Suggestions only work when they are placed in the same directory as the base templates.

Custom suggestions beyond the ones listed below can be created. See the page Working with template suggestions.

block--[region|[module|--delta]].tpl.php
base template: block.tpl.php
Template suggestions are made based on these factors, listed from the most specific template to the least. Drupal will use the most specific template it finds:

block--module--delta.tpl.php
block--module.tpl.php
block--region.tpl.php
"module" being the name of the module and "delta", the internal id assigned to the block by the module. For example, "block--block--1.tpl.php" would be used for the first user-submitted block added from the block administration screen since it was created by the block module with the id of 1. "region" will take effect for specific regions. An example of a region-specific template would be block--sidebar_first.tpl.php. If you had a block created by a custom module called "custom" and a delta of "my-block", the template suggestion would be called "block--custom--my-block.tpl.php."
comment--[type].tpl.php
base template: comment.tpl.php
Support was added to create comment--type.tpl.php files, to format comments of a certain node type differently than other comments in the site. Similar to node--[type].tpl.php but for comments.

Note: If you want comment--blog.tpl.php to display in your browser, comment.tpl.php also needs to exist inside your theme and the two files must be in the same directory.

comment-wrapper--[type].tpl.php
base template: comment-wrapper.tpl.php
Similar to the above but for the wrapper template.
forums--[[container|topic]--forumID].tpl.php
base template: forums.tpl.php
Template suggestions are made based on these factors, listed from the most specific template to the least. Drupal will use the most specific template it finds:

For forum containers:

forums--containers--forumID.tpl.php
forums--forumID.tpl.php
forums--containers.tpl.php
For forum topics:

forums--topics--forumID.tpl.php
forums--forumID.tpl.php
forums--topics.tpl.php
maintenance-page--[offline].tpl.php
base template: maintenance-page.tpl.php
This applies when the database fails. Useful for presenting a friendlier page without error messages. Theming the maintenance page must be properly setup first.
node--[type|nodeid].tpl.php
base template: node.tpl.php
Template suggestions are made based on these factors, listed from the most specific template to the least. Drupal will use the most specific template it finds:

node--nodeid.tpl.php
node--type.tpl.php
node.tpl.php
See node.tpl.php in the Drupal API documentation for more information.
page--[front|internal/path].tpl.php
base template: page.tpl.php
The suggestions are numerous. The one that takes precedence is for the front page. The rest are based on the internal path of the current page. Do not confuse the internal path to path aliases which are not accounted for. Keep in mind that the commonly used Path auto module works its magic through path aliases.

The front page can be set at "Administration > Configuration > System > Site information." In Drupal 6, at "Administrator > Site configuration > Site information." Anything set there will trigger the suggestion of "page--front.tpl.php" for it.

The list of suggested template files is in order of specificity based on internal paths. One suggestion is made for every element of the current path, though numeric elements are not carried to subsequent suggestions. For example, "http://www.example.com/node/1/edit" would result in the following suggestions:

page--node--edit.tpl.php
page--node--1.tpl.php
page--node.tpl.php
page.tpl.php
Also see page.tpl.php in the Drupal API documentation for more information.

Here is another explanation based on the theme_get_suggestions() function:

The list of possible templates for a given page is generated by Drupal through the theme_get_suggestions() function, which is called by the template_preprocess_page() function.

The Drupal path of the page is first broken up into its components. As mentioned above, the Drupal path is not any of its aliases: there is one and only one Drupal path for a page. For the examples "http://www.example.com/node/1/edit" and "http://www.example.com/mysitename?q=node/1/edit", the Drupal path is node/1/edit, and its components are "node", 1, and "edit".

Next, the prefix is set to "page". Then, for every component, the following logic is followed:

If the component is a number, add the prefix plus "__%" to the list of suggestions.
Regardless of whether the component is a number or not, add the prefix plus "__" plus the component to the list of suggestions.
If the component is not a number, append "__" plus the component to the prefix.
After the list of components is iterated through, if the page is the front page (as set through "Administration > Configuration > System > Site information."), then "page__front" is added to the list of suggestions.

Note that eventually, to turn a suggestion into an actual file name, "__" gets turned into "--", and ".tpl.php" gets appended to the suggestion. Thus, for node/1/edit, we get the following list of suggestions:

page.tpl.php (this is always a suggestion)
page--node.tpl.php (and prefix is set to page__node)
page--node--%.tpl.php
page--node--1.tpl.php (prefix is not changed because the component is a number)
page--node--edit.tpl.php (and prefix is set to page__node__edit)
page--front.tpl.php (but only if node/1/edit is the front page)
When the page is actually rendered, the last suggestion is checked. If it exists, that suggestion is used. Otherwise the next suggestion up is checked, and so on. Of course, if none of the overriding suggestions exist, page.tpl.php is the final suggestion. This also explains why page--front.tpl.php, if it exists, overrides any other suggestion for the front page: it is always the last suggestion for the page designated as the front page.

poll-results--[block].tpl.php
base template: poll-results.tpl.php
The theme function that generates poll results are shared for nodes and blocks. The default is to use it for nodes but a suggestion is made for rendering them inside block regions. This suggestion is used by default and the template file is located at "modules/poll/poll-results--block.tpl.php".
poll-vote--[block].tpl.php
base template: poll-vote.tpl.php
Similar to poll-results--[block].tpl.php but for generating the voting form. You must provide your own template for it to take effect.
poll-bar--[block].tpl.php
base template: poll-bar.tpl.php
Same as poll-vote--[block].tpl.php but for generating individual bars.
profile-wrapper--[field].tpl.php
base template: profile-wrapper.tpl.php
The profile wrapper template is used when browsing the member listings page. When browsing specific fields, a suggestion is made with the field name. For example, http://drupal.org/profile/country/Belgium would suggest "profile-wrapper--country.tpl.php".
search-results--[searchType].tpl.php
base template: search-results.tpl.php
search-results.tpl.php is the default wrapper for search results. Depending on type of search different suggestions are made. For example, "example.com/search/node/Search+Term" would result in "search-results--node.tpl.php" being used. Compare that with "example.com/search/user/bob" resulting in "search-results--user.tpl.php". Modules can extend search types adding more suggestions of their type.
search-result--[searchType].tpl.php
base template: search-result.tpl.php
The same as above but for individual search results.

