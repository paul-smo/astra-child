<?php /* Template Name: Tutor Advanced Course Filter */?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<style>
:root{--tutor-major-color:#008CC9;--tutor-hover-color:#006fa0;--tutor-heading-color:#2A3235;--tutor-text-color:#6F7F86;--tutor-success-button-color:var(--tutor-major-color)}.tutor-sidebar-filter .single-filter{margin-bottom:25px;color:var(--tutor-heading-color)}.tutor-sidebar-filter .single-filter:last-child{margin-bottom:0}.tutor-course-col .tutor-course .tutor-loop-rating-wrap.no-rating .tutor-star-rating-group{color:#ddd}.tutor-sidebar-filter .single-filter label{display:block;cursor:pointer;transition:.3s}.tutor-sidebar-filter .single-filter label:hover{color:var(--tutor-major-color)}.tutor-sidebar-filter .single-filter label input{display:none}.tutor-sidebar-filter .single-filter label .filter-checkbox{height:17px;width:17px;display:inline-block;border:1px solid #6d7382;border-radius:3px;vertical-align:middle;transform:translateY(-2px);margin-right:4px}.rtl .tutor-sidebar-filter .single-filter label .filter-checkbox{margin-right:0;margin-left:4px}.tutor-sidebar-filter .single-filter label input:checked+.filter-checkbox{border-color:var(--tutor-major-color);background:var(--tutor-major-color);position:relative}.tutor-sidebar-filter .single-filter label:hover input+.filter-checkbox{border-color:var(--tutor-major-color)}.tutor-sidebar-filter .single-filter label input:checked+.filter-checkbox::after{font-family:"Font Awesome 5 Free";font-weight:900;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;content:"\f00c";line-height:15px;top:0;left:0;position:absolute;font-size:11px;width:100%;text-align:center;color:#fff}.single-filter.filter-submit a,.single-filter.filter-submit button{padding:0;display:inline-block;cursor:pointer}.single-filter.filter-submit a i,.single-filter.filter-submit button i{font-size:11px}.single-filter.filter-submit a{color:#222;margin-right:10px}.single-filter.filter-submit button{color:var(--tutor-major-color);background:0 0;border:none}.tutor-archive-single-cat{position:relative;color:#2a3235}.tutor-archive-single-cat .category-toggle{position:absolute;right:0;top:0;padding:0 8px;cursor:pointer;font-size:10px;color:var(--tutor-heading-color);line-height:24px}.tutor-archive-childern{padding:0 15px 5px}.tutor-course-col{margin-bottom:30px}.tutor-course-col .tutor-course{box-shadow:0 1px 2px rgba(42,50,53,.2);border-radius:2px;overflow:hidden;position:relative;height:100%;display:flex;flex-direction:column}.tutor-course-col .tutor-course .tutor-course-header{overflow:hidden}.tutor-course-col .tutor-course .tutor-course-header img{transition:.3s}.tutor-course-col .tutor-course:hover .tutor-course-header img{filter:grayscale(90%)}.tutor-course-col .tutor-course .tutor-course-loop-level{font-size:12px;font-weight:500;background:var(--tutor-major-color)}.tutor-course-loop-header-meta{opacity:0;visibility:hidden;transition:.3s;top:0}.tutor-course-col .tutor-course:hover .tutor-course-loop-header-meta{opacity:1;visibility:visible;top:10px}.tutor-course-col .tutor-course .tutor-course-loop-header-meta .tutor-course-wishlist{padding:3px 4px}.tutor-course-col .tutor-course-body{padding:20px;flex-grow:1;display:flex;flex-direction:column}.tutor-course-col .tutor-course-body h3{font-size:16px;font-weight:500;line-height:23px;height:46px;overflow:hidden}.tutor-course-col .tutor-course-body h3 a{color:#2a3235;transition:.3s}.tutor-course-col .tutor-course-body h3 a:hover{color:var(--tutor-major-color)}.tutor-course-col .tutor-course .tutor-loop-rating-wrap{font-size:14px;margin-bottom:10px}.tutor-course-col .tutor-course .tutor-loop-rating-wrap .tutor-star-rating-group i{margin-right:2px}.tutor-course-pricing{margin-top:auto;justify-self:flex-end}.tutor-course-pricing .tutor-course-loop-price{float:none;font-size:16px;color:#2a3235;font-weight:700}.tutor-course-author{color:#6f7f86;font-size:13px;line-height:25px;margin-bottom:9px;transition:.3s}.tutor-course-pricing .tutor-course-loop-price .price del{font-size:16px;color:#6f7f86;font-weight:400}.tutor-course-pricing .tutor-course-loop-price .price{display:flex;align-items:center;white-space:nowrap}.tutor-course-pricing .tutor-course-loop-price .tutor-loop-cart-btn-wrap{flex-grow:1;text-align:right;margin-left:5px}.tutor-course-pricing .tutor-course-loop-price .tutor-loop-cart-btn-wrap a{display:none;font-size:14px;font-weight:500;position:relative;padding-right:15px;transition:.3s;position:relative;display:inline-block}.tutor-course-pricing .tutor-course-loop-price .tutor-loop-cart-btn-wrap a:last-child{display:inline-block}.tutor-course-pricing .tutor-course-loop-price .tutor-loop-cart-btn-wrap a.loading{opacity:.5}.tutor-course-pricing .tutor-course-loop-price .tutor-loop-cart-btn-wrap a.loading::after{content:"\f110";animation:tutor-spin .5s linear infinite;position:absolute;left:50%;top:50%;width:25px;height:25px;margin-left:-12.5px;margin-top:-12.5px;font-family:"Font Awesome 5 Free";font-weight:900;line-height:25px;text-align:center;color:#0b0b0b}.tutor-pagination{width:100%;text-align:center}ul.page-numbers li{display:inline-block;margin-right:20px}.tutor-pagination ul li a{background:#008cc9;padding:5px 8px;color:#fff!important}.tutor-pagination ul li span{border:1px solid #008cc9;padding:0px 8px;color:#008cc9}.course-pagination{margin-bottom:50px}@keyframes tutor-spin{from{transform:rotate(0)}to{transform:rotate(360deg)}}select.small{-webkit-appearance:none;-moz-appearance:none;appearance:none}select.small{display:block;font-weight:700;line-height:1.3;padding:10px 20px 10px 10px;width:100%;max-width:100%;box-sizing:border-box;margin:0;border:1px solid #aaa;box-shadow:0 1px 0 1px rgba(0,0,0,.04);border-radius:.5em;-moz-appearance:none;-webkit-appearance:none;appearance:none;background-color:#fff;background-image:url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),linear-gradient(to bottom,#fff 0,#e5e5e5 100%);background-repeat:no-repeat,repeat;background-position:right .7em top 50%,0 0;background-size:.65em auto,100%}select.small::-ms-expand{display:none}select.small:hover{border-color:#888}select.small:focus{border-color:#aaa;box-shadow:0 0 1px 3px rgba(59,153,252,.7);box-shadow:0 0 0 3px -moz-mac-focusring;color:#222;}.mt-80{margin-top: 80px;}.custom-page-content{margin-top: 20px;}
</style>
<?php
get_header(); ?>


<div class="container mt-80">

    <h2 class="custom-page-title"><?php the_title(); ?></h2> <!-- Page Title -->
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>

        <div class="custom-page-content">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .custom-page-content -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>

<?php function tutor_course_function($atts, $content, $tag)
{

    $mytextdomain = wp_get_theme()->get( 'TextDomain' );
    global $wp_query;
    $sidebar_filter = get_theme_mod('sidebar_filter', true);
    $top_filter_bar = get_theme_mod('top_filter_bar', true);
    $course_per_page = get_theme_mod('course_per_page', 9);
    $course_pagination = get_theme_mod('course_pagination', true);
    $course_column_count = get_theme_mod('course_column_count', 3);
    $course_category_count = get_theme_mod('course_category_count', 1);
    $course_sidebar_position = get_theme_mod('course_sidebar_position', 'left');

    $atts = extract(shortcode_atts(array(
        'sidebar' => $sidebar_filter,
        'top_filter' => $top_filter_bar,
        'count' => $course_per_page,
        'pagination' => $course_pagination,
        'column' => $course_column_count,
        'category_count' => $course_category_count,
        'sidebar_position' => $course_sidebar_position,
    ), $atts, $tag
    ));

    if ($sidebar === 'false' || $sidebar === 0) {
        $sidebar = false;
    }

    switch ($column) {
        case 1:
            $column = 12;
            break;
        case 2:
            $column = 6;
            break;
        case 3:
            $column = 4;
            break;
        case 4:
            $column = 3;
            break;
        case 6:
            $column = 2;
            break;
        case 12:
            $column = 1;
            break;
        default:
            $column = 3;
    }

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $selected_cat = !empty($_GET['course_category']) ? (array) $_GET['course_category'] : array();
    $selected_cat = array_map('sanitize_text_field', $selected_cat);
    $selected_cat = array_map('intval', $selected_cat);
    $is_queried_object = false;
    if (isset($wp_query->queried_object->term_id)) {
        $is_queried_object = true;
        $selected_cat = array($wp_query->queried_object->term_id);
    }

    $selected_tag = !empty($_GET['course_tag']) ? (array) $_GET['course_tag'] : array();
    $selected_tag = array_map('sanitize_text_field', $selected_tag);
    $selected_tag = array_map('intval', $selected_tag);

    $selected_level = !empty($_GET['course_level']) ? (array) $_GET['course_level'] : array('all_levels');
    $selected_level = array_map('sanitize_text_field', $selected_level);

    $course_terms_cat = get_terms(array(
        'taxonomy' => 'course-category',
        'hide_empty' => true,
        'parent' => 0,
    ));

    $course_terms_tag = get_terms(array(
        'taxonomy' => 'course-tag',
        'hide_empty' => true,
    ));

    $course_levels = tutor_utils()->course_levels();

    $course_level_filter = !empty($selected_level) && !in_array('all_levels', $selected_level) ? array(
        'key' => '_tutor_course_level',
        'value' => $selected_level,
        'compare' => 'IN',
    ) : array();

    $args = array(
        'post_type' => tutor()->course_post_type,
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => $count,
        's' => get_search_query(),
        'meta_query' => array(
            $course_level_filter,
        ),
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'course-category',
                'field' => 'term_id',
                'terms' => $selected_cat,
                'operator' => !empty($selected_cat) ? 'IN' : 'NOT IN',
            ),
            array(
                'taxonomy' => 'course-tag',
                'field' => 'term_id',
                'terms' => $selected_tag,
                'operator' => !empty($selected_tag) ? 'IN' : 'NOT IN',
            ),
        ),
    );

    $course_filter = 'newest_first';
    if (!empty($_GET['tutor_course_filter'])) {
        $course_filter = sanitize_text_field($_GET['tutor_course_filter']);
    }
    switch ($course_filter) {
        case 'newest_first':
            $args['orderby'] = 'ID';
            $args['order'] = 'desc';
            break;
        case 'oldest_first':
            $args['orderby'] = 'ID';
            $args['order'] = 'asc';
            break;
        case 'course_title_az':
            $args['orderby'] = 'post_title';
            $args['order'] = 'asc';
            break;
        case 'course_title_za':
            $args['orderby'] = 'post_title';
            $args['order'] = 'desc';
            break;
    }

    $q = new WP_Query($args);
    ob_start();?>
    <?php if ($top_filter) {?>
        <div class="tutor-course-filter-wrap row align-items-center">
            <div class="tutor-course-archive-results-wrap col">
                <?php
$courseCount = tutor_utils()->get_archive_page_course_count();
        printf(__('%s Courses', $mytextdomain), "<strong>{$q->post_count}</strong>");
        ?>
            </div>
            <div class="tutor-course-archive-filters-wrap col-auto">
                <form class="tutor-course-filter-form" method="get">
                    <select name="tutor_course_filter" class="small">
                        <option value="newest_first" <?php if (isset($_GET["tutor_course_filter"]) ? selected("newest_first", $_GET["tutor_course_filter"]) : "");?> ><?php _e("Release Date (newest first)", $mytextdomain);?></option>
                        <option value="oldest_first" <?php if (isset($_GET["tutor_course_filter"]) ? selected("oldest_first", $_GET["tutor_course_filter"]) : "");?>><?php _e("Release Date (oldest first)", $mytextdomain);?></option>
                        <option value="course_title_az" <?php if (isset($_GET["tutor_course_filter"]) ? selected("course_title_az", $_GET["tutor_course_filter"]) : "");?>><?php _e("Course Title (a-z)", $mytextdomain);?></option>
                        <option value="course_title_za" <?php if (isset($_GET["tutor_course_filter"]) ? selected("course_title_za", $_GET["tutor_course_filter"]) : "");?>><?php _e("Course Title (z-a)", $mytextdomain);?></option>
                    </select>
                </form>
            </div>
        </div>
    <?php }?>
    <div class="row">
        <?php if ($sidebar): ?>

            <?php
                $current_url = get_post_type_archive_link('course');
            ?>
            <div class="col-12 col-md-4 col-lg-3 order-2 order-sm-<?php echo $sidebar_position == 'right' ? 2 : 1; ?> mb-4 md-lg-0">
                <form class="tutor-sidebar-filter" action="<?php echo esc_url($current_url); ?>" method="get">
                    <input type="hidden" name="s" value="<?php echo get_search_query(); ?>">


                    <div class="single-filter">
                        <h4><?php esc_html_e('Level', $mytextdomain);?></h4>
                        <?php
                        foreach ($course_levels as $key => $course_level) {
                            if ($key == 'all_levels') {
                                continue;
                            }
                            ?>
                            <label for="<?php echo esc_attr($key); ?>">
                                <input
                                    type="checkbox"
                                    name="course_level[]"
                                    value="<?php echo esc_attr($key); ?>"
                                    id="<?php echo esc_attr($key); ?>"
                                    <?php echo in_array($key, $selected_level) ? 'checked="checked"' : ''; ?>
                                >
                                <span class="filter-checkbox"></span>
                                <?php echo esc_html($course_level); ?>
                            </label>
                            <?php
                        }?>
                    </div>

                    <?php if (is_array($course_terms_cat) && count($course_terms_cat)): ?>
                        <div class="single-filter">
                            <h4><?php esc_html_e('Category', $mytextdomain);?></h4>
                            <?php
                                foreach ($course_terms_cat as $course_term) {
                                        $childern = get_categories(
                                            array(
                                                'parent' => $course_term->term_id,
                                                'taxonomy' => 'course-category',
                                            )
                                            );?>
                                <div class="tutor-archive-single-cat">
                                    <label for="cat-<?php echo esc_attr($course_term->slug) ?>">
                                        <input
                                                type="checkbox"
                                                name="course_category[]"
                                                value="<?php echo esc_attr($course_term->term_id) ?>"
                                                id="cat-<?php echo esc_attr($course_term->slug) ?>"
                                            <?php echo in_array($course_term->term_id, $selected_cat) ? 'checked="checked"' : ''; ?>
                                        >
                                        <span class="filter-checkbox"></span>
                                        <?php
                                        echo esc_attr($course_term->name);
                                                ?>
                                                                            </label>
                                                                            <?php
                                        if (count($childern)) {
                                                    echo "<i class='category-toggle fas fa-plus'></i>";
                                                }?>
                                    <?php if (count($childern)): ?>
                                        <div class="tutor-archive-childern"  style="display: none;">
                                            <?php foreach ($childern as $child) {?>
                                                <label for="cat-<?php echo esc_attr($child->slug) ?>">
                                                    <input
                                                            type="checkbox"
                                                            name="course_category[]"
                                                            value="<?php echo esc_attr($child->term_id) ?>"
                                                            id="cat-<?php echo esc_attr($child->slug) ?>"
                                                        <?php echo in_array($child->term_id, $selected_cat) ? 'checked="checked"' : ''; ?>
                                                    >
                                                    <span class="filter-checkbox"></span>
                                                    <?php echo esc_attr($child->name) ?>
                                                </label>
                                            <?php }?>
                                        </div>
                                    <?php endif;?>
                                </div>

                            <?php }?>
                        </div>
                    <?php endif;?>

                    <?php if (is_array($course_terms_tag) && count($course_terms_tag)): ?>
                        <div class="single-filter">
                            <h4><?php esc_html_e('Topics', $mytextdomain);?></h4>
                            <?php
                                foreach ($course_terms_tag as $course_tag) {
                            ?>
                                <label for="tag-<?php echo esc_attr($course_tag->slug) ?>">
                                    <input
                                        type="checkbox"
                                        name="course_tag[]"
                                        value="<?php echo esc_attr($course_tag->term_id) ?>"
                                        id="tag-<?php echo esc_attr($course_tag->slug) ?>"
                                        <?php echo in_array($course_tag->term_id, $selected_tag) ? 'checked="checked"' : ''; ?>
                                    >
                                    <span class="filter-checkbox"></span>
                                    <?php echo esc_html($course_tag->name) ?>
                                </label>
                                <?php
                                    }
                                ?>
                        </div>
                    <?php endif;?>
                </form>
            </div>
        <?php endif;?>
        <div class="col order-1 order-sm-<?php echo $sidebar_position == 'right' ? 1 : 2; ?>">
            <div class="tutor-courses-wrap row">
                <?php
                if ($q->have_posts()) {
                        while ($q->have_posts()) {
                            $q->the_post();
                            $idd = get_the_ID();
                            global $authordata;
                            $profile_url = tutor_utils()->profile_url($authordata->ID)
                            ?>
                            <div class="col-lg-<?php echo $column; ?> col-sm-6 tutor-course-col">
                                <div class="tutor-course">
                                    <div class="tutor-course-header">
                                        <?php tutor_course_loop_thumbnail();?>
                                        <div class="tutor-course-loop-header-meta">
                                            <?php
            $is_wishlisted = tutor_utils()->is_wishlisted($idd);
            $has_wish_list = '';
            if ($is_wishlisted) {
                $has_wish_list = 'has-wish-listed';
            }

            echo '<span class="tutor-course-loop-level">' . get_tutor_course_level() . '</span>';
            echo '<span class="tutor-course-wishlist"><a href="javascript:;" class="tutor-icon-fav-line tutor-course-wishlist-btn ' . $has_wish_list . ' " data-course-id="' . $idd . '"></a> </span>';
            ?>
                                        </div>
                                    </div>
                                    <div class="tutor-course-body">
                                        <h3>
                                            <a href="<?php the_permalink();?>">
                                                <?php echo get_the_title(); ?>
                                            </a>
                                        </h3>
                                        <a href="<?php echo esc_url($profile_url); ?>" class="tutor-course-author"><?php the_author();?></a>
                                        <?php $course_rating = tutor_utils()->get_course_rating();?>
                                        <div class="tutor-loop-rating-wrap <?php echo !$course_rating->rating_count ? 'no-rating' : ''; ?>">
                                            <?php tutor_utils()->star_rating_generator($course_rating->rating_avg);?>
                                            <span class="tutor-rating-count">
                                                <?php
                                                echo $course_rating->rating_avg;
                                                echo '<i>(' . $course_rating->rating_count . ')</i>';
                                                ?>
                                            </span>
                                        </div>

                                        <div class="tutor-course-pricing clearfix">
                                            <?php echo tutor_course_loop_price(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else {
                        ?>

                        <div class="col-12">
                            <?php
                            echo "<h2>" . __('Nothing found!', $mytextdomain) . "</h2>";
                            echo "<div>" . __('Sorry, but nothing matched your search terms. Please try again with different keywords.', $mytextdomain) . "</div>";
                            ?>
                            </div>

                            <?php
                            }

                            ?>
            </div>
            <?php
            if (!function_exists('tutor_pagination')):

                    function tutor_pagination($page_numb, $max_page)
                {
                        $big = 999999999;
                        echo '<div class="tutor-pagination">';
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => $page_numb,
                            'prev_text' => __('<i class="fas fa-angle-left" aria-hidden="true"></i>'),
                            'next_text' => __('<i class="fas fa-angle-right" aria-hidden="true"></i>'),
                            'total' => $max_page,
                            'type' => 'list',
                        ));
                        echo '</div>';
                    }

                endif;?>


            <?php if ($pagination) {?>
                <div class="course-pagination">
                    <?php
                        $page_numb = max(1, get_query_var('paged'));
                        $max_page = $q->max_num_pages;
                        tutor_pagination($page_numb, $max_page);
                    ?>
                </div>
            <?php }?>
            
        </div>
    </div>
    <?php

    wp_reset_query();
    $output = ob_get_contents();
    ob_end_clean();
    echo $output;
}

add_shortcode('tutor-course', 'tutor_course_function'); ?>
<div class="generic-padding">
    <div class="container">
        <?php
do_shortcode('[tutor-course]');?>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>


jQuery(document).ready(function($){
    'use strict';

    $(document).on('change', '.tutor-course-filter-form', function(e){
        e.preventDefault();
        $(this).closest('form').submit();
    });

    $('.tutor-pagination ul li a.prev, .tutor-pagination ul li a.next').closest('li').addClass('pagination-parent');

    // category menu

    $('.header-cat-menu ul.children').closest('li.cat-item').addClass('category-has-childern');

    $(".tutor-archive-single-cat .category-toggle").on('click', function () {
        $(this).next('.tutor-archive-childern').slideToggle();
        if($(this).hasClass('fa-plus')){
            $(this).removeClass('fa-plus').addClass('fa-minus');
        }else{
            $(this).removeClass('fa-minus').addClass('fa-plus');
        }
    });
    $('.tutor-archive-childern input').each(function () {
        if($(this).is(':checked')){
            var aChild =  $(this).closest('.tutor-archive-childern');
            aChild.show();
            aChild.siblings('.fas').removeClass('fa-plus').addClass('fa-minus');
        }
    });

    $('.tutor-sidebar-filter input').on('change', function () {
        $('.tutor-sidebar-filter').submit();
    });

});

</script>

<?php
get_footer();
