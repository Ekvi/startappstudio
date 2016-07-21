$(document).ready(function() {
    var role = "";
    var employeeId = "";

    $('.btn-role a').click(function() {
        employeeId = $(this).attr('data-role-id');
    });

    $('#employeesearch-id').change(function() {
        role = $(this).find(':selected').text();
    });

    $('#role-confirm').on('click', function() {
        if(role != '') {
            $.ajax({
                url: '/startappstudio/backend/web/index.php/employee/change-role',
                method: 'GET',
                data: {
                    role: role,
                    employeeId: employeeId
                },
                success: function(data) {
                    if (data == 1) {
                        $('a[data-role-id="' + employeeId + '"]').text(role);
                    }
                }
            });
        }
    });

    var project = "";

    $('.btn-project a').click(function() {
        employeeId = $(this).attr('data-project-id');
    });

    $('#select-project').change(function() {
        project = $(this).find(':selected').text();
    });

    $('#project-confirm').on('click', function() {
        if(project != '') {
            $.ajax({
                url: '/startappstudio/backend/web/index.php/employee/change-project',
                method: 'GET',
                data: {
                    projectName: project,
                    employeeId: employeeId
                },
                success: function(data) {
                    if (data == 1) {
                        $('a[data-project-id="' + employeeId + '"]').text(project);
                    }
                }
            });
        }
    });
});
