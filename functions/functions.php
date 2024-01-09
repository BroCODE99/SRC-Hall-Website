<?php



function get_day_num(INT $num){
    // $first = $num - 1;
    // $second = $num - 2;
    // $third = $num - 3;
    if (($num % 10) == 1 ) {
        return 'st ';
    } else if (($num % 10) == 2 ) {
        return 'nd ';
    } else if (($num % 10) == 3 ) {
        return 'rd ';
    } else {
        return 'th ';
    }

}




function format_date($date_digit){
    $date_split = explode('-',$date_digit);
    $months_of_the_year = ['January', 'February','March','April','May','June','July','August','September','October','November','December'];

    switch (intval($date_split[1])) {
        case 1:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['0'] . ' ' . $date_split['0'];
            break;
        case 2:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['1'] . ' ' . $date_split['0'];
            break;
        case 3:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['2'] . ' ' . $date_split['0'];
            break;
        case 4:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['3'] . ' ' . $date_split['0'];
            break;
        case 5:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['4'] . ' ' . $date_split['0'];
            break;
        case 6:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['5'] . ' ' . $date_split['0'];
            break;
        case 7:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['6'] . ' ' . $date_split['0'];
            break;
        case 8:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['7'] . ' ' . $date_split['0'];
            break;
        case 9:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['8'] . ' ' . $date_split['0'];
            break;
        case 10:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['9'] . ' ' . $date_split['0'];
            break;
        case 11:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['10'] . ' ' . $date_split['0'];
            break;
        default:
            return $date_split['2'] . get_day_num($date_split[2]) . $months_of_the_year['11'] . ' ' . $date_split['0'];
            break;
    }
    
}





function validate_text_input($data){
    $data =  trim(htmlspecialchars($data));
    return $data;
}


function create_paragraph($text){
    // if (!strpos($text,'#')) {
    //     return `<p> $text </p>`;
    // }
        
    $paragraph_array = explode('#',$text);
    $paragraphs = '';

    for ($i = 0; $i < sizeof($paragraph_array); $i++) { 
        $paragraphs = $paragraphs . '<p>' . ucfirst($paragraph_array[$i]) . '</p>';
    }

    return $paragraphs;
}


// function generate_account_id($account_type){


//     $year = substr(date("Y"),2);
//     $random_number = rand(1,999);;
//     $account_id = $account_type . $random_number . '-' . $year;


//     return $account_id;

    
// }


