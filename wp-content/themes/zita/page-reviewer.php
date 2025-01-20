<?php
/* Template Name: Review Pending Submissions */

get_header();

// Ensure the user is logged in and has the reviewer role
if (!is_user_logged_in() || !current_user_can('edit_posts')) {
    echo '<p>You do not have permission to view this page.</p>';
    get_footer();
    exit;
}

// Query posts with 'Pending' status
$args = [
    'post_type' => 'submission', // Replace with your submission post type
    'meta_query' => [
        [
            'key' => 'submission_status',
            'value' => 'Pending',
            'compare' => '=',
        ],
    ],
];
$query = new WP_Query($args);

if ($query->have_posts()) {
    echo '<ul>';
    while ($query->have_posts()) {
        $query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No pending submissions found.</p>';
}

wp_reset_postdata();
get_footer();

