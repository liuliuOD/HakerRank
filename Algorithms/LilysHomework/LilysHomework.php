<?php

namespace Algorithms;

class LilysHomework
{
    /**
     * select the minimize swap times between ACS and DESC
     * 
     * @param array $arr
     * @return int
     */
    public function resolvedLilysHomework($arr)
    {
        $sortedArr = $arr;

        sort($sortedArr);
        $ascSwapTimes = $this->lilysHomeworkAlgorithm($arr, $sortedArr);

        rsort($sortedArr);
        $descSwapTimes = $this->lilysHomeworkAlgorithm($arr, $sortedArr);

        return min($ascSwapTimes, $descSwapTimes);
    }

    /**
     * calculate swap times
     * 
     * @param array $originArr
     * @param array $sortedArr
     * @return int
     */
    public function lilysHomeworkAlgorithm($originArr, $sortedArr)
    {
        $swapTimes = 0;

        foreach($sortedArr as $key => $value)
        {
            $sortedMap[$value] = $key;
        }

        for ($i = 0; $i < count($originArr); $i ++)
        {
            if ($originArr[$i] !== $sortedArr[$i]) {
                $swapTimes ++;

                $sortedMap[$sortedArr[$i]] = $sortedMap[$originArr[$i]];
                list($sortedArr[$i], $sortedArr[$sortedMap[$originArr[$i]]]) = array($sortedArr[$sortedMap[$originArr[$i]]], $sortedArr[$i]);
            }
        }

        return $swapTimes;
    }
}
