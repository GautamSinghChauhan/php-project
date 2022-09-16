<?php
//Inner Join 
Select * from  Customers  JOIN Orders ON Customers.cid=Orders.cid;

Select Customers.cid, cname, oamount from Customers JOIN Orders ON Customers cid=Orders.cid;

//left join 

Select Customers.cid, cname, oamount from Customers LEFT JOIN Orders ON Customers.cid=Orders.cid;

//Right join 

Select Customers.cid, cname, oamount from Customers RIGHT JOIN Orders ON Customers.cid=Orders.cid;

Select Max(Salary) from Employe where salery Notin (Select Max(Salary) from Employe)

Select id,Salary From Employe e1 where N-1=(Select count(Distinct Salary) from Employe e2 where e3.Salary>e1.Salary)

?>