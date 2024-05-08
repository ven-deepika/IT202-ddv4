<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Deepika Venkatesan (ddv4)</td></tr>
<tr><td> <em>Generated: </em> 5/8/2024 4:56:50 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-104-S2024/it202-milestone1-deliverable/grade/ddv4" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.17.33image.png.webp?alt=media&token=810d4813-2845-4320-b6b2-81aa54df2a1b"/></td></tr>
<tr><td> <em>Caption:</em> <p>email without an @<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.18.15image.png.webp?alt=media&token=e4751f04-2852-4053-9729-ee642a25d346"/></td></tr>
<tr><td> <em>Caption:</em> <p>password too short<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.19.08image.png.webp?alt=media&token=3853a571-8568-4d64-9d5e-1701647b262f"/></td></tr>
<tr><td> <em>Caption:</em> <p>after entering the different passwords<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.16.49image.png.webp?alt=media&token=33709a43-b72e-442e-a76d-1da7276454a9"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid info before submitting<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.21.49image.png.webp?alt=media&token=16e4e673-f3af-4463-8fd2-3ecfdb1f6acb"/></td></tr>
<tr><td> <em>Caption:</em> <p>row 3 is the data entered in the previous section&#39;s registration<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ven-deepika/IT202-ddv4/pull/4">https://github.com/ven-deepika/IT202-ddv4/pull/4</a> </td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form is formatted with html and uses predefined constants to pass information.<br>Form is an html element with useful functionality such as the element &quot;onsubmit&quot;<br>that uses javascript to complete certain actions when the user clicks the submit<br>button. On the client side, this particular form sends the user input as<br>an HTTP post transaction, so that the server can receive the information, compare<br>the information with the database table entries tp validate uniqueness, then insert the<br>data into the database. But before this occurs, client-side validation is performed with<br>the JavaScript function validate(), because some aspects of validation do not involve any<br>database information--therefore, it is faster, more efficient, and less burdensome for the server,<br>and network to minimize communication with the server. With respect to the password,<br>it is hashed first, then stored in the database for security reasons. MySQL<br>statements are used to access the database, and PDO is a framework which<br>allows for seamless use of these statements.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.23.15image.png.webp?alt=media&token=7048cb85-e844-4ef4-b29b-5e7a56178b60"/></td></tr>
<tr><td> <em>Caption:</em> <p>wrong password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.24.04image.png.webp?alt=media&token=2a469232-0cd2-4234-b599-8575388ff8c9"/></td></tr>
<tr><td> <em>Caption:</em> <p>not a registered email<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.24.41image.png.webp?alt=media&token=9fc17c9f-9c2b-4bca-94f6-f56d8a2b36d9"/></td></tr>
<tr><td> <em>Caption:</em> <p>welcomes the user by username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>This form is very similar to the previously described registration form, especially for<br>the client-side validation. The main difference is that upon submit and successful javascript<br>validation, the data which is sent to the server is used in a<br>select statement instead of insert. This is required to extract relevant fields from<br>the Users table, and retrieve the stored password to check if they match.<br>The password is then unhashed, and compared with the user inputted password, to<br>ensure that the user entered a valid password and can proceed to create<br>a session.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.25.51image.png.webp?alt=media&token=365e3b97-27e1-4e71-81b1-e5e715d47c5f"/></td></tr>
<tr><td> <em>Caption:</em> <p>log out message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.26.52image.png.webp?alt=media&token=960be038-8037-468b-aa3d-0c6fbfbddeef"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart is only accessible to logged in users, displays message to log in<br>when accessed without permission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The session variable is a superglobal variable that is initialized upon creation of<br>a session, by something like session_start(). The session_start() function will check for an<br>existing session or create one if there is none. In the code, any<br>time that a user successfully logs in and stays logged in, this function<br>is called, maintaining all variables relevant to the session, including the &#39;user&#39; array<br>which we append in login.php. However, any time a user logs out, the<br>function we defined reset_session() destroys the session. Since the session variables are no<br>initialized after this, checking this variable will show if a user is logged<br>in or not.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.29.02image.png.webp?alt=media&token=84cc0e4d-cd7c-4cb5-8e16-e865aa0ea381"/></td></tr>
<tr><td> <em>Caption:</em> <p>home.php, once entered as url, redirects immediately to login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.30.58image.png.webp?alt=media&token=9595077d-b51f-40b1-871b-570de77ac3aa"/></td></tr>
<tr><td> <em>Caption:</em> <p>no message, but inventory.php redirects if the logged in user is not admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.32.34image.png.webp?alt=media&token=9bcf964f-0a26-4ba4-9d58-e4f98d2f8f35"/></td></tr>
<tr><td> <em>Caption:</em> <p>roles include admin and shopper<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.36.48image.png.webp?alt=media&token=0e643648-02ae-4727-a018-5173e6c44e2b"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin role has role_id= 1, first entry is admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For login-protected pages, the first thing that can be run in php before<br>loading any data is a function that checks if a user is logged<br>in. This function, defined in user_helpers.php, checks if the session[user] array--which we append<br>to the global variable upon registration--is set. If it is, then the user<br>must be logged in and the user can be redirected to the protected<br>page. If not, the user is not logged in and they will not<br>get access to the page.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The same process applies to role-protected pages, because upon registration, the role id<br>was appended to the session variable. This means that after defining functions that<br>check the role of a given user session, the same check can be<br>placed before redirects or loading of role-protected pages. For example, the functions get_user_role()<br>and is_admin() are implemented in user_helpers.php to check the session variable.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.38.43image.png.webp?alt=media&token=a7ca6cdf-f813-4fc1-a7c1-cda594c59641"/></td></tr>
<tr><td> <em>Caption:</em> <p>bootstrap nav bar with drop down<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.39.51image.png.webp?alt=media&token=c2288a28-2363-488b-b196-268eb01ad772"/></td></tr>
<tr><td> <em>Caption:</em> <p>table of items for display<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.40.56image.png.webp?alt=media&token=6a04cb87-084e-4a14-85c5-ba97bdd5fd9f"/></td></tr>
<tr><td> <em>Caption:</em> <p>table formatted inventory<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>For the nav bar, I chose basic styling with bootstrap, to ensure that<br>it was responsive to resizing of the screen. The forms did not include<br>much styling, but this was something I struggled with as it was difficult<br>to override bootstrap in some ways. Other styling that was included is a<br>responsive background and responsive images for the item listing, again using bootstrap predefined<br>classes. Since I was unable to use a style sheet, I often put<br>styling in the main php file itself.<div><br></div><pre>styling for listing page</pre><pre><div style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; line-height: 19px; text-wrap: nowrap;"><pre><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">style</span><span style="color: #808080;">&gt;<br></span>&nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d7ba7d;">.background-container</span> {<br>&nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">position</span>:<br><span style="color: #ce9178;">fixed</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; <span style="color: #d4d4d4;">top</span>: <span style="color: #b5cea8;">0</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">left</span>: <span style="color: #b5cea8;">0</span>;<br>&nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">width</span>: <span<br>style="color: #b5cea8;">100%</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><span style="color: #d4d4d4;">height</span>: <span style="color: #b5cea8;">100%</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">background-image</span>: <span style="color: #dcdcaa;">url</span>(<span style="color: #ce9178;">'light-background.jpg'</span>); <span<br>style="color: #7ca668;">/* Set the background image <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">background-size</span>: <span style="color: #ce9178;">cover</span>;<br>&nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">background-repeat</span>: <span<br>style="color: #ce9178;">repeat</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><span style="color: #d4d4d4;">opacity</span>: <span style="color: #b5cea8;">0.5</span>; <span style="color: #7ca668;">/</em> Adjust the opacity value<br>(0.0 to 1.0) <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; <span style="color: #d4d4d4;">z-index</span>: <span style="color: #b5cea8;">-1</span>; <span style="color: #7ca668;">/</em> Move the<br>background container behind other content <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; }<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span<br>style="color: #d7ba7d;">.container</span> {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; <span style="color: #d4d4d4;">padding-top</span>: <span style="color: #b5cea8;">50px</span>; <span style="color: #7ca668;">/</em> Add padding to<br>prevent content from overlapping with the background <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">z-index</span>: <span style="color: #b5cea8;">1</span>; <span<br>style="color: #7ca668;">/</em> Ensure the content appears above the background <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; <span style="color: #d7ba7d;">.small-image</span> {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">width</span>: <span style="color: #b5cea8;">200px</span>; <span style="color:<br>#7ca668;">/</em> Adjust the width as needed <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">display</span>: <span style="color: #ce9178;">block</span>;<br>&nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">margin</span>: <span<br>style="color: #b5cea8;">0</span> <span style="color: #ce9178;">auto</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp;}<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:<br>#d7ba7d;">table</span> {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><span style="color: #d4d4d4;">width</span>: <span style="color: #b5cea8;">100%</span>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d4d4d4;">text-align</span>: <span style="color: #ce9178;">left</span>; <span style="color: #7ca668;">/</em><br>Center-align content within table <em>/<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; } &nbsp; <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><span style="color: #d7ba7d;">tr</span> {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; <span style="color: #d4d4d4;">border</span>: <span style="color: #b5cea8;">2px</span> <span style="color: #ce9178;">solid</span> <span style="color:<br>#ce9178;">#ffffff</span>; <span style="color: #7ca668;">/</em> Add borders to table rows */<br></span>&nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } &nbsp; &nbsp;</pre><pre>&nbsp; &nbsp; <span style="color: #808080;">&lt;/</span><span<br>style="color: #569cd6;">style</span><span style="color: #808080;">&gt;</span></pre></div></pre><div><br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.42.27image.png.webp?alt=media&token=de173d65-d201-4ede-a7db-b4a2d5307718"/></td></tr>
<tr><td> <em>Caption:</em> <p>logged out message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.43.24image.png.webp?alt=media&token=a82c086a-7d44-4388-bb62-a4d21ef96d12"/></td></tr>
<tr><td> <em>Caption:</em> <p>error 2 client side<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Although I could not get flash messages to work with errorInfo, the ones<br>that succeeded were required to give context to the user and resolve issues<br>smoothly. Instead of making the user test different input without knowing why they<br>are unable to login or create a new password, technical messages save time<br>and reduce calls to the server as well sometimes.&nbsp; I used javascript alerts<br>to make popups for the user upon errors in validation, and flash messages<br>for server-side notifications.<div><br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.45.20image.png.webp?alt=media&token=fe68d5e9-0bb7-4fd3-ae7c-56226f4d9e3e"/></td></tr>
<tr><td> <em>Caption:</em> <p>prefilled email and username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>In order to display the user&#39;s information prefilled in the form, first the<br>fields must be extracted from the table. This is done by examining the<br>$_SESSION[user] that we appended earlier; since this may be reused in the future,<br>the functions get_user_email() and get_username() are implemented in user_helpers.php. These functions retrieve the<br>information as strings, which are then used to populate the fields in the<br>html using the input attribute value. Even before the user enters anything, we<br>can hard code the default value by the following:&nbsp;<div><pre style="font-family: Consolas, &quot;Courier New&quot;,<br>monospace; line-height: 19px; white-space: pre;"><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">input</span> <span style="color: #9cdcfe;">type</span>=<span style="color:<br>#ce9178;">"email"</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"email"</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"email"</span> <span style="color:<br>#9cdcfe;">value</span>=<span style="color: #ce9178;">"</span><span style="color: #569cd6;">&lt;?php</span> <span style="color: #dcdcaa;">se</span>(<span style="color: #9cdcfe;">$email</span>); <span style="color: #569cd6;">?</span><span<br>style="color: #569cd6;">&gt;</span><span style="color: #ce9178;">"</span> <span style="color: #808080;">/&gt;</span></pre><div style="font-family: Consolas, &quot;Courier New&quot;, monospace; line-height:<br>19px; white-space: pre;"><span style="font-family: Roboto, -apple-system, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; white-space: normal;">In<br>order to use the php variable, we insert the php code with tags<br>and echo the string result so that it can be parsed successfully.</span><br></div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.54.01image.png.webp?alt=media&token=c1445316-d903-499f-b8b1-e58c0babfc9e"/></td></tr>
<tr><td> <em>Caption:</em> <p>when password and confirm password do not match<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.56.28image.png.webp?alt=media&token=daeab1cb-eeab-4229-b395-318764bc3ca6"/></td></tr>
<tr><td> <em>Caption:</em> <p>before the password is changed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T07.57.37image.png.webp?alt=media&token=01d6d2bf-567f-412b-8ae9-8fa22744389f"/></td></tr>
<tr><td> <em>Caption:</em> <p>after the password is changed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T08.44.55image.png.webp?alt=media&token=af8e54df-5d8b-4e3e-a75c-c7558cba5039"/></td></tr>
<tr><td> <em>Caption:</em> <p>after changing username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The edit logic for updating email, username, and password is to first compare<br>the newly entered value to the others in the table to ensure that<br>it is unique (in the cases of email and username) . After this<br>is validated, the information can be updated using the MySQL update statement to<br>change a particular row. This row will be identified by its primary key,<br>usually id.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-05-08T08.00.13image.png.webp?alt=media&token=80266066-2347-413e-8136-01fa1618a6cd"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/ven-deepika/projects/1/views/1">https://github.com/users/ven-deepika/projects/1/views/1</a> </td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-104-S2024/it202-milestone1-deliverable/grade/ddv4" target="_blank">Grading</a></td></tr></table>