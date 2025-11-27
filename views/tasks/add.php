<?php
include_once  __DIR__ . '/../components/head_component.php';
?>

<div class="container">
    <div class="row p-5">
        <div class="card">
            <h5 class="card-header">Task Create</h5>
            <div class="card-body">
                <form id="form_store" action="http://terra.test/tasks/store/">
                    <div class="btn-group">
                        <label for="task_name"></label>
                        <input type="text" name="task_name" class="form-control" id="task_name" required />
                    </div>
                    <button type="submit" class="btn btn-sm  btn-primary">Save</button>
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
        $('#form_store').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let url = form.attr('action');
            let data = form.serialize();

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function(response) {
                    if (response.result.status == 'success') {
                        alert('Task created successfully');
                        window.location.href = 'http://terra.test';
                    } else {
                        alert('Error created task: ' + response.message);
                    }
                },
                error: function(error) {
                    alert('Error updating task: ' + error);
                }
            });
        });
    })
</script>