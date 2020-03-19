<?php

/**
 * 
 * 
 * @param array $arr
 * @return int
 */
function lilysHomework($arr)
{
    $sortedArr = $arr;

    sort($sortedArr);
    $asc = lilysHomeworkAlgorithm($arr, $sortedArr);

    rsort($sortedArr);
    $desc = lilysHomeworkAlgorithm($arr, $sortedArr);

    return min($asc, $desc);
}

/**
 * 
 * 
 * @param array $originArr
 * @param array $sortedArr
 * @return int
 */
function lilysHomeworkAlgorithm($originArr, $sortedArr)
{
    $swapTimes = 0;

    foreach($sortedArr as $key => $value)
    {
        $sortedMap[$value] = $key;
    }

    for ($i = 0; $i < count($originArr); $i ++)
    {
        if ($originArr[$i] !== $sortedArr[$i]) {
            $swapTimes++;

            $sortedMap[$sortedArr[$i]] = $sortedMap[$originArr[$i]];
            list($sortedArr[$i], $sortedArr[$sortedMap[$originArr[$i]]]) = array($sortedArr[$sortedMap[$originArr[$i]]], $sortedArr[$i]);
        }
    }

    return $swapTimes;
}

/**
 * 
 */
function demo()
{
    $array = [3, 4, 6, 1, 2];

    $minimumSwapTimes = lilysHomework($array);

    echo "Minimum Swap Times : " . $minimumSwapTimes;
}