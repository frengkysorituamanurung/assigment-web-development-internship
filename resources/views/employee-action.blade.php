<style>
    .action-buttons {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        margin-bottom: 10px;
    }
</style>

<div class="action-buttons">
    <a href="javascript:void(0);" onClick="viewFunc({{ $id }})" data-toggle="tooltip" data-original-title="View" class="view btn btn-primary">View</a>
    <a href="javascript:void(0)" data-toggle="tooltip" onClick="editFunc({{ $id }})" data-original-title="Edit" class="edit btn btn-success">Edit</a>
    <a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc({{ $id }})" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">Delete</a>
</div>
