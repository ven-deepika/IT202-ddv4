<table><tr><td> <em>Assignment: </em> IT202 M2 PHP-HW</td></tr>
<tr><td> <em>Student: </em> Deepika Venkatesan (ddv4)</td></tr>
<tr><td> <em>Generated: </em> 2/18/2024 11:59:09 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S2024/it202-m2-php-hw/grade/ddv4" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Make sure you have the dev/prod branches created before starting this assignment.</p><p><strong>Template Files</strong>&nbsp;You can find all 3 template files in this gist:&nbsp;<a href="https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a">https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a</a><br></p><p>Setup steps:</p><ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li><code>git checkout -b M2-PHP-HW</code></li></ol><p>You'll have 3 problems to save for this assignment.</p><p>Each problem you're given a template&nbsp;<strong>Do not edit anything in the template except where the comments tell you to</strong>.</p><p>The templates are done in such a way to make it easier to capture the output in a screenshot (if it's still not able to fit well, you can zoom out in your browser).</p><p>You'll copy each template into their own separate .php files, immediately git add, git commit these files (you can do it together) so we can capture the difference/changes between the templates and your additions. This part is required for full credit.</p><p>HW steps:</p><ol><li>Open VS Code at the root of your repository folder (you should see the Procfile and all from the Heroku setup)</li><li>In VS Code create a new folder/directory in public_html called M2</li><li>Create 3 new files in this new M2 folder (problem1.php, problem2.php, problem3.php)</li><li>Paste each template into their respective files</li><li><code>git add .</code></li><li><code>git commit -m "adding template baselines</code></li><li>Do the related work (you may do steps 8 and 9 as often as needed or you can do it all at once at the end)</li><li><code>git add .</code></li><li><code>git commit -m "completed hw"</code></li><li>When you're done push the branch<ol><li><code>git push origin M2-PHP-HW</code></li></ol></li><li>Go to heroku dev, and manually deploy the M2-PHP-HW branch</li><li>After it deploys go to&nbsp;<a href="https://ucid-dev.herokuapp.com/M2/problem1.php">https://ucid-dev.herokuapp.com/M2/problem1.php</a>&nbsp;(replace ucid with your ucid if you followed the setup instructions)</li><li>Update the URL to check that each problem file displays properly</li><li>Create the Pull Request with&nbsp;<strong>dev</strong>&nbsp;as base and&nbsp;<strong>M2-PHP-HW</strong>&nbsp;as compare</li><li>Create a new file in the M2 folder in VS Code called m2_submission.md</li><li>Fill out the below deliverable items, save the submission, and copy to markdown<ol><li>For this assignment you may get screenshots from your heroku dev instance, you do not need to move it to prod then come back and update it</li></ol></li><li>Paste the markdown into the m2_submission.md</li><li>add/commit/push the md file<ol><li><code>git add m2_submission.md</code></li><li><code>git commit -m "adding submission file"</code></li><li><code>git push origin M2-PHP-HW</code></li></ol></li><li>Merge the pull request from step 14</li><li>Create a new pull request with prod as base and dev as compare</li><li>Immediately create/merge/confirm, this is just to deploy it to prod and you don't need to adjust anything during this step</li><li>On your local machine sync the changes<ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li></ol></li><li>Submit the link to the m2_submission.md file from the prod branch to Canvas</li></ol><p><br></p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Problem 1 - Only output Odd values of the Array under "Odds output" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 2 Screenshots: Clearly screenshot the output of Problem 1 and show the edited code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-02-19T04.34.29image.png.webp?alt=media&token=8d7e3101-bd72-4871-87e6-99667c1abccc"/></td></tr>
<tr><td> <em>Caption:</em> <p>Results/output<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-02-19T04.42.39image.png.webp?alt=media&token=88282d62-484e-47b4-9cbc-62450d51d6d4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code process array<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>For each loop over the array elements and check modulo, where only elements<br>with modulo 2 equal to 1 were added to a new array called<br>arrOdd. This was then outputted in the same fashion.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Problem 2 - Only output the sum/total of the array values by assigning it to the $total variable (the number must end in 2 decimal places, if it ends in 1 it must have a 0 at the end) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 2 Screenshots: Clearly screenshot the output of Problem 2 showing the data and show the edited code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-02-19T04.55.24image.png.webp?alt=media&token=5f133ebf-7433-4f66-ae0e-d6fd8b00fb47"/></td></tr>
<tr><td> <em>Caption:</em> <p>code get total<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-02-19T04.55.39image.png.webp?alt=media&token=faf54a9e-ece7-480b-a7bf-a6933642dc0b"/></td></tr>
<tr><td> <em>Caption:</em> <p>results<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>Uses a foreach loop to iterate elements and add to the value total<br>as numbers.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Problem 3 - Output the given values as positive under the "Positive Output" message (the data otherwise shouldn't change) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 2 Screenshots: Clearly screenshot the output of Problem 3 showing the data and show the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-02-19T04.48.05image.png.webp?alt=media&token=b1c5f1b1-c405-4dfe-8040-c718d081c386"/></td></tr>
<tr><td> <em>Caption:</em> <p>code bepositive<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fddv4%2F2024-02-19T04.48.27image.png.webp?alt=media&token=2445dc5a-c812-4c21-86a8-42e888b4d3c8"/></td></tr>
<tr><td> <em>Caption:</em> <p>results<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>Iterate over array values using foreach loop and used the function abs() to<br>get the absolute value and add to a new array which is then<br>outputted. Data type conversion is done during the process of adding the values<br>to a new array.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Misc Items </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add the prod URL for problem1.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ven-deepika/IT202-ddv4/blob/M2-PHP-HW/M1/public_html/M2/problem1.php">https://github.com/ven-deepika/IT202-ddv4/blob/M2-PHP-HW/M1/public_html/M2/problem1.php</a> </td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the prod URL for problem2.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ven-deepika/IT202-ddv4/blob/M2-PHP-HW/M1/public_html/M2/problem2.php">https://github.com/ven-deepika/IT202-ddv4/blob/M2-PHP-HW/M1/public_html/M2/problem2.php</a> </td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the prod URL for problem3.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ven-deepika/IT202-ddv4/blob/M2-PHP-HW/M1/public_html/M2/problem3.php">https://github.com/ven-deepika/IT202-ddv4/blob/M2-PHP-HW/M1/public_html/M2/problem3.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Pull Request URL for M2-PHP-HW to dev</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Talk about what you learned, any issues you had, how you resolve them</td></tr>
<tr><td> <em>Response:</em> <p>I learned how to loop arrays using php, specifically with the foreach loop.<br>Also, simple addition, adding values to an array and creating empty arrays, as<br>well as using the absolute value function. Echoing output was also practiced in<br>this assignment.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S2024/it202-m2-php-hw/grade/ddv4" target="_blank">Grading</a></td></tr></table>
