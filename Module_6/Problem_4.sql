select Customers.customer_ID, Customers.name, sum( Order_Items.quantity * Order_Items.unit_price) as "Total Revenue"
from Customers
join Orders on Customers.customer_ID = Orders.customer_ID
join Order_Items on Orders.order_ID = Order_Items.order_ID
group by Customers.customer_ID
order by "Total Revenue" desc
limit 5;