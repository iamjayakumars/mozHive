<?php
$path = "http://hive.mozillaindia.org";
$footer=<<<FOOTER
<div class="mozH-footer-wrap">
		<div class="mozH-footer">
			<div class="mozH-lfloat mozH-s">
				<h3>Partners</h3>
				<div class="mozH-partner-list">
					<ul class="mozH-noStyle mozH-partners">
						<li>
							<a href="http://www.jaaga.in/"><img src="http://www.jaaga.in/sites/default/files/jaaga%20logo%20200pix%20short.jpg"/></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="mozH-rfloat mozH-sponsor">
			<h3>Signup for updates</h3>
			<form action="./Signup" id="signup">
				<input type="text" name="name" placeholder="Full Name" aria-label="Full Name"/>
				<input type="text" name="email" placeholder="Email Address" aria-label="Email Address"/>
				<input type="submit" value="Signup"/>
			</form>
			</div>
		</div>
	</div>
	<div class="mozH-support-wrap">
		<div class="mozH-support">
			<div class="mozH-lfloat" style="margin-top:-22px;">
				<img src="$path/makerParty.png" class="mozH-lfloat" width="120"/>
				<div class="mozH-lfloat mozH-fT">&copy; All rights reserved<br/>Mozilla India Community</div>
			</div>
			<div class="mozH-rfloat">
				<a href="http://mozilla.org/"><img src="http://mozorg.cdn.mozilla.net/media/img/home/title-wordmark.png" width="120" border="0"/></a>
			</div>
		</div>
	</div>
</div>
FOOTER;
