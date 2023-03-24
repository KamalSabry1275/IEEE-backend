<?php
echo "<pre>";
$filters = filter_list();
$filters_id = [];
foreach ($filters as $filter) {
    $filters_id[] = filter_id($filter);
}
print_r(array_combine($filters_id,$filters));
echo "</pre>";
?>