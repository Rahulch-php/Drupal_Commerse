<?php if (!empty($title)): ?>
  <h3><?php print $title ?></h3>
<?php endif ?>

<div id="views-bootstrap-accordion-<?php print $id ?>" class="<?php print $classes ?>">
  <?php foreach ($rows as $key => $row): ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle <?php if($key > '0' ): ?>collapsed<?php endif; ?>"
             data-toggle="collapse"
             data-parent="#views-bootstrap-accordion-<?php print $id ?>"
             href="#collapse-<?php print $id . '-' . $key ?>">
            <?php print $titles[$key] ?>
          </a>
        </h4>
      </div>

      <div id="collapse-<?php print $id . '-' . $key ?>" class="panel-collapse collapse <?php if($key == '0' && $open_first_panel): ?>in<?php endif; ?>">
        <div class="panel-body">
          <?php print $row ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
