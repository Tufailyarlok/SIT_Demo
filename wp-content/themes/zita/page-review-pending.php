<?php
/* Template Name: Review Pending Submissions */

get_header(); // Include the theme's header

// Step 1: Ensure the user is logged in and is a reviewer
if (!is_user_logged_in() || !current_user_can('edit_posts')) {
    echo '<p>You do not have permission to view this page.</p>';
    get_footer(); // Include the theme's footer
    exit;
}

// Step 2: Query for submissions with 'Pending' status
$args = [
    'post_type' => 'forminator_form', // The post type for Forminator forms
    'meta_query' => [
        [
            'key' => 'submission_status', // The ACF field name for submission status
            'value' => 'Pending',         // Only show 'Pending' submissions
            'compare' => '=',             // Exact match
        ],
    ],
];

$query = new WP_Query($args);

// Step 3: Display the list of pending submissions
echo '<div class="pending-submissions">';
if ($query->have_posts()) {
    echo '<h2>Pending Submissions</h2>';
    echo '<ul>';
    while ($query->have_posts()) {
        $query->the_post();
        echo '<li>';
        echo '<strong>' . get_the_title() . '</strong>'; // Display the title of the submission
        echo ' - <a href="' . get_permalink() . '">View Details</a>'; // Link to the submission details
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No pending submissions found.</p>'; // Message if there are no pending submissions
}
echo '</div>';

// Step 4: Reset post data
wp_reset_postdata();

get_footer(); // Include the theme's footer

