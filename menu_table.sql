
--- create the menu items table
--- the 7 categories are: alcoholic-drink, non-alcoholic-drink, sushi, nigiri, side, ramen, small-plate

create table menu_items (
    id              int AUTO_INCREMENT,
    itemId          varchar(50),
    category        varchar(20),
    itemName           varchar(50),
    description     text(21845),
    price           decimal(10,2),
    constraint menu_items_pk
            primary key( id )
);




insert into menu_items( category, itemName, itemId, description, price ) 
    values ( "alcoholic-drink", "Chardonnay", "chardonnay", "*temporary description!*", 8.00 );

insert into menu_items( category, itemName, itemId, description, price )  
    values( "alcoholic-drink", "Sake", "sakeDrink", "*temporary description!*", 7.00 );

insert into menu_items( category, itemName, itemId, description, price )  
    values( "alcoholic-drink", "Ginger Beer", "gingerBeer", "*temporary description!*", 4.00 ); 
        


insert into menu_items( category, itemName, itemId, description, price )  
    values( "alcoholic-drink", "Lemon Water", "lemonWater", "*temporary description!*", 1.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "alcoholic-drink", "Raspberry Iced Tea", "raspberryIcedTea", "*temporary description!*", 2.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "alcoholic-drink", "Jasmine Green Tea", "jasmineGreenTea", "*temporary description!*", 2.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "alcoholic-drink", "Black Tea", "blackTea", "*temporary description!*", 2.00 ); 



insert into menu_items( category, itemName, itemId, description, price )  
    values( "sushi", "Tiger Roll", "tigerRoll", "Avocado, shrimp tempura, cucumber, tobiko (flying fish roe — fish eggs)", 9.99 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "sushi", "Spider Roll", "spiderRoll", "Soft-shell crab tempura, cucumber, avocado, spicy mayo", 7.99 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "sushi", "Shrimp Tempura Roll", "shrimpTempuraRoll", "Shrimp tempura, avocado, tempura flakes, eel sauce", 6.99 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "sushi", "Vegetable Roll", "vegetableRoll", "Cucumber, fresh carrot, scallion, avocado, asparagus, cream cheese", 5.99 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "sushi", "California Roll", "californiaRoll", "Crab, avocado, cucumber, sesame seeds", 5.99 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "sushi", "Dynamite Roll", "dynamiteRoll", "Shrimp tempura, yellowtail, bean sprouts, carrots, avocado, cucumber, chili, spicy mayo", 8.99 ); 



insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Maguro", "maguro", "tuna", 2.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Tako", "tako", "cooked octopus", 1.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Sake", "sake", "salmon", 2.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Tai", "tai", "sea bream", 3.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Hamachi", "hamachi", "yellowtail", 1.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Ikura", "ikura","salmon roe", 3.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Hokki", "hokki", "surf clam", 1.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Geso", "geso", "cooked squid", 1.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "nigiri", "Ebi", "ebi", "butterflied shrimp", 1.00 ); 



insert into menu_items( category, itemName, itemId, description, price )  
    values( "side", "Edamame", "edamame", "steamed soy bean, lightly salted", 4.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "side", "Shumai", "shumai", "steamed shrimp dumplings", 5.00 );

    insert into menu_items( category, itemName, itemId, description, price )  
    values( "side", "Yaki Udon", "yakiUdon", "stir fried udon noodles with onion, snow peas, baby corn and green peppers", 6.00 );



insert into menu_items( category, itemName, itemId, description, price )  
    values( "ramen", "Ton Toro Pork", "tonToroPork", "rich and creamy pork broth, chewy noodle, chashu pork, menma, spinach", 16.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "ramen", "Jidori Chicken", "jidoriChicken", "light clear chicken broth, chewy noodle, jidori grilled chicken, white cabagge, scallion", 13.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "ramen", "Shrimp Yuzu Wanton", "shrimpYuzuWanton", "yuzu dashi chicken broth, thin noodle, shrimp wanton, menma, spinach, red cabbage", 14.00 ); 



insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Chicken Gyoza", "chickenGyoza", "*temporary description!*", 10.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Chili Cabbage", "chiliCabbage", "*temporary description!*", 6.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Spicy Yuzu Wonton Soup", "spicyYuzuWontonSoup", "*temporary description!*", 10.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Teriyaki Chashu (pork)", "teriyakiChashuP", "*temporary description!*", 9.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Teriyaki Chashu (chicken)", "teriyakiChashuC", "*temporary description!*", 9.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Edamame Pesto", "edamamePesto", "*temporary description!*", 8.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Mushroom Cauliflower", "mushroomCauliflower", "*temporary description!*", 10.00 ); 

insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Yuzu Wings", "yuzuWings", "*temporary description!*", 15.00 ); 
    
insert into menu_items( category, itemName, itemId, description, price )  
    values( "small-plate", "Shishito Peppers", "shishitoPeppers", "*temporary description!*", 8.00 ); 

