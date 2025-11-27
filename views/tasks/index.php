<?php
include_once  __DIR__ . '/../components/head_component.php';
?>
<div class="container">
    <div class="row p-5">
        <div class="col-12 mb-3">
            <a href="http://terra.test/tasks/add/" class="btn btn-primary">Creat Task</a>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>task_name</th>
                            <th>create_at</th>
                            <th>update_at</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once  __DIR__ . '/../components/footer_component.php';
?>
<script>
    $(document).ready(function() {
        $.get('http://terra.test/tasks', function(data) {
            let table = $('.table');

            data.result.forEach(function(item) {
                let row = $('<tr></tr>');
                row.append("<td>" + item.id + "</td>");
                row.append("<td>" + item.task_name + "</td>");
                row.append("<td>" + item.created_at + "</td>");
                row.append("<td>" + item.updated_at + "</td>");
                row.append(`<td>
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <a href="http://terra.test/tasks/edit/${item.id}" class="btn btn-sm btn-warning">Edit</a>
  <button data-task-id=${item.id} class="btn btn-sm btn-danger">Delete</button>
</div> </td>`);
                table.children('tbody').append(row);
                console.log(item);
            })

        }, 'json');

        $(document).on('click', '.btn-danger', function() {
            let taskId = $(this).data('task-id');
            console.log(taskId);
            if (confirm('Are you sure you want to delete this task?')) {
                $.ajax({
                    url: `http://terra.test/tasks/delete/${taskId}`,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(response) {
                         if (response.result.status == 'success') {
                            alert('Task deleted successfully');
                            location.reload();
                        } else {
                            alert('Error deleting task: ' + response.message);
                        }
                    },
                    error: function(error) {
                        alert('Error deleting task: ' + error);
                    }
                });
            }
        });

    })
</script>