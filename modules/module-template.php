
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
          echo "<div style='margin-left:-16px;position:absolute;left:" . $challenge->left . "px;top:" . $challenge->top . "px;'>";
          echo "  <a style='display:inline-block;margin-top:0px' class='discussion-link' onclick=\"updateDISQUS('" . $module_name . "-challenge', '" . $challenge->filename . "-challenge', '" . $challenge->title . "')\" href='#discussion' data-toggle='modal'></a>";
          echo "  <a style='display:inline-block;' class='challenge popupper' data-toggle='modal' href='#popup' data-link='./modules/" . $module_name . "/challenges/" . $challenge->filename . "'";
          echo " rel='tooltip' title='" . $challenge->title . "'></a>";
          echo "</div>";
        }
        echo "</div>"
      ?>
      <!-- END MAP -->
    </div>

    <!-- VIDEO PLAYLIST -->
    <div class="span4">
      <h4 class="module-subheading">Video Playlist</h4>
      <ul class='video-playlist'>
        <?php
          foreach ($module_videos as $video) {
            echo "<li class='video'>";
            echo "  <a rel='tooltip' title='Q & A' class='discussion-link' onclick=\"updateDISQUS('" . $module_name . "', '" . $video->code . "', '" . $video->title . "')\" href='#discussion' data-toggle='modal'></a>";
            echo "  <a class='video-link' href='http://www.youtube.com/watch?v=" . $video->code . "&list=" . $module_playlist ."'>" . $video->title . "</a>";
            echo "</li>";
          }
        ?>
      </ul>
    </div>
    
    <!-- TEXTPAGES -->
    <div class="span4 textpages">
      <h4 class="module-subheading">Textpages</h4>
      <ul class="textpages">
        <?php
          foreach ($module_textpages as $textpage) {
            echo "<li class='textpage'>";
            echo "  <a rel='tooltip' title='Q & A' class='discussion-link' onclick=\"updateDISQUS('" . $module_name . "', '" . $textpage->filename . "', '" . $textpage->title . "')\" href='#discussion' data-toggle='modal'></a>";
            echo "<a class='textpage-link' href='https://github.com/christensenacademy/christensen-academy/blob/master/modules/" . $module_name . "/textpages/" . $textpage->filename . "'>" . $textpage->title . "</a>";
            echo "</li>";
          }
        ?>
      </ul>
    </div>
  </div>
</div>