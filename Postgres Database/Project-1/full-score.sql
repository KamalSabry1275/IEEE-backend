SELECT SUBMISSIONS.HACKER_ID, HACKERS.NAME 
FROM HACKERS 
JOIN SUBMISSIONS ON SUBMISSIONS.HACKER_ID = HACKERS.HACKER_ID 
JOIN CHALLENGES ON CHALLENGES.CHALLENGE_ID=SUBMISSIONS.CHALLENGE_ID 
JOIN DIFFICULTY ON CHALLENGES.DIFFICULTY_LEVEL = DIFFICULTY.DIFFICULTY_LEVEL 
WHERE DIFFICULTY.DIFFICULTY_LEVEL = CHALLENGEs.DIFFICULTY_LEVEL 
    AND DIFFICULTY.SCORE = SUBMISSIONS.SCORE 
GROUP BY SUBMISSIONS.HACKER_ID, HACKERS.NAME 
HAVING COUNT(SUBMISSIONS.HACKER_ID) > 1 
ORDER BY COUNT(SUBMISSIONS.HACKER_ID) DESC, HACKER_ID ASC;