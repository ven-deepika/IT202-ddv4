<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Deepika Venkatesan (ddv4)</td></tr>
<tr><td> <em>Generated: </em> 5/8/2024 7:39:39 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-104-S2024/it202-milestone-2-shop-project/grade/ddv4" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.14.32image.png.webp?alt=media&token=528cf41b-9693-40ee-8984-ccc9eca07c07"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid data filled in form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.20.26image.png.webp?alt=media&token=d130fd09-08ec-4535-8c1f-53df2b8105a4"/></td></tr>
<tr><td> <em>Caption:</em> <p>After the form was submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>In order to allow the admin to create a product, there must first<br>be a form for the admin to enter desired field values. After admin<br>fills all the fields, the html form will go through javascript validation upon<br>clicking submit. If it is not validated, a warning will be shown to<br>the admin, and the fields will reset to blank. Otherwise, the values in<br>the fields will be sent through html post to the server, where each<br>field can be referenced as an object in the array. The fields will<br>then be validated to ensure no issues will occur from adding the new<br>entry. Then, the database will be connected to, and an insert statement will<br>be executed to append the new product to the Product table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ven-deepika/IT202-ddv4/pull/5">https://github.com/ven-deepika/IT202-ddv4/pull/5</a> </td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.26.31image.png.webp?alt=media&token=e67b6267-c4bb-4cb4-b68a-72d87eb7a10d"/></td></tr>
<tr><td> <em>Caption:</em> <p>first four items<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.27.03image.png.webp?alt=media&token=cfbf624a-6046-4d23-b6d2-0542ace137cf"/></td></tr>
<tr><td> <em>Caption:</em> <p>next four items<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.27.31image.png.webp?alt=media&token=f5dd211c-0380-401d-8259-c7d4fff197a8"/></td></tr>
<tr><td> <em>Caption:</em> <p>last 2 items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>I did not implement filters. If I were to attempt to do so,<br>I would start by retrieving all entries in Product where the filter category<br>is the desired category, and the visibility is true. Then i would display<br>the listing as usual using the same process on the page listing.php. This<br>would be applied for each category, and the filter would be chosen with<br>a dropdown menu similar to the one in the nav bar.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.28.55image.png.webp?alt=media&token=1d57860f-eaaa-426f-be53-9f1ba413e2db"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the nonvisible product &quot;sneaky&quot; on line 3 of the table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T09.30.05image.png.webp?alt=media&token=245461c0-7daf-4370-b9b1-51d39bacde53"/></td></tr>
<tr><td> <em>Caption:</em> <p>it does not have admin in the url, but this page is not<br>the shop page and is only visible to admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The results are shown by creating an html table, then formatting headers according<br>to the fields required.&nbsp; The results of the select * statement are saved<br>to an array variable, since there are several items to be iterated over.<br>Then, the table is populated using a while loop which access each array<br>value and print out the required fields. The html is echoed as a<br>string within php so that it is encased in the loop. Each row<br>in the database is encased in a table row element, so that the<br>next row is filled with a different respective item.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.38.24image.png.webp?alt=media&token=e1522fd6-9f2e-40e5-a24b-29f99bf51e37"/></td></tr>
<tr><td> <em>Caption:</em> <p>edit buttons on product list page for admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T11.14.22image.png.webp?alt=media&token=85455fb0-2d39-417a-995c-cb3785e4128d"/></td></tr>
<tr><td> <em>Caption:</em> <p>some of the failed code for editlisting.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>There are errors that have not been fixed in my code for editing<br>products. The process starts with the inventory page, and individual buttons for each<br>inventory item. On click, the page redirects to an edit item page. The<br>item-id is passed through html post and is used to query for all<br>of the modifiable fields of the item. These items are presented in a<br>form, with the values prefilled with the current values of the given item.<br>The admin has the ability to erase and change the values in each<br>form element, then press submit when edits are done. Then, the data from<br>this form are used in an Update statement that will update every field<br>(with the ones that didnt change retaining their original value). Then, the admin<br>will be notified that it was successful.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ven-deepika/IT202-ddv4/pull/5">https://github.com/ven-deepika/IT202-ddv4/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.40.49image.png.webp?alt=media&token=444534c4-9f95-44ef-83ed-38d1d6c9a67d"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details button for each of the listings<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.41.34image.png.webp?alt=media&token=58a562b8-8f5c-42a9-8e49-68fb39424b5d"/></td></tr>
<tr><td> <em>Caption:</em> <p>not an individual product-details page, all the buttons redirect to this total listing<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>I did not create individual product details pages for each item. Ideally, on<br>click, the page is redirected to a product details page dedicated to that<br>particular product. The details would be retrieved from the database by using the<br>product id, sent via http post before the redirect occurs. This way, the<br>new page would have access to the id in order to execute the<br>select statement required. Then,&nbsp; the layout created for this page would be populated<br>with the values returned from the select statement. In this case, instead of<br>doing this process for individual products, I only implemented a page which displays<br>all details for all visible products, for the non-admin users to see.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.42.32image.png.webp?alt=media&token=f2e63321-9d39-44ea-a5f1-a7d589990fe3"/></td></tr>
<tr><td> <em>Caption:</em> <p>no success message, but on click it redirects the page to the cart<br>and therefore the user sees the  added item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.43.29image.png.webp?alt=media&token=dfe7f774-c4f4-4c6f-92a4-2221fe38dd78"/></td></tr>
<tr><td> <em>Caption:</em> <p>message to user that they need to login for that action<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.45.59image.png.webp?alt=media&token=900e9dd3-f8c7-459d-92c8-0b44f528b64b"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart table with six records belonging to different users&#39; carts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>This cart works by having a Cart table, (1 cart per user) and<br>a composite unique key consisting of user_id and product_id. This works because any<br>individual user would only have one instance of a particular product in their<br>cart, with the quantity being a separate, updatable field. The Cart table contains<br>all items in all user carts at any particular time. The Cart table<br>is updated every time a user clicks on an Add to Cart button;<br>all relevant records in the Cart table are deleted every time a user<br>clicks on Clear cart.&nbsp;&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>Adding an item to cart requires the system to know the user_id and<br>product_id among other values. The user_id is obtained from the session variable. The<br>product_id is obtained from the button (form) which is clicked by the user,<br>which has a value equal to the product_id. We set this value by<br>including a bit of php which echoes the product_id, within the html form<br>tag. This variable is then accessible once the page is redirected to addtocart.php,<br>and is used to select the associated unit_price of the product, as well<br>as the name of the product. Both of these values are then displayed<br>on the cart page (and price is used to calculate total), so both<br>are necessary. Then together user_id and product_id are used to insert a new<br>Cart record into the Cart table, along with other fields that are filled.&nbsp;&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.46.59image.png.webp?alt=media&token=26dc4b03-51ec-412e-aa9f-29d699a4f684"/></td></tr>
<tr><td> <em>Caption:</em> <p>subtotal consisting of the prices of each item<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.47.37image.png.webp?alt=media&token=b52d78c2-9a0b-46ed-a370-363fcfb15846"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the total at checkout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>As previously mentioned, the product name and product price have to be obtained<br>by SQL select statements using the product_id. These are when displayed to the<br>cart page, with some html formatting. The subtotal is the price in this<br>case, because functionality for increasing quantity to anything more than 1 has not<br>been implemented. Also, the total is calculated by summing up the price values<br>as they are being displayed in the loop--the variable &#39;total&#39; is declared outside<br>of the loop to maintain its integrity. The final total is then displayed<br>after everything else has been loaded.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.49.11image.png.webp?alt=media&token=5f9cc906-4a7e-491c-9538-46c97a7ab1d7"/></td></tr>
<tr><td> <em>Caption:</em> <p>before clearing cart on webpage<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.50.03image.png.webp?alt=media&token=3a8207fe-d84f-423c-af77-896adc154445"/></td></tr>
<tr><td> <em>Caption:</em> <p>before clearing cart in database<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.50.59image.png.webp?alt=media&token=2e24c43c-2c03-4ed9-bfec-fec3bc9341db"/></td></tr>
<tr><td> <em>Caption:</em> <p>after clearing cart on webpage<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.52.01image.png.webp?alt=media&token=3813eea8-77b1-41bb-96b5-82cecde28b16"/></td></tr>
<tr><td> <em>Caption:</em> <p>after clearing cart in database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>I did not implement the individual delete process. If I were to attempt,<br>I would create a button for each item, similar to the buttons in<br>the inventory. On click, I would run a script which selects a record<br>from the Cart table, using the session variable to get the user_id and<br>the form value to get the product_id. The product_id would be stored in<br>the form tag with php as done before. Then once the record is<br>removed from the Cart table, the page is reloaded and should automatically not<br>display the item. The clear cart functionality operated similarly, except it only filtered<br>the query on the user_id, and did not care about the product_id. The<br>result of the loop was a removal of any cart item associated with<br>that particular user.<div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T10.54.23image.png.webp?alt=media&token=608a184c-9473-4382-a16b-302f2e15a8f9"/></td></tr>
<tr><td> <em>Caption:</em> <p>many things missing/in progress<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-104-S2024/it202-milestone-2-shop-project/grade/ddv4" target="_blank">Grading</a></td></tr></table>