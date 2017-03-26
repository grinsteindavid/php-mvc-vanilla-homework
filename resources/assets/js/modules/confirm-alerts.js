$(function () {

  // Alerts for html forms only.
  $('[sweet-alert="form"]').on('click', function(event) {
    var button = $(this);
    var title = button.attr('data-title');
    var text = button.attr('data-text');
    var type = button.attr('data-type');
	  var success = button.attr('data-success');
    var name = button.attr('name');
    var value = button.attr('value');
	  var error = button.attr('data-error');
    var form = button.closest('form');
    var submitButton = form.find('[type="submit"]')

  	if (!submitButton.length) {
  	  form.append(`<input type="submit" hidden>`);
  	  submitButton = form.find('[type="submit"]');
  	}

    swal({
      title: title || 'Are you sure?',
      text: text || "You won't be able to revert this!",
      type: type || 'warning',
      showCancelButton: true,
      confirmButtonText: 'Confirm',
      cancelButtonText: 'Cancel',
      showLoaderOnConfirm: true,
      allowOutsideClick: false,
    }).then(function() {
      submitButton.click();
    }, function (dismiss) {
      // dismiss can be 'cancel', 'overlay',
      // 'close', and 'timer'
      if (dismiss === 'cancel') {

      }
    })
  });

  // Alerts for html hyperlink only.
  $('[sweet-alert="link"]').on('click', function(event) {
    event.preventDefault();
    var button = $(this);
    var title = button.attr('data-title');
    var text = button.attr('data-text');
    var type = button.attr('data-type');
	  var success = button.attr('data-success');
	  var error = button.attr('data-error');
    var href = button.attr('href');

    swal({
      title: title || 'Are you sure?',
      text: text || "You won't be able to revert this!",
      type: type || 'warning',
      showCancelButton: true,
      confirmButtonText: 'Confirm',
      cancelButtonText: 'Cancel',
      showLoaderOnConfirm: true,
      allowOutsideClick: false,
      preConfirm: function() {
        return new Promise(function (resolve, reject) {
          $.get(href, function(response) {
            resolve();
          });
        })
      },
      allowOutsideClick: false
    }).then(function() {
      swal({
        type: 'success',
        title: 'Success!',
        html: success || '...',
        allowOutsideClick: false,
      }).then(function() {
        // true - Reloads the current page from the server.
        window.location.replace(window.location.href);
      });
    }, function (dismiss) {
      // dismiss can be 'cancel', 'overlay',
      // 'close', and 'timer'
      if (dismiss === 'cancel') {
        swal({
    		  type: 'error',
    		  title: 'Cancelled!',
    		  html: error || '...',
    		  allowOutsideClick: false,
    		});
      }
    });
  });

});
