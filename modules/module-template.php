
<?php echo "<div class='module' id='" . $module_name . "'>" ?>
  <div class="row-fluid">
    <div class="span12 module-header">
      <h3>
        <?php echo "<a href='http://christensenacademy.org#" . $module_name . "'>" ?>
          <?php echo $module_title ?></a>
        <small class="hidden-phone">
          <?php echo $module_subtitle ?>
        </small>
      </h3>
    </div>
  </div>
    
  <div class="row-fluid">
    
    
    <!-- CHALLENGE MAP -->
    <div class="span4">
      <h4 class="module-subheading">Challenge Map</h4>
      <?php
        echo "<div class='challenge-map' style='background-image:url(\"modules/" . $module_name . "/challenge-map.png\");height:" . $map_height . "px;'>";
        foreach ($module_challenges as $challenge) {
          echo "<div style='position:absolute;left:" . $challenge->left . "px;top:" . $challenge->top . "px;'>";
          echo "<a class='challenge popupper' data-toggle='modal' href='#popup' data-link='./modules/css-layouts/challenges/" . $challenge->filename . "'";
          echo " rel='tooltip' title='" . $challenge->title . "'></a></div>";
        }
        echo "</div>"
      ?>
      <!-- END MAP -->
    </div>

    <!-- VIDEO PLAYLIST -->
    <div class="span4">
      <h4 class="module-subheading">Video Playlist</h4>
      <ul>
        <?php
          foreach ($module_videos as $video) {
            echo "<li><a href='http://www.youtube.com/watch\?v=" . $video->code . "&list=" . $module_playlist ."'>" . $video->title . "</a></li>";
          }
        ?>
      </ul>
    </div>
    
    <!-- TEXTPAGES -->
    <div class="span4 textpages">
      <h4 class="module-subheading">Textpages</h4>
      <ul>
        <?php
          foreach ($module_textpages as $textpage) {
            echo "<li><a href='https://github.com/christensenacademy/christensen-academy/blob/master/modules/" . $module_name . "/textpages/" . $textpage->filename . "'>" . $textpage->title . "</a></li>";
          }
        ?>
      </ul>
    </div>
  </div>
</div>