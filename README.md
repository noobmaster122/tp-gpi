#### TP GPI - Vinyl records online store

| Technology    | Min Version   |
| ------------- |---------------|
| Nodejs        | 20.x.x        |
| Php           | 8.x.x         |
| Tailwindcss   | 3.x.x         |
| Jquery        | 3.x.x         |

---

#### Implemented functionalities 

-  La navigation par le
 pavé des catégories (avec 
slide up et down de la 
structure des catégories)

- L’affichage des
 vignettes des produits
 correspondants à la 
catégorie sélectionnée

-  L’ajout au panier par
 le bouton [add to cart]

- Zoom sur l’image au
 passage de la souris
 sur la vignette

- Suppression de l’article au moyen de la petite croix sur sa ligne de chaque produit : ne recharge pas la page complète, faire appel à AJAX via jQuery pour mettre à jour les 
montants

- la modification des
 quantités met à jour le 
sous total par ligne de 
produit et le total général 
du caddie

#### Project architecture

###### PHP

> The project uses a straight forward MVC architecture for php classes

> The project uses PSR4 for autoloading the php classes.


###### CSS

> The project uses tailwindcss for styling the components. here is an example of how to impolement tailwindcss into a vanilla php project [Tutorial](https://www.geeksforgeeks.org/installation-setup-guide-of-tailwind-css-with-php/). 

> Tailwindcss uses treeshacking by default, so a new build is needed when using new tailwindcss classes

> Webpack is used for bundeling ressources, for running the project, we only need the contents of the public folder as it stores the css/js bundles. When updating the project a new bundle needs to get generated by running `npm run build` in the root of the project 

###### JS

> Custom Ajax requests are used to update the ui without refreshing the page. Classes are used to encapsulate the logic.


###### Database

> A json database is used for storing the products.