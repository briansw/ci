		<div class="lecture">
			<h2>Lecture</h2>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/server-setup-file-management.png" alt="server-setup-file-management" width="618" height="120" />
				</div>
				<p>Our standard FTP set up</p>
			</div>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/server-setup-file-management-2.png" alt="server-setup-file-management" width="618" height="120" />
				</div>
				<p>Setting up our first project</p>
			</div>



			<h3>Connecting to the server</h3>
				<p>To connect to your Parsons web space, use Fetch (or your preferred SFTP client) with the following settings:</p>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/fetch_config.jpg" alt="fetch-configuration" />
				</div>
				<p>Be sure to select <strong>SFTP</strong> from the <em>Connect using</em> drop down menu.</p>
			</div>

			<p>You can find your Username and Password for your A.PARSONS.EDU account in the "User Information" letter sent to your NewSchool email address. It should look something like this:</p>

			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/welcome.jpg" alt="welcome-email" />
				</div>
			</div>

			<h3>Basic HTML page and tags</h3>
			<p>The basic HTML page structure is as follows:</p>
			
<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css">
<div id="gist1657949" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-helloworld-html-L1" rel="file-helloworld-html-L1">1</span>            <span class="line-number" id="file-helloworld-html-L2" rel="file-helloworld-html-L2">2</span>            <span class="line-number" id="file-helloworld-html-L3" rel="file-helloworld-html-L3">3</span>            <span class="line-number" id="file-helloworld-html-L4" rel="file-helloworld-html-L4">4</span>            <span class="line-number" id="file-helloworld-html-L5" rel="file-helloworld-html-L5">5</span>            <span class="line-number" id="file-helloworld-html-L6" rel="file-helloworld-html-L6">6</span>            <span class="line-number" id="file-helloworld-html-L7" rel="file-helloworld-html-L7">7</span>            <span class="line-number" id="file-helloworld-html-L8" rel="file-helloworld-html-L8">8</span>            <span class="line-number" id="file-helloworld-html-L9" rel="file-helloworld-html-L9">9</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-helloworld-html-LC1"><span class="cp">&lt;!DOCTYPE html&gt;</span></div><div class="line" id="file-helloworld-html-LC2"><span class="nt">&lt;html&gt;</span></div><div class="line" id="file-helloworld-html-LC3">	<span class="nt">&lt;head&gt;</span></div><div class="line" id="file-helloworld-html-LC4">		<span class="nt">&lt;title&gt;</span>Hello, world.<span class="nt">&lt;/title&gt;</span></div><div class="line" id="file-helloworld-html-LC5">	<span class="nt">&lt;/head&gt;</span></div><div class="line" id="file-helloworld-html-LC6">	<span class="nt">&lt;body&gt;</span></div><div class="line" id="file-helloworld-html-LC7">		Hello, world.</div><div class="line" id="file-helloworld-html-LC8">	<span class="nt">&lt;/body&gt;</span></div><div class="line" id="file-helloworld-html-LC9"><span class="nt">&lt;/html&gt;</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1657949/raw/908ad29faa3573f6f0412d2d85bcddc892db1aad/helloworld.html" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1657949#file-helloworld-html">helloworld.html</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>


			

			<p>Below are some common HTML tags that you can use to begin building your composition and index page. <a href="samples/basictags.html" target="_blank">This page shows how they render in your browser.</a></p>
			

			<link rel="stylesheet" href="https://gist.github.com/assets/embed-4252e560c3e6f4c476a216c2bb7938cd.css">
<div id="gist1658418" class="gist">        <div class="gist-file">          <div class="gist-data gist-syntax">                <div class="file-data">      <table cellpadding="0" cellspacing="0" class="lines highlight">        <tr>          <td class="line-numbers">            <span class="line-number" id="file-tags-html-L1" rel="file-tags-html-L1">1</span>            <span class="line-number" id="file-tags-html-L2" rel="file-tags-html-L2">2</span>            <span class="line-number" id="file-tags-html-L3" rel="file-tags-html-L3">3</span>            <span class="line-number" id="file-tags-html-L4" rel="file-tags-html-L4">4</span>            <span class="line-number" id="file-tags-html-L5" rel="file-tags-html-L5">5</span>            <span class="line-number" id="file-tags-html-L6" rel="file-tags-html-L6">6</span>            <span class="line-number" id="file-tags-html-L7" rel="file-tags-html-L7">7</span>            <span class="line-number" id="file-tags-html-L8" rel="file-tags-html-L8">8</span>            <span class="line-number" id="file-tags-html-L9" rel="file-tags-html-L9">9</span>            <span class="line-number" id="file-tags-html-L10" rel="file-tags-html-L10">10</span>            <span class="line-number" id="file-tags-html-L11" rel="file-tags-html-L11">11</span>            <span class="line-number" id="file-tags-html-L12" rel="file-tags-html-L12">12</span>            <span class="line-number" id="file-tags-html-L13" rel="file-tags-html-L13">13</span>            <span class="line-number" id="file-tags-html-L14" rel="file-tags-html-L14">14</span>            <span class="line-number" id="file-tags-html-L15" rel="file-tags-html-L15">15</span>            <span class="line-number" id="file-tags-html-L16" rel="file-tags-html-L16">16</span>            <span class="line-number" id="file-tags-html-L17" rel="file-tags-html-L17">17</span>            <span class="line-number" id="file-tags-html-L18" rel="file-tags-html-L18">18</span>            <span class="line-number" id="file-tags-html-L19" rel="file-tags-html-L19">19</span>            <span class="line-number" id="file-tags-html-L20" rel="file-tags-html-L20">20</span>            <span class="line-number" id="file-tags-html-L21" rel="file-tags-html-L21">21</span>            <span class="line-number" id="file-tags-html-L22" rel="file-tags-html-L22">22</span>            <span class="line-number" id="file-tags-html-L23" rel="file-tags-html-L23">23</span>            <span class="line-number" id="file-tags-html-L24" rel="file-tags-html-L24">24</span>            <span class="line-number" id="file-tags-html-L25" rel="file-tags-html-L25">25</span>            <span class="line-number" id="file-tags-html-L26" rel="file-tags-html-L26">26</span>            <span class="line-number" id="file-tags-html-L27" rel="file-tags-html-L27">27</span>            <span class="line-number" id="file-tags-html-L28" rel="file-tags-html-L28">28</span>            <span class="line-number" id="file-tags-html-L29" rel="file-tags-html-L29">29</span>            <span class="line-number" id="file-tags-html-L30" rel="file-tags-html-L30">30</span>            <span class="line-number" id="file-tags-html-L31" rel="file-tags-html-L31">31</span>            <span class="line-number" id="file-tags-html-L32" rel="file-tags-html-L32">32</span>            <span class="line-number" id="file-tags-html-L33" rel="file-tags-html-L33">33</span>            <span class="line-number" id="file-tags-html-L34" rel="file-tags-html-L34">34</span>            <span class="line-number" id="file-tags-html-L35" rel="file-tags-html-L35">35</span>            <span class="line-number" id="file-tags-html-L36" rel="file-tags-html-L36">36</span>            <span class="line-number" id="file-tags-html-L37" rel="file-tags-html-L37">37</span>            <span class="line-number" id="file-tags-html-L38" rel="file-tags-html-L38">38</span>            <span class="line-number" id="file-tags-html-L39" rel="file-tags-html-L39">39</span>            <span class="line-number" id="file-tags-html-L40" rel="file-tags-html-L40">40</span>            <span class="line-number" id="file-tags-html-L41" rel="file-tags-html-L41">41</span>            <span class="line-number" id="file-tags-html-L42" rel="file-tags-html-L42">42</span>            <span class="line-number" id="file-tags-html-L43" rel="file-tags-html-L43">43</span>            <span class="line-number" id="file-tags-html-L44" rel="file-tags-html-L44">44</span>            <span class="line-number" id="file-tags-html-L45" rel="file-tags-html-L45">45</span>            <span class="line-number" id="file-tags-html-L46" rel="file-tags-html-L46">46</span>            <span class="line-number" id="file-tags-html-L47" rel="file-tags-html-L47">47</span>            <span class="line-number" id="file-tags-html-L48" rel="file-tags-html-L48">48</span>            <span class="line-number" id="file-tags-html-L49" rel="file-tags-html-L49">49</span>            <span class="line-number" id="file-tags-html-L50" rel="file-tags-html-L50">50</span>            <span class="line-number" id="file-tags-html-L51" rel="file-tags-html-L51">51</span>            <span class="line-number" id="file-tags-html-L52" rel="file-tags-html-L52">52</span>            <span class="line-number" id="file-tags-html-L53" rel="file-tags-html-L53">53</span>          </td>          <td class="line-data">            <pre class="line-pre"><div class="line" id="file-tags-html-LC1"><span class="nt">&lt;h1&gt;</span>This is heading 1<span class="nt">&lt;/h1&gt;</span></div><div class="line" id="file-tags-html-LC2"><span class="nt">&lt;h2&gt;</span>This is heading 2<span class="nt">&lt;/h2&gt;</span></div><div class="line" id="file-tags-html-LC3"><span class="nt">&lt;h3&gt;</span>This is heading 3<span class="nt">&lt;/h3&gt;</span></div><div class="line" id="file-tags-html-LC4"><span class="nt">&lt;h4&gt;</span>This is heading 4<span class="nt">&lt;/h4&gt;</span></div><div class="line" id="file-tags-html-LC5"><span class="nt">&lt;h5&gt;</span>This is heading 5<span class="nt">&lt;/h5&gt;</span></div><div class="line" id="file-tags-html-LC6"><span class="nt">&lt;h6&gt;</span>This is heading 6<span class="nt">&lt;/h6&gt;</span></div><div class="line" id="file-tags-html-LC7">&nbsp;</div><div class="line" id="file-tags-html-LC8"><span class="nt">&lt;p&gt;</span>This is a paragraph<span class="nt">&lt;/p&gt;</span></div><div class="line" id="file-tags-html-LC9">&nbsp;</div><div class="line" id="file-tags-html-LC10">To break<span class="nt">&lt;br</span> <span class="nt">/&gt;</span>lines<span class="nt">&lt;br</span> <span class="nt">/&gt;</span>in a<span class="nt">&lt;br</span> <span class="nt">/&gt;</span>paragraph,<span class="nt">&lt;br</span> <span class="nt">/&gt;</span>use the br element.</div><div class="line" id="file-tags-html-LC11">&nbsp;</div><div class="line" id="file-tags-html-LC12"><span class="nt">&lt;hr</span> <span class="nt">/&gt;</span></div><div class="line" id="file-tags-html-LC13">The hr tag creates a horizontal line in an HTML page.</div><div class="line" id="file-tags-html-LC14">&nbsp;</div><div class="line" id="file-tags-html-LC15"><span class="nt">&lt;em&gt;</span>This is emphasized text<span class="nt">&lt;/em&gt;</span></div><div class="line" id="file-tags-html-LC16">&nbsp;</div><div class="line" id="file-tags-html-LC17"><span class="nt">&lt;strong&gt;</span>This is strong text<span class="nt">&lt;/strong&gt;</span></div><div class="line" id="file-tags-html-LC18">&nbsp;</div><div class="line" id="file-tags-html-LC19"><span class="c">&lt;!--This is a comment. Comments are not displayed in the browser--&gt;</span></div><div class="line" id="file-tags-html-LC20">&nbsp;</div><div class="line" id="file-tags-html-LC21"><span class="nt">&lt;ol&gt;</span></div><div class="line" id="file-tags-html-LC22">  <span class="nt">&lt;li&gt;</span>This is an<span class="nt">&lt;/li&gt;</span></div><div class="line" id="file-tags-html-LC23">  <span class="nt">&lt;li&gt;</span>Ordered<span class="nt">&lt;/li&gt;</span></div><div class="line" id="file-tags-html-LC24">  <span class="nt">&lt;li&gt;</span>List<span class="nt">&lt;/li&gt;</span></div><div class="line" id="file-tags-html-LC25"><span class="nt">&lt;/ol&gt;</span></div><div class="line" id="file-tags-html-LC26">&nbsp;</div><div class="line" id="file-tags-html-LC27"><span class="nt">&lt;ul&gt;</span></div><div class="line" id="file-tags-html-LC28">  <span class="nt">&lt;li&gt;</span>This is an<span class="nt">&lt;/li&gt;</span></div><div class="line" id="file-tags-html-LC29">  <span class="nt">&lt;li&gt;</span>Unordered<span class="nt">&lt;/li&gt;</span></div><div class="line" id="file-tags-html-LC30">  <span class="nt">&lt;li&gt;</span>List<span class="nt">&lt;/li&gt;</span></div><div class="line" id="file-tags-html-LC31"><span class="nt">&lt;/ul&gt;</span></div><div class="line" id="file-tags-html-LC32">&nbsp;</div><div class="line" id="file-tags-html-LC33">The <span class="nt">&lt;code&gt;</span>code element<span class="nt">&lt;/code&gt;</span> example</div><div class="line" id="file-tags-html-LC34">&nbsp;</div><div class="line" id="file-tags-html-LC35">The <span class="nt">&lt;em&gt;</span>em element<span class="nt">&lt;/em&gt;</span> example</div><div class="line" id="file-tags-html-LC36">&nbsp;</div><div class="line" id="file-tags-html-LC37">The <span class="nt">&lt;mark&gt;</span>mark element<span class="nt">&lt;/mark&gt;</span> example</div><div class="line" id="file-tags-html-LC38">&nbsp;</div><div class="line" id="file-tags-html-LC39">The <span class="nt">&lt;small&gt;</span>small element<span class="nt">&lt;/small&gt;</span> example</div><div class="line" id="file-tags-html-LC40">&nbsp;</div><div class="line" id="file-tags-html-LC41">The <span class="nt">&lt;strong&gt;</span>strong element<span class="nt">&lt;/strong&gt;</span> example</div><div class="line" id="file-tags-html-LC42">&nbsp;</div><div class="line" id="file-tags-html-LC43">The <span class="nt">&lt;sub&gt;</span>sub element<span class="nt">&lt;/sub&gt;</span> example</div><div class="line" id="file-tags-html-LC44"> </div><div class="line" id="file-tags-html-LC45">The <span class="nt">&lt;sup&gt;</span>sup element<span class="nt">&lt;/sup&gt;</span> example</div><div class="line" id="file-tags-html-LC46">&nbsp;</div><div class="line" id="file-tags-html-LC47"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rad"</span><span class="nt">&gt;</span> Radio input</div><div class="line" id="file-tags-html-LC48">&nbsp;</div><div class="line" id="file-tags-html-LC49"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Checkbox input</div><div class="line" id="file-tags-html-LC50">&nbsp;</div><div class="line" id="file-tags-html-LC51">Text input <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"default value that goes on and on without stopping or punctuation"</span><span class="nt">&gt;</span></div><div class="line" id="file-tags-html-LC52">&nbsp;</div><div class="line" id="file-tags-html-LC53"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://www.newschool.edu"</span><span class="nt">&gt;</span>This is a link<span class="nt">&lt;/a&gt;</span></div></pre>          </td>        </tr>      </table>    </div>          </div>          <div class="gist-meta">            <a href="https://gist.github.com/griffiths/1658418/raw/477c896b11d835cdcd1e6ddffa6de32cace8f062/tags.html" style="float:right">view raw</a>            <a href="https://gist.github.com/griffiths/1658418#file-tags-html">tags.html</a>            hosted with &#10084; by <a href="https://github.com">GitHub</a>          </div>        </div></div>



			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/composition-der-dada.jpg" alt="composition-der-dada" width="300" height="410" />
				</div>
				<p>Cover of <em>der Dada vol1</em>, 1919</p>
			</div>


			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/composition-merz.jpg" alt="composition-merz" width="300" height="396" />
				</div>
				<p>Kurt Schwitters, 1924</p>
			</div>


			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/williams-abcdetc.jpg" alt="williams-abcdetc" />
				</div>
				<p><em>abcdefghijklmnopqrstuvwxyz</em>, Emmett Williams, 1963</p>
			</div>


			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/composition-Muller-Brockmann.jpeg" alt="composition-Muller-Brockmann" width="298" height="420" />
				</div>
				<p>Josef Müller-Brockmann, 1972</p>
			</div>
			
			<div class="slide-wrapper">
				<div class="slide">
					<img src="assets/images/lab/composition-the-389.png" alt="composition-the-389" width="1057" height="606" />
				</div>
				<p><a href="http://the389.com/">The 389</a>, 2011</p>
			</div>


		</div> <!-- end lecture -->
		
		<div class="assignments">
			<h2>Assignments</h2>
			
			<h3>Exercise 1</h3>
			<p>Using the elements listed above, create a formal composition that you find beautiful. Each element should be used at least ten (10) times. How can you utilize elements about the web to emphasize emotions or convey ideas? What ideas and interactions are unique to the web? In what ways can use the language of the web to convey these ideas? Consider how the composition changes while the user scrolls and resizes the browser.</p>

			<h3>Assignment 1</h3>
			<p>Build an index page for yourself using the structure and tags used in today’s lecture. Consider how the page could reflect your particular design sensibility. We will be using this page as a springboard to link to the projects you make this semester, so think about how the structure could evolve to accommodate a living archive of work.</p>
			<p>Remember to name your file <code>index.html</code> before uploading. This will allow it to be viewed at the root level of your New School webspace, for example: <code>http://a.parsons.edu/~your_net_id/</code>.</p>
		</div>
							
		<div class="readings">
			<h2>Readings</h2>			
			
			<div class="column-3up"> <!- start column -->
				<div class="file-wrapper">
					<a class="no-underline" href="assets/files/lethem_ecstasy_of_influence.pdf"><img src="assets/images/icon-pdf.gif" width="37" height="49" /></a>
					<p><a href="assets/files/lethem_ecstasy_of_influence.pdf"><em>The Ecstasy of Influence</em>, Jonathan Lethem, 2007</a></p>
					<p class="lab-due-date last">Due Week 2A</p>		
				</div>
			</div> <!- end column -->

		</div> <!-- end readings -->