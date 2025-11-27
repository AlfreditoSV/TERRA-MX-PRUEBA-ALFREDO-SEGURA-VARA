<?php
include_once  __DIR__ . '/../components/head_component.php';
$id = array_filter(explode('/', $_SERVER['REQUEST_URI']))[3];
?>

<div class="container">
    <div class="row p-5">
        <div class="card">
            <h5 class="card-header">Task Edit</h5>
            <div class="card-body">
                <form id="form_update" action="http://terra.test/tasks/update/<?= $id ?>">
                    <div class="btn-group">
                        <label for="task_name"></label>
                        <input type="text" name="task_name" class="form-control" id="task_name" required />
                    </div>
                    <button type="submit" class="btn btn-sm  btn-primary">Update</button>
                </form>
            </div>
            <div class="card-footer">

                <a href="http://terra.test" class="btn btn-sm btn-warning">Back</a>
            </div>

        </div>
    </div>
</div>
<?php
include_once  __DIR__ . '/../components/footer_component.php';
?>
<script>
    $(document).ready(function() {
        let id = <?= $id; ?>;
        $.get(`http://terra.test/tasks/${id}`, function(data) {
            let value = data.result[0].task_name;
            $('#task_name').val(value);
        }, 'json')


        $('#form_update').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let url = form.attr('action');
            let data = form.serialize();

            $.ajax({
                url: url,
                type: 'PUT',
                data: data,
                dataType: 'json',
                success: function(response) {
                    if (response.result.status == 'success') {
                        alert('Task updated successfully');
                        window.location.href = 'http://terra.test';
                    } else {
                        alert('Error updated task: ' + response.message);
                    }
                },
                error: function(error) {
                    alert('Error updating task: ' + error);
                }
            });
        });
    })
</script>