/* Main JS Scripts & Functionality */

$(function () {
    CKEDITOR.replace('StoryEditor');
});

function deleteStory(id) {
    if (confirm('Vuoi cancellare questa storia?')) {
        $.ajax({
            type: "post",
            data: {_method: 'delete'},
            url: 'story/' + id,
            success: function(affectedRows) {
                window.location = 'dashboard';
            }
        });
    }
}
