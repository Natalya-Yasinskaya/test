<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$url = "https://anetty.ru/catalog/export/rozn/yandex_not_sku.xml";
$data = simplexml_load_file($url);     //simplexml_load_file — Интерпретирует XML-файл в объект
$categories = $data->shop->categories;
$offers = $data->shop->offers;

$catalog = fopen('catalog.csv', 'w');
$header_fields = ['Наименование категории', 'Наименование товара', 'Ссылка на товар', 'Цена товара', 'Описание товара', 'Страна'];
fputcsv($catalog, $header_fields);

foreach ($offers as $data) {
    $count = 0;
    foreach($data as $offer) {
        if ($count < 10) {
            $count++;
            $offer_fields = [];
            $category_name = getCategoryName($offer->categoryId, $categories);
            array_push($offer_fields, $category_name, $offer->name, $offer->url, $offer->price, $offer->description, $offer->country_of_origin);
            fputcsv($catalog, $offer_fields);        
        }
    }   
}

function getCategoryName($id, $cat) {
    foreach($cat as $item) {
        foreach($item as $item_data) {
            $attr = $item_data->attributes();
            if (strval($attr->id) === strval($id)) {
                return $item_data;
            }
        }
    } 
}
