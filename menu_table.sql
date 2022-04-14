---
--- create the menu items table
---
create table menu_items (
    id              integer     AUTO_INCREMENT,
    category        varchar(20),
    title           varchar(50),
    description     varchar(32767),
    price           decimal(10,2),
    constraint menu_items_pk
            primary key( id )
);
--- the 7 categories are: 
--- alcoholic-drink, non-alcoholic-drink, sushi, nigiri, side, ramen, small-plate




--- CATEGORY: ALCOHOLIC-DRINK
insert into menu_items( category, title, description, price ) 
    values ( "alcoholic-drink", "Chardonnay", "*temporary description!*", 8.00 );

insert into menu_items( category, title, description, price )  
    values( "alcoholic-drink", "Sake", "*temporary description!*", 7.00 );

insert into menu_items( category, title, description, price )  
    values( "alcoholic-drink", "Ginger Beer", "*temporary description!*", 4.00 ); 
        


--- CATEGORY: NON-ALCOHOLIC-DRINK
insert into menu_items( category, title, description, price )  
    values( "alcoholic-drink", "Lemon Water", "*temporary description!*", 1.00 ); 

insert into menu_items( category, title, description, price )  
    values( "alcoholic-drink", "Raspberry Iced Tea", "*temporary description!*", 2.00 ); 

insert into menu_items( category, title, description, price )  
    values( "alcoholic-drink", "Jasmine Green Tea", "*temporary description!*", 2.00 ); 

insert into menu_items( category, title, description, price )  
    values( "alcoholic-drink", "Black Tea", "*temporary description!*", 2.00 ); 



--- CATEGORY: SUSHI
insert into menu_items( category, title, description, price )  
    values( "sushi", "Tiger Roll", "Avocado, shrimp tempura, cucumber, tobiko (flying fish roe — fish eggs)", 9.99 ); 

insert into menu_items( category, title, description, price )  
    values( "sushi", "Spider Roll", "Soft-shell crab tempura, cucumber, avocado, spicy mayo", 7.99 ); 

insert into menu_items( category, title, description, price )  
    values( "sushi", "Shrimp Tempura Roll", "Shrimp tempura, avocado, tempura flakes, eel sauce", 6.99 ); 

insert into menu_items( category, title, description, price )  
    values( "sushi", "Vegetable Roll", "Cucumber, fresh carrot, scallion, avocado, asparagus, cream cheese", 5.99 ); 

insert into menu_items( category, title, description, price )  
    values( "sushi", "California Roll", "Crab, avocado, cucumber, sesame seeds", 5.99 ); 

insert into menu_items( category, title, description, price )  
    values( "sushi", "Dynamite Roll", "Shrimp tempura, yellowtail, bean sprouts, carrots, avocado, cucumber, chili, spicy mayo", 8.99 ); 



--- CATEGORY: NIGIRI
insert into menu_items( category, title, description, price )  
    values( "nigiri", "Maguro", "tuna", 2.00 ); 

insert into menu_items( category, title, description, price )  
    values( "nigiri", "Tako", "cooked octopus", 1.00 ); 

insert into menu_items( category, title, description, price )  
    values( "nigiri", "Sake", "salmon", 2.00 ); 

insert into menu_items( category, title, description, price )  
    values( "nigiri", "Tai", "sea bream", 3.00 ); 

insert into menu_items( category, title, description, price )  
    values( "nigiri", "Hamachi", "yellowtail", 1.00 ); 

insert into menu_items( category, title, description, price )  
    values( "nigiri", "Ikura", "salmon roe", 3.00 ); 

insert into menu_items( category, title, description, price )  
    values( "CATEGORY", "Hokki", "surf clam", 1.00 ); 

insert into menu_items( category, title, description, price )  
    values( "CATEGORY", "Geso", "cooked squid", 1.00 ); 

insert into menu_items( category, title, description, price )  
    values( "CATEGORY", "Ebi", "butterflied shrimp", 1.00 ); 



--- CATEGORY: SIDE
insert into menu_items( category, title, description, price )  
    values( "side", "Edamame", "steamed soy bean, lightly salted", 4.00 ); 

insert into menu_items( category, title, description, price )  
    values( "side", "Shumai", "steamed shrimp dumplings", 5.00 );

    insert into menu_items( category, title, description, price )  
    values( "side", "Yaki Udon", "stir fried udon noodles with onion, snow peas, baby corn and green peppers", 6.00 );



--- CATEGORY: RAMEN
insert into menu_items( category, title, description, price )  
    values( "ramen", "Ton Toro Pork", "rich and creamy pork broth, chewy noodle, chashu pork, menma, spinach", 16.00 ); 

insert into menu_items( category, title, description, price )  
    values( "ramen", "Jidori Chicken", "light clear chicken broth, chewy noodle, jidori grilled chicken, white cabagge, scallion", 13.00 ); 

insert into menu_items( category, title, description, price )  
    values( "ramen", "Shrimp Yuzu Wanton", "yuzu dashi chicken broth, thin noodle, shrimp wanton, menma, spinach, red cabbage", 14.00 ); 



--- CATEGORY: SMALL-PLATE
insert into menu_items( category, title, description, price )  
    values( "small-plate", "Chicken Gyoza", "*temporary description!*", 10.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Chili Cabbage", "*temporary description!*", 6.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Spicy Yuzu Wonton Soup", "*temporary description!*", 10.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Teriyaki Chashu (pork)", "*temporary description!*", 9.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Teriyaki Chashu (chicken)", "*temporary description!*", 9.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Edamame Pesto", "*temporary description!*", 8.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Mushroom Cauliflower", "*temporary description!*", 10.00 ); 

insert into menu_items( category, title, description, price )  
    values( "small-plate", "Yuzu Wings", "*temporary description!*", 15.00 ); 
    
insert into menu_items( category, title, description, price )  
    values( "small-plate", "Shishito Peppers", "*temporary description!*", 8.00 ); 

