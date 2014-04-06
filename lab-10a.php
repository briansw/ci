		<div class="lecture">
			<h2>Introduction to JavaScript</h2>
			<div class="slide-wrapper">
			<div class="slide">
				<p>HTML = organization of webpage content</p>
				<p>CSS = definition of content presentation style</p>
				<p>JavaScript = how the content interacts and behaves with the user</p>
			</div>
						<p>Separation of Concerns</p>

			</div>

			<div class="slide-wrapper">
			<div class="slide codesample">
				<p>
					&lt;script type=&quot;text/javascript&quot; src=&quot;file.js&quot;&gt;&lt;/script&gt;</p>
					<p>
&lt;script type=&quot;text/javascript&quot;&gt;<br/>
&nbsp;&nbsp;&nbsp;// insert some JavaScript here<br/>
&lt;/script&gt;
</p>

			</div>
						<p>Loading JavaScript</p>

			</div>


			<div class="slide-wrapper">
				<div class="slide">
				<img src="assets/images/console.png" alt="console" />
			</div>
						<p>Using the Console</p>

			</div>





<div class="slide-wrapper">
			<div class="slide codesample">
				<p>
				string<br />
				number<br />
				boolean<br />
				array<br />

</p>
			</div>
						<p>Data Types</p>

			</div>


			<div class="slide-wrapper">
			<div class="slide codesample">
				<p>
				"Strings are used to store textual information and must be wrapped in quote marks."<br/>
				</p><p>
				'You can use single or double quotes, so long as you open and close your string with the same mark.'
</p>

			</div>
						<p>Strings</p>

			</div>




			<div class="slide-wrapper">
				<div class="slide codesample">
					<p>
					"The leaders agreed \"to intensify further the cooperation between our intelligence services with the goal of protecting the security of both countries and of our partners, as well as protecting the privacy of our citizens,\" it added."
				</p>
				</div>
				<p>Escaping Strings</p>
			</div>


			<div class="slide-wrapper">
				<div class="slide">
					<p>
Left double quote: <span class="codesample">&amp;ldquo;</span><br>
Right double quote: <span class="codesample">&amp;rdquo;</span></p>

<p class="codesample">"Many economists say that such &amp;ldquo;first
dollar&amp;rdquo; coverage leaves beneficiaries
insensitive to costs"</p>

<p>
Left single quote: <span class="codesample">&amp;lsquo;</span><br>
Right single quote: <span class="codesample">&amp;rsquo;</span></p>

				</div>
				<p>HTML Entities</p>
			</div>



		<div class="slide-wrapper">
				<div class="slide">
					<p>
					Numbers are used to represent numerical data
</p><p>
					Integers:<br/>
					<span class="codesample">58</span>
</p><p>
					Float:<br/>
					<span class="codesample">3.14159</span>
</p>
				</div>
				<p>Numbers</p>
			</div>



					<div class="slide-wrapper">
				<div class="slide">
					<p>Booleans represent a binary value (true or false)
</p><p>
					<span class="codesample">true<br>false</span>
</p>
				</div>
				<p>Booleans</p>
			</div>


								<div class="slide-wrapper">
				<div class="slide">
					<p>
					Arrays contain other data types. They always begin with '[' and end with ']' with each element separated by a comma.
					Arrays can contain a mix of data types (you could have a string, a number, and a boolean in the same array).
</p>
<p>Empty:<br/>
					<span class="codesample">[]</span>
				</p>

				<p>Single element:<br/>
					<span class="codesample">["one"]</span>
				</p>


				<p>Multiple elements:<br/>
					<span class="codesample">["one", 2, "three", false]</span>
				</p>



				</div>
				<p>Arrays</p>
			</div>



											<div class="slide-wrapper">
				<div class="slide">

<p>
					<span class="codesample">[]</span> + number = index into array
				</p>

				<p>Javascript is a zero-indexed language:<br/>
					<span class="codesample">
						["red", "white", "blue"][0] => "red"<br/>
						["red", "white", "blue"][1] => "white"<br/>
						["red", "white", "blue"][2] => "blue"<br/>

					</span>
				</p>


				<p>So, the first element lives at index 0, the last element at one less than the array length.
				</p>



				</div>
				<p>Array Indexing</p>
			</div>



			<div class="slide-wrapper">
				<div class="slide">

<p>Declaration:<br/>
					<span class="codesample">var blackjack;</span>
				</p>


				<p>Assignment:<br/>
					<span class="codesample">blackjack = 21;</span>
				</p>

				<p>Declaration and assignment:<br/>
					<span class="codesample">var blackjack = 21;</span>
				</p>


				<p>Reassignment:<br/>
					<span class="codesample">var name = "Brendan";<br>
					name = "Brendan Griffiths";<br>
				name = "Miles";<br></span>
				</p>





				</div>
				<p>Variables</p>
			</div>








			<div class="slide-wrapper">
				<div class="slide">

<p>
					<span class="codesample">console.log("Hello World");</span>
				</p>


				<p>Console log accepts any variable or data type.
Multiple values can be strung together, separated
with a comma:<br/>
					<span class="codesample">console.log(myVar, "Hello", 7);</span>
				</p>


				</div>
				<p>Console Logging</p>
			</div>


						<div class="slide-wrapper">
				<div class="slide">

				<p>Less than:<br/>
					<span class="codesample"><</span>
				</p>

				<p>Greater than:<br/>
					<span class="codesample">></span>
				</p>


				<p>Less than or equal to:<br/>
					<span class="codesample"><=</span>
				</p>

				<p>Greater than or equal to:<br/>
					<span class="codesample">>=</span>
				</p>




				</div>
				<p>Relational Operators</p>
			</div>



		<div class="slide-wrapper">
				<div class="slide codesample">

				<p>10 == 10;<br/>
					//true
				</p>


					<p>10 == 5;<br/>
					//true
				</p>


					<p>"hello" == "hello";<br/>
					//true
				</p>


				</div>
				<p>Are Two Things Equal?</p>
			</div>






		<div class="slide-wrapper">
				<div class="slide codesample">

				<p>var name = "Brenan";<br/>
					var school = "Parsons";<br/>
					if (name == "Brendan" && school == "Parsons") {<br />
					&nbsp;&nbsp;&nbsp;console.log('Come on in!');<br />
				}
				</p>


					

				</div>
				<p>And (&&)</p>
			</div>





		<div class="slide-wrapper">
				<div class="slide codesample">

				<p>

				var overSixteen = true;<br/>
var parentsPresent = false;<br/>
if (overSixteen || parentsPresent) {<br/>
&nbsp;&nbsp;&nbsp;console.log('Amazing...you can go to an R-rated movie.');<br/>
}


				</p>


					

				</div>
				<p>Or (||)</p>
			</div>



					<div class="slide-wrapper">
				<div class="slide codesample">

				<p>


if (true) {<br/>
&nbsp;&nbsp;&nbsp;console.log('Condition is true');<br/>
}<br/><br/>
if (false) {<br/>
&nbsp;&nbsp;&nbsp;console.log('This will never execute.');<br/>
}

				</p>

				</div>
				<p>If Statement</p>
			</div>





<div class="slide-wrapper">
				<div class="slide codesample">

				<p>
var film = "The Silence of the Lambs";<br/>
if (film == "The Silence of the Lambs" || film == "Psycho") {<br/>
&nbsp;&nbsp;&nbsp;console.log('Your film is a thriller.');<br/>
} else {<br/>
&nbsp;&nbsp;&nbsp;console.log('Your film probably isn’t a thriller.');<br/>
}


				</p>

				</div>
				<p>If/Else</p>
			</div>



<div class="slide-wrapper">
				<div class="slide">

				<p>
Addition:<br>
<span class="codesample">1 + 1 = 2</span>

</p><p>
Subtraction:<br>
<span class="codesample">3 - 2 = 1</span>
</p><p>

Multiplication:<br>
<span class="codesample">5 * 3 = 15</span>

</p><p>

Division:<br/>
<span class="codesample">10 / 2 = 5</span>


				</p>

				</div>
				<p>Basic Math</p>
			</div>


			<div class="slide-wrapper">
				<div class="slide">

				<p>
Increment:<br>
<span class="codesample">myVar = myVar + 1;<br>
myVar++;</span>

</p><p>
Decrement::<br>
<span class="codesample">myVar = myVar - 1;<br>
myVar--;</span>
</p>

				</div>
				<p>Increment / Decrement (++ / --)</p>
			</div>





			<div class="slide-wrapper">
				<div class="slide codesample">

				<p>


for (var multiplier = 1; multiplier <= 10; multiplier++) {<br>
&nbsp;&nbsp;&nbsp;var result = multiplier * 6;<br>
&nbsp;&nbsp;&nbsp;console.log(result);<br>
}
</p>

				</div>
				<p>For Loops</p>
			</div>






			<div class="slide-wrapper">
				<div class="slide codesample">

				<p>

var multiplier = 1;<br>
while (multiplier <= 10) {<br>
&nbsp;&nbsp;&nbsp;var result = multiplier * 6;<br>
&nbsp;&nbsp;&nbsp;console.log(result);<br>
&nbsp;&nbsp;&nbsp;multiplier++;<br>
}
</p>

				</div>
				<p>While Loops</p>
			</div>




			<div class="slide-wrapper">
				<div class="slide codesample">

				<p>
Use a for loop when the number of iterations is
determinable.
</p>

<p>While loops should be used when the number of iterations is unknown.</p>

				</div>
				<p>For vs. While</p>
			</div>






			<div class="slide-wrapper">
				<div class="slide codesample">

				<p>

var array = [1, 2, 3];<br>
for (var counter = 0; counter < array.length; counter++) {<br>
&nbsp;&nbsp;&nbsp;console.log(array[counter]);<br>
}
</p>

				</div>
				<p>Array Iteration</p>
			</div>
















		</div> <!-- end lecture -->
		
		<div class="assignments">
			<h2>Assignments</h2>
			
			<h3>Exercise</h3>
			<p>Write a JavaScript program which uses loops, if statements, and relational operators to log (print) a pattern to the console. Consider how the program might change as it iterates through an array or number of increasing value. Upload your JavaScript program to your web space before the next time we meet. 
			</p>
			<p class="lab-due-date last">Due Week 11A</p>
		</div>