<?php

/**
 * Parses username API request JSON data
 * into a human readable format
 * 
 * @param type $data
 */
function twitter_parse_username_json($data) {
    # define username array
    $usernames_formatted = array();

    # keys 
    $key_name = "name";
    $key_screen_name = "screen_name";

    # decode JSON data
    $decoded_data = json_decode($data, true);

    # extract names and screen_names
    foreach ($decoded_data as $key) {
        $names[] = $key[$key_name];
        $screen_names[] = $key[$key_screen_name];
    }
    
    # combine name and screen name
    for ($i = 0; $i < count($names); $i++) {
        array_push($usernames_formatted, '<li style="color: #333333">' . $names[$i] . ' (<b style="color: #1DA1F2;">@' . $screen_names[$i] . ')</b></li>');
    }

    # return usernames as string array
    return $usernames_formatted;
}


/**
 * Prints formatted string array as HTML list.
 * 
 * @param type $str_arr
 */
function print_string_array_username_list($str_arr)
{
    # start unordered list
    echo '<ul>';
    
    # add elements in for loop
    foreach($str_arr as $element)
    {
        echo $element;
    }
    
    # end unordered list
    echo '</ul>';
}