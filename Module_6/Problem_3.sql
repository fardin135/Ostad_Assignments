select Categories.name, sum( Order_Items.quantity * Order_Items.unit_price) as "Total Revenue"
from Categories
join Order_Items on Categories.category_ID = Order_Items.category_ID
group by Categories.category_ID
order by "Total Revenue" desc;