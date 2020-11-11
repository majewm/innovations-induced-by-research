        <div class="col-sm-3 zero_padding_right">
            <nav class="nav-sidebar navbar-custom">
                <ul class="nav">
				
                    <?php if ($menuoption=="1") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="#">
					<?php if ($menuoption=="1") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					General Information</div></a></li>
                    
					<?php if ($menuoption=="2") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="topics">
					<?php if ($menuoption=="2") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Conference Topics</div></a></li>
					
                    <?php if ($menuoption=="3") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="committees">
					<?php if ($menuoption=="3") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Organizing and International Scientific Committees</div></a></li>					
                    
					<?php if ($menuoption=="4") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="cfp">
					<?php if ($menuoption=="4") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Call for Papers</div></a></li>
                    
					<li class="nav-divider"></li>
                    
					<?php if ($menuoption=="5") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="publication">
					<?php if ($menuoption=="5") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Conference Paper Publication</div></a></li>
                    
					<?php if ($menuoption=="6") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="dates">
					<?php if ($menuoption=="6") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Important Dates <span class="badge pull-right">Updated</span></div></a></li>
                    
					<?php if ($menuoption=="7") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="instructions">
					<?php if ($menuoption=="7") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Instructions for Authors</div></a></li>
                    
					<li class="nav-divider"></li>					
                    
					<?php if ($menuoption=="8") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="submission">
					<?php if ($menuoption=="8") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Paper Submission <span class="badge pull-right">Not yet open</span></div></a></li>
                    
					<li class="nav-divider"></li>
					
					<?php if ($menuoption=="9") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="registration">
					<?php if ($menuoption=="9") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Registration <span class="badge pull-right">Not yet open</span></div></a></li>
					
					<?php if ($menuoption=="10") {echo "<li class='active'>";} else {echo "<li>";}?>
					<a href="participation">
					<?php if ($menuoption=="10") {echo "<div id='mytextactivedef1'>";} else {echo "<div id='mytextdef1'>";}?>
					Participation Description</div></a></li>					
					
                </ul>
            </nav>
        </div>
