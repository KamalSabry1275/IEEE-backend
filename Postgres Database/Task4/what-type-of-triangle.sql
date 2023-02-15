SELECT 
    CASE
        WHEN NOT((A + B) > C) OR NOT((A + C) > B) OR  NOT((B + C) > A) THEN 'Not A Triangle'
        WHEN A = B AND B = C THEN 'Equilateral'
        WHEN A = B OR A = C OR B = C THEN 'Isosceles'
        ELSE 'Scalene'
    END
FROM triangles;