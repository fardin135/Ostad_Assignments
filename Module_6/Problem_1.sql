select Customers.*, count(Orders.order_ID) as Total_numbers_of_orders from Customers 
left join Orders on  Customers.customer_ID = Orders.customer_ID 
group by Customers.customer_ID 
order by Total_numbers_of_orders desc;