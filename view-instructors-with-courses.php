<h1>Instructors with Courses</h1>
<div class="card-group">
  <?php
while ($instructor = $instructors->fetch_assoc()){
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['instructor_name']; ?></h5>
      <p class="card-text">
<?php
    $courses = selectCoursesByInstructor($instructor['instructor_id']);
  while ($course = $courses->fetc_assoc()) {
    ?>
    <?php
  }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary"></small>Offic: <?php echo $instructor['office_number']; ?></p>
    </div>
  </div>
  <?php
}
?>
  </div>
