<?php
/**
 * Template Name: Author Detail
 * Description: A custom page template to display author details in a table format using ACF fields.
 */

get_header(); ?>

<div class="author-detail-container" style="margin: 20px; font-family: Arial, sans-serif;">
    <h1 style="text-align: center;">Author Details</h1>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
        <tbody>
            <!-- Author Name Row -->
            <tr>
                <td style="width: 20%; padding: 10px; font-weight: bold; border: 1px solid #ddd;">Author Name</td>
                <td style="width: 80%; padding: 10px; border: 1px solid #ddd;">
                    <?php the_field('author_name'); ?>
                </td>
            </tr>
            
            <!-- Description Row -->
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">Description</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php the_field('description'); ?>
                </td>
            </tr>
            
            <!-- Submission Date Row -->
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">Submission Date</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php the_field('submission_date'); ?>
                </td>
            </tr>
            
            <!-- PDF Upload Row -->
            <tr>
                <td style="padding: 10px; font-weight: bold; border: 1px solid #ddd;">PDF Upload</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <?php 
                    $pdf = get_field('pdf_upload');
                    if ($pdf) {
                        echo '<a href="' . esc_url($pdf['url']) . '" target="_blank">View PDF</a>';
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

