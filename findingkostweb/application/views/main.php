<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header'); ?>
</head>
<body>
<?php $this->load->view('nav'); ?>
<div class="container">
    <!-- Search Bar -->
    <div class="row">
        <?php $this->load->view('kos/v_cari'); ?>
    </div>
    <!-- Pagination -->
    <div class="row text-center">
        <div class="col s12">
            <ul class="pagination ">
                {pagination}
            </ul>
        </div>
    </div>
    <!-- Kos -->
    <div class="row">
        {detail}
        <?php $this->load->view('kos/v_main'); ?>
        {/detail}
    </div>
    <!-- Pagination -->
    <div class="row text-center">
        <div class="col s12">
            <ul class="pagination ">
                {pagination}
            </ul>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
    <script>
    $('input.autocomplete').autocomplete({
      data: {
        "Apple": null,
        "Microsoft": null,
        "Google": 'http://placehold.it/250x250'
      }
    });
    </script>
</body>
</html>