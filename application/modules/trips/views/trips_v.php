<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>

    <title><?php echo $table; ?></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">
            <?php echo $table; ?>
          </h1>
          <hr style="background-color: black; color: black; height: 1px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-2">
          <!-- Add Records Modal -->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">
            Add Records
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Add Records Form -->
                  <form action="" method="post" id="form">
                    <?php
                    foreach ($rows as $key => $value) {
                      if ($key !== "id") {
                        ?>
                        <div class="form-group">
                          <label for=""><?php echo $key; ?></label>
                          <input type="<?php echo $key; ?>" id="<?php echo $key; ?>" class="form-control">
                        </div>
                        <?php
                      }
                    }
                    ?>
                    <!-- <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Event_children</label>
                      <input type="event_children" id="event_children" class="form-control">
                    </div> -->
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="add">Add Records</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="table-responsive">
            <table class="table" id="records">
              <thead>
                <tr>
                  <th>ID</th>
                  <?php
                  foreach ($rows as $key => $value) {
                    if ($key !== "id") {
                      ?>
                      <th><?php echo $key; ?></th>
                      <?php
                    }
                  }
                  ?>
                  <!-- <th>Name</th>
                  <th>Event_children</th> -->
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Record Modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Record Modal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Edit Record Form -->
            <form action="" method="post" id="edit_form">
              <input type="hidden" id="edit_record_id" name="edit_record_id" value="">
                <?php
                foreach ($rows as $key => $value) {
                  if ($key !== "id") {
                    ?>
                    <div class="form-group">
                      <label for=""><?php echo $key; ?></label>
                      <input type="<?php echo $key; ?>" id="edit_<?php echo $key; ?>" class="form-control">
                    </div>
                    <?php
                  }
                }
                ?>
              <!-- <div class="form-group">
                <label for="">Name</label>
                <input type="text" id="edit_name" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Event_children</label>
                <input type="event_children" id="edit_event_children" class="form-control">
              </div> -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="update">Update</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <!-- Sweet Alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Add Records -->
    <script>
      $(document).on("click", "#add", function(e){
        e.preventDefault();

        <?php
        foreach ($rows as $key => $value) {
          if ($key !== "id") {
            ?>
            var <?php echo $key; ?> = $("#<?php echo $key; ?>").val();
            <?php
          }
        }
        ?>
        // var name = $("#name").val();
        // var event_children = $("#event_children").val();

        // if (name == "") {
        if (1 !== 1) {
          alert("Both field is required");
        }else{
          $.ajax({
            url: "<?php echo base_url(); ?>g_relate/api/table/t/<?php echo $table; ?>/insert",
            type: "post",
            dataType: "json",
            data: {
              <?php
              foreach ($rows as $key => $value) {
                if ($key !== "id") {
                  ?>
                  <?php echo $key; ?>: <?php echo $key; ?>,
                  <?php
                }
              }
              ?>
              // name: name,
              // event_children: event_children
            },
            success: function(data){
              if (data.responce == "success") {
                $('#records').DataTable().destroy();
                fetch();
                $('#exampleModal').modal('hide');
                toastr["success"](data.message);
              }else{
                toastr["error"](data.message);
              }

            }
          });

          $("#form")[0].reset();

        }

      });

      // Fetch Records

      function fetch(){
        $.ajax({
          url: "<?php echo base_url(); ?>g_relate/api/table/t/<?php echo $table; ?>/fetch",
          type: "post",
          dataType: "json",
          success: function(data){
            if (data.responce == "success") {

                var i = "1";
                  $('#records').DataTable( {
                      "data": data.posts,
                      "responsive": true,
                      dom:
                          "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                      buttons: [
                          'copy', 'excel', 'pdf'
                      ],
                      "columns": [
                          { "render": function(){
                            return a = i++;
                          } },
                          <?php
                          foreach ($rows as $key => $value) {
                            if ($key !== "id") {
                              ?>
                              { "data": "<?php echo $key; ?>" },
                              <?php
                            }
                          }
                          ?>
                          // { "data": "name" },
                          // { "data": "event_children" },
                          { "render": function ( data, type, row, meta ) {
                            var a = `
                                    <a href="#" value="${row.id}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                    <a href="#" value="${row.id}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                                    <a href="/g_relate/record/t/<?php echo $table; ?>/r/${row.id}" class="btn btn-sm btn-outline-primary">View</i></a>
                            `;
                            return a;
                          } }
                      ]
                  } );
              }else{
                toastr["error"](data.message);
              }

          }
        });

      }

      fetch();

      // Delete Record

      $(document).on("click", "#del", function(e){
        e.preventDefault();

        var del_id = $(this).attr("value");

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger mr-2'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {

              $.ajax({
                url: "<?php echo base_url(); ?>g_relate/api/table/t/<?php echo $table; ?>/delete",
                type: "post",
                dataType: "json",
                data: {
                  del_id: del_id
                },
                success: function(data){
                  if (data.responce == "success") {
                      $('#records').DataTable().destroy();
                      fetch();
                      swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      );
                  }else{
                      swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                      );
                  }

                }
              });



          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
            )
          }
        });

      });

      // Edit Record

      $(document).on("click", "#edit", function(e){
        e.preventDefault();

        var edit_id = $(this).attr("value");

        $.ajax({
          url: "<?php echo base_url(); ?>g_relate/api/table/t/<?php echo $table; ?>/edit",
          type: "post",
          dataType: "json",
          data: {
            edit_id: edit_id
          },
          success: function(data){
            if (data.responce == "success") {
                $('#edit_modal').modal('show');
                $("#edit_record_id").val(data.post.id);
                <?php
                foreach ($rows as $key => $value) {
                  if ($key !== "id") {
                    ?>
                    $("#edit_<?php echo $key; ?>").val(data.post.<?php echo $key; ?>);
                    <?php
                  }
                }
                ?>
                // $("#edit_name").val(data.post.name);
                // $("#edit_event_children").val(data.post.event_children);
              }else{
                toastr["error"](data.message);
              }
          }
        });

      });

      // Update Record

      $(document).on("click", "#update", function(e){
        e.preventDefault();

        var edit_record_id = $("#edit_record_id").val();
        <?php
        foreach ($rows as $key => $value) {
          if ($key !== "id") {
            ?>
            var edit_<?php echo $key; ?> = $("#edit_<?php echo $key; ?>").val();
            <?php
          }
        }
        ?>

        // var edit_name = $("#edit_name").val();
        // var edit_event_children = $("#edit_event_children").val();

        // if (edit_record_id == "" || edit_name == "") {
        if (1 !== 1) {
          alert("Both field is required");
        }else{
          $.ajax({
            url: "<?php echo base_url(); ?>g_relate/api/table/t/<?php echo $table; ?>/update",
            type: "post",
            dataType: "json",
            data: {
              edit_record_id: edit_record_id,
              <?php
              foreach ($rows as $key => $value) {
                if ($key !== "id") {
                  ?>
                  edit_<?php echo $key; ?>: edit_<?php echo $key; ?>,
                  <?php
                }
              }
              ?>
              // edit_name: edit_name,
              // edit_event_children: edit_event_children
            },
            success: function(data){
              if (data.responce == "success") {
                $('#records').DataTable().destroy();
                fetch();
                $('#edit_modal').modal('hide');
                toastr["success"](data.message);
              }else{
                toastr["error"](data.message);
              }
            }
          });

        }

      });
    </script>
  </body>
</html>
