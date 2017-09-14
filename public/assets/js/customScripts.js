window.uploadAvatar = $.fn.uploadAvatar = function (action) {
    Dropzone.autoDiscover = false;
    var defaultImageSrc = $("#avatarimg").attr("src");
    var dropzone = new Dropzone('#photo-upload', {
        autoProcessQueue: false,
        autoDiscover: false,
        url: action,
        paramName: 'avatar',
        addRemoveLinks: true,
        headers: { "X-CSRF-TOKEN": $('#form-avatar input[name="_token"]').first().val() },
        thumbnail: function thumbnail(file, dataUrl) {
            $('#avatarimg').prop('src', dataUrl);
        },
        totaluploadprogress: function totaluploadprogress(progress) {
            $('.bar').css('width', progress + "%");
        },
        accept: function accept(file, done) {
            $('a.upload').first().show().click(function (e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                dropzone.processQueue();
            });
            $('.bar').attr("style", "margin-top:10px;height:5px;width:0%; background:#888888;");
            done();
        },
        sending: function sending(file, xhr, formData) {
            $('.bar').css('background', 'green');
            $('a.upload').hide();
            // Needed for the validation to work properly
            formData.append('type', "{{$type}}");
            // Needed to trick laravel to accept this as a PUT request
            formData.append('_method', 'put');
        },
        addedfile: function addedfile(file) {
            // Handle server side upload here if it is not on submit.
            // call this to remove default dropzone container
        },
        reset: function reset() {
            $('#avatarimg').attr("src", defaultImageSrc);
            $('a.dz-remove').hide();
            $('a.upload').hide();
            $('.bar').attr("style", "margin-top:10px;height:5px;width:0%; background:#888888;");
        },
        removedfile: function removedfile(file) {
            // Handle server side removal here
            dropzone.removeAllFiles(true);
        },
        success: function success(file, data) {
            console.log(data);
        },
        error: function error(file, msg, xhr) {
            console.log(xhr);
            $('.bar').css('background', 'red');
        }
    });
};