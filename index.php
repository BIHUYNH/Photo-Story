<?php require_once __DIR__. "/automatic/loadfunction.php";?>
<?php require_once __DIR__. "/layout/header.php";?>
  <!-- main timeline section -->
  <section id="cd-timeline" class="cd-container cssanimations">
    <!-- single timeline event -->
    <?php foreach ($thang as $item):?>
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="event-calender.png" />
      </div>
      <div class="cd-timeline-content">
        <h2><a href="http://localhost:8080/Photo-Story/album/index.php?id=<?php echo $item['id']?>"><?php echo $item['month']?></a></h2>
        <p><?php echo $item['description']?></p>
        <span class="cd-date"><?php echo $item['month']?> - 2018</span>
      </div>
    </div>
  <?php endforeach?>
  </section>

<?php require_once __DIR__. "/layout/footer.php";?>