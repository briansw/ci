
		<div class="discussion">
			<h2>Discussion</h2>
			<div class="slide-wrapper">
				<div class="discussion-slide">
					<img src="assets/images/lab/lethem_ecstasy_of_influence-1.jpg" />				
				</div>
			</div>
		</div>

		<div class="lecture">
			<h2>Lecture</h2>

			<div class="slide-wrapper">
				<div class="slide">
					<p>HTML stands for Hyper Text Markup Language. <em>Markup</em> is the key word in HTML, because HTML describes the content of the page.</p>
				</div>
			</div>
			
			<div class="slide-wrapper">
				<div class="slide">
					<p>CSS stands for Cascading Style Sheets. Here, <em>Style</em> is the key word. CSS styles the page's contents.</p> 
				</div>
			</div>

			<p>CSS (<code>.css</code>) files are linked to your HTML page by using the <code>&lt;link&gt;</code> tag: <br /> <br />
				<code>&lt;link href=&quot;assets/css/style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;</code><br /> <br />
				 The <code>&lt;link&gt;</code> tag should always live inside the <code>&lt;head&gt;</code> of your HTML document, as seen here:</p>

		<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css">
		<div id="gist4704718" class="gist">        
			<div class="gist-file">          
				<div class="gist-data gist-syntax">                
					<div class="file-data">      
						<table cellpadding="0" cellspacing="0" class="lines highlight">        
							<tr>          
								<td class="line-numbers">            
									<span class="line-number" id="file-1-index-html-L1" rel="file-1-index-html-L1">1</span>            
									<span class="line-number" id="file-1-index-html-L2" rel="file-1-index-html-L2">2</span>            
									<span class="line-number" id="file-1-index-html-L3" rel="file-1-index-html-L3">3</span>            <span class="line-number" id="file-1-index-html-L4" rel="file-1-index-html-L4">4</span>            <span class="line-number" id="file-1-index-html-L5" rel="file-1-index-html-L5">5</span>            <span class="line-number" id="file-1-index-html-L6" rel="file-1-index-html-L6">6</span>            <span class="line-number" id="file-1-index-html-L7" rel="file-1-index-html-L7">7</span>            <span class="line-number" id="file-1-index-html-L8" rel="file-1-index-html-L8">8</span>            <span class="line-number" id="file-1-index-html-L9" rel="file-1-index-html-L9">9</span>            <span class="line-number" id="file-1-index-html-L10" rel="file-1-index-html-L10">10</span>            <span class="line-number" id="file-1-index-html-L11" rel="file-1-index-html-L11">11</span>            <span class="line-number" id="file-1-index-html-L12" rel="file-1-index-html-L12">12</span>            <span class="line-number" id="file-1-index-html-L13" rel="file-1-index-html-L13">13</span>            <span class="line-number" id="file-1-index-html-L14" rel="file-1-index-html-L14">14</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-1-index-html-LC1"><span class="cp">&lt;!doctype html&gt;</span></div><div class="line" id="file-1-index-html-LC2"><span class="nt">&lt;html&gt;</span></div><div class="line" id="file-1-index-html-LC3"> </div><div class="line" id="file-1-index-html-LC4"><span class="nt">&lt;head&gt;</span></div><div class="line" id="file-1-index-html-LC5">    <span class="nt">&lt;title&gt;</span>Core Interaction<span class="nt">&lt;/title&gt;</span></div><div class="line" id="file-1-index-html-LC6">    <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;assets/css/global.css&quot;</span><span class="nt">&gt;</span></div><div class="line" id="file-1-index-html-LC7"><span class="nt">&lt;/head&gt;</span></div><div class="line" id="file-1-index-html-LC8"> </div><div class="line" id="file-1-index-html-LC9"><span class="nt">&lt;body&gt;</span></div><div class="line" id="file-1-index-html-LC10">&nbsp;</div><div class="line" id="file-1-index-html-LC11">&nbsp;</div><div class="line" id="file-1-index-html-LC12"> </div><div class="line" id="file-1-index-html-LC13"><span class="nt">&lt;/body&gt;</span></div><div class="line" id="file-1-index-html-LC14"><span class="nt">&lt;/html&gt;</span></div></pre>          </td>        
							</tr>      
						</table>    
					</div>          
				</div>          
				<div class="gist-meta">            
					<a href="https://gist.github.com/zackseuberling/4704718/raw/0c39d2862030493b124dfd00d9ddb59c512b404c/1-index.html" style="float:right">view raw</a>            
					<a href="https://gist.github.com/zackseuberling/4704718#file-1-index-html">1-index.html</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          
				</div>        
			</div> 
			</div>     
			

<h3>CSS syntax</h3>	
			
		<p>
			CSS syntax has three main components: <strong>selectors, properties, and values</strong>. <strong>Selectors</strong> can be any HTML element, for example: <code>p, a, hr, strong, and h1</code> are all selectors. For each selector, you can specify <strong>properties</strong>, such as <code>color, font-family, font-size,</code> etc. Each property is given a <strong>value</strong>, such as <code>blue, "Arial",  17px,</code> etc.
</p>
	
	<p>In the example below, <strong>p</strong> is our selector, <strong>color, font-family, and font-size</strong> are our properties, and <strong>blue, "Arial",  and 17px,</strong> are our values. </p>

	<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css"><div id="gist1765922" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-cssdef-css-L1" rel="file-cssdef-css-L1">1</span>            <span class="line-number" id="file-cssdef-css-L2" rel="file-cssdef-css-L2">2</span>            <span class="line-number" id="file-cssdef-css-L3" rel="file-cssdef-css-L3">3</span>            <span class="line-number" id="file-cssdef-css-L4" rel="file-cssdef-css-L4">4</span>            <span class="line-number" id="file-cssdef-css-L5" rel="file-cssdef-css-L5">5</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-cssdef-css-LC1"><span class="nt">p</span> <span class="p">{</span></div><div class="line" id="file-cssdef-css-LC2">	<span class="k">color</span><span class="o">:</span> <span class="nb">blue</span><span class="p">;</span></div><div class="line" id="file-cssdef-css-LC3">	<span class="k">font-family</span><span class="o">:</span> <span class="n">Arial</span><span class="o">,</span> <span class="k">sans-serif</span><span class="p">;</span></div><div class="line" id="file-cssdef-css-LC4">	<span class="k">font-size</span><span class="o">:</span> <span class="m">17px</span><span class="p">;</span></div><div class="line" id="file-cssdef-css-LC5"><span class="p">}</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1765922/raw/9e718bed59c0986c655614c6206d5afec3765ca8/cssdef.css" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1765922#file-cssdef-css">cssdef.css</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>


			<p style="color:blue; font-family:'Arial'; font-size:17px;">This is how your browser renders the above style.</p>
<p>
			Keep in mind, if this CSS file were attached to this page, it would apply the above styling to every paragraph within the document.
</p><p>
			CSS, like HTML, can contain comments. To open a comment, type <code>/*</code>. To close, type <code>*/</code>. 
</p>



			<h3>Classes and IDs</h3>	
	
			<p>You can also define your own selectors using classes and IDs. Classes and IDs are HTML attributes, like <code>src</code> or <code>href</code>. The big difference between classes and IDs is that <strong>classes</strong> are repeatable, whereas <strong>IDs</strong> can be used only once. You can attach a class or an ID to any HTML element like this:</p>

<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css"><div id="gist1766180" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-classes_ids-html-L1" rel="file-classes_ids-html-L1">1</span>            <span class="line-number" id="file-classes_ids-html-L2" rel="file-classes_ids-html-L2">2</span>            <span class="line-number" id="file-classes_ids-html-L3" rel="file-classes_ids-html-L3">3</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-classes_ids-html-LC1"><span class="nt">&lt;p</span> <span class="na">id=</span><span class="s">&quot;intro&quot;</span><span class="nt">&gt;</span>Hi, I&#39;m an introduction!<span class="nt">&lt;/p&gt;</span></div><div class="line" id="file-classes_ids-html-LC2"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;normal&quot;</span><span class="nt">&gt;</span>I&#39;m a &#39;normal&#39; block of text.<span class="nt">&lt;/p&gt;</span></div><div class="line" id="file-classes_ids-html-LC3"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;indent&quot;</span><span class="nt">&gt;</span>I&#39;m a special block of text.<span class="nt">&lt;/p&gt;</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1766180/raw/980c3d67bb8f2b035287d74b34aa3ae5026ff32f/classes_ids.html" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1766180#file-classes_ids-html">classes_ids.html</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>
		
		<p>
			To reference an ID in your CSS document, you must use a hash tag as a prefix (ie: <code>#intro</code>). To reference a class, use a period as a prefix (ie: <code>.normal</code>). 
			</p>
			<p>
			Now I can use the selector <code>#intro</code> to control the appearance of the first paragraph, the selector <code>.normal</code> to control the second, and the selector <code>.indent</code> to control the third. For example:
</p>
<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css"><div id="gist1766254" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-intro_normal_indent-css-L1" rel="file-intro_normal_indent-css-L1">1</span>            <span class="line-number" id="file-intro_normal_indent-css-L2" rel="file-intro_normal_indent-css-L2">2</span>            <span class="line-number" id="file-intro_normal_indent-css-L3" rel="file-intro_normal_indent-css-L3">3</span>            <span class="line-number" id="file-intro_normal_indent-css-L4" rel="file-intro_normal_indent-css-L4">4</span>            <span class="line-number" id="file-intro_normal_indent-css-L5" rel="file-intro_normal_indent-css-L5">5</span>            <span class="line-number" id="file-intro_normal_indent-css-L6" rel="file-intro_normal_indent-css-L6">6</span>            <span class="line-number" id="file-intro_normal_indent-css-L7" rel="file-intro_normal_indent-css-L7">7</span>            <span class="line-number" id="file-intro_normal_indent-css-L8" rel="file-intro_normal_indent-css-L8">8</span>            <span class="line-number" id="file-intro_normal_indent-css-L9" rel="file-intro_normal_indent-css-L9">9</span>            <span class="line-number" id="file-intro_normal_indent-css-L10" rel="file-intro_normal_indent-css-L10">10</span>            <span class="line-number" id="file-intro_normal_indent-css-L11" rel="file-intro_normal_indent-css-L11">11</span>            <span class="line-number" id="file-intro_normal_indent-css-L12" rel="file-intro_normal_indent-css-L12">12</span>            <span class="line-number" id="file-intro_normal_indent-css-L13" rel="file-intro_normal_indent-css-L13">13</span>            <span class="line-number" id="file-intro_normal_indent-css-L14" rel="file-intro_normal_indent-css-L14">14</span>            <span class="line-number" id="file-intro_normal_indent-css-L15" rel="file-intro_normal_indent-css-L15">15</span>            <span class="line-number" id="file-intro_normal_indent-css-L16" rel="file-intro_normal_indent-css-L16">16</span>            <span class="line-number" id="file-intro_normal_indent-css-L17" rel="file-intro_normal_indent-css-L17">17</span>            <span class="line-number" id="file-intro_normal_indent-css-L18" rel="file-intro_normal_indent-css-L18">18</span>            <span class="line-number" id="file-intro_normal_indent-css-L19" rel="file-intro_normal_indent-css-L19">19</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-intro_normal_indent-css-LC1"><span class="nf">#intro</span> <span class="p">{</span></div><div class="line" id="file-intro_normal_indent-css-LC2">	<span class="k">color</span><span class="o">:</span> <span class="m">#FF0000</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC3">	<span class="k">font-family</span><span class="o">:</span> <span class="s2">&quot;Times New Roman&quot;</span><span class="o">,</span> <span class="k">serif</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC4">	<span class="k">font-size</span><span class="o">:</span><span class="m">48px</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC5"><span class="p">}</span></div><div class="line" id="file-intro_normal_indent-css-LC6">&nbsp;</div><div class="line" id="file-intro_normal_indent-css-LC7"><span class="nc">.normal</span> <span class="p">{</span></div><div class="line" id="file-intro_normal_indent-css-LC8">	<span class="k">color</span><span class="o">:</span> <span class="m">#999999</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC9">	<span class="k">font-family</span><span class="o">:</span> <span class="n">Arial</span><span class="o">,</span> <span class="k">sans-serif</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC10">	<span class="k">font-size</span><span class="o">:</span> <span class="m">15px</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC11"><span class="p">}</span></div><div class="line" id="file-intro_normal_indent-css-LC12">&nbsp;</div><div class="line" id="file-intro_normal_indent-css-LC13"><span class="nc">.indent</span> <span class="p">{</span></div><div class="line" id="file-intro_normal_indent-css-LC14">	<span class="k">color</span><span class="o">:</span> <span class="nb">purple</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC15">	<span class="k">font-family</span><span class="o">:</span> <span class="n">Arial</span><span class="o">,</span> <span class="k">sans-serif</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC16">	<span class="k">font-weight</span><span class="o">:</span> <span class="k">bold</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC17">	<span class="k">font-size</span><span class="o">:</span> <span class="m">18px</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC18">	<span class="k">padding-left</span><span class="o">:</span><span class="m">40px</span><span class="p">;</span></div><div class="line" id="file-intro_normal_indent-css-LC19"><span class="p">}</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1766254/raw/3bdfd80d4943f8adebf0c6248609849ed548ab14/intro_normal_indent.css" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1766254#file-intro_normal_indent-css">intro_normal_indent.css</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>
<p>

			Applying these styles yields the following:
		</p>
			<p id="intro" style='color: #FF0000;font-family: "Times New Roman", serif;font-size:48px;'>Hi, I'm an introduction!</p>
			<p class="normal" style="color: #999999;font-family: Arial, sans-serif;font-size: 15px;">I'm a 'normal' block of text.</p>
			<p class="indent" style="color: purple;font-family: Arial, sans-serif;font-weight: bold;font-size: 18px;padding-left:40px;">I'm an indented block of text.</p>


			
						
			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/box-model.png" />
				</div>
				<p>The box model</p>
			</div>
			
			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/refine-comp-george-herbert.jpeg" />
				</div>
				<p>George Herbert's "Easter Wings", printed in 1633</p>
			</div>
			
			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/refine-comp-emmett-williams.jpeg" alt="refine-comp-emmett-williams" width="550" height="558" />
				</div>
				<p>Emmett Williams, "Meditation No. 2"</p>
			</div>
		


		</div>
		
		<div class="assignments">
			<h2>Assignments</h2>
			
			<h3>Exercise 2</h3>
			<p>With the addition of CSS, refine your composition. Do <em>not</em> overwrite your original composition. What were you trying to achieve in the original? How we can use CSS attributes to push those ideas further.</p>
			<p class="lab-due-date last">Due Week 3A</p>
		</div>
		
		<div class="readings">
			<h2>Readings</h2>			
			
			<div class="column-3up"> <!- start column -->
				<div class="file-wrapper">
					<p><a href="http://learn.shayhowe.com/html-css/box-model"><em>Box Model & Positioning</em>, Shay Howe</a></p>
					<p class="lab-due-date last">Due Week 3A</p>
				</div>
			</div> <!- end column -->

		</div> <!-- end readings -->
		
