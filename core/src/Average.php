<?php

namespace core;

use shared\SharedAverage;

class Average {
    /**
     * Calculate the mean average
     * @param array $numbers Array of numbers
     * @return float Mean average
     */
    public function mean(array $numbers) {
        $sharedaverage = new SharedAverage();

        return $sharedaverage->mean($numbers);
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median(array $numbers) {
        $sharedaverage = new SharedAverage();

        return $sharedaverage->median($numbers);
    }
}
