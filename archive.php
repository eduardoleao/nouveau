<?php
/**
 * DEFAULT ARCHIVE TEMPLATE
 *
 * This is the default template for archive pages (pages that show multiple posts).
 */

use \NV\Theme\Core\Theme;

Theme::get_header();
Theme::output_file_marker(__FILE__);
?>
    <div id="container" class="grid-container">
        <div class="archive grid-x grid-padding-x">
            <div id="content" class="cell small-12 large-8">
                <?php Theme::archive_nav(['id' => 'nav-top']) ?>
                <?php Theme::loop('parts/article', 'parts/article-empty') ?>
                <?php Theme::archive_nav(['id' => 'nav-bottom']) ?>
            </div>
            <div id="sidebar" class="cell small-12 large-4">
                <?php dynamic_sidebar('sidebar-1') ?>
            </div>
        </div>
    </div>
<?php
Theme::get_footer();