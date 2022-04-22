<?php

include("functions.php");

$welcoming_data = fetch_data(
    $db,
    "welcoming",
    ['id','title','sub_title']
);

$short_text_data = fetch_data(
    $db,
    "short_text",
    ['id','text']
);

$arts_data = fetch_data(
    $db,
    "arts",
    ['id', 'title', 'sub_title', 'description']
);

$headline_text_data = fetch_data(
    $db,
    "headline_text",
    ['id','text','info_text']
);

$headline_data = fetch_data(
    $db,
    "headline_news",
    ['id', 'image', 'title', 'body']
);

$most_read_data = fetch_data(
    $db,
    "most_read",
    ['id', 'description']
);

$must_reads_data = fetch_data(
    $db,
    "must_reads",
    ['id','title','sub_title','section_title','section_sub_title']
);

$international_news_data = fetch_data(
    $db,
    "international_news",
    ['id','title','sub_title','date','section_title','section_news']
);
?>
