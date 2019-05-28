CREATE VIEW categ_spread AS 
    SELECT category.category_name, 
        category.category_type, 
        spreadsheet.l_perc,
        spreadsheet.s_perc, 
        spreadsheet.d_perc, 
        spreadsheet.allowance
    FROM category 
    INNER JOIN spreadsheet
    ON category.id=spreadsheet.id;