<?php include_once('includes/head.php'); ?>
<?php include_once('includes/nav.php'); ?>

    <!-- badge -->
    <span class="badge badge-pill badge-primary">Primary</span>
    <span class="badge badge-pill badge-dark">Dark</span>

    <!-- buttons -->
    <button class="btn btn-primary" type="submit">Button</button><button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>

    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
        Single toggle
      </button>

      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" checked> Active
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2"> Radio
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3"> Radio
        </label>
      </div>

      <!-- Card -->
      <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>

      <?php include_once('includes/footer.php'); ?>