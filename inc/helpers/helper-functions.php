<?php


/**
 * Log data to the program_logs.log file
 * @param mixed $data
 * @return string
 */
function plog( mixed $data ) {
    // Ensure the directory for logs exists
    $directory = PLUGIN_BASE_PATH . '/program_logs/';
    if ( !file_exists( $directory ) ) {
        mkdir( $directory, 0777, true );
    }

    // Construct the log file path
    $file_name = $directory . 'program_logs.log';

    // Append the current datetime to the log entry
    $current_datetime = date( 'Y-m-d H:i:s' );
    $data             = $data . ' - ' . $current_datetime;

    // Write the log entry to the file
    if ( file_put_contents( $file_name, $data . "\n\n", FILE_APPEND | LOCK_EX ) !== false ) {
        return "Data appended to file successfully.";
    } else {
        return "Failed to append data to file.";
    }
}

function put_program_logs( $data ) {

        // Ensure the directory for logs exists
        $directory = PLUGIN_BASE_PATH . '/program_logs/';
        if ( !file_exists( $directory ) ) {
            mkdir( $directory, 0777, true );
        }

        // Construct the log file path
        $file_name = $directory . 'program_logs.log';

        // Append the current datetime to the log entry
        $current_datetime = date( 'Y-m-d H:i:s' );
        $data             = $data . ' - ' . $current_datetime;

        // Write the log entry to the file
        if ( file_put_contents( $file_name, $data . "\n\n", FILE_APPEND | LOCK_EX ) !== false ) {
            return "Data appended to file successfully.";
        } else {
            return "Failed to append data to file.";
        }
    }
