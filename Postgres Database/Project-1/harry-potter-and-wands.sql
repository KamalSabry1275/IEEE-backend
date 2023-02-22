SELECT wands.id, h.age, h.min_coins, h.power
FROM(
    SELECT wands.code, p1.age, min(wands.coins_needed) AS min_coins, wands.power
        FROM wands
            JOIN Wands_Property as p1
                ON wands.code = p1.code
            WHERE p1.is_evil != 1
            GROUP BY wands.code, p1.age, wands.power) AS h
INNER JOIN wands
     ON h.min_coins = wands.coins_needed and h.code = wands.code
ORDER BY h.power DESC, h.age DESC