		<div class="lecture">
			<h2>JavaScript: Functions, Objects, jQuery</h2>
			<div class="slide-wrapper">
			<div class="slide left">
				<p>Defines a specific set of reusable tasks</p>
				<p>Input parameters</p>
				<p>Do stuff, return data</p>
			</div>
						<p>What is a function?</p>

			</div>



			<div class="slide-wrapper">
				<div class="slide left">



				<p>
					<span class="codesample">

						function functionName(arg1, arg2) {<br/>
&nbsp;&nbsp;&nbsp;// body of function<br/>
}
					</span>
				</p>


				<p>Function: keyword, like var
				</p>

				<p>Function Name
				</p>

				<p>Body for execution, like an if statement
				</p>



				</div>
				<p>Function Syntax</p>
			</div>







			<div class="slide-wrapper">
			<div class="slide codesample">
				<p>
function myFunction() {<br/>
&nbsp;&nbsp;&nbsp;console.log("Hello world!");<br/>
}
</p>
<p>
myFunction();<br/>
// use of parenthesis actually calls the function
</p>
<p>
myFunction;<br/>
// just outputs the function definition
</p>


			</div>
						<p>Running Functions</p>

			</div>







			<div class="slide-wrapper">
			<div class="slide codesample">
				<p>


					function addNumbers(num1, num2) {<br/>
&nbsp;&nbsp;&nbsp;var sum = num1 + num2;<br/>
&nbsp;&nbsp;&nbsp;console.log(sum);<br/>
}
</p>
<p>

addNumbers(4, 5);<br/>
// returns 9 to the console
</p>
<p>

addNumbers(10, 12);<br/>
// returns 22 to the console
</p>



			</div>
						<p>Input Parameters</p>

			</div>





<div class="slide-wrapper">
				<div class="slide left">





				<p>We often want to directly use the data the function
creates. The “return” method does just that.
				</p>

				
				<p>
					<span class="codesample">

						function add(num1, num2) {<br/>
&nbsp;&nbsp;&nbsp;var sum = num1 + num2;<br/>
&nbsp;&nbsp;&nbsp;return sum;<br/>
}<br/>
<br/>
add(1, 2);<br/>
// returns 3<br/><br/>
var sum = add(40, 50);

						
					</span>
				</p>


				</div>
				<p>Returning Data</p>
			</div>





<div class="slide-wrapper">
			<div class="slide codesample">
				<p>


				var emptyObject = {};<br/>
				//empty<br/>
<br/>
				var person = {<br/>
				&nbsp;&nbsp;&nbsp;name: "Brendan",<br/>
				&nbsp;&nbsp;&nbsp;age: 30,<br/>
				&nbsp;&nbsp;&nbsp;gender: "Male",<br/>
				&nbsp;&nbsp;&nbsp;currentLocation: "New York, NY"<br/>
			}
</p>


			</div>
						<p>JavaScript Objects</p>

			</div>






			<div class="slide-wrapper">
				<div class="slide left">



				<p>
					<span class="codesample">
{ name: "Brendan" }
					</span>
				</p>


				<p>Key = <span class="codesample">name</span>
				</p>

				<p>Value = <span class="codesample">Brendan</span>
				</p>




				</div>
				<p>Key Value Pairs</p>
			</div>





<div class="slide-wrapper">
			<div class="slide codesample">
				<p>

var person = { name: "Brendan" };<br/>
<br/>
person.name;<br/>
// returns "Brendan"<br/>
<br/>
person.name = "Brian";<br/>
// person now stores "Brian" as value for name
</p>


			</div>
						<p>Object Access and Manipulation</p>

			</div>









<div class="slide-wrapper">
				<div class="slide">
				<img src="assets/images/money.jpg" alt="jQuery">
			</div>
						<p>jQuery</p>

			</div>





			<div class="slide-wrapper">
				<div class="slide left">
					<p>Find elements (traverse the DOM):<br/><span class="codesample">
$("&lt;css selector&gt;");
</span>
				</p>
				<p>Manipulate those elements:<br/>
					<span class="codesample">
.css(), .html()</span>
				</p>
				</div>
				<p>Basic jQuery Syntax</p>
			</div>




						<div class="slide-wrapper">
				<div class="slide left">

				
				<p><span class="codesample">
$("&lt;css selector&gt;");
</span>
				<br/>Returns results in array</p>



				<p>
					<span class="codesample">
$("h1");<br/>
// finds all h1 header elements<br/><br/>
$(".header .nav");<br/>
// finds class .nav in .header</span>
				</p>
				</div>
				<p>Finding Elements</p>
			</div>



									<div class="slide-wrapper">
				<div class="slide left">

				
				<p><span class="codesample">
.html("&lt;html string&gt;")
</span>
				<br/>Inserts (overwrites) HTML in selected elements</p>



				<p>
					<span class="codesample">
.html()<br/></span>
Returns all HTML of selected element as a string
				</p>
				</div>
				<p>Editing HTML</p>
			</div>


	<div class="slide-wrapper">
				<div class="slide left">

				
				<p><span class="codesample">
.css({"&lt;propertyName&gt;" : "&lt;rule&gt;",<br />"&lt;otherPropertyName&gt;" : "&lt;otherRule&gt;"})
</span>
				<br/>Changes inline CSS values for selected elements</p>



				<p>
					<span class="codesample">
.css("&lt;propertyName&gt;")<br/></span>
Returns value of CSS property as a string
				</p>
				</div>
				<p>Editing CSS</p>
			</div>



				<div class="slide-wrapper">
				<div class="slide left">

				
				<p><span class="codesample">
.hide()
</span>
				<br/>Hides all matched elements by setting their inline
style to <span class="codesample">display: none;</span></p>



				<p>
					<span class="codesample">
.show()</span><br/>
Reveals matched elements by switching their
display property to <span class="codesample">block/inline;</span>
				</p>


				<p>
					<span class="codesample">
.remove()<br/></span>
Removes the matched element(s) from the DOM entirely</span>
				</p>
				</div>
				<p>Hide, Show, and Remove</p>
			</div>




				<div class="slide-wrapper">
				<div class="slide left">

				
				<p><span class="codesample">
.addClass("className")
</span>
				<br/>Adds class to all matched elements<br />
			Note: in this case, you should not use a period preceding your class name

</p>



				<p>
					<span class="codesample">
.removeClass("className")</span><br/>
Removes class from all matched elements<br/>

				</p>


				<p>
					<span class="codesample">
.toggleClass("className")<br/></span>
Adds class if not currently applied, otherwise removes it<br/>
				</p>
				</div>
				<p>Manipulating Classes</p>
			</div>



				<div class="slide-wrapper">
				<div class="slide left">

				
				<p><span class="codesample">
.append("content")
</span>
				<br/>Inserts content at the end of each matched
element</p>



				<p>
					<span class="codesample">
.prepend("content")</span><br/>
Inserts content at the beginning of each matched
element
				</p>

				</div>
				<p>DOM Insertion</p>
			</div>




			<div class="slide-wrapper">
			<div class="slide codesample">
				<p>
$(document).ready(function() {<br/>
&nbsp;&nbsp;&nbsp;// lets run some stuff<br/>
});

</p>


			</div>
						<p>Are You Ready?</p>

			</div>


				<div class="slide-wrapper">
				<div class="slide left">

				<p><span class="codesample">
.click(function() {<br/>
	&nbsp;&nbsp;&nbsp;// do stuff<br/>
})
			</span><br/>
User has pressed and released the mouse button
</p>


				<p><span class="codesample">
.mousedown(function() {})			</span><br/>
Mouse button is pressed over the element</p>

				<p><span class="codesample">
.mouseup(function() {})			</span><br/>
Mouse button is released over the element</p>


				<p><span class="codesample">
.mousemove(function() {})			</span><br/>
User has moved the mouse over the element</p>



				<p><span class="codesample">
.mouseenter(function() {})			</span><br/>
Mouse has entered the target element</p>


				<p><span class="codesample">
.mouseleave(function() {})			</span><br/>
Mouse has left the target element</p>






				</div>
				<p>Mouse Events</p>
			</div>





			<div class="slide-wrapper">
			<div class="slide codesample">
				<p>

					$(".theElement").click(function(event) {<br/>
&nbsp;&nbsp;&nbsp;event.preventDefault();<br/>
});

</p>


			</div>
						<p>Preventing Default Behavior</p>

			</div>







		</div> <!-- end lecture -->
		
		<div class="assignments">
			<h2>Assignments</h2>
			
			<h3>Exercise</h3>
			<p>Download the jQuery exercise package below. Open the js/script.js file and follow the instructions provided. You may not edit any files other than the script.js file to complete the exercise. Upload your completed script.js file to your web space before the next time we meet. 
			</p>
			        <p><a href="assets/files/jquery_exercise.zip">Download jQuery exercise package</a></p>

			<p class="lab-due-date last">Due Week 14B</p>
		</div>