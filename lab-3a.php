		<div class="lecture">
			<h2>Lecture</h2>

			<div class="slide-wrapper">


            <h3>Floating</h3>   
    
            <p>Using the CSS float property allows us to position elements next to each other. For example:</p>

				<div class="slide">
					<img src="assets/images/lab/positioning-columns.png" />				
				</div>
				<p>In this case, the two divs are floated <strong>left</strong>. Elements can be floated to the left or right, allowing content to flow around their containing box. The CSS code for the above is as follows:</p>
<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css">
<div id="gist1877847" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-floatingboxes-css-L1" rel="file-floatingboxes-css-L1">1</span>            <span class="line-number" id="file-floatingboxes-css-L2" rel="file-floatingboxes-css-L2">2</span>            <span class="line-number" id="file-floatingboxes-css-L3" rel="file-floatingboxes-css-L3">3</span>            <span class="line-number" id="file-floatingboxes-css-L4" rel="file-floatingboxes-css-L4">4</span>            <span class="line-number" id="file-floatingboxes-css-L5" rel="file-floatingboxes-css-L5">5</span>            <span class="line-number" id="file-floatingboxes-css-L6" rel="file-floatingboxes-css-L6">6</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-floatingboxes-css-LC1"><span class="nt">width</span><span class="nd">:100px</span><span class="o">;</span></div><div class="line" id="file-floatingboxes-css-LC2"><span class="nt">height</span><span class="nd">:100px</span><span class="o">;</span></div><div class="line" id="file-floatingboxes-css-LC3"><span class="nt">margin</span><span class="nd">:20px</span><span class="o">;</span></div><div class="line" id="file-floatingboxes-css-LC4"><span class="nt">padding</span><span class="nd">:20px</span><span class="o">;</span></div><div class="line" id="file-floatingboxes-css-LC5"><span class="nt">float</span><span class="nd">:left</span><span class="o">;</span></div><div class="line" id="file-floatingboxes-css-LC6"><span class="nt">background-color</span><span class="nd">:yellow</span><span class="o">;</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1877847/raw/04e74735ef6babd873edeb67aa823875402cae7b/floatingboxes.css" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1877847#file-floatingboxes-css">floatingboxes.css</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>


            <h3>Review: Calculating the width of an element</h3>    
            
            <p>
When you set the width and height properties of an element with CSS, you just set the width and height of the content area. To calculate the full size of an element, you must also add the padding, borders and margins.
            
            </p>
            <p>
        <div style="width:250px; padding:10px; border:5px solid gray; margin:10px;">This box has a width of 250px, a margin of 10px, a border of 5px, and padding of 10px.</div>
           
             </p>
            <p>
            	The CSS for the box above is as follows:
<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css">
<div id="gist1873979" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-samplebox-css-L1" rel="file-samplebox-css-L1">1</span>            <span class="line-number" id="file-samplebox-css-L2" rel="file-samplebox-css-L2">2</span>            <span class="line-number" id="file-samplebox-css-L3" rel="file-samplebox-css-L3">3</span>            <span class="line-number" id="file-samplebox-css-L4" rel="file-samplebox-css-L4">4</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-samplebox-css-LC1"><span class="nt">width</span><span class="nd">:250px</span><span class="o">;</span></div><div class="line" id="file-samplebox-css-LC2"><span class="nt">padding</span><span class="nd">:10px</span><span class="o">;</span></div><div class="line" id="file-samplebox-css-LC3"><span class="nt">border</span><span class="nd">:5px</span> <span class="nt">solid</span> <span class="nt">gray</span><span class="o">;</span></div><div class="line" id="file-samplebox-css-LC4"><span class="nt">margin</span><span class="nd">:10px</span><span class="o">;</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1873979/raw/7e7ce4871542b3faebe189dd6f49c485f94ff8b3/samplebox.css" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1873979#file-samplebox-css">samplebox.css</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>
          </p>
            <p>
            To calculate the total width we would add the following:<br /><code>
             250px (width)<br />
            + 20px (left and right padding)<br />
            + 10px (left and right border)<br />
            + 20px (left and right margin)<br />
            =  300px</code>
                </p>

			<div class="slide-wrapper">
				<div class="slide">
					<p>Debugging</p>
				</div>
			</div>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/debug-inspect-element.png" />				
				</div>
				<p>Chrome's inspect element opens…</p>
			</div>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/debug-google-chrome.png" />				
				</div>
				<p>Chrome development tools</p>
			</div>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/debug-changing-css.png" />
				</div>
				<p>Chrome development tools</p>
			</div>

		</div>
		
		<div class="assignments">
			<h2>Assignments</h2>
			
			<h3>Exercise 3</h3>
			<p>Design a web site that archives each classmate's composition from last week's assignment. Your archive should include a static image of each student's composition and a link to the HTML version of the composition. In addition, the following information should also be included: title, author, email address, and any other content appropriate to your design. For this assignment, you should analyze all of the compositions and decide on an organizing principle that your site will be based on&mdash;try to find a system more interesting than alphabetical order.</p>
			<p class="lab-due-date last">Due Week 4A by 9AM &mdash; a PDF of 3 design ideas.</p>		
		</div>
