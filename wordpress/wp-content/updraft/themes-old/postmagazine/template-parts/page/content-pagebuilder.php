<?php
/**
 * The default template for displaying content on page builders templates.
 * Used for page builder full width and page builder blank.
 * @package PostMagazine
*/
 ?>
 
<article id="post-<?php the_ID(); ?>" class="pagebuilder-section">
	<?php the_content(); ?>
</article>
