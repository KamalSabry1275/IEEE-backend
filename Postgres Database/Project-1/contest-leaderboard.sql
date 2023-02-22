select h.hacker_id,h.name,sum(sscore)
from Hackers h inner join (select s.hacker_id,max(score) as sscore from Submissions s group by s.hacker_id,s.challenge_id) st on h.hacker_id=st.hacker_id
group by h.hacker_id,h.name
having sum(sscore)>0
order by sum(sscore) desc,h.hacker_id asc;