<div class="py-5">
    <div class="row">
        <div class="col-12">
            <?=@flash('works_store')?>
            <a class="btn btn-sm btn-success mb-2"
               href="<?=URLROOT?>/?controller=works&action=create"
            >Create</a>
            <table class="table data-table">
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
                                <a class="btn btn-sm btn-primary"
                                   href="<?=URLROOT?>/?controller=works&action=show&id=<?=$work['id'] ?? null?>"
                                >Edit</a>
                                <form style="display: inline"
                                      action="<?=URLROOT?>/?controller=works&action=destroy"
                                      method="post">
                                    <input type="hidden" name="id" value="<?=$work['id'] ?? null?>">
                                    <button type="submit" name="submit" value="delete"
                                            class="btn btn-sm btn-danger btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>