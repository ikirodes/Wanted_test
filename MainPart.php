<?php

$array = [
    ['id' => 1, 'date' => "12.01.2020", 'name' => "test1",],
    ['id' => 2, 'date' => "02.05.2020", 'name' => "test2",],
    ['id' => 4, 'date' => "08.03.2020", 'name' => "test4",],
    ['id' => 1, 'date' => "22.01.2020", 'name' => "test1",],
    ['id' => 2, 'date' => "11.11.2020", 'name' => "test4",],
    ['id' => 3, 'date' => "06.06.2020", 'name' => "test3",],
];



// 1. выделить уникальные записи (убрать дубли) в отдельный массив. в конечном массиве не должно быть элементов с одинаковым id.

$uniqueArray = collect($array)
    ->unique('id')
    ->toArray();

// 2. отсортировать многомерный массив по ключу (любому)

$sortArray = collect($array)->sortByDesc(function ($item) {
    return $item['id'];
})->toArray();

// 3. вернуть из массива только элементы, удовлетворяющие внешним условиям (например элементы с определенным id)

$pluckArray = collect($array)->pluck('id')->toArray();


// 4. изменить в массиве значения и ключи (использовать name => id в качестве пары ключ => значение)

$newArray = collect($array)->pluck('id', 'name')->toArray();

// 5. В базе данных имеется таблица с товарами goods (id INTEGER, name TEXT), таблица с тегами tags (id INTEGER, name TEXT)
// и таблица связи товаров и тегов goods_tags (tag_id INTEGER, goods_id INTEGER, UNIQUE(tag_id, goods_id)).
// Выведите id и названия всех товаров, которые имеют все возможные теги в этой базе.

$sql = "SELECT g.id, g.name
FROM goods g
WHERE NOT EXISTS (
    SELECT t.id
    FROM tags t
    WHERE NOT EXISTS (
        SELECT 1
        FROM goods_tags gt
        WHERE gt.tag_id = t.id
        AND gt.goods_id = g.id
    )
);";

// 6. Выбрать без join-ов и подзапросов все департаменты, в которых есть мужчины, и все они (каждый) поставили высокую оценку (строго выше 5).

$sql = "SELECT e.department_id
FROM evaluations e
WHERE e.gender = true
GROUP BY e.department_id
HAVING MIN(e.value) > 5;";

