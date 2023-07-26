<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/forWeb/pdo.php");

session_start();


/**
 * @param $pdo pdo,
 * @return $stocklist array of all stockllist 
 */
function findAllPosts($pdo)
{

    $sql = "select * from post";

    $stmt = $pdo->query($sql);
    $stockList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $stockList;
}


function findStaffByFilter($pdo)
{
    $sql = 'select sp.name, sp.character, sp.photo_path, sp.birthDate, sp.post_id, po.denomination as stock_description from
    specialist as sp
    inner join post as po
    on po.id = sp.post_id';

    $arrBind = array();

    if (!key_exists('clearFilter', $_GET)) {


        $sql_word = [true => ' where ', false => ' and '];
        $is_first = true;

        if (count($_GET) > 0) {
            if ($_GET['dateFrom']) {
                $sql .= $sql_word[$is_first] . 'sp.birthDate >= :dateFrom';
                $arrBind['dateFrom'] = $_GET['dateFrom'];
                $is_first = false;
            }

            if ($_GET['dateTo']) {
                $sql .= $sql_word[$is_first] . 'sp.birthDate <= :dateTo';
                $arrBind['dateTo'] = $_GET['dateTo'];
                $is_first = false;
            }

            if ($_GET['name']) {
                $pattern = '%' . $_GET['name'] . '%';
                $sql .= $sql_word[$is_first] . 'name LIKE :name';
                $arrBind['name'] = $pattern;
                $is_first = false;
            }


            if ($_GET['character']) {
                $pattern = '%' . $_GET['character'] . '%';
                // echo $pattern;
                $sql .= $sql_word[$is_first] . 'sp.character LIKE :character';
                $arrBind['character'] = $pattern;
                $is_first = false;
            }


            if ($_GET['post']) {
                // echo $_GET['stock'];
                $sql .= $sql_word[$is_first] . 'sp.post_id = :id';
                $arrBind['id'] = $_GET['post'];
                $is_first = false;
            }
        }
    }

    // echo $sql;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($arrBind);
    $electronicList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $electronicList;
}


function setValue(array &$arr, $key, $cancel_key){
    $res = '';

    if(!key_exists($cancel_key, $arr) && key_exists($key, $arr)){
        $res = $arr[$key];
    }

    return $res;
}

function setSelectedOption(array &$arr, $key, $cancel_key, $current_id){

    $res = '';

    if( !key_exists($cancel_key, $arr) && key_exists($key, $arr) && $current_id == $arr[$key]){
        $res = 'selected';
        // echo $res;
    }

    return $res;
}

$stockList = findAllPosts($pdo);

$electronicList = findStaffByFilter($pdo);

?>