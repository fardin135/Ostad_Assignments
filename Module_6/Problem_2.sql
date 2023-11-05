select Products.name, Order_Items.quantity, Orders.total_amount, Order_Items.order_ID from orders
join Order_Items on  Orders.order_ID  = Order_Items.order_ID
join Products on  Products.product_ID  = Order_Items.product_ID 
order by order_ID asc;