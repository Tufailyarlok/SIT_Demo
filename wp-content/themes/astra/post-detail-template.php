<?php
/**
 * Template Name: Post Detail
 * Description: A custom page template to display post details in a table format with ACF custom fields.
 */

get_header(); ?>

<div class="post-detail-container" style="margin: 20px; font-family: Arial, sans-serif;">
    <h1 style="text-align: center;"><?php the_title(); ?></h1>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
        <tbody>
            <tr>
                <td style="width: 20%; padding: 10px; font-weight: bold; border: 1px solid #ddd;">Post Title</td>
                <td style="width: 80%; padding: 10px; border: 1px solid #ddd;"><?php the_title(); ?></td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">Author Name</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php 
                    // Fetch Author Name from ACF custom field
                    $author_name = get_field('author_name');
                    echo $author_name ? $author_name : 'No author name provided';
                    ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">Description</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php 
                    // Fetch Description from ACF custom field
                    $description = get_field('description');
                    echo $description ? $description : 'No description provided';
                    ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">Submission Date</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php 
                    // Fetch Submission Date from ACF custom field (if any)
                    $submission_date = get_field('submission_date');
                    echo $submission_date ? $submission_date : get_the_date(); // Fallback to post's published date
                    ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">PDF Upload</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php 
                    // Fetch PDF URL from ACF custom field
                    $pdf_url = get_field('pdf_upload');
                    if ($pdf_url) {
                        echo '<a href="' . esc_url($pdf_url) . '" target="_blank">View PDF</a>';
                    } else {
                        echo 'No PDF uploaded.';
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php get_footer(); ?>

