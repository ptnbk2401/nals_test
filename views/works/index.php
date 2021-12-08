<div class="py-5">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-sm btn-success mb-2"
               href="/?controller=works&action=create"
            >Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Work Name</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Ending Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($data['works']) && count($data['works'])) { ?>
                    <?php foreach ($data['works'] as $key => $work) { ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $work['name'] ?></td>
                            <td><?= $work['start_date'] ?></td>
                            <td><?= $work['end_date'] ?></td>
                            <td><?= $work['status_name'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary mb-2"
                                   href="/?controller=works&action=show&id=<?=$work['id'] ?? null?>"
                                >Edit</a>
                                <button type="button" class="btn btn-sm btn-danger mb-2">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>