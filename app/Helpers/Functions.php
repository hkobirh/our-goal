<?php
function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}


function setMessage($type, $message)
{
    session()->flash('type', $type);
    session()->flash('message', $message);
}

function categories_select_data($categories, $lavel = '')
{
    $output = '';
    foreach ($categories as $category) {
        $output .= '<option value="' . $category->id . '">' . $category->name . '</option>';
        if (count($category->sub_category)) {
            foreach ($category->sub_category as $sub) {
                $output .= '<option value="' . $sub->id . '">' . $category->name . '>' . $sub->name . '</option>';
                if ($lavel === 3) {
                    if (count($sub->sub_category)) {
                        foreach ($sub->sub_category as $sub1) {
                            $output .= '<option value="' . $sub1->id . '">' . $category->name . '>' . $sub->name . '>' . $sub1->name . '</option>';
                        }
                    }
                }
            }
        }
    }
    return $output;
}

// Color
function color()
{
    return [
        'Red' => 'Red',
        'Green' => 'Green',
        'Blue' => 'Blue',
        'Pink' => 'Pink',
        'White' => 'White',
        'Black' => 'Black',
        'Maroon' => 'Maroon',
        'Gold' => 'Gold',
        'Yellow' => 'Yellow',
        // 'Orange' => 'Orange',
    ];
}

// Size
function size()
{
    return [
        'S' => 'S',
        'M' => 'M',
        'L' => 'L',
        'XL' => 'XL',
        'XXL' => 'XXL',
    ];
}

// gender
function gender()
{
    return [
        '1' => 'Male',
        '2' => 'female',
        '3' => 'Other',
    ];
}

// Marital Status
function marital_status()
{
    return [
        '1' => 'Single',
        '2' => 'Married',
        '3' => 'Widowed',
        '4' => 'Divorced',
    ];
}

// religions
function religions()
{
    return [
        '1' => 'Islam',
        '2' => 'Christianity',
        '3' => 'Hindu',
        '4' => 'Buddha',
    ];
}

//Site functions

function site_categories($categories)
{
    $output = '';
    $output .= '<ul class="menu menu-vertical sf-arrows">';
    foreach ($categories as $category) {
        $output .= '<li>';
        $output .= '<a href="#" class="sf-with-ul">' . $category->name . '</a>';
        if (count($category->sub_category)) {
            $output .= '<ul>';
            foreach ($category->sub_category as $sub) {
                $output .= '<li>';
                $output .= '<a href="'.route('products',[$category->slug,$sub->slug]).'">' . $sub->name . '</a>';
                if (count($sub->sub_category)) {
                    $output .= '<ul>';
                    foreach ($sub->sub_category as $sub1) {
                        $output .= '<li>';
                        $output .= '<a href="'.route('products',[$category->slug,$sub->slug,$sub1->slug]).'">' . $sub1->name . '</a>';
                        $output .= '</li>';
                    }
                    $output .= '</ul>';
                }
                $output .= '</li>';
            }
            $output .= '</ul>';
        }
        $output .= '</li>';
    }
    $output .= '</ul>';
    return $output;
}
