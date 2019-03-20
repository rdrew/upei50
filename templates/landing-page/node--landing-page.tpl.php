<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Article" it would result in "node-article". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. page, article, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
//kpr(get_defined_vars());
$site_name =  variable_get('site_name', 'Drupal');
?>


<!-- hero text block -->
<div class="section-1">
<div class="content-1">
<div class="font-1">
<?php print render($site_name); ?>
</div>

<div class="content-2 font-2">
<?php print render($content['field_subtitle_text']); ?>
</div>
</div>
<!-- /hero text block -->


<div class="content-3 font-2">
Learn More
<div class="content-4">&#8623;</div>
</div></div>

<div class="grid">

<div class="item-1">
<div class="content-5">
<div class="font-2">Volpi is a responsive CSS Grid layout you can hack around with and use for anything you'd like.<p>Volpi is free and open source and released under the MIT licence.<p>Get the Volpi HTML & CSS <a href="http://www.tipue.com/grids/">here</a>.</div>
</div></div>


<div class="item-2"></div>

<div class="item-3"><a class="click-grid" href="http://www.tipue.com/grids/"><div class="content-7">
<div class="font-3">Dolore duis</div>
<div class="font-4 content-6">Nulla, blandit tation odio magna tation nonummy, dolore euismod qui ut eum iriure consectetuer commodo suscipit dolore, dolor vero nulla luptatum vero iusto, dignissim.<p>Get Volpi here.</div>
</div></a></div>

<div class="item-4"></div>

<div class="item-5"><div class="content-7">
<div class="font-3">Et ad augue</div>
<div class="font-4 content-6">Wisi augue suscipit dolore aliquam iusto odio, dolore dolor ut ad magna exerci.<p>Consequat facilisis at, delenit feugait aliquip nulla ut hendrerit praesent facilisi consectetuer commodo quis ut lobortis tation et duis.</div>
</div></div>

</div>

<div class="section-2">
<div class="content-7">
<div class="font-3">Nulla Rex</div>
<div class="font-2 content-6">Vulputate dolor vel rex laoreet dolore.<p>Luptatum nisl esse aliquip, eu veniam quis ex accumsan illum nulla eros dolore vulputate.
<div class="content-4">&#9813;</div>
</div></div></div>


<div class="section-3">
<div class="grid">

<div class="item-6"><div class="content-8">
<div class="font-3">Feugiat dolore</div>
<div class="font-4 content-6">Suscipit autem wisi iusto, at feugiat in illum dolore magna velit eum. Laoreet nisl ullamcorper at.<p>Tation blandit molestie eum exerci vero nostrud iriure tincidunt.</div>
</div></div>

<div class="item-7"><div class="content-8">
<div class="font-3">Consequat</div>
<div class="font-4 content-6">Vel duis in minim eum zzril, minim odio suscipit dignissim accumsan nonummy erat consequat vero nisl.<p>Enim dignissim minim ut hendrerit dolore eu aliquam esse, feugiat augue.</div>
</div></div>

<div class="item-8"><div class="content-8">
<div class="font-3">Exerci vero</div>
<div class="font-4 content-6">Aliquip nibh duis veniam enim at ea feugait nulla vero ut molestie exerci vero nostrud.<p>Iriure duis ipsum erat accumsan minim delenit dolore amet blandit enim.</div>
</div></div>

<div class="item-7"><div class="content-8">
<div class="font-3">Laoreet ex</div>
<div class="font-4 content-6">Blandit in te, tation praesent ex zzril qui laoreet ad iriure iusto commodo, euismod dolore dolor.<p>Delenit consequat consequat tation erat nostrud in blandit vel laoreet lorem consectetuer.</div>
</div></div>

</div></div>

<div class="section-4 font-4">Get Volpi <a href="http://www.tipue.com/grids/">here</a></div>
