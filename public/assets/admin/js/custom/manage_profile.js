$(document).ready(function () {
    $('#user_password_update_submit').click(function (event) {
        event.preventDefault();
        userPasswordUpdate();
    });

    $('#user_profile_update_submit').click(function (event) {
        event.preventDefault();
        userProfileUpdate();
    });

    $('#profileimgupdate').click(function (event) {
        event.preventDefault();
        profileImageUpdate();
    });
});