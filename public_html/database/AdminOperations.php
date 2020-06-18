<?php
require_once("config.php");
require_once("utils.php");

//----------------------news---------------------------------

function addNews($title, $text, $link = null ){
    $title = sanitize_input($title);
    $text = sanitize_input($text); 
    $link = sanitize_input($link);
    $sql = "CALL add_news('$title', '$text', '$link')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function getAllNews() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL get_all_news()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function getANews($id) {
    $result = mysqli_query($GLOBALS['db'] , "CALL get_a_news({$id})") or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function deleteNews($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_news({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}

function getLimitedNews() {
    $result = mysqli_query($GLOBALS['db'], 'CALL get_limited_news()') or die("Query fail: " . mysqli_error()); 
    return $result;
}

//----------------------staff---------------------------------

function addStaff($name, $post, $address, $image, $telephone = null ){
    $name = sanitize_input($name);
    $post = sanitize_input($post); 
    $address = sanitize_input($address);
    $image = sanitize_input($image);
    $telephone = sanitize_input($telephone);

    $sql = "CALL add_staff('$name', '$post', '$telephone', '$address', '$image' )";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function getAllStaff() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL read_all_staff()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function deleteStaff($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_staff({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}
//----------------------online---------------------------------

function addonline($pra, $dat, $value, $index = null ){
    $pra = sanitize_input($pra);
    $dat = sanitize_input($dat); 
    $value = sanitize_input($value);
    $index = sanitize_input($index);
    

$sql = "CALL add_online('$pra', '$dat', '$value', '$index' )";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}
function getAllonline() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL read_all_online()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function deleteonline($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_online({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}
//----------------------result---------------------------------

function addResult($title, $year, $link){
    $title = sanitize_input($title);
    $sql = "CALL add_result('$title', '$year', '$link')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function getAllResult() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL get_all_results()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function deleteResult($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_result({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}


//----------------------gallery---------------------------------

function addPhoto($title, $link){
    $title = sanitize_input($title);
    $sql = "CALL add_photo('$title', '$link')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function getAllPhotos() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL get_all_photos()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function deletePhoto($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_photo({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}

//----------------------town result---------------------------------

function addTownResult($townName, $link, $pdfName){
    $townName = strtolower(sanitize_input($townName));
    $sql = "CALL add_town_result('$townName', '$link', '$pdfName')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function deleteTownResult($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_town_result({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}

function getAllTownResult() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL get_all_town_result()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

//----------------------project_reports---------------------------------

function addProjectReport($projectName, $title, $link){
    $projectName = sanitize_input($projectName);
    $title = sanitize_input($title);
    $sql = "CALL add_project_report('$projectName', '$title', '$link')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function deleteProjectReport($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_project_report({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}

function getProjectReports($projectName) {
    $result = mysqli_query($GLOBALS['db'] , "CALL get_project_reports('$projectName')") or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

//----------------------aq_data---------------------------------

function addAqData($status, $date, $value, $name, $color){
 
    $sql = "CALL add_aq_data('$status', '$date', '$value', '$name', '$color')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function deleteAqData($id) {
    mysqli_query($GLOBALS['db'], "CALL delete_aq_data({$id})") or die("Query fail: " . mysqli_error()); 
    return true;
}

function getAqData() {
    $result = mysqli_query($GLOBALS['db'] , "CALL get_all_aq_data()") or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}


?>
