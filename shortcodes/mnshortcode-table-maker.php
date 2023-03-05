<?php
defined('ABSPATH') || exit;

function my_table_shortcode($atts, $content)
{
    // Split the content into rows
    $rows = explode("\n", trim($content));

    // Start the HTML table
    $html = '<table class="globalTableInContent">';

    // Loop through each row
    foreach ($rows as $row) {
        // Split the row into cells
        $cells = explode('|', trim($row));

        // Start a new HTML row
        $html .= '<tr>';

        // Loop through each cell
        foreach ($cells as $cell) {
            // Add the cell to the HTML row
            $html .= '<td>' . trim($cell) . '</td>';
        }

        // End the HTML row
        $html .= '</tr>';
    }

    // End the HTML table
    $html .= '</table>';

    // Return the HTML table
    return $html;
}

add_shortcode('table', 'my_table_shortcode');
