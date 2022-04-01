<?php

    include "include.inc";

    HTMLStart( "Menu Page" );
    
    WrapperStart();

    HTMLNavigation();

    HTMLDecor();

?>

        <!-- MENU WRAPPER -->
        <main class="menu-wrapper">
            <!-- Panel for drinks, both non-alcoholic and alcoholic -->
            <section class="drinks panel">
                <div class="panel-title">NON-ALCOHOLIC</div>
                <div class="item">Lemon Water - $1</div>
                <div class="item">Raspberry Iced Tea - $2</div>
                <div class="item">Jasmine Green Tea - $2</div>
                <div class="item">Black Tea - $2</div>

                <!-- Splits non-alcoholic and alcoholic from each other -->
                <hr> 

                <div class="panel-title">ALCOHOLIC</div>
                <div class="item">Chardonnay - $8</div>
                <div class="item">Sake - $7</div>
                <div class="item">Ginger beer - $4</div>
            </section>
            <!-- Panel for Sushi -->
            <section class="sushi panel">
                <div class="panel-title">
                    SUSHI
                    <span>(price is per-roll)</span>
                </div>
                <div class="item">
                    <div class="name">Tiger Roll - $9.99</div>
                    <div class="description">
                        Avocado, shrimp tempura, cucumber, tobiko (flying fish roe — fish eggs)
                    </div>
                </div>
                <div class="item">
                    <div class="name">Spider Roll - $7.99</div>
                    <div class="description">
                        Soft-shell crab tempura, cucumber, avocado, spicy mayo
                    </div>
                </div>
                <div class="item">
                    <div class="name">Shrimp Tempura Roll - $6.99</div>
                    <div class="description">
                        Shrimp tempura, avocado, tempura flakes, eel sauce
                    </div>
                </div>
                <div class="item">
                    <div class="name">Vegetable Roll - $5.99</div>
                    <div class="description">
                        Cucumber, fresh carrot, scallion, avocado, asparagus, cream cheese
                    </div>
                </div>
                <div class="item">
                    <div class="name">California Roll - $5.99</div>
                    <div class="description">
                        Crab, avocado, cucumber, sesame seeds
                    </div>
                </div>
                <div class="item">
                    <div class="name">Dynamite Roll - $8.99</div>
                    <div class="description">
                        Shrimp tempura, yellowtail, bean sprouts, carrots, avocado, cucumber, chili, spicy mayo
                    </div>
                </div>

            </section>
            <!-- Panel for Nigiri -->
            <section class="nigiri panel">
                <div class="panel-title">
                    NIGIRI
                    <span>(price is per-piece)</span>
                </div>

                <div class="item">
                    <div class="name">Maguro - $2</div>
                    <div class="description">tuna</div>
                </div>

                <div class="item">
                    <div class="name">Tako - $1</div>
                    <div class="description">cooked octopus</div>
                </div>

                <div class="item">
                    <div class="name">Sake - $2</div>
                    <div class="description">salmon</div>
                </div>

                <div class="item">
                    <div class="name">Tai - $3</div>
                    <div class="description">sea bream</div>
                </div>

                <div class="item">
                    <div class="name">Hamachi - $1</div>
                    <div class="description">yellowtail</div>
                </div>

                <div class="item">
                    <div class="name">Ikura - $3</div>
                    <div class="description">salmon roe</div>
                </div>

                <div class="item">
                    <div class="name">Hokki - $1</div>
                    <div class="description">surf clam</div>
                </div>

                <div class="item">
                    <div class="name">Geso - $1</div>
                    <div class="description">cooked squid</div>
                </div>

                <div class="item">
                    <div class="name">Ebi - $1</div>
                    <div class="description">butterflied shrimp</div>
                </div>

            </section>
            <!-- Panel for Ramen -->
            <section class="ramen-sides">
                <div class="ramen panel">

                    <div class="panel-title">RAMEN</div>

                    <div class="item">
                        <div class="name">Ton Toro Pork - $16</div>
                        <div class="description">
                            rich and creamy pork broth, chewy noodle, chashu pork, menma, spinach
                        </div>
                    </div>

                    <div class="item">
                        <div class="name">Jidori Chicken - $13</div>
                        <div class="description">
                            light clear chicken broth, chewy noodle, jidori grilled chicken, white cabagge, scallion
                        </div>
                    </div>

                    <div class="item">
                        <div class="name">Shrimp Yuzu Wanton - $14</div>
                        <div class="description">
                            yuzu dashi chicken broth, thin noodle, shrimp wanton, menma, spinach, red cabbage
                        </div>
                    </div>


                </div>
                <!-- Panel for Sides -->
                <div class="sides panel">
                    <div class="panel-title">SIDES</div>

                    <div class="item">
                        <div class="name">Edamame - $4</div>
                        <div class="description">
                            steamed soy bean, lightly salted
                        </div>
                    </div>

                    <div class="item">
                        <div class="name">Shumai - $5</div>
                        <div class="description">
                            steamed shrimp dumplings
                        </div>
                    </div>

                    <div class="item">
                        <div class="name">Yaki Udon - $6</div>
                        <div class="description">
                            stir fried udon noodles with onion, snow peas, baby corn and green peppers
                        </div>
                    </div>
                </div>
            </section>
            <!-- Panel for Small Plates -->
            <section class="small-plates panel">
                <div class="panel-title">
                    SMALL PLATES
                </div>
                <div class="item">
                    <div class="name">Chicken Gyoza (7 pieces) - $10</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Chili Cabbage - $6</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Spicy Yuzu Wonton Soup - $10</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Teriyaki Chashu (pork) - $9</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Teriyaki Chashu (chicken) - $9</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Edamame Pesto - $8</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Mushroom Cauliflower - $10</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Yuzu Wings - $15</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>
                <div class="item">
                    <div class="name">Shishito Peppers - $8</div>
                    <div class="description">
                        *temporary description*
                    </div>
                </div>

            </section>
            <!-- Panel for References -->
            <section class="reference panel">
                <div class="panel-title">REFERENCE</div>

                <div class="item">
                    <div class="name">Sashimi</div>
                    <div class="description">
                        Sashimi is just the meat, served without other ingredients.
                    </div>
                </div>

                <div class="item">
                    <div class="name">Sushi</div>
                    <div class="description">
                        Sushi features the meat and adds rice and other ingredients, such as vegetables, which are all
                        rolled up in a sheet of nori (seaweed) and then sliced into pieces.
                    </div>
                </div>

                <div class="item">
                    <div class="name">Nigiri</div>
                    <div class="description">
                        Nigiri is a dish that's halfway in between sashimi and sushi. Nigiri is sashimi that's served on
                        a molded rectangle of rice.
                    </div>
                </div>

            </section>

        </main>

<?php

    HTMLFooter();

    WrapperEnd();

    HTMLEnd();

?>